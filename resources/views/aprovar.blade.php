<doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">	
		<link href="/css/estilo.css" rel="stylesheet" type="text/css">
		<title>Projetos Cadastrados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>    
    body {
      background: linear-gradient(to bottom right, #e0e0e0, #f4f4f4);
    }

    h1 {
      color: #333;
      text-align: center;
      margin-top: 20px;
    }

    .table-container {
      max-width: 800px;
      margin: 20px auto;
      background-color: #fff;
      border-radius: 4px;
      padding: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .button {
      border-radius: 4px;
    }

    .status {
      font-weight: bold;
      font-size: 14px;
    }

    .status-approved {
      color: #5cb85c;
    }
  </style>
  
</head>

<body>
  <br>
  <br>

<div class="container-fluid row pb-5 mb-5">
			<nav class="navbar nav-justified fixed-top navbar-light bg-white border border-dark">
			<a class="navbar-brand col mx-5">
				<img src="/storage/imagens/fecomercio.jpg" alt="Fecomercio" class="w-50 mx-5">
			</a>
			<a class="navbar-brand col mx-5" href="{{ route('index') }}">
				<img src="/storage/imagens/logoCapa.png" alt="logo SOMAR" class="w-50 mx-5">
			</a>
			<a class="navbar-brand col mx-5" href="{{ route('login') }}">
				<img src="/storage/imagens/login.png" alt="Botao login" class="w-50 mx-5">
			</a>

			</nav>
			
		</div>

  <div class="container">
    <h1>Projetos Cadastrados</h1>
    
    <div class="table-container">
      <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nome do Projeto</th>
            <th scope="col">Descrição</th>
            <th scope="col">Status</th>
            <th scope="col">Ação</th>

          </tr>
        </thead>
        <tbody>
          <!--
        @foreach ($projetos as $projeto)

          <tr>
            <td>{{$projeto->nomeProjeto}} </td>
            <td>{{$projeto->descricao}} </td>
            
            <td>
              <span class="status" id="status-projeto-1">
              @if($projeto->aprovado)
              aprovado
              @else

              
              Aguardando Verificação
                @endif
              </span>
            </td>
            <td>
            @if($projeto->aprovado)
              aprovado
              @else

              
              <a class="btn btn-primary" href="{{ route('projetos.lista.aprovar', ['id' => $projeto->idProjeto]) }}" role="button">Aprovar</a>
                @endif

              
            </td>
          </tr>
          @endforeach
  -->
  @foreach ($projetos as $projeto)
            @if (!$projeto->aprovado)
              <tr>
                <td>{{ $projeto->nomeProjeto }}</td>
                <td>{{ $projeto->descricao }}</td>
                <td>
                  <span class="status" id="status-projeto-{{ $projeto->idProjeto }}">
                    Aguardando Verificação
                  </span>
                </td>
                <td>
                  <a class="btn btn-primary" href="{{ route('projetos.lista.aprovar', ['id' => $projeto->idProjeto]) }}" role="button">Aprovar</a>
                </td>
              </tr>
            @endif
          @endforeach
         
        </tbody>
      </table>
      
    </div>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link   :href="route('projeto.form')" :active="request()->routeIs('projeto.form')" id="botaopainel" class="btn btn-primary btn-lg text-left">
                                            
                        {{ __('Painel de Controle') }}
                    </x-nav-link>
      </div>
                
  </div>

  <script>
    function changeStatus(spanId) {
      var spanElement = document.getElementById(spanId);
      spanElement.textContent = 'Aprovado';
      spanElement.classList.add('status-approved');
    }
    
  </script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>	
	
	
	
	