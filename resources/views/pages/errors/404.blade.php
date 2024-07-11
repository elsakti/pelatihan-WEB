<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kamu tersesat!</title>
</head>
<body style="background-image: url('{{ asset('mountain.jpg') }}')">
    <h1 style="text-align: center">404 Error</h1>
    <p style="text-align: center">Kamu Telah Tersesat,
         silahkan kembali kerumah.
         <a href="{{ route('home') }}">ayo pulang!</a>
    </p>
</body>
</html>
