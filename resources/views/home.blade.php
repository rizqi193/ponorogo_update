@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container" style="padding-top: 100px;">
    <!-- Carousel Section -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <!-- Add dynamic content for carousel items -->
            <div class="carousel-item active">
                <img src="{{ asset('ilustrasi_ponorogo.jpg') }}" class="d-block w-100" alt="First Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tugu Batas Ponorogo-Madiun</h5>
                    <p>Tugu batas ini menjadi salah satu tanda batas antara kabupaten ponorogo dan kabupaten ponorogo.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('pndp.jpg') }}" class="d-block w-100" alt="Second Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pendopo Kabupaten Ponorogo</h5>
                    <p>pendopo Adalah salah satu bangunan monumen yang berada di taman kabupaten ponorogo.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('reog.jpg') }}" class="d-block w-100" alt="Third Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Reog Ponorogo</h5>
                    <p>Reog Ponorogo adalah salah satu kesenian yang Ada di Ponorogo dan sudah Dikenal hingga mancanegara.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Post Section -->
    <div class="row mt-4">
        @foreach ($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-light rounded">
                @if ($post->image)
                    <img src="{{ asset('images/posts/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                @else
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Placeholder Image">
                @endif
                <div class="card-body">
                    <h5 class="card-title text-dark">{{ $post->title }}</h5>
                    <p class="card-text text-muted">{{ Str::limit($post->body, 100) }}</p>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-primary btn-block">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

<style>
    /* Carousel Styling */
    .carousel-item img {
        object-fit: cover;
        height: 400px; /* Adjust the height of the carousel images */
    }

    /* Alert Box Styling */
    .alert {
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 30px;
    }

    .alert-success {
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
    }

    .alert-danger {
        background-color: #f8d7da;
        border-color: #f5c6cb;
        color: #721c24;
    }

    /* Card Styling */
    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
        border-radius: 10px 10px 0 0;
        object-fit: cover;
        height: 200px;
    }

    .card-body {
        padding: 20px;
        background-color: #ffffff;
        border-radius: 0 0 10px 10px;
    }

    .card-title {
        font-size: 1.25rem;
        color: #333;
        font-weight: 500;
    }

    .card-text {
        font-size: 1rem;
        color: #666;
    }

    .btn {
        padding: 12px 20px;
        font-size: 16px;
        font-weight: 500;
        text-align: center;
        display: block;
        margin-top: 10px;
        border-radius: 5px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    /* Responsiveness for smaller screens */
    @media (max-width: 768px) {
        .container {
            padding-left: 10px;
            padding-right: 10px;
        }

        .card-img-top {
            height: 150px;
        }

        .carousel-item img {
            height: 300px;
        }
    }
</style>
@endsection
