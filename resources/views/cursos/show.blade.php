@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="container">
    <section class="text-center display-6 p-5">
        <h2>{{ $title }}</h2>
    </section>
    
    <div class="card border-danger text-white bg-dark">
        <div class="card-body">
            {!! $htmlContent !!}
        </div>
    </div>
</div>
@endsection
