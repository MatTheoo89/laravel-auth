@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="text-end me-4">
            <a class="btn btn-warning" href="{{route('admin.projects.index')}}">Torna indietro</a>
        </div>

        <h1 class="ms-4 mb-5">Edit Comics</h1>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        
        @endif

        <div class="form-container">
            <form action="{{route('admin.projects.update', $project)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">name project *</label>
                    <input  type="text"
                            class="form-control @error('title') is-invalid @enderror"
                            id="name"
                            name="name"
                            value="{{old('name', $project->name)}}"
                            placeholder="name project">
                    @error('name')
                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                        <span>{{$message}}</span>
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="client_name" class="form-label">Client name *</label>
                    <input  type="text"
                    class="form-control @error('client_name') is-invalid @enderror"
                            id="client_name"
                            name="client_name"
                            value="{{old('client_name', $project->client_name)}}"
                            placeholder="Client name">
                    @error('client_name')
                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                            <span>{{$message}}</span>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="cover_image" class="form-label">Image project *</label>
                    <input  type="text"
                            class="form-control @error('cover_image') is-invalid @enderror"
                            id="cover_image"
                            name="cover_image"
                            value="{{old('cover_image', $project->cover_image)}}"
                            placeholder="cover_image">
                    @error('cover_image')
                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                            <span>{{$message}}</span>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="summary" class="form-label">summary *</label>
                    <textarea   class="form-control @error('summary') is-invalid @enderror"
                                id="summary"
                                name="summary"
                                rows="5">{{old('summary', $project->description)}}</textarea>
                    @error('summary')
                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                            <span>{{$message}}</span>
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-5 ms-4">Aggiorna</button>
            </form>
    
        </div>

    </div>
@endsection