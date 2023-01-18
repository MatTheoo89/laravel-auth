@extends('layouts.admin')

@section('content')
<div class="container text-center">
    <div class="row">
        <h1>show Project</h1>

    <div class="col-4 offset-4">
    <div class="card">
        <div class="image">
            <img src="{{$project->cover_image}}" class="card-img-top" alt="{{$project->name}}">
        </div>
        <div class="card-body">
            <h5 class="card-title text-black">{{$project->name}}</h5>
            <p class="card-text text-black">{{$project->client_name}}</p>
            <p class="card-text text-black">{{$project->summary}}</p>
            
            <div class="d-flex justify-content-center">
                <a class="btn btn-info me-4" href="{{route('admin.projects.index')}}">Torna indietro</a>
            <form
            onsubmit="return confirm('Confermi l\'eliminazione di : {{$project->name}}')"
            class="d-inline"
            action="{{route('admin.projects.destroy', $project)}}"
            method="post">
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger text-white" title="delete"><i class="fa-solid fa-trash"></i> Elimina</button>
                <a class="btn btn-warning text-white ms-3" href="{{route('admin.projects.edit', $project)}}" title="edit"><i class="fa-solid fa-pencil"></i> Modifica</a>
        </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection