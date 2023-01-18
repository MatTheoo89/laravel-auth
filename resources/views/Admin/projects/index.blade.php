@extends('layouts.admin')

@section('content')
<div class="container-fluid text-end">
    <a class="btn btn-success me-5 my-5" href=""><i class="fa-solid fa-plus"></i> New project</a>
</div>
    <div class="container my-5">
        <h1 class="text-center">My projets</h1>
    </div>
    <div class="my-container">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th class="text-white text-center" scope="col">ID</th>
                    <th class="text-white text-center" scope="col">image</th>
                    <th class="text-white text-center" scope="col">Name project</th>
                    <th class="text-white text-center" scope="col">Client name</th>
                    <th class="text-white text-center" scope="col">summary</th>
                    <th class="text-white text-center" scope="col">AZIONI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td class="text-white">{{$project->id}}</td>
                    <td class="text-white">
                        <img src="{{$project->cover_image}}" alt="" class="thumb">
                    </td>
                    <td class="text-white">{{$project->name}}</td>
                    <td class="text-white">{{$project->client_name}}</td>
                    <td class="text-white">{{$project->summary}}</td>
                    <td class="text-white">
                        <a class="btn btn-info" href=""><i class="fa-regular fa-eye"></i></a>
                        <a class="btn btn-warning" href=""><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="d-inline btn btn-danger" href=""><i class="fa-regular fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection