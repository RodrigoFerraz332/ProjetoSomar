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
          <tr>
            <td>Projeto 1</td>
            <td>Descrição do Projeto 1</td>
            <td>
              <span class="status" id="status-projeto-1">Aguardando Verificação</span>
            </td>
            <td>
              <button class="btn btn-primary button" onclick="changeStatus('status-projeto-1')">Aprovar</button>
            </td>
          </tr>
          <tr>
            <td>Projeto 2</td>
            <td>Descrição do Projeto 2</td>
            <td>
              <span class="status" id="status-projeto-2">Aguardando Verificação</span>
            </td>
            <td>
              <button class="btn btn-primary button" onclick="changeStatus('status-projeto-2')">Aprovar</button>
            </td>
          </tr>
          <tr>
            <td>Projeto 3</td>
            <td>Descrição do Projeto 3</td>
            <td>
              <span class="status" id="status-projeto-3">Aguardando Verificação</span>
            </td>
            <td>
              <button class="btn btn-primary button" onclick="changeStatus('status-projeto-3')">Aprovar</button>
            </td>
          </tr>
          <!-- Adicione mais linhas para mais projetos -->
        </tbody>
      </table>
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
	
	
	
	