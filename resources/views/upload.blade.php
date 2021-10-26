<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>RESİM UPLOAD UYGULAMASI</title>
</head>

<body>
    <form action="{{ route('yukle') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="resim"><br>
        <input type="submit" name="ilet" value="Resim Yükle">

    </form>
</body>

</html>
