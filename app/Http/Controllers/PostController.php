<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('post.index',compact('posts'));

    }
    public function store(){
      $data = request()->validate([
       'title' => 'string',
       'content' => 'string',
       'image' => 'string',
      ]);

      Post::create($data);
      return redirect()->route('index');
    }

    public function show(Post $post){

        return view('post.show', compact('post'));

    }

    public function create(){
        return view('post.create');
    }

    public function edit(Post $post){

        return view('post.edit', compact('post'));
    }

    public function update(Post $post){
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
           ]);

           $post->update($data);
           return redirect()->route('index.show', $post->id);
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('index');
    }
//     public function create(){
//         $post = [
//             [


//             'title'    => 'title of the post',
//             'content'  => 'title of the post',
//             'image'    => 'title of the post',
//             'like' => 10,
//             'is_published' => 1,

//             ],
//         [
//             'title' => 'another title of the post',
//             'content' => 'another title of the post',
//             'image' => 'another title of the post',
//             'like' => 20,
//             'is_published' => 1,

//         ],
//     ];

// foreach($post as $key){

//     Post::create([
//         'title'        => $key['title'],
//         'content'      => $key['content'],
//         'image'        => $key['image'],
//         'like'         => $key['like'],
//         'is_published' => $key['is_published'],
//     ]);
// }

// dd('created');
//     }


    // public function update(){
    //     $post = Post::find(3);

    //     $post->update([
    //         'title' =>    'updated',
    //         'content' =>  'updated',
    //         'image' =>    'updated',
    //         'like' => 200,
    //         'is_published' => 1,

    //     ]);


    //     dd('updated');
    // }
    public function delete(){

        $data = Post::withTrashed()->find(1);
        $data->restore();
        dd('deleted');
    }

}
