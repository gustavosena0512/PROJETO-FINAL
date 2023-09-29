<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jogos Indiana</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @auth
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/cadastrarJogo">Cadastrar Novo Jogo</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/logout">Sair</a>
              </li>
              @endauth
              @guest
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/register">Cadastra-se</a>
              </li>
              @endguest
            </ul>
          </div>
        </div>
      </nav>
  <div class="container"> 
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titulo</th>
            <th scope="col">link jogo</th>
            <th scope="col">tags</th>
            <th scope="col">ação</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $jogos as $jogo)
                           
          <tr>
            <th scope="row">{{$jogo->id}}</th>
            <td>{{$jogo->titulo}}</td>
            <td><a href="{{$jogo->link_jogo}}" target="_blank">{{$jogo->link_jogo}}</a></td>
            <td>{{$jogo->tags}}</td>
            <td><a href="/excluir/{{$jogo->id}}">excluir</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>