<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionSafeSearch implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $articleImageId;
    /**
     * Create a new job instance.
     */
    public function __construct($articleImageId)
    {
        $this->articleImageId = $articleImageId;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        
        $i = Image::find($this->articleImageId);
        if(!$i){
            return;
        }
        $image = file_get_contents(storage_path("app/public/" . $i->path));
        putenv("GOOGLE_APPLICATION_CREDENTIALS=" . base_path("google_credential.json"));
        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->safeSearchDetection($image);
        $imageAnnotator->close();

        $safe=$response->getSafeSearchAnnotation();
        $adult = $safe->getAdult();
        $medical = $safe->getMedical();
        $spoof = $safe->getSpoof();
        $violence = $safe->getViolence();
        $racy = $safe->getRacy();

        $likelihoodName = [
            "text-secondary bi bi-circle-fill",
            "text-success bi bi-circle-fill",
            "text-success bi bi-circle-fill",
            "text-warning bi bi-circle-fill",
            "text-warning bi bi-circle-fill",
            "text-danger bi bi-circle-fill",
        ];

        $i->adult = $likelihoodName[$adult];
        $i->spoof = $likelihoodName[$spoof];
        $i->racy = $likelihoodName[$racy];
        $i->medical = $likelihoodName[$medical];
        $i->violence = $likelihoodName[$violence];

        $i->save();
    }
}
