<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

class EntryJSONController extends Controller
{
    //
    public function index() {
    
        $entry=Entry::where('published', true)->with('content')->get();
        return $entry;
    }

    public function show($id) {
        return $id;
    }
}   