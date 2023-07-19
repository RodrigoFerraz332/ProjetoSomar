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
			<a class="navbar-brand col mx-5" href="{{ route('login') }}">
				<img src="../imagens/login.png" alt="Botao login" class="w-50 mx-5">
			</a>
			</nav>
		</div>
		
		<div class="card sm" id="telaLogin">
		<!--<img class="card-img-top" src=".../100px180/" alt="Imagem de capa do card">-->
		<div class="card-body border-dark rounded">
        <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" placeholder="Nome" name="name">
  </div>
        <!-- Name 
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
-->
        <!-- Email Address -->
        <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control" id="exampleInputEmail1"  name="email" aria-describedby="emailHelp" placeholder="Seu email">
   
  </div>
  <div>
            <label for="unidade" class="block mb-2 text-sm font-medium text-gray-900">Selecione uma Unidade:</label>
            <select id="unidade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="unidade">
                
                @foreach ($unidades as $unidade)
                <option value="{{ $unidade->idUnidade }}">{{ $unidade->nomeUnidade }}</option>
                @endforeach

            </select>
        </div>
  <!--
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
-->
<div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="password">
  </div>
        <!-- Password 
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
-->
<div class="form-group">
    <label for="exampleInputPassword2">Confirmar Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirmar Senha"  name="password_confirmation">
  </div>
        <!-- Confirm Password 
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
-->
 <!--
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            -->
            <button type="submit" class="btn btn-primary btn-block mt-4 mx-auto">Cadastrar</button>
            
            <!--
            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
            -->
        </div>
    </form>
		</div>
			</div>
			
	</body>

</html>	
	
	
	
	