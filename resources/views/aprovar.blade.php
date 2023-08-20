<doctype html>
<html lang="pt-BR">
<head>
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
                    <x-nav-link :href="route('projeto.form')" :active="request()->routeIs('projeto.form')" class="testecadastro">
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
	
	
	
	