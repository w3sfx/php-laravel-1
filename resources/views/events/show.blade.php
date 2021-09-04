@extends('layouts.main') {{--Utilizando layout da página especificada--}}

@section('title', $event->title) {{--Título do site--}}

@section('content') {{--Conteúdo do site--}}

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{$event->image}}" class="img-fluid" alt="{{$event->title}}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{$event->title}}</h1>
                <p class="event-city"><ion-icon name="location-outline"></ion-icon> {{ $event->city }}</p>
                <p class="events-participants"><ion-icon name="people-outline">X Participantes</ion-icon></p>
                <p class="event-owner"><ion-icon name="star-outline">Dono do Evento</ion-icon></p>
                <a href="#" class="btn btn-primary" id="evennt-submit">Confirmar Presença</a>
                <h3>O evento conta com:</h3>
                <ul id="items-list">
                    @foreach($event->items as $item)
                        <li><ion-icon name="play-outline"></ion-icon><span>{{$item}}</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o Evento</h3>
                <p class="event-description">{{$event->description}}</p>
            </div>
        </div>
    </div>

@endsection