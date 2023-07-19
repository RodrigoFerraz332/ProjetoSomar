<doctype html>
<html lang="pt-BR">
	<head> 
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<link href="../css/formulario.css" rel="stylesheet" type="text/css">
		<title>Programa SOMAR</title>	
	</head> 
	
	<body>	
		<div class="container-fluid row">
			<nav class="navbar nav-justified fixed-top navbar-light bg-white border border-dark">
			<a class="navbar-brand col mx-5">
				<img src="../imagens/fecomerciors4.png" alt="Fecomercio" class="w-50 mx-5">
			</a>
			<a class="navbar-brand col mx-5" href="{{ route('index') }}">
				<img src="../imagens/logoCapa.png" alt="logo SOMAR" class="w-50 mx-5">
			</a>
			<a class="navbar-brand col mx-5">
				<img src="../imagens/login.png" alt="Botao login" class="w-50 mx-5">
			</a>
			</nav>
		</div>
		
		<div class="card sm" id="telaLogin">
		<!--<img class="card-img-top" src=".../100px180/" alt="Imagem de capa do card">-->
		<div class="card-body border-dark rounded">
			<form method="POST" action="{{ route('login') }}">
				@csrf
		  <div class="form-group">
			<label for="exampleInputEmail1" class="pb-3">Login</label>
			<input type="email" class="form-control" id="email-usuario" name="email" placeholder="Informe seu e-mail">
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1" class="py-3">Senha</label>
			<input type="password" class="form-control" id="senha-usuario" name="password" placeholder="Senha">
		  </div>
		  <div class="form-group form-check py-3">
			<input type="checkbox" class="form-check-input" id="exampleCheck1" name="remenber">
			<label class="form-check-label" for="exampleCheck1">Manter-me conectado</label>
		  </div>
		  <button type="submit" class="btn btn-primary btn-block mx-auto">Enviar</button>
		  <button type="button" class="btn btn-outline-danger mx-auto">Redefinir Senha</button>
		  <a class="btn btn-primary" href="{{ route('register') }}" role="button">Novo Cadastro</a>
		</form>
		</div>
			</div>
			
	</body>

</html>	
	
	
	
	