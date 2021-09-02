    @extends('layouts.main') {{--Utilizando layout da página especificada--}}

    @section('title', 'HDC Events') {{--Título do site--}}

    @section('content') {{--Conteúdo do site--}}
    
    @foreach($events as $event)
        <p>{{$event->title}} -- {{$event->description}}</p>
    @endforeach

    @endsection {{--Informando o fim da sessão do conteúdo--}}

    <!--Comentário com HTML é renderizado na inspeção-->

    {{--Comentário do Blade não é renderizado na inspeção--}}
