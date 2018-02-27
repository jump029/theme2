  <table border="1" width=800 height="300">
    <tr height="40"><td width=50% >{{$reply_data->name}}</td><td>{{$reply_data->updated_at}}</td></tr>
    <tr>
      <td colspan="3" style="height: 200px; position: relative;">
        {{$reply_data->content}}
      </td>
    </tr>
  </table>
