<doctype html>
<html lang="pt-BR">
	<!--
	<head> 
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<link href="../css/formulario.css" rel="stylesheet" type="text/css">
		<title>Programa SOMAR</title>	
	</head> 
-->
	<body>	
        
	<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@if ($erMessages = Session::get('erMessages'))
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    @foreach ($erMessages as $message)
        <p>{{ $message }}</p>
    @endforeach
  </div>    
@endif

<h1>Cadastro de Projeto</h1>
  
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
    
    <label for="link_video">Link de Vídeo:</label>
    <input type="url" id="link_video" name="linkVideo"><br><br>
    
    <label for="fotos">Upload de Fotos (máximo de 5 fotos):</label>
    <input type="file" id="fotos" name="fotos[]" accept="image/*" multiple><br><br>
    
    <label for="aprovado">Aprovado:</label>
    <input type="checkbox" id="aprovado" name="aprovado" value="1"><br><br>
    
	<button type="submit" class="btn btn-primary btn-block mt-4 mx-auto">Cadastrar</button>
  </form>

		<!--
    <div class="container-fluid row">
			<nav class="navbar nav-justified fixed-top navbar-light bg-white border border-dark">
			<a class="navbar-brand col mx-5">
				<img src="../imagens/fecomerciors2.png" alt="Fecomercio" class="w-50 mx-5">
			</a>
			<a class="navbar-brand col mx-5" href="{{ route('index') }}">
				<img src="../imagens/logoCapa.png" alt="logo SOMAR" class="w-50 mx-5">
			</a>
			<a class="navbar-brand col mx-5">
            <img src="../imagens/usuario.jpg" alt="logo SOMAR" class="w-50 mx-5">
			</a>
			<form method="POST" action="{{ route('logout') }}">
			@csrf
			<button class="btn btn-primary" type="submit">Logout</button>
			</form>
			</nav>
		</div>
		
		<div class="card sm" id="formularioProjeto">
		
		<div class="card-body border-dark rounded">
			<form method="POST" action="{{ route('login') }}">
				@csrf
		  <div class="form-group">
			<label for="exampleInputEmail1" class="display-7 mt-3 text-primary text-center">Nome do Projeto</label>
			<input type="email" class="form-control" id="email-usuario" name="email" placeholder="Informe o nome do projeto">
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1" class="display-7 mt-3 text-primary text-center">Parceiros</label>
			<input type="password" class="form-control" id="senha-usuario" name="password" placeholder="Informe os nomes dos parceiros">
		  </div>
          <div class="form-group">
			<label for="exampleInputPassword1" class="display-7 mt-3 text-primary text-center">Causa/Atuação</label>
			<input type="password" class="form-control" id="senha-usuario" name="password" placeholder="Informe as ODS vinculadas ao projeto">
		  </div>
          <div class="form-group">
			<label for="exampleInputPassword1" class="display-7 mt-3 text-primary text-center">Descrição</label>
			<input type="password" class="form-control" id="senha-usuario" name="password" placeholder="Descreva o projeto">
		  </div>

          <div class="form-group">
			<label for="exampleInputPassword1" class="display-7 mt-3 text-primary text-center">Video</label>
			<input type="password" class="form-control" id="senha-usuario" name="password" placeholder="Insira o link do vídeo">

		  </div>
		  <button type="submit" class="btn btn-primary btn-block mt-4 mx-auto">Enviar</button>
		</form>
		</div>
			</div>
		-->	
	</body>

</html>	
<!--
 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
