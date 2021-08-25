<?php

namespace App\Http\Traits;

use Image;

trait UploadImage {
  private function saveImage($dir, $image) {
    $id = hexdec(uniqid());
    $ext = $image->getClientOriginalExtension();
    $imgFullPath = $dir . $id . '.' . $ext;

    Image::make($image)
      ->resize(300, 300, function ($constraint) {
        $constraint->aspectRatio();
      })
      ->save($imgFullPath);

    return $imgFullPath;
  }
}
