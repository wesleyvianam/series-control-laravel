<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-between">
            {{ __('Editar Série') }}
            <a href="{{route('series.index')}}" class="font-medium border rounded py-1 px-2 text-sm">Voltar</a>
        </h2>
    </x-slot>

    <form action="{{ route('series.update', $serie->id) }}" method="post" class="mt-5">
        @csrf
        @Method('PUT')

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="nome" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nome:</label>
                <input
                    type="text"
                    autofocus
                    id="nome"
                    name="nome"
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    value="{{ $serie->nome }}">
            </div>

            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="seasonsQty" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">N Temporadas:</label>
                <input type="text"
                       id="seasonsQty"
                       name="seasonsQty"
                       class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                       value="{{ $serie->seasons->count() }}">
            </div>
        </div>

        <div class="flex justify-end">
            <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                Salvar
            </button>
        </div>
    </form>

</x-app-layout>
