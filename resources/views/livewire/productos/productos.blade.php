<div class=" hoja_base ">
    {{-- loading --}}
    <div wire:loading wire:target="photo,changeEvent"
        class="fixed z-40 w-full h-full top-0 left-0 bg-gray-500 bg-opacity-25">
        <div class="w-ful h-full ">
            <div class="flex justify-center h-full">

                <div class="w-24 h-24 my-auto animate-spin ">
                    <img class="w-full h-full" src="{{ asset('images/load2.png') }}" alt="">
                </div>

            </div>
        </div>
    </div>
    {{-- formularios --}}

    @if ($updateMode)
        @include('livewire.productos.update')
    @else
        @include('livewire.productos.create')
    @endif

    {{-- registros --}}
    <div class="shadow-sm overflow-hidden my-8">
        <h1 class="titulo_form">Productos</h1>
        <table class=" tabla md:text-base ">
            <thead>
                <tr class="">
                    <th class="">
                        img
                    </th>
                    <th class="">
                        id
                    </th>
                    <th class=" hidden md:table-cell ">
                        nombre
                    </th>
                    <th class="  ">
                        Venta &euro;
                    </th>
                    <th class="  ">
                        Compra &euro;
                    </th>
                    <th class=" ">
                        categoria
                    </th>
                    <th class=" hidden md:table-cell ">
                        volumen/und medida
                    </th>
                    <th class=" hidden md:table-cell ">
                        Accions

                    </th>

                </tr>
            </thead>
            @foreach ($user->productos as $producto)
                <tbody class="bg-white border-b-2 ">
                    <tr>
                        <td class="">
                            <img class=" h24-  md:h-16 w-48 md:w-16  rounded-lg border border-gray-200"
                                src="{{ asset($producto->img) }}" alt="Current profile photo" />
                        </td>
                        <td class=" ">
                            {{ $producto->id }}
                        </td>
                        <td class=" hidden md:table-cell ">
                            {{ $producto->name }}
                        </td>
                        <td class=" ">
                            {{ $producto->precio_venta }}
                        </td>
                        <td class="">
                            {{ $producto->precio_compra }}
                        </td>
                        <td class="  ">
                            {{ $producto->categoria->name }}
                        </td>
                        <td class=" hidden md:table-cell ">
                            {{ $producto->volumen }}/{{ $producto->unidad_medida }}
                        </td>
                        <td class=" hidden md:table-cell ">
                            <button wire:click="edit({{ $producto->id }})"
                                class="px-2  bg-indigo-200 text-indigo-500 hover:bg-indigo-500 hover:text-white rounded">Editar</button>
                            <button wire:click="copiar({{ $producto->id }})"
                                class="px-2 copiar disabled:bg-blue-800 bg-green-200 text-green-500 hover:bg-green-500 hover:text-white rounded">copiar</button>

                            <button wire:click="$emit('borrar',{{ $producto->id }})"
                                class="px-2   bg-red-200 text-red-500 hover:bg-red-500 hover:text-white rounded">Borrar</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="hidden md:table-cell p-2 md:p-4 text-gray-700 " colspan="8">
                            <span class="font-bold text-sm text-black"> Descripcion: </span>{{ $producto->descrip }}
                        </td>
                    </tr>


                    <tr class="visible md:hidden ">
                        <td class=" border-slate-100  p-2 md:p-4 text-gray-500" colspan="5">Nombre:
                            {{ $producto->name }}</td>
                    </tr>

                    <tr class="visible md:hidden ">
                        <td class=" border-slate-100  p-2 md:p-4 text-gray-500" colspan="5">Volumen:
                            {{ $producto->volumen }}/{{ $producto->unidad_medida }}</td>
                    </tr>
                    <tr class="visible md:hidden ">
                        <td class=" p-2 md:p-4 text-gray-700 " colspan="8">
                            <span class="font-bold text-sm text-black"> Descripcion: </span>{{ $producto->descrip }}
                        </td>
                    </tr>
                    <tr class="visible md:hidden ">
                        <td class=" border-slate-100  p-2 md:p-4 text-gray-500" colspan="5">
                            <button wire:click="edit({{ $producto->id }})"
                                class="px-2  bg-indigo-200 text-indigo-500 hover:bg-indigo-500 hover:text-white rounded">Editar</button>
                            <button wire:click="copiar({{ $producto->id }})"
                                class="px-2 copiar disabled:bg-blue-800 bg-green-200 text-green-500 hover:bg-green-500 hover:text-white rounded">copiar</button>

                            <button wire:click="$emit('borrar',{{ $producto->id }})"
                                class="px-2   bg-red-200 text-red-500 hover:bg-red-500 hover:text-white rounded">Borrar</button>

                        </td>
                    </tr>
                </tbody>
            @endforeach

        </table>
    </div>


    @push('js')
        <script src="{{ asset('js/producto/producto.js') }}"></script>
    @endpush


</div>
