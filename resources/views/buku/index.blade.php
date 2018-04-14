<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="/create">Create Buku</a>
    <br>
    <table border="1">
      <tr>
        <td>id</td>
        <td>judul</td>
        <td>pembuat</td>
        <td height="10%">penerbit</td>
      </tr>
      @foreach ($buku as $bukus)
      <tr>
          <td>{{$bukus->judul}}</td>
        <td>{{$bukus->pembuat}}</td>
        <td>{{$bukus->penerbit}}</td>
        <td>
          <a href="{{$bukus->id}}/edit">Edit</a> <br>
          <form class="" action="/{{$bukus->id}}" method="post">
            {{ csrf_field() }}
                {{ method_field('DELETE') }}

            <button type="submit" name="submit">Delete</button>
          </form>
      </tr>
      @endforeach

    </table>
  </body>
</html>
