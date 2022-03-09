<?php

include_once __DIR__."/Controller.php";

class PostController extends Controller{
  public function index(){
    [$data, $err] = $this->cms->get("post/feed/more");

    if($data->result){
      $posts = $data->response->posts;
      return view('blog.index',['posts' => $posts]);
    }
    return view('error-404');
  }

  public function show($slug){
    [$data, $err] = $this->cms->get("post/show/".$slug);
    if($data->result){
      $response = $data->response;
      
      return view('blog.show',[
        'post' => $response->post,
        'prevPost' => $response->prevPost,
        'nextPost' => $response->nextPost,
        'outhers' => $response->outhers
      ]);
    }
    return view('error-404');
  }
}