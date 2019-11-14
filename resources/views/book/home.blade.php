@extends('layouts.app')
@section('content')
<div class="row ">
    <div class="col-12">
        <h1>Lista de Libros</h1>
        <a class="btn btn-primary" href="{{url('book/create')}}">
            Nuevo Libro
        </a>
        <br /><br />
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Descripcion</th>
                    <th>Codigo</th>
                    <th>Fecha de publicacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($book_list as $book)
                <tr>
                    <td>{{ $book->description}}</td>
                    <td>{{ $book->code}}</td>
                    <td>{{ $book->publication_date}}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection