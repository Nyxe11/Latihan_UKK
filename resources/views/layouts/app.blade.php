<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        nav {
            background: #222;
            padding: 10px;
            color: #fff;
        }

        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
        }

        .container {
            width: 80%;
            background: white;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th {
            background: #222;
            color: white;
            padding: 10px;
        }

        td {
            padding: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        button {
            padding: 10px 15px;
            background: #222;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #444;
        }
    </style>
</head>

<body>

<nav>
    <a href="/barang">Barang</a>
    <a href="/barang/create">Tambah Barang</a>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>


