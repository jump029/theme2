@extends('layouts.layout')

@section('content')
  <div style='text-align:center;'>
    <input type="button" onclick="location.href='/add_post_data'" value="新規投稿" >
  </div>
  @foreach ($Post_data as $post_data)
    @include('board.view_post_data')
    @if ($post_data->Reply_data != null)
      @foreach ($post_data->Reply_data as $reply_data)
        @include('board.view_reply_data')
      @endforeach
    @endif
  <br>
  @endforeach
@endsection

