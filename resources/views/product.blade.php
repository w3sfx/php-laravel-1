@extends('layouts.main') {{--Utilizando layout da página especificada--}}

@section('title', 'Produto') {{--Título do site--}}

@section('content') {{--Conteúdo do site--}}

    @if($id != null)
        <p>Exibindo produto id: {{ $id }}</p>
    @endif

@endsection