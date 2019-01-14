<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

class EntryJSONController extends Controller
{
    //
    public function index() {
        $entry=Entry::where('published', true)->with('content')->with('slugs')->get();
        return $entry;
    }

    public function show($slug) {
        
        $entry=Entry::where('published', true)->with('content')->whereHas('slugs', function ($q) use($slug){
            $q->where('slug', $slug);
        })->get();
        return $entry;
    }
}   