<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    public function article ()
    {
        return $this->belongsTo(Article::class);
    }

    public static function getUrlByFilePath($filePath, $w = null, $h = null)
    {
        if (!$w && !$h) {
            return Storage::url($filePath);
        }

        $path = dirname($filePath);
        $fileName = basename($filePath);
        $file = "{$path}/resize_{$w}x{$h}_{$fileName}";

        return Storage::url($file);
    }

    public function getCropUrl($width, $height)
    {
        $path = dirname($this->path);
        $croppedFileName = "crop_{$width}x{$height}_" . basename($this->path);
        $croppedFilePath = "{$path}/{$croppedFileName}";
        return asset("storage/{$croppedFilePath}");
    }
}
