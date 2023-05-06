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
				<img src="../imagens/fecomerciors2.png" alt="Fecomercio" class="w-50 mx-5">
			</a>
			<a class="navbar-brand col mx-5" href="../index.html">
				<img src="../imagens/logoCapa.png" alt="logo SOMAR" class="w-50 mx-5">
			</a>
			<a class="navbar-brand col mx-5" href="{{ route('login') }}">
				<img src="../imagens/login.png" alt="Botao login" class="w-50 mx-5">
			</a>
			</nav>
		</div>
		
		<div>
		<p class="display-4 pt-5 pt-5 text-primary text-center">NOSSOS PROJETOS</p>
		</div>
			
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
			<!-- <a class="col mx-auto" href="#">
			<figure class="figure">
				<img src="../imagens/ods1.jpg" alt="ODS Erradicação da Pobreza" class="w-50 pt-5 mt-5">
			<figcaption class="figcaption text-center">
			Erradicaçao da Pobreza
			</figure>
			</a>
			<a class="col mx-auto" href="#">
			<figure class="figure">
				<img src="../imagens/ods2.jpg" alt="ODS Fome Zero" class="w-50 pt-5 mt-5">
			<figcaption class="figcaption text-center">
			Fome Zero
			</figure>
			</a>
			<a class="col mx-auto" href="#">
			<figure class="figure">
				<img src="../imagens/ods3.jpg" alt="ODS Boa Saúde e Bem-Estar" class="w-50 pt-5 mt-5">
			<figcaption class="figcaption text-center">
			Boa saúde e Bem-Estar
			</figure>
			</a>
			<a class="col mx-auto" href="#">
			<figure class="figure">
				<img src="../imagens/ods4.jpg" alt="ODS Educação de Qualidade" class="w-50 pt-5 mt-5">
			<figcaption class="figcaption text-center">
			Educação de Qualidade
			</figure>
			</a>
			
			<div class="container-fluid row mx-auto text-center">
			<a class="col mx-auto" href="#">
			<figure class="figure">
				<img src="../imagens/ods5.jpg" alt="ODS Igualdade de Gênero" class="w-50 pt-5 mt-5">
			<figcaption class="figcaption text-center">
			Igualdade de Gênero
			</figure>
			</a>
			<a class="col mx-auto" href="#">
			<figure class="figure">
				<img src="../imagens/ods6.jpg" alt="ODS Água Limpa e Sanitária" class="w-50 pt-5 mt-5">
			<figcaption class="figcaption text-center">
			Água Limpa e Sanitária
			</figure>
			</a>
			<a class="col mx-auto" href="#">
			<figure class="figure">
				<img src="../imagens/ods7.jpg" alt="ODS Energia Acessível e Limpa" class="w-50 pt-5 mt-5">
			<figcaption class="figcaption text-center">
			Energia Acessível e Limpa
			</figure>
			</a>
			<a class="col mx-auto" href="#">
			<figure class="figure">
				<img src="../imagens/ods8.jpg" alt="ODS Emprego Digno" class="w-50 pt-5 mt-5">
			<figcaption class="figcaption text-center">
			Empregos Dignos
			</figure>
			</a>
			</div>
			
			<div class="container-fluid row mx-auto text-center">
			<a class="col mx-auto" href="#">
			<figure class="figure">
				<img src="../imagens/ods9.jpg" alt="ODS Indústria e Inovação" class="w-50 pt-5 mt-5">
			<figcaption class="figcaption text-center">
			Indústria e Inovação
			</figure>
			</a>
			<a class="col mx-auto" href="#">
			<figure class="figure">
				<img src="../imagens/ods10.jpg" alt="ODS Redução das Desigualdades" class="w-50 pt-5 mt-5">
			<figcaption class="figcaption text-center">
			Redução das Desigualdades
			</figure>
			</a>
			<a class="col mx-auto" href="#">
			<figure class="figure">
				<img src="../imagens/ods11.jpg" alt="ODS Cidades Sustentáveis" class="w-50 pt-5 mt-5">
			<figcaption class="figcaption text-center">
			Cidades Sustentáveis
			</figure>
			</a>
			<a class="col mx-auto" href="#">
			<figure class="figure">
				<img src="../imagens/ods12.jpg" alt="ODS Consumo e Produção responsáveis" class="w-50 pt-5 mt-5">
			<figcaption class="figcaption text-center">
			Consumo e Produção Responsáveis
			</figure>
			</a>
			</div>
			
			<div class="container-fluid row mx-auto text-center">
			<a class="col mx-auto" href="#">
			<figure class="figure">
				<img src="../imagens/ods13.jpg" alt="ODS Combate Às Alterações Climáticas" class="w-50 pt-5 mt-5">
			<figcaption class="figcaption text-center">
			Combate às Alterações Climáticas
			</figure>
			</a>
			<a class="col mx-auto" href="#">
			<figure class="figure">
				<img src="../imagens/ods14.jpg" alt="ODS Vida de Baixo D'água" class="w-50 pt-5 mt-5">
			<figcaption class="figcaption text-center">
			Erradicaçao da pobreza
			</figure>
			</a>
			<a class="col mx-auto" href="#">
			<figure class="figure">
				<img src="../imagens/ods15.jpg" alt="ODS Vida sobre a Terra" class="w-50 pt-5 mt-5">
			<figcaption class="figcaption text-center">
			Vida sobre a Terra
			</figure>
			</a>
			<a class="col mx-auto" href="#">
			<figure class="figure">
				<img src="../imagens/ods16.jpg" alt="ODS Paz e Justiça" class="w-50 pt-5 mt-5">
			<figcaption class="figcaption text-center">
			Paz e Justiça
			</figure>
			</a>
			</div>
			
			<div class="container-fluid row mx-auto text-center">
			<a class="col-3" href="#">
			<figure class="figure">
				<img src="../imagens/ods17.jpg" alt="ODS Parcerias e Metas" class="w-50 pt-5 mt-5">
			<figcaption class="figcaption text-center">
			Parcerias e Metas
			</figure>
			 </a>-->
		</div>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>

</html>	
	
	
	
	