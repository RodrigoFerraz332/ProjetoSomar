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
        <div class="container-fluid row pb-5 mb-5">
			<nav class="navbar nav-justified fixed-top navbar-light bg-white border border-dark">
			<a class="navbar-brand col mx-5">
				<img src="../imagens/fecomerciors4.png" alt="Fecomercio" class="w-50 mx-5">
			</a>
			<a class="navbar-brand col mx-5" href="{{ route('index') }}">
				<img src="../imagens/logoCapa.png" alt="logo SOMAR" class="w-50 mx-5">
			</a>
			<a class="navbar-brand col mx-5" href="{{ route('login') }}">
				<img src="../imagens/login.png" alt="Botao login" class="w-50 mx-5">
			</a>

			</nav>
		</div>
		@include('project.partials.busca')
		<div class="container">
            <div class="row justify-content-start">
            @foreach ($odss as $ods)
                <div class="col-3">
                    <a class="col mx-auto" href="{{ route('ods.show', ['id' => $ods->idODS]) }}">
                    <figure class="figure">
                        <div class="text-center">
                            <img src="/imagens/{{ $ods->imagem}}" alt="{{$ods->nomeODS}}" class="w-50 pt-5 mt-5 rounded">
                        </div>
                    <figcaption class="figcaption text-center">
                    {{$ods->nomeODS}}
                    </figure>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
			
		</div>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>

</html>	
	
	
	
	