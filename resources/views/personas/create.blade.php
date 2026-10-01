@extends('layouts.plantilla')
@section('content')
<form action="{{ route('personas.store') }}" method="POST">
    @csrf
    
    <div class="mb-4">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}" required class="border p-2 rounded w-full">
        @error('nombre') <p class="text-red-500">{{ $message }}</p> @enderror
    </div>

  
    <div class="mb-4">
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" value="{{ old('email') }}" required class="border p-2 rounded w-full">
        @error('email') <p class="text-red-500">{{ $message }}</p> @enderror
    </div>

    <div class="mb-6">
        <label>Intereses</label>
        <div class="grid grid-cols-2 gap-2 mt-2">
            @foreach($intereses as $interes)
                <label class="flex items-center space-x-2">
                    <input type="checkbox" name="intereses[]" value="{{ $interes->id }}">
                    <span>{{ $interes->nombre }}</span>
                </label>
            @endforeach
        </div>
    </div>
    
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar Persona</button>
</form>
@endsection