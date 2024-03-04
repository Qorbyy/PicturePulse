<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style>
        /* Gaya umum */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7fafc;
            color: #374151;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        h1, h2, h3, h4, h5, h6 {
            font-weight: bold;
        }
        /* Navbar */
        .navbar {
            background-color: #1e40af;
            padding: 20px 0;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
            transition: color 0.3s ease;
        }
        .navbar a:hover {
            color: #d1d5db;
        }
        .navbar-brand img {
            height: 30px; /* Mengurangi tinggi logo */
        }
        /* Galeri */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1rem;
            padding: 1rem;
        }
        .gallery-item {
            overflow: hidden;
            border-radius: 0.5rem;
            border: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }
        .gallery-item-content {
            padding: 20px;
        }
        .gallery-item h2 {
            color: #1e40af;
            margin-bottom: 10px;
        }
        .gallery-item p {
            color: #4b5563;
        }
        /* Slider */
        .slider {
            width: 100%;
            overflow: hidden;
            position: relative;
            margin-top: 20px;
        }
        .slider img {
            width: 100%;
            height: auto;
        }
        /* Kotak Pencarian */
        .search-box {
            margin-top: 20px;
            display: flex;
        }
        .search-box input[type="text"] {
            padding: 10px;
            width: 70%;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }
        .search-box button {
            padding: 10px 20px;
            background-color: #1e40af;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        /* Kartu Konten */
        .content-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .content-card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .content-card h3 {
            color: #1e40af;
            margin-bottom: 10px;
        }
        .content-card p {
            color: #4b5563;
            margin-bottom: 10px;
        }
        .content-card .btn {
            padding: 10px 20px;
            background-color: #1e40af;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .content-card .btn:hover {
            background-color: #3b82f6;
        }
        /* Footer */
        .footer {
            background-color: #1e40af;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            margin-top: 20px;
        }
        .footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container flex justify-between items-center">
            <div class="navbar-brand">
                <img src="/assets/logo3.png" alt="Logo" class="h-5">
            </div>
            <div class="navbar-links">
                <!-- <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Gallery</a>
                <a href="#">Contact</a> -->
                <a href="/login">Login</a>
                <a href="/register" class="bg-blue-500 px-4 py-2 rounded-lg text-white">Register</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-3xl font-bold text-center mt-10">PicturePulse</h1>
        <div class="gallery mt-8">
            <div class="gallery-item">
                <div class="gallery-item-content">
                    <h2 class="text-xl font-bold">Tentang PicturePulse</h2>
                    <p>PicturePulse adalah platform berbagi foto inovatif yang memungkinkan pengguna untuk dengan mudah mengunggah, berbagi, dan menemukan konten visual yang menarik. Dengan antarmuka yang elegan dan ramah pengguna, PicturePulse bertujuan untuk menghubungkan orang melalui kekuatan gambar, memungkinkan mereka untuk berekspresi secara kreatif dan menjelajahi dunia di sekitar mereka.</p>
                </div>
            </div>
        </div>

        <!-- Beberapa foto -->

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-4">
            <div class="content-card">
                <img src="/assets/bocil1.jpeg" alt="Foto 1">
            </div>
            <div class="content-card">
                <img src="/assets/asd.jpeg" alt="Foto 2">
            </div>
            <div class="content-card">
                <img src="/assets/bocil2.jpeg" alt="Foto 3">
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 PicturePulse. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
