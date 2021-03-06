<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        CRUD
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Nueva Solicitud</button>
            @if($isOpen)
                @include('livewire.create')
            @endif

            

            {{-- <livewire:datatable
                model="App\Models\Application"
                searchable = "nombre"
            > --}}

            {{-- <livewire:applications-table/> --}}

           

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">ID</th>
                        <th class="px-4 py-2">Fecha</th>
                        <th class="px-4 py-2">Centro</th>
                        <th class="px-4 py-2">Nombre</th>
                        <th class="px-4 py-2">Curso</th>
                        <th class="px-4 py-2">Edad</th>
                        <th class="px-4 py-2">e-mail</th>
                        <th class="px-4 py-2">Telefono</th>
                        <th class="px-4 py-2">Etiquetas</th>
                        <th class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applications as $app)
                    <tr>
                        <td class="border px-4 py-2">{{ $app->id }}</td>
                        <td class="border px-4 py-2">{{ $app->fecha }}</td>
                        <td class="border px-4 py-2">{{ $app->centro }}</td>
                        <td class="border px-4 py-2">{{ $app->nombre }}</td>
                        <td class="border px-4 py-2">{{ $app->curso }}</td>
                        <td class="border px-4 py-2">{{ $app->edad }}</td>
                        <td class="border px-4 py-2">{{ $app->email }}</td>
                        <td class="border px-4 py-2">{{ $app->telefono }}</td>
                        <td class="border px-4 py-2">{{ $app->etiqueta }}</td>
                        <td class="border px-4 py-2">
                        <button wire:click="edit({{ $app->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button>
                            <button wire:click="delete({{ $app->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>