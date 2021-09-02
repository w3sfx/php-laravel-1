    @extends('layouts.main') {{--Utilizando layout da página especificada--}}

    @section('title', 'HDC Events') {{--Título do site--}}

    @section('content') {{--Conteúdo do site--}}
    
    <h1>Teste do vermelho</h1>
    <p><img src="/img/banner.jpg" alt="Banner"></p>
    @for($i = 0; $i < count($arr); $i++)
        <p>{{$arr[$i]}} - {{$i}}</p>
        @if($i == 2)
        <p style="color: green; background-color: black;">O i é 2</p>
        @endif
    @endfor

    @foreach($nomes as $indice => $nome)
        <p>{{$indice}} - {{$nome}}</p>
        <p>{{$loop->index}}</p>
    @endforeach

    @php
        $name = "Wesley em PHP";
        echo $name;
    @endphp

    @endsection {{--Informando o fim da sessão do conteúdo--}}

    <!--Comentário com HTML é renderizado na inspeção-->

    {{--Comentário do Blade não é renderizado na inspeção--}}
