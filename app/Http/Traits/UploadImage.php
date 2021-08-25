<?php

namespace App\Http\Traits;

use Image;

trait UploadImage {
  private function saveImage($image) {
    $imgName = $this->getName($image);
    $imgFullPath = 'images/pics/' . $imgName;

    Image::make($image)
      ->resize(300, null, function ($constraint) {
        $constraint->aspectRatio();
      })
      ->save($imgFullPath);

    return $imgFullPath;
  }

  private function getName($image) {
    $id = hexdec(uniqid());
    $ext = $image->getClientOriginalExtension();

    return $id . '.' . $ext;
  }
}
