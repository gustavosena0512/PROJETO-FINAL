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

  <div class="container"> 
    <form action="/adicionarJogo" class="form-control" enctype="multipart/form-data" method="POST">
      @csrf
      <h1>Cadastre um jogo</h1>
      <div class="mb-3">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="titulo">
      </div>
      <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFile01" name=imagem>
      </div>
      <div class="mb-3">
        <label for="link-oficial" class="form-label">Link Oficial</label>
        <input type="text" class="form-control" id="link-oficial" name="link_jogo" placeholder="Link Oficial">
      </div>
      <div class="mb-3">
        <label for="link-youtube" class="form-label">Link Youtube</label>
        <input type="text" class="form-control" id="link-youtube" name="trailer_youtube" placeholder="somete o trecho depois do =">
      </div>
      <div class="mb-3">
        <label for="tags" class="form-label">Tags</label>
        <input type="text" class="form-control" id="tags" name="tags" placeholder="tags">
      </div>
      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
      </div>
      <div class="col-auto">
        <button type="submit" name="adicionar" class="btn btn-primary">Cadastrar</button>
      </div>
    </form> 
    </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>