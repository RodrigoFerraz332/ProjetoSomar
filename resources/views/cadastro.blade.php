<doctype html>
<html lang="pt-BR">
	<head> 
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<link href="/css/formulario.css" rel="stylesheet" type="text/css">	
		<title>Programa SOMAR</title>	
	</head> 
	
	<body>	
  @foreach ($errors->all() as $error)
   <li>{{ $error }}</li>
@endforeach
	<form action="{{ route('projeto.cadastro') }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('POST')
    <label for="nome_projeto">Nome do Projeto:</label>
    <input type="text" id="nome_projeto" name="nomeProjeto" required><br><br>
    
    <label for="parceiros">Parceiros:</label>
    <textarea id="parceiros" name="parceiros" required></textarea><br><br>
    
    <label for="ods">ODS:</label>
    <select id="ods" name="ods" required>
      <option value="ods1">ODS 1 - Erradicação da Pobreza</option>
      <option value="ods2">ODS 2 - Fome Zero e Agricultura Sustentável</option>
      <option value="ods3">ODS 3 - Saúde e Bem-Estar</option>
      <!-- Adicione as opções para as outras ODS -->
    </select><br><br>
    
    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="descricao" required></textarea><br><br>

    <label for="causaAtuacao">Causa de Atuação:</label>
    <textarea id="causaAtuacao" name="causaAtuacao" required></textarea><br><br>
    
    <label for="link_video">Link de Vídeo:</label>
    <input type="url" id="link_video" name="linkVideo"><br><br>
    
    <label for="fotos">Upload de Fotos (máximo de 5 fotos):</label>
    <input type="file" id="fotos" name="fotos[]" accept="image/*" multiple><br><br>
    
    <label for="aprovado">Aprovado:</label>
    <input type="checkbox" id="aprovado" name="aprovado" value="1"><br><br>
    
	<button type="submit" class="btn btn-primary btn-block mt-4 mx-auto">Cadastrar</button>
  </form>
	</body>

</html>	
	
	
	
	