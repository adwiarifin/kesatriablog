<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('tags')
            ->latest()
            ->filter(request(['month', 'year']))
            ->get();

        $posts = Post::with('tags')
            ->latest()
            ->paginate('5');

        //return view('posts.index', compact('posts'));
        return view(config('app.theme').'.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(config('app.theme').'posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'body' => 'required|min:100'
        ]);

        $user = auth()->user();

        $post = new Post();
        $post->title = $request->title;
        $post->slug = str_slug($request->title).'-'.substr(md5($user->email.':'.time()),0,6);
        $post->body = $request->body;
        $post->user_id = auth()->id();
        $post->save();

        if(!empty($request->tag)){
            $exp = explode(' ', $request->tag);
            foreach($exp as $data){
                $tag = Tag::where('name', '=', $data)->first();
                if(!$tag){ $tag = Tag::create(['name' => $data]); }
                $post->tags()->attach($tag);
            }
        }

        session()->flash('message', 'Post has been published');

        //\Mail::to($user)->send(new \App\Mail\PostPublished($user, $post));

        return redirect()->home();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view(config('app.theme').'.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view(config('app.theme').'.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'body' => 'required|min:100'
        ]);

        if($post->title != $request->title){
            $post->title = $request->title;
            $post->slug = str_slug($request->title).'-'.substr(md5($user->email.':'.time()),0,6);
        }
        $post->body = $request->body;
        $post->update();

        $post->tags()->detach();
        if(!empty($request->tag)){
            $exp = explode(' ', $request->tag);
            foreach($exp as $data){
                $tag = Tag::where('name', '=', $data)->first();
                if(!$tag){ $tag = Tag::create(['name' => $data]); }
                $post->tags()->attach($tag);
            }
        }

        session()->flash('message', 'Post has been updated');

        return redirect()->home();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        session()->flash('message', 'Post has been deleted');

        return redirect()->home();
    }
}
