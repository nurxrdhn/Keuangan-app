<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aplikasi Keuangan Sederhana</title>

    <!-- Google Search Console verification -->
    <meta name="google-site-verification" content="tIsxd5gKIt9tofYcSQ4wmtp7zobxrKkA0bRaKwfgxYw" />

    <meta name="description" content="Aplikasi web untuk mencatat pemasukan, pengeluaran, dan menghitung saldo otomatis.">
    <meta name="keywords" content="aplikasi keuangan, catatan keuangan, pemasukan pengeluaran, aplikasi web keuangan">
    <meta name="author" content="nurxrdhn">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* backup tailwind inline di sini */
        </style>
    @endif
</head>

<body>
    <h1>Welcome</h1>
    <p>Aplikasi Keuangan Sederhana</p>
</body>
</html>
