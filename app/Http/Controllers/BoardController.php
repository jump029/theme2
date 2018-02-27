<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post_data;
use App\Reply_data;

class BoardController extends Controller
{
    public function index(Request $request){
        $Post_data = Post_data::with('Reply_data')->orderBy('updated_at', 'DESC')->get();
        return view('board.toppage',['Post_data'=>$Post_data]);
    }
    public function add_post_data(Request $request){
        return view('board.add_post_data');
    }
    public function create_post_data(Request $request){
        //$this->vaildate(Post_data::$rules);
        $post_data = new Post_data ;
        $form = $request->all();
        unset($form['_token']);
        $post_data->fill($form)->save();
        return redirect('/');
    }
    public function add_reply_data(Request $request){
        $post_id = $request->post_id ;
        $post_data = Post_data::find($post_id);
        $Reply_data = Reply_data::where('post_id',$post_id)->orderBy('updated_at')->get();
        $param = [
            'post_id'=>$post_id,
            'post_data'=>$post_data,
            'Reply_data'=>$Reply_data
        ];
        return view('board.add_reply_data',$param);
    }
    public function create_reply_data(Request $request){
        $reply_data = new Reply_data;
        $form = $request->all();
        unset($form['_token']);
        $reply_data->fill($form)->save();

        $post_data = Post_data::find($form['post_id']);
        $post_data->updated_at = $reply_data->updated_at ;
        $post_data->save();

        return redirect('/');
    }
}
