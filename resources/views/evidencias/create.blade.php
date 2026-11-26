@props(['titulo' => 'null'])

<x-layout :titulo="$titulo">
    <h2 class="text-4xl font-bold text-center">
        {{ $titulo }}
    </h2>
    <div class="flex justify-center">
        <x-bookme.formulario-evidencias :action='"store"'/>
    </div>
</x-layout>
