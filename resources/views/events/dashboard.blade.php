@extends('layouts.main') {{--Utilizando layout da página especificada--}}

@section('title', $event->title) {{--Título do site--}}

@section('content') {{--Conteúdo do site--}}

<a href="#" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a> 
<form action="/events/{{ $event->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
</form>

@endsection