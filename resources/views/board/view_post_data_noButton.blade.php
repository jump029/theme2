
  <table border="1" width="800" height="300">
    <tr height="40"><td width=50% >{{$post_data->name}}</td><td>{{$post_data->created_at}}</td></tr>
    <tr height="40"><td colspan="2">{{$post_data->title}}</td></tr>
    <tr>
      <td colspan="3" style="height: 200px; position: relative;">
        {{$post_data->content}}
      </td>
    </tr>
  </table>
  <br>

