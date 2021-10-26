<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Örnek Form Sayfası</title>
</head>

<body>
    <form action="{{ Route('form_sonuc') }}" method="post">
        @csrf
        <label>Ad Soyad</label>
        <br>
        <input type="text" name="adsoyad">
        <br>
        <label>Telefon</label>
        <br>
        <input type="text" name="telefon">
        <br>
        <label>Mail</label>
        <br>
        <input type="text" name="mail">
        <br>
        <label>Metin</label>
        <br>
        <textarea name="metin" style="width:150px ; height:100px"></textarea>
        <br>

         <input type="submit" name="ilet" value="gonder">
</form>
</body>
</html>
