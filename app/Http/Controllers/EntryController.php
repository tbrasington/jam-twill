<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

class EntryController extends Controller
{
    //
    public function index() {
    
        $entry=Entry::where('published', true)->with('content')->get();
        return $entry;
    }
}   