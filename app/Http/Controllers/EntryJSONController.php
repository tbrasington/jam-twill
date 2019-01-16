<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

use Barryvdh\Debugbar\Facade as Debugbar;
use Barryvdh\Debugbar\ServiceProvider as DebugbarServiceProvider;

class EntryJSONController extends Controller
{
    //
    public function index() {
        $entry=Entry::where('published', true)->with(['medias'=>function($q){
          $q->select(['medias.id', 'uuid','caption','alt_text', 'role','media_id', 'mediable_id']);
        }])->with('content')->with(['slugs'=>function ($q) {
            $q->where('active', 1);
        }])->get();
    
        return $entry;
    }

    public function show($slug) {
        
        $entry=Entry::where('published', true)->with('content')->whereHas('slugs', function ($q) use($slug){
            $q->where('slug', $slug);
        })->get();
        return $entry;
    }
}   