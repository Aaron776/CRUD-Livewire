<x-slot name="header">
    <h1 class="text-gray-900">CRUD LARAVEL LIVEWIRE</h1>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if(session()->has('message'))
                <h4>{{session('message')}}</h4>
            @endif
           
            <button wire:click="crear()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3">Nuevo</button>
            @if($modal)
                @include('livewire.crear')
            @endif

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-w">ID</th>
                        <th class="px-4 py-w">Descripcion</th>
                        <th class="px-4 py-w">Cantidad</th>
                        <th class="px-4 py-w">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $item)
                        <tr>
                            <td class="border px-4 py-2">{{$item->id}}</td>
                            <td class="border px-4 py-2">{{$item->descripcion}}</td>
                            <td class="border px-4 py-2">{{$item->cantidad}}</td>
                            <td class="border px-4 py-2 text-center">
                                <button wire:click="editar({{$item->id}})" class="bg-blue-500 hover:bg-blue-600 text-white font-hold py-2 px-4">Editar</button>
                                <button wire:click="borrar({{$item->id}})" class="bg-red-500 hover:bg-red-600 text-white font-hold py-2 px-4">Eliminar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    

