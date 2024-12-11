@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="container">
    <section class="text-center display-6 p-5" data-aos="fade-up" data-aos-duration="1200">
        <h2 class="display-4 font-weight-bold">{{ $title }}</h2>
    </section>

    <div class="card border-danger text-white bg-dark shadow-lg" style="border-radius: 10px;">
        <div class="card-body">
            <div class="content" data-aos="fade-in" data-aos-duration="1500">
               
                {!! $htmlContent !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .card {
        border-radius: 12px;
        box-shadow: 0px 15px 30px rgba(255, 0, 0, 0.2);
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .card:hover {
        box-shadow: 0px 20px 50px rgba(255, 0, 0, 0.4);
        transform: translateY(-5px); 
    }

   
    h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #e63946;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .content {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #f1f1f1;
    }


    .content p {
        margin-bottom: 15px;
    }


    .content img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 15px 0;
    }

    .content a {
        color: #ff6347;
        text-decoration: none;
    }

    .content a:hover {
        text-decoration: underline;
        color: #e63946;
    }
</style>
@endsection

@section('scripts')
<script>
  AOS.init();
</script>
@endsection
