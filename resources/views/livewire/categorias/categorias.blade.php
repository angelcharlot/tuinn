<div class="hoja_base">

    {{-- formulario --}}
    @if ($updateMode)
        @include('livewire.categorias.update')
    @else
        @include('livewire.categorias.create')
    @endif

    <div class=" shadow-sm overflow-hidden my-8 ">
        <div class="w-full my-4">

            <div class="rounded-t-lg overflow-hidden border  border-gray-400 p-4">

                @if ($categoria_seleccionada)

                    <ul class="flex">

                        @foreach ($categoria_seleccionada as $index => $migas)
                            <li class="mr-6">
                                @if($index != count($categoria_seleccionada) - 1)
                                   <a class="text-grey-500 hover:text-blue-800" href="#"> {{ $migas }} <i
                                        class="bi bi-chevron-right"></i></a>
                                @else
                                <a class="text-blue-800 hover:text-blue-800" href="#"> {{ $migas }} <i
                                    class="bi bi-chevron-right"></i></a>

                                @endif

                            </li>
                        @endforeach
                    </ul>

                @endif
            </div>


        </div>

        <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 gap-1 text-gray-600">

            @forelse ($categorias as $categoria)
                <div
                    class="border-2 grid border-gray-200 h-32 w-full rounded-sm shadow-md bg-white hover:bg-gray-100  divide-y divide-solid ">
                    <div class=" text-center text-sm">

                        <div   class=" font-semibold">{{ $categoria->name }}</div>

                    </div>
                    <div wire:click="buscar({{ $categoria->id }},0)" class="p-3 text-xs ">
                        {{ $categoria->descrip }}
                    </div>
                    <div class="grid grid-cols-2 p-1 gap-2 items-baseline "  >
                        
                        <div wire:click="$emit('borrar',{{ $categoria->id }})" class="border p-0 text-center rounded-md text-red-500 bg-red-200 border-red-300 hover:bg-red-500 hover:text-white  "><i class="bi bi-x-circle"></i></div>
                        <div wire:click="edit({{ $categoria->id }})" class="  border p-0 text-center rounded-md text-indigo-500 bg-indigo-200 border-indigo-300  hover:bg-indigo-500 hover:text-white"><i class="bi bi-pencil"></i></div>
                    </div>

                </div>

            @empty
                <div>no hay registros</div>
            @endforelse
        </div>
        <div class="mt-5">
            <button wire:click="buscar({{ $id_atras }},1)"
                class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">volver</button>
        </div>

    </div>
    

        {{-- loading --}}
        <div wire:loading wire:target="buscar,update,store"
        class="fixed z-40 w-full h-full top-0 left-0 bg-gray-500 bg-opacity-25">
        <div class="w-ful h-full ">
            <div class="flex justify-center h-full">

                <div class="w-24 h-24 my-auto ">
                    <div role="status">
                        <svg class="animate-spin -ml-1 mr-3 h-18 w-18 text-blue-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                          </svg>
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

