<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Cadastrar Projeto') }}
        </h2>
    </header>

    <form method="post" action="{{ route('projeto.cadastro') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')
        <div>
            <x-input-label for="nome_projeto" :value="__('Nome do Projeto')" />
            <x-text-input id="nome_projeto" name="nomeProjeto" type="text" class="mt-1 block w-full"/>
        </div>

        <div>
            <x-input-label for="parceiros" :value="__('Parceiros')" />
            <x-text-input id="parceiros" name="parceiros" type="text" class="mt-1 block w-full"/>
        </div>

        <div>
            <label for="ods" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ODS:</label>
            <select id="ods" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="ods">
                <option selected>Selecione uma ODS</option>
                <option value="ods1">ODS 1 - Erradicação da Pobreza</option>
                <option value="ods2">ODS 2 - Fome Zero e Agricultura Sustentável</option>
                <option value="ods3">ODS 3 - Saúde e Bem-Estar</option>
            </select>
        </div>

        <div>
            <x-input-label for="descricao" :value="__('Descrição')" />
            <x-text-input id="descricao" name="descricao" type="text" class="mt-1 block w-full"/>
        </div>
 <div>
            <x-input-label for="link_video" :value="__('Link de Vídeo')" />
            <x-text-input id="link_video" name="link_video" type="text" class="mt-1 block w-full"/>
        </div>


        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="fotos">Upload de Fotos (máximo de 5 fotos)</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="fotos" name="fotos" type="file" multiple>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Cadastrar Projeto') }}</x-primary-button>
        </div>
    </form>
</section>