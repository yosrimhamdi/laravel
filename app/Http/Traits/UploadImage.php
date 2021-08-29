<?php

namespace App\Http\Traits;

use File;
use Image;

trait UploadImage {
  private function saveImage($dir, $image, $size) {
    if (!File::exists($dir)) {
      File::makeDirectory($dir);
    }

    $id = hexdec(uniqid());
    $ext = $image->getClientOriginalExtension();
    $imgFullPath = $dir . $id . '.' . $ext;

    Image::make($image)
      ->resize($size['width'], $size['height'], function ($constraint) {
        $constraint->aspectRatio();
        $constraint->upsize();
      })
      ->save($imgFullPath);

    return $imgFullPath;
  }
}
