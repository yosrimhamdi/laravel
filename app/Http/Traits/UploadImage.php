<?php

namespace App\Http\Traits;

use File;
use Image;

trait UploadImage {
  private function saveImage($dir, $image) {
    if (!File::exists($dir)) {
      File::makeDirectory($dir);
    }

    $id = hexdec(uniqid());
    $ext = $image->getClientOriginalExtension();
    $imgFullPath = $dir . $id . '.' . $ext;

    Image::make($image)
      ->resize(300, null, function ($constraint) {
        $constraint->aspectRatio();
      })
      ->save($imgFullPath);

    return $imgFullPath;
  }
}
