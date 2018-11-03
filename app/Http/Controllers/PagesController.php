<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use DesignByCode\MiniAdmin\Models\Gallery;


class PagesController extends Controller
{


    /**
     * index page
     * @return [type] [description]
     */
    public function index()
    {
        return view('welcome');
    }


    public function faq()
    {
        return view('faq');
    }


    public function photos()
    {
        $galleries = Gallery::with('media')->get();
        return view('photos', compact('galleries'));
    }


    public function getImages()
    {
        // $gallery = Gallery::with('media')->first();

        $images = [];

        $media = Media::limit(12)->get();

        foreach ($media as $g) {
            $images[] .= $g->getFullUrl('mini');
        }

       return response()->json([
            'url' => $images
       ]);
    }


}
