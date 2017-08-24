<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostAddRequest;
use Mockery\Exception;
use Redirect;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::All();
        return view("admin-template.blog.blog")->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin-template.blog.blog-add");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostAddRequest $request)
    {
        try{
            /*print_r($request->all());
            print_r($request->description);
            exit("fasf");*/
            $data = $request->all();
           // $data['slug'] = "test";


            if(!empty($request->file('image'))) {
                $data['image'] = $request->file('image')->store("blogimage");
            }

            $post = Post::create($data);
            $id = $post->id;
            return Redirect::to('admin/blog/'.$id.'/edit')->with('message', 'Success: post added successfully')->with('class','success');
        } catch(Exception $e){

            return Redirect::to('admin/blog/add')->with('message', 'The following errors occurred')->with('class','error')->withErrors($e->getMessage())->withInput();

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view("admin-template.blog.blog-edit")->with("post",$post);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
