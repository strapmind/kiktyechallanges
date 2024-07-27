@extends('layout.app')

@section('content')

<div class="container mt-5">
    <div class="row">


        @foreach ($projects as $project)


            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <a href="{{ Route('projects.show', $project->id) }}" class="text-decoration-none card-link">
                    <div class="card align-items-center text-center p-3 w-100 text-dark">
                        <img src="{{ $project->image_url }}" class="card-img-top" style="width: 120px; height: 90px;">
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{ $project->name }}</h5>
                            <p class="card-subtitle mb-3 text-muted">{{ $project->subtitle }}</p>
                            <!-- <p class="card-text">{{ $project->description }}</p> -->
                        </div>
                    </div>
                </a>
            </div>



        @endforeach


    </div>
</div>


@endsection