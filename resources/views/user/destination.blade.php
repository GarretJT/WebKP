@extends('layouts.user')

@section('header')
    <style>
        /* Hero Section with Parallax Effect */
        #hero {
            background: url('{{asset('user/images/cover.png')}}') top center;
            background-attachment: fixed; /* Keeps the image still while scrolling */
            background-repeat: no-repeat;
            width: 100%;
            background-size: cover;
            margin: 0px;
            height: 250px; /* Adjust the height as necessary */
        }

        /* Styling for the rest of the content */
        .full-img {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 180px;
        }

        .content {
            line-height: 1.6;
            font-size: 15px;
        }

        /* Adjustments for the section text */
        #call-to-action {
            background: #f4f4f4;
            padding: 50px 0;
        }

        .cta-title {
            font-size: 36px;
            font-weight: bold;
        }

        .cta-text {
            font-size: 16px;
            margin-bottom: 30px;
        }

        .cta-btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cta-btn {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-size: 16px;
        }

        /* Card Styling */
        .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 30px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
        }

        .card-text {
            font-size: 14px;
            color: #555;
        }

        .card-footer {
            text-align: right;
            background: #f8f8f8;
            padding: 10px;
        }

        .card-footer a {
            color: #28a745;
            text-decoration: none;
        }

        .card-footer a:hover {
            text-decoration: underline;
        }
    </style>
@endsection

@section('hero')
    <h1>JELAJAHI DUNIA KULINER KAMI</h1>
@endsection

@section('content')
    <section id="articles" class="container">
        <div class="row">
            <!-- Article 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" alt="Article Image">
                    <div class="card-body">
                        <h5 class="card-title">Artikel 1: Panduan Liburan di Jogja</h5>
                        <p class="card-text">Temukan destinasi terbaik untuk liburan Anda di Jogja, dari tempat wisata alam hingga budaya yang kaya.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">Baca</a>
                    </div>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" alt="Article Image">
                    <div class="card-body">
                        <h5 class="card-title">Artikel 2: Makanan Khas Jogja yang Wajib Dicoba</h5>
                        <p class="card-text">Makanan khas Jogja yang lezat dan unik yang dapat Anda nikmati selama perjalanan liburan Anda.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">Baca</a>
                    </div>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" alt="Article Image">
                    <div class="card-body">
                        <h5 class="card-title">Artikel 3: 5 Tempat Wisata Tersembunyi di Jogja</h5>
                        <p class="card-text">Jelajahi tempat-tempat tersembunyi yang jarang diketahui oleh wisatawan, tetapi sangat menakjubkan!</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">Baca</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
