<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Spatie\Image\Enums\Fit;
use Spatie\Image\Enums\Unit;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $fileName;
    protected $path;
    protected $w;
    protected $h;

    /**
     * Create a new job instance.
     */
    public function __construct($filePath, $w, $h)
    {
        $this->path = dirname($filePath); // funzione che prende la cartella dell'immagine
        $this->fileName = basename($filePath); // funzione che prende il nome dell'immagine
        $this->w = $w;
        $this->h = $h;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;
        $srcPath = storage_path("app/public/{$this->path}/{$this->fileName}");
        $destPath = storage_path("app/public/{$this->path}/crop_{$w}x{$h}_{$this->fileName}");
        
        $resizedImage = Image::load($srcPath)->fit(Fit::Crop, $w, $h)->watermark(
            base_path("public/media/logo2024.png"),
            width: 75,
            height: 75,
            paddingX: 5,
            paddingY: 5 ,
            paddingUnit: Unit::Percent,
        )->save($destPath);           

        
    }
}