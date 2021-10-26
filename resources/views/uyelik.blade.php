<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Örnek Form Sayfası</title>
</head>

<body>
@if ($errors->any())
<ul>
   @foreach ($errors->all() as $hatalar)
   <li>{{ $hatalar }}</li>
       
   @endforeach 
</ul>
@endif

    <form action="{{ route('uyekayit') }}" method="post">
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
         <input type="submit" name="ilet" value="gonder">
</form>
</body>
</html>
