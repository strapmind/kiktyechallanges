@extends('layout.dashboard')

@section('content')

<div class="container mt-5 d-flex justify-content-center">
    <div class="row">

        <div class="col my-3">
            <div class="card align-items-center text-center p-3 w-100 text-dark">
                <img src="{{ $project->image_url }}" class="card-img-top" style="width: 195px; height: 140px;">
                <div class="card-body">
                    <h5 class="card-title mb-3">{{ $project->name }}</h5>
                    <p class="card-subtitle mb-3 text-muted">{{ $project->subtitle }}</p>
                    <p class="card-text">{{ $project->description }}</p>
                </div>
            </div>

        </div>

    </div>
</div>


@endsection