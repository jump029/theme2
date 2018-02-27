
  <table width=800 border="1">
    <tr ><td width="50%" >{{$post_data->name}}</td><td>{{$post_data->created_at}}</td></tr>
    <tr ><td colspan="2">{{$post_data->title}}</td></tr>
    <tr>
      <td colspan="3" style="height: 200px; position: relative;">
        {{$post_data->content}}
        <input type="button" onclick="location.href='/add_reply_data/{{$post_data->id}}'"value="返信" style="width:60px; height:40px; position: absolute; right: 0px; bottom: 0px;">        
      </td>
    </tr>
  </table>

