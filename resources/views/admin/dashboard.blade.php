@extends('layout.dashboard')

@section('content')
<div class="container-lg mt-3 px-4">
    <div class="row">
        <!-- Switch Between Add Form and Display Project To Edit -->
        <div class="col-lg-1 col-md-2 col-sm-3 col-3 p-0 text-center">
            <p id="add"
                class="mb-0 border border-top-0 border-start-0 border-end-0 border-bottom border-2 rounded-top p-1">
                <a href="#add" class="text-decoration-none" style="color: inherit">Додај</a>
            </p>
        </div>
        <div class="col-lg-1 col-md-2 col-sm-3 col-3 p-0 text-center">
            <p id="edit" class="mb-0 border border-bottom-0 border-2 rounded-top p-1">
                <a href="#edit" class="text-decoration-none" style="color: inherit">Измени</a>
            </p>
        </div>
        <div class="col-lg-10 col-md-8 col-sm-6 col-6 border-bottom border-2 p-0"></div>



    </div>

    <!-- Displaying message for successfully editing or deleting project! -->
    <div class="message align-items-center mt-3">
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session()->get('message') }}</div>
        @endif
    </div>
</div>




<!-- Edit Project -->
<div id="edit-section" class="container mt-3">
    <h2 class="py-3">Измени постоечки производ:</h2>
    <div class="row">
        @foreach ($projects as $project)
            <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                <div class="card text-center p-3" data-id="{{ $project->id }}"
                    onMouseOver="this.style.borderColor='yellow', this.style.boxShadow='0 0 1px 1px yellow'"
                    onMouseOut="this.style.borderColor='', this.style.boxShadow=''">
                    <div class="display-card" data-id="{{ $project->id }}-display">
                        <img class="w-50 h-25 mx-auto my-2" src="{{ $project->image_url }}" alt="">
                        <h2 class="text-body-secondary">{{ $project->name }}</h2>
                        <h5 class="text-body-tertiary">{{ $project->subtitle }}</h5>
                        <p>{{ $project->description }}</p>
                        <div data-id="{{ $project->id }}-btn" class="bg-light p-3 border-top border-2">
                            <button type="button" class="btn btn-outline-secondary edit-btn">Измени</button>
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $project->id }}">Избриши</button>
                        </div>
                    </div>
                    <div class="edit-card text-start d-none" data-id="{{ $project->id }}-edit">
                        <form action="{{ route('projects.update', $project->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="p-2">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        value="{{ $project->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="subtitle" class="form-label">Subtitle</label>
                                    <input type="text" name="subtitle" class="form-control" id="subtitle"
                                        value="{{ $project->subtitle }}">
                                </div>
                                <div class="mb-3">
                                    <label for="image_url" class="form-label">Image Url</label>
                                    <input type="url" name="image_url" class="form-control" placeholder='https://'
                                        id="image_url" value="{{ $project->image_url }}">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="description" class="form-control"
                                        rows="3">{{ $project->description }}</textarea>
                                </div>
                            </div>
                            <div class="bg-light p-3 text-center border-top border-2">
                                <input type="submit" class="btn btn-warning" value="Зачувај">
                                <button class="btn btn-secondary cancel-btn">Откажи</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Izbrisi Proekt Modal -->
            <div class="modal fade" id="exampleModal{{ $project->id }}" tabindex="-1"
                aria-labelledby="exampleModal{{ $project->id }}PLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModal{{ $project->id }}PLabel">Избриши</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Дали си сигурен во бришењето на проектот?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Откажи</button>
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-warning text-black">Избриши</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach




    </div>
</div>


<!-- Add Project Form -->
<div id="add-form" class="container mt-3 d-none">
    <div class="row">
        <h2 class="py-3 mb-5">Додај нов производ:</h2>
        <div class="col-6 offset-3">
            @if (!$errors->isEmpty())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="col-6 offset-3">
            <form action="{{ route('projects.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="subtitle" class="form-label">Subtitle</label>
                    <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{ old('subtitle') }}">
                </div>
                <div class="mb-3">
                    <label for="image_url" class="form-label">Image Url</label>
                    <input type="url" name="image_url" class="form-control" placeholder='https://' id="image_url"
                        value="{{ old('image_url') }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control"
                        rows="3">{{ old('description') }}</textarea>
                </div>
                <button type="submit" class="btn btn-warning w-100 text-black">Додај</button>
            </form>
        </div>
    </div>
</div>

<!-- Admin LOGOUT Button -->
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-warning my-3">Logout</button>
</form>
@endsection