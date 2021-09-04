<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>@yield('title')</title>

      {{-- Fonte do Google --}}

      <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

      {{-- CSS Bootstrap --}}

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

      <!-- CSS da aplicação -->
      <link rel="stylesheet" href="/css/styles.css">
      <script src="/js/scripts.js"></script>
      
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
          <a href="/" class="navbar-brand">
            <img src="/img/hdcevents_logo.svg" alt="HDC Events">
          </a>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="/" class="nav-link">Eventos</a>
            </li>
            <li class="nav-item">
              <a href="/events/create" class="nav-link">Criar Eventos</a>
            </li>
            <li class="nav-item">
              <a href="/" class="nav-link">Entrar</a>
            </li>
            <li class="nav-item">
              <a href="/" class="nav-link">Cadastrar</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main>
      <div class="container-fluid">
        <div class="row">
          @if(session('msg'))
            <p class="msg">{{session('msg')}}</p>
          @endif
          @yield('content')
        </div>
      </div>
    </main>
    <footer>
      <p>HDC Events &copy; 2021</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  </body>
</html>
