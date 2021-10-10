<!-- Berfungsi sebagai template bagi view lain sehingga isi dari view lain hanya memangil app.blade.php dan isi dari body nya saja -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- agar bisa memanggil title yang berbeda dari setiap view secara otomatis tanpa perlu mengubah di app.blade.php -->
</head>
<body>
        @yield('content')
</body>
</html>
        <!-- memanggil isi dari view yang berbeda -->
        <!-- yield content artinya sama saja dengan -->
        <!-- section content -->
        <!--    Urutan Ke -->
        <!-- endsection  -->
