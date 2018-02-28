@extends('layouts.layout')

@section('content')
  @if ($post_data) 
    @include('board.view_post_data_noButton')
  @endif
  @foreach ($Reply_data as $reply_data)
    @include('board.view_reply_data')
  @endforeach
  
  <form action="/add_reply_data" method="post" id="form_id">
    {{csrf_field()}}
    @if (count($errors)>0)
      <p><font color="red">入力に問題があります。再入力してください</font></p>
    @endif
    <p>返信フォーム</p>
    <p>名前</p>
    @if ($errors->has('name'))
      <p><font color="red">{{$errors->first('name')}}</font></p>
    @endif
    <input type="text" name="name" id="reply-name-text" size=60 value="{{old('name')}}">
    <p>内容</p>
    @if ($errors->has('content'))
      <p><font color="red">{{$errors->first('content')}}</font></p>
    @endif
    <textarea name="content" cols="60" rows="5" id="reply-content-text" >{{old('content')}}</textarea>
    <div style="text-align:right">
      <button type="button" id="sampleButton" class="btn btn-primary btn-lg" style="position: relative; right: 0px; top: 0px">
        投稿
      </button>
    </div>
    <input type="hidden" name="post_id" value="{{$post_id}}">
  </form>

  <!-- モーダル・ダイアログ -->
  <div class="modal fade" id="sampleModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <!--<button type="button" class="close" data-dismiss="modal"><span>×</span></button>-->
          <h4 class="modal-title" style="margin: 0 auto">この内容で投稿します。<br>よろしいですか。</h4>
        </div>
        <div class="modal-body">
          名前<br>
          <!--<p id="name"> dummy name </p>-->
          <input type="text" name="name2" id="reply-name" disabled style='text-align:left'><br>
          内容<br>
          <!--<p id="content"> dummy content </p>-->
          <textarea name="content2" cols="60" rows="5" id="reply-content" disabled></textarea>
        </div>
        <div class="modal-footer" style="margin: 0 auto">
          <button type="button" class="btn btn-default" data-dismiss="modal">キャンセル</button>
          <button  id="submit_id" type="button" class="btn btn-primary">OK</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // ボタンの要素を取得
    var button = document.getElementById("sampleButton");
    // ボタンをクリックした時の処理
    button.addEventListener("click", function(e) {
      e.preventDefault();
      // 入力フォームの値を取得
      var name_text = document.getElementById("reply-name-text").value;
      var content_text = document.getElementById("reply-content-text").value;
      // 取得した値を表示
      var name = document.getElementById("reply-name");
      name.value = name_text;
      var content = document.getElementById("reply-content");
      content.value = content_text;
    });
  </script>

  <script>
    $( function() {
      $('#sampleButton').click( function () {
        $('#sampleModal').modal();
      });
    });
  </script>

  <script>
    $( function() {
      $('#submit_id').click( function () {
        $('#form_id').submit();
      });
    });
  </script> 
@endsection

