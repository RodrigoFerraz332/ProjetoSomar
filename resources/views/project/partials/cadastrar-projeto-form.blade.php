<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Cadastrar Projeto') }}
        </h2>
    </header>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="post" action="{{ route('projeto.cadastro') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div>
            <x-input-label for="nome_projeto" :value="__('Nome do Projeto')" class="testeprojetos"/>
            <x-text-input id="nome_projeto" name="nomeProjeto" type="text" required class="mt-1 block w-full"/>
        </div>

        <div>
            <x-input-label for="parceiros" :value="__('Parceiros')" class="testeprojetos" />
            <x-text-input id="parceiros" name="parceiros" required type="text" class="mt-1 block w-full"/>
        </div>

        <div>
            <label for="ods" class="testeprojetos" >Selecione uma ODS:</label>
            <select id="ods" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="ods[]" required  multiple>
                
                @foreach ($odss as $ods)
                <option value="{{ $ods->idODS }}">{{ $ods->codODS }} - {{ $ods->nomeODS }}</option>
                @endforeach

            </select>
        </div>
        <div>
            <label for="causas" class="testeprojetos">Selecione uma Causa de Atuação:</label>
            <select id="causas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="causas[]" required multiple>
                
                @foreach ($causas as $causa)
                <option value="{{ $causa->idcausa_de_atuacao }}">{{ $causa->nomeCausa }}</option>
                @endforeach

            </select>
        </div>

        <div>
            <x-input-label class="testeprojetos" for="descricao" :value="__('Descrição')" />
            <x-text-input id="descricao" name="descricao" required type="text" class="mt-1 block w-full"/>
        </div>
 <div>
            <x-input-label class="testeprojetos" for="link_video" :value="__('Link de Vídeo')" />
            <x-text-input id="link_video" name="linkVideo" required type="text" class="mt-1 block w-full"/>
        </div>

      


        <div>
            <label class="testeprojetos" for="fotos">Upload de Fotos (máximo de 5 fotos)</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="fotos" name="fotos[]" type="file" multiple>
        </div>
       

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Cadastrar Projeto') }}</x-primary-button>
        </div>
       
    </form>
</section>