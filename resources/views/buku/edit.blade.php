<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Buku</title>
  </head>
  <body>
    <form class="" action="/{{$data->id}}" method="post">
      {{ csrf_field() }}
        {{ method_field('PUT') }}
      Judul Buku :
      <input type="text" name="judul" value="{{$data->judul}}">
      <br>
      Pembuat Buku :
      <input type="text" name="pembuat" value="{{$data->pembuat}}">
      <br>
      Penerbit Buku :
      <input type="text" name="penerbit" value="{{$data->penerbit}}">
      <br>
      <button type="submit" name="button">Edit</button>
    </form>

  </body>
</html>
