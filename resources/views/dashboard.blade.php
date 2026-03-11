<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Bem-vindo ao Mordor Arcade!, {{ Auth::user()->name }}</h1>
                    <p>Este é o painel de controle do Mordor Arcade, onde você pode gerenciar seus jogos, emuladores e muito mais. Explore as opções disponíveis no menu para personalizar sua experiência de jogo.</p>
                    <div class="mt-4">
                        <a href="{{ route('emulator.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Ir para o Emulador
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
