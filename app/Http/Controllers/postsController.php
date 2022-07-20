<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class postsController extends Controller
{
   public $data = [];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['posts'] =  Post::all();
        return view('posts.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate form inputs

        $this->validate($request, [
            'title' => 'required | string',
            'body' => 'required | string',
        ]);

        // get form data
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->save();

        if ($post->save()) {
            return redirect()->route('posts.index');
        }else{
            return back()->with('error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['posts'] = Post::find($id);
        return view('posts.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        {
            $data['posts'] = Post::find($id);
            return view('posts.edit',$data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required | string',
            'body' => 'required | string',
        ]);

        // get form data
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->save();

        if ($post->save()) {
            return redirect()->route('posts.index');
        }else{
            return back()->with('error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $post = Post::find($id);

            if ($post->delete()) {
                return redirect()->route('posts.index');
            }
        }
    }
}
