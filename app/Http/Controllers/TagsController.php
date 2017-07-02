<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function show(Tag $tag) {
    	$posts = $tag->posts()->latest()->get();

    	return view('posts.index', compact('posts'));
    }
}
