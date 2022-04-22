<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::latest()->paginate(2);
        $datanew['newdata'] = "asdf";
    
        return view('posts.index',compact('data','datanew'))
            ->with('i', (request()->input('page', 1) - 1) * 2);
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
        $request->validate([
            'fname' => 'required|min:4|max:10',
            'lname' => 'required|min:4|max:10',
            'email' => 'required|email|unique:posts',
            'description' => 'required|max:50',
            'designation'=>'required',

            
        ],[
                'fname.required' => 'Name is required',
                'fname.min' => 'Minimum 4 charachers require!!',
                'fname.max' => 'MAximum 10 charachers require!!',
                'email.required' => 'Email is required',
                'email.unique' => 'Email is already exists!!',
                
            ]);
    
        Post::create($request->all());
     
        return redirect()->route('posts.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //echo $post->id; exit;
        $request->validate([
            'fname' => 'required|min:4',
            'lname' => 'required|min:4',
            'email' => 'required|unique:posts,email,'.$post->id.',id',  
            'description' => 'required|max:50',
            'designation'=>'required',
            
        ],[
                'fname.required' => 'Name is required',
                'lname.required' => 'Last Name is required',
                'fname.min' => 'Minimum 8 charachers require!!',
                'fname.min' => 'Minimum 8 charachers require!!',
                'email.required' => 'Email is required',
                'email.unique' => 'Email is already exists!!',
                'designation'=>'Select Your Job Role'
            ]);

        
        $request_data = $request->all();
        //$request_data['gender'] = 'active'; 
    
        $post->update($request_data);
    
        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
    
        return redirect()->route('posts.index')
                        ->with('success','Post deleted successfully');
    }
}
