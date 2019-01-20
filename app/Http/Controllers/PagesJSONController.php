<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesJSONController extends Controller
{
    //
    public function index() {
        $entry=Page::where('published', true)->with('blocks')->with(['slugs'=>function ($q) {
            $q->where('active', 1);
        }])->get();
        return $entry;
    }

    public function show($slug) {
        
        $entry=Page::where('published', true)->with('blocks')->whereHas('slugs', function ($q) use($slug){
            $q->where('slug', $slug);
        })->get();
        return $entry;
    }
}   