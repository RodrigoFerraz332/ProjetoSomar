<form method="get" action="{{ route('ods.filter') }}" class="mt-6 space-y-6">
<link href="../css/estilo.css" rel="stylesheet" type="text/css">      
       
        
            <div class="container flex pt-5 mt-5 mb-5 px-5">
            <label for="ods" id="filtro" class="mt-5 mb-3 pt-5 px-5  text-center">Selecione um ODS:</label>
            <select id="ods" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="ods">
                <option value="">Escolha um ODS</option>
                @foreach ($odss as $ods)
                <option value="{{ $ods->idODS }}">{{ $ods->codODS }} - {{ $ods->nomeODS }}</option>
                @endforeach

            </select>
        </div>
        <div class="container flex px-5">
            <label for="causas" id="filtro" class="px-5 text-center">Selecione uma Causa de Atuação:</label>
            <select id="causas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="causas">
            <option value="">Escolha uma Causa de Atuação</option>
                
                @foreach ($causas as $causa)
                <option value="{{ $causa->idcausa_de_atuacao }}">{{ $causa->nomeCausa }}</option>
                @endforeach

            </select>
        </div>

        
        <div class="container pb-1 my-5">
            <x-nav-link :href="route('projeto.form')" :active="request()->routeIs('projeto.form')" id="botaocad" class="btn btn-primary btn-lg text-left">
                        {{ __('Cadastrar Projeto') }}
                    </x-nav-link>
                
            <button type="submit" id="botaobusca" class="btn btn-primary btn-lg text-right">{{ __('Buscar Projeto') }}</button>
            
        </div>
    </form>
	
	
	
	
	