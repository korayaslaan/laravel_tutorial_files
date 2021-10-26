<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Örnek Form Sayfası</title>
  </head>
  <body>
    <form  action="{{Route('sonuc')}}" method="post">
      @csrf

      <textarea name="metin" ></textarea>
      <input type="submit" name="ilet" value="gonder">
    </form>
  </body>
</html>
