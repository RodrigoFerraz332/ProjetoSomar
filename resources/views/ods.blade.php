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
				<img src="/imagens/fecomerciors2.png" alt="Fecomercio" class="w-50 mx-5">
			</a>
			<a class="navbar-brand col mx-5" href="{{ route('index') }}">
				<img src="/imagens/logoCapa.png" alt="logo SOMAR" class="w-50 mx-5">
			</a>
			<a class="navbar-brand col mx-5" href="{{ route('login') }}">
				<img src="/imagens/login.png" alt="Botao login" class="w-50 mx-5">
			</a>
			</nav>
		</div>
		
		<div class="container flex pt-5 mt-5">
		<img src="/imagens/{{ $ods->imagem}}" alt="{{$ods->nomeODS}}" class="w-25 d-block mt-5 mx-auto pt-4 px-5 rounded">
		</div>

		<div>
		<p class="display-6 mt-3 text-primary text-center "> {{$ods->nomeODS}} </p>
		</div>
		
		<div class="container text-justify mt-5 my-3 px-5">
			
		</div>
		
		<div class="container my-3 px-5">
			<p class="text-monospace text-justify">Os Objetivos de Desenvolvimento Sustentável (ODS) possuem como propósito final a transformação de uma realidade vigente,
			sempre levando em consideração as questões sociais, ambientais e de governança das instituições. 
			Sua execução está atrelada aos serviços ofertados pelo Sistema e seus públicos atendidos.</p>
		</div>
		
		<div class="container my-3 px-5">
			<p class="text-monospace text-justify pb-3 mb-3">São potencializados em parceria com outras partes interessadas, fortalecendo a imagem e o protagonismo do Sistema Comércio.</p>
		</div>

		<div class="container my-3 px-5">
		
	
		
		
			
		
			<p class="topicosODS">Projetos da ODS: </p> {{count($projetos)}}
			
			@foreach ($projetos as $projeto)
			<p class="topicosODS">
				Projeto:</p> <p> {{$projeto->nomeProjeto}} </p>
				<p class="topicosODS">
                Cidade: </p> {{$projeto->cidade}}
				<p class="topicosODS">
                Causa de Atuação: </p> {{$projeto->causaAtuacao}}

				<p class="topicosODS">
                Resumo: </p> {{$projeto->descricao}}
			<p class="topicosODS">
                ODSs Vinculadas: </p> {{$projeto->idsODS}}
                
                
				
				
				<p class="topicosODS">
                Parceiros: </p> {{$projeto->parceiros}}

				@if ($projeto->nomeImagens)
				
				<p class="topicosODS">
					Imagens:
					<div class="container">
            <div class="row justify-content-start">
					@foreach(explode(',', $projeto->nomeImagens) as $info) 
					<div class="col mx-auto">
					
						
							
							<img src="/imagens/{{ $info}}" alt="{{$info}}" class="w-100 d-block mt-5 mx-auto pt-4 px-5">
							
						
						
					</div>
					
					@endforeach
</div></div>
				@endif
					
				<hr>
            @endforeach

		</div>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>

</html>	
	
	
	
	