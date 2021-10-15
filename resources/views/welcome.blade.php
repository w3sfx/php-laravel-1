@extends('layouts.main') {{--Utilizando layout da página especificada--}}

@section('title', 'HDC Events') {{--Título do site--}}

@section('content') {{--Conteúdo do site--}}

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{$event->image}}" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">{{date('d/m/Y', strtotime($event->date))}}</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">X Participantes</p>
                    <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
        @if(count($events) == 0)
            <p>Não há eventos disponíveis</p>
        @endif
    </div>
</div>

@endsection {{--Informando o fim da sessão do conteúdo--}}

<!--Comentário com HTML é renderizado na inspeção-->

{{--Comentário do Blade não é renderizado na inspeção--}}
