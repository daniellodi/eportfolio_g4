@props(['titulo' => 'null', 'id' => $id, 'evidencias' => $evidencias])

<x-layout :titulo="$titulo">
    <h2 class="text-4xl font-bold text-center">
        {{ $titulo }}
    </h2>
    <div class="flex justify-center">
        <x-formulario-evidencias :action='"edit"' :id="$id" :evidencias="$evidencias"/>
    </div>
</x-layout>
