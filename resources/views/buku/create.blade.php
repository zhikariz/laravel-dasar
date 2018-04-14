<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Buku</title>
  </head>
  <body>
    <form class="" action="/" method="post">
      {{ csrf_field() }}
      Judul Buku :
      <input type="text" name="judul" value="">
      <br>
      Pembuat Buku :
      <input type="text" name="pembuat" value="">
      <br>
      Penerbit Buku :
      <input type="text" name="penerbit" value="">
      <br>
      <button type="submit" name="button">Create</button>
    </form>

  </body>
</html>
