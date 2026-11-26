@props(['action' => null, 'id' => null])

<form action="{{ route('evidencias.'.$action, $id) }}" method="POST" class="grid max-w-xl grid-cols-2 gap-4">
    @csrf
    @isset($id)
        @method('PUT')
    @endisset
    <div class="flex flex-col">
        <label for="estudiante_id" class="font-semibold">Estudiante</label>
        <input type="number" name="estudiante_id" id="estudiante_id"
               value="{{ old('estudiante_id') }}" class="mt-1 w-full rounded border p-2">
    </div>

    <div class="flex flex-col">
        <label for="tarea_id" class="font-semibold">Tarea</label>
        <input type="number" name="tarea_id" id="tarea_id"
               value="{{ old('tarea_id') }}" class="mt-1 w-full rounded border p-2">
    </div>

    <div class="col-span-2 flex flex-col">
        <label for="url" class="font-semibold">URL</label>
        <input type="text" name="url" id="url"
               value="{{ old('url') }}" class="mt-1 w-full rounded border p-2">
    </div>

    <div class="col-span-2 flex flex-col">
        <label for="descripcion" class="font-semibold">Descripción</label>
        <textarea name="descripcion" id="descripcion" rows="4"
                  class="mt-1 w-full rounded border p-2">{{ old('descripcion') }}</textarea>
    </div>

    <div class="col-span-2 flex flex-col">
        <label for="estado_validacion" class="font-semibold">Estado de validación</label>
        <select name="estado_validacion" id="estado_validacion"
                class="mt-1 w-full rounded border p-2">
            @foreach (['pendiente', 'validada', 'rechazada', 'asignada'] as $estado)
                <option value="{{ $estado }}" @selected(old('estado_validacion') === $estado)>{{ $estado }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-span-2">
        <button type="submit" class="rounded bg-blue-600 px-4 py-2 text-white">
            Añadir evidencia
        </button>
    </div>
</form>