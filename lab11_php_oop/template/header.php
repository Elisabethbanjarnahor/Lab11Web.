<!DOCTYPE html>
<html>
<head>
    <title>Lab 11 PHP OOP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 200px;
            float: left;
            background: #f0f0f0;
            padding: 10px;
            box-sizing: border-box;
        }
        .content {
            margin-left: 220px;
            padding: 10px;
            box-sizing: border-box;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin-bottom: 8px;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #333;
        }
        .sidebar ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h1>Praktikum 11 - PHP OOP Lanjutan</h1>
<hr>

<!-- Sidebar -->
<div class="sidebar">
    <h3>Menu</h3>
    <ul>
        <li><a href="/lab11_php_oop/artikel/index">Data Artikel</a></li>
        <li><a href="/lab11_php_oop/artikel/tambah">Tambah Artikel</a></li>
        <!-- Tambah menu lain kalau perlu -->
    </ul>
</div>

<!-- Konten utama -->
<div class="content">
