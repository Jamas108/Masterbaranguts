
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-image"></div>
    <div class="bg-text">
        <h1>WELCOME TO MASTER BARANG WEBSITE</h1>
        <p>silahkan pencet tombol di bawah ini untuk masuk ke halaman home page</p>
        <a class="btn btn-primary" href="{{url('/home')}}">HOME PAGE</a>
    </div>

    @vite('resources/js/app.js')
</body>
</html>

