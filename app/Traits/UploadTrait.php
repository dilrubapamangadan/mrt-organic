<?php
namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Image;
trait UploadTrait
{
    public function uploadImage($uploadedFile, $folder = null, $filename = null, $width = null, $height = null)
    {
        // $name = !is_null($filename) ? $filename : Str::random(25);

        $image_resize = Image::make($uploadedFile);
        if($width && $height)
            $image_resize->fit($width,$height);
        $image_resize->save(public_path().'/'.$folder.$filename);

        return 1;
    }

}