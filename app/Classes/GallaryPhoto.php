<?php

use Spatie\MediaLibrary\Models\Media;
use DesignByCode\MiniAdmin\Models\Gallery;


class GallaryPhoto extends Gallery
{

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('mini')
              ->width(100)
              ->height(100)
              ->sharpen(10);


    }


}
