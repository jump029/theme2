@extends('layouts.layout')
@section('content')
  <form action="/add_post_data" method="post" id="form_id">
    @if (count($errors)>0)
      <p><font color="red">入力に問題があります。再入力してください</font></p>
    @endif
    {{csrf_field()}}
    <p>名前</p>
    @if ($errors->has('name'))
      <p><font color="red">{{$errors->first('name')}}</font></p>
    @endif
    <input type="text" name="name" id="name-text" size=60 value="{{old('name')}}">
    <p>タイトル</p>
    @if ($errors->has('title'))
      <p><font color="red">{{$errors->first('title')}}</font></p>
    @endif
    <input type="text" name="title" id="title-text" size=60 value="{{old('title')}}">
    <p>内容</p>
    @if ($errors->has('content'))
      <p><font color="red">{{$errors->first('content')}}</font></p>
    @endif
    <textarea name="content" cols="60" rows="5" id="content-text">{{old('content')}}</textarea>
    <div style='text-align:right;'>
      <br>
      <button type="button" id="sampleButton" class="btn btn-primary btn-lg">
      投稿
      </button>
    </div>
  </form>
  <!-- モーダル・ダイアログ -->
  <div class="modal fade" id="sampleModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <!--<button type="button" class="close" data-dismiss="modal"><span>×</span></button>-->
          <h4 class="modal-title">この内容で投稿してよろしいですか</h4>
        </div>
        <div class="modal-body">
          名前<br>
          <!--<p id="name"> dummy name </p>-->
          <input type="text" name="name2" id="name" size=60 disabled style='text-align:left'><br>
          タイトル<br>
          <!--<p id="title"> dummy title </p>-->
          <input type="text" name="titlei2" id="title" size=60 disabled style='text-align:left'><br>
          内容<br>
          <!--<p id="content"> dummy content </p>-->
          <textarea name="content2" cols="60" rows="5" id="content" disabled></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">キャンセル</button>
          <button id="submit_id" type="button" class="btn btn-primary" >OK</button>
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
      var name_text = document.getElementById("name-text").value;
      var title_text = document.getElementById("title-text").value;
      var content_text = document.getElementById("content-text").value;
      // 取得した値を表示
      /*
      var name = document.getElementById("name");
      name.textContent = name_text;
      var title = document.getElementById("title");
      title.textContent = title_text;
      var content = document.getElementById("content");
      content.textContent = content_text;
      */
      var name = document.getElementById("name");
      name.value = name_text;
      var title = document.getElementById("title");
      title.value = title_text;
      var content = document.getElementById("content");
      content.value = content_text;
    });
  </script>
  <script>
    $( function() {
      $('#submit_id').click( function () {
        $('#form_id').submit();
      });
    });
  </script>
  <script>
    $( function() {
      $('#sampleButton').click( function () {
        $('#sampleModal').modal();
      });
    });
  </script>
@endsection

