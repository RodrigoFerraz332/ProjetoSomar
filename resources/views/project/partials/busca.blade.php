<form method="get" action="{{ route('projeto.cadastro') }}" class="mt-6 space-y-6">
        @csrf
        @method('get')
       

        <div>
            <label for="ods" class="block mb-2 text-sm font-medium text-gray-900">Selecione uma ODS:</label>
            <select id="ods" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="ods[]" multiple>
                
                @foreach ($odss as $ods)
                <option value="{{ $ods->idODS }}">{{ $ods->codODS }} - {{ $ods->nomeODS }}</option>
                @endforeach

            </select>
        </div>
        <div>
            <label for="causas" class="block mb-2 text-sm font-medium text-gray-900">Selecione uma Causa de Atuação:</label>
            <select id="causas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="causas[]" multiple>
                
                @foreach ($causas as $causa)
                <option value="{{ $causa->idcausa_de_atuacao }}">{{ $causa->nomeCausa }}</option>
                @endforeach

            </select>
        </div>

        
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Buscar Projeto') }}</x-primary-button>
        </div>
    </form>
	
	
	
	
	