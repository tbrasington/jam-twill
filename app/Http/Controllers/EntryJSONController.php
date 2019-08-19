<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

use Barryvdh\Debugbar\Facade as Debugbar;
use Barryvdh\Debugbar\ServiceProvider as DebugbarServiceProvider;

class EntryJSONController extends Controller
{
    //
    // public function old_index() {
    //     $entry=Entry::where('published', true)
    //     ->with(['medias'=>function($q){
    //       $q->select(['medias.id', 'uuid','caption','alt_text', 'role','media_id', 'mediable_id']);
    //     }])
    //     ->with('content')
    //     ->with(['slugs'=>function ($q) {
    //         $q->where('active', 1);
    //     }])->get();
    
    //     return $entry;
    // }

    public function index() {
        $entries = Entry::where('published', true)
        ->with(['medias'=>function($q){
          $q->select(['medias.id', 'uuid','caption','alt_text', 'role','media_id', 'mediable_id']);
        }])
        ->with(['slugs'=>function ($q) {
            $q->where('active', 1);
        }])->get();

        foreach ($entries as $entry) {
            
            $blocks = $entry->content()->get();
            foreach ($blocks as $block) {
                $childBlocks = $block->where('parent_id', $block->id)->get();
                $block->blocks = (sizeof($childBlocks)<=0 ? null : $childBlocks); 
            }

            $entry->blocks =  (sizeof($blocks)<=0 ? null : $blocks); 
            // get the first slug
            $entry->slug = $entry->slugs[0]->slug;

            // medias
            foreach ($entry->medias as $media) {
                $media->caption = ($media->caption===null ? "" : $media->caption);
            }
        }
    
        return $entries;
    }


 

    public function show($slug){
       
        $entries = Entry::where('published', true)
        //->with('content')
        ->with('sections')
        ->whereHas('slugs', function ($q) use($slug){
            $q->where('slug', $slug);
        })->get();

        foreach ($entries as $entry) {
            
            $blocks = $entry->content()->get();
            foreach ($blocks as $block) {
                $childBlocks = $block->where('parent_id', $block->id)->get();
                $block->blocks = $childBlocks;
            }

            $entry->blocks =  $blocks; 
            
        }
        return $entries;
    }

 
    
}   



   // public function show($slug){
    //     return Entry::where('published', true)
    //     ->with('content')
    //     ->whereHas('slugs', function ($q) use($slug){
    //         $q->where('slug', $slug);
    //     })->get();
    // }