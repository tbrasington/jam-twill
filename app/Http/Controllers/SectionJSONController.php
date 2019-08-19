<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
 

class SectionJSONController extends Controller
{
 

    public function index() {
        $sections = Section::where('published', true)
        ->with(['slugs'=>function ($q) {
            $q->where('active', 1);
        }])->get();
      
        return $sections;
    }

    public function filterProjects($slug){
        $sections =  Section::where('published', true)
        ->with('entries')
        ->whereHas('slugs', function ($q) use($slug){
            $q->where('slug', $slug);
        })->get(); 

        foreach ($sections as $section) {
        $entries  = $section->entries;
        foreach ($entries as $entry) {
            
            $blocks = $entry->content()->get();
            foreach ($blocks as $block) {
                $childBlocks = $block->where('parent_id', $block->id)->get();
                $block->blocks = $childBlocks;
            }

            $entry->blocks =  $blocks; 
            
        }
    }

        return $sections;
    } 
}   


   // public function show($slug){
    //     return Entry::where('published', true)
    //     ->with('content')
    //     ->whereHas('slugs', function ($q) use($slug){
    //         $q->where('slug', $slug);
    //     })->get();
    // }