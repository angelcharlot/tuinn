<div>
    <h1 class="titulo_form">
        Actualizar producto</h1>
    {{-- formularios --}}
    <form wire:submit.prevent="update()">
        <div class="div-form-container grid grid-cols-1  md:grid-cols-4">

            <div class="px-3 text-left">
                <label class="text-xs text-gray-500 mx-1 " for="">nombre</label>
                <input type="text" placeholder="cañan Cruz campo" name="name" id="name" wire:model="name"
                    class="block  w-full mx-1 my-1 bg-gray-50 rounded text-sm border borde-gray-200 focus:outline-none focus:shadow-md shadow-xs h-10 px-2 focus:bg-gray-100 focus:border-gray-600">
                @error('name')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>
            <div class="px-3 text-left sm:col-span-1 md:col-span-2">
                <label class="text-xs text-gray-500 mx-1 " for="">Descripcion</label>
                <input type="text" wire:model="descrip"
                    placeholder="contenido alcohólico de 5,9% en volumen. De color dorado intenso y aroma afrutado, capaz de transformar los momentos cotidianos en instantes cruciales. Con un amargor moderado y aromático, coronada por una espuma de color blanco roto."
                    name="descrip" id="descrip"
                    class="block  w-full mx-1 my-1 bg-gray-50 rounded text-sm border borde-gray-200 focus:outline-none focus:shadow-md shadow-xs h-10 px-2 focus:bg-gray-100 focus:border-gray-600">
                @error('descrip')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>
            <div class="px-3 text-left">
                <label class="text-xs text-gray-500 mx-1 " for="">precio de compra</label>
                <input type="number" step="0.01" autocomplete="true" placeholder="1.00" name="p_compra"
                    id="p_compra" wire:model="p_compra"
                    class="block  w-full mx-1 my-1 bg-gray-50 rounded text-sm border borde-gray-200 focus:outline-none focus:shadow-md shadow-xs h-10 px-2 focus:bg-gray-100 focus:border-gray-600">
                @error('p_compra')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>
            <div class="px-3 text-left">
                <label class="text-xs text-gray-500 mx-1 " for="">precio de venta</label>
                <input type="number" step="0.01" autocomplete="true" placeholder="1.20" name="p_venta"
                    id="p-venta" wire:model="p_venta"
                    class="block  w-full mx-1 my-1 bg-gray-50 rounded text-sm border borde-gray-200 focus:outline-none focus:shadow-md shadow-xs h-10 px-2 focus:bg-gray-100 focus:border-gray-600">
                @error('p_venta')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>
            <div class="px-3 text-left hidden">
                <label class="text-xs text-gray-500 mx-1 " for="">peso(gramos(g))</label>
                <input type="number" step="0.01" autocomplete="true" placeholder="100" id="peso" name="peso"
                    wire:model="peso"
                    class="block  w-full mx-1 my-1 bg-gray-50 rounded text-sm border borde-gray-200 focus:outline-none focus:shadow-md shadow-xs h-10 px-2 focus:bg-gray-100 focus:border-gray-600">
                @error('peso')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>
            <div class="px-3 text-left">
                <label class="text-xs text-gray-500 mx-1 " for="">unidad de medida (ml,L,etc)</label>
                <select placeholder="200" value="Ml" id="unidad_medida" name="unidad_medida"
                    wire:model="unidad_medida"
                    class="block  w-full mx-1 my-1 bg-gray-50 rounded text-sm border borde-gray-200 focus:outline-none focus:shadow-md shadow-xs h-10 px-2 focus:bg-gray-100 focus:border-gray-600">

                    <option value="ml" selected>mililitro (ml)</option>
                    <option value="cl">centilitro (cl)</option>
                    <option value="dl">decilitro (dl)</option>

                </select>
                @error('unidad_medida')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>
            <div class="px-3 text-left ">
                <label class="text-xs text-gray-500 mx-1 " for="">volumen</label>
                <input type="number" step="0.01" autocomplete="true" placeholder="1" id="volumen" name="volumen"
                    wire:model="volumen"
                    class="block  w-full mx-1 my-1 bg-gray-50 rounded text-sm border borde-gray-200 focus:outline-none focus:shadow-md shadow-xs h-10 px-2 focus:bg-gray-100 focus:border-gray-600">
                @error('volumen')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>
            <div class="px-3">

                <label class="text-xs text-gray-500 mx-1  " for="">Categoria</label>

                <div class=" relative z-30 inline-block text-left dropdown w-full my-1">
                    <span id="btn-dropdown" wire:click="$emit('btn')" class="rounded-md shadow-sm"><button
                            class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800"
                            type="button" aria-haspopup="true" aria-expanded="true"
                            aria-controls="headlessui-menu-items-117">
                            <span>Categoria({{ $nombre_categoria }})</span>
                            <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button></span>
                    <div
                        class=" invisible dropdown-menu  transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                        <div class="absolute w-full right-0  mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                            aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">

                            <div class="py-1">

                                @each('livewire.productos.partial', $allcategorias, 'categorias')


                            </div>

                        </div>
                    </div>
                </div>
                <input type="text" wire:model="categorias" class=" hidden ">
                @error('categorias')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>
            <div class="px-3 text-left md:col-span-2">
                <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                    <!-- Profile Photo File Input -->
                    <input type="file" class="hidden"
                                wire:model="photo"
                                x-ref="photo"
                                x-on:change="
                                        photoName = $refs.photo.files[0].name;
                                        const reader = new FileReader();
                                        reader.onload = (e) => {
                                            photoPreview = e.target.result;
                                        };
                                        reader.readAsDataURL($refs.photo.files[0]);
                                " />





                    <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        {{ __('Cargar imagen del producto') }}
                    </x-jet-secondary-button>


                    <x-jet-input-error for="photo" class="mt-2" />
                </div>
            </div>
            <div class="px-3 md:m-2 m-1 ">
                @if (! is_object($photo))
                    <img class="h-16 mx-auto w-16 object-cover rounded-lg border border-gray-200"
                        src="{{asset($photo)}}" alt="{{asset($photo)}}" />
                @else
                    <img class="h-16 mx-auto w-16 object-cover rounded-lg border border-gray-200"
                    src="{{ $photo->temporaryUrl() }}" alt="Current profile photo" />

                @endif

            </div>
            <div class="text-left md:col-span-4">
                <div class="w-auto pl-3 text-center align-middle">
                    <div class="pt-5">
                        <button
                            class="px-3 py-2 bg-indigo-200 text-indigo-500 hover:bg-indigo-500 hover:text-indigo-100 rounded">Actualizar
                            producto</button>
                        <a wire:click="cancelar()"
                            class="px-3 py-2 bg-red-200 text-red-500 hover:bg-red-500 hover:text-indigo-100 rounded">cancelar</a>
                    </div>
                </div>

            </div>

        </div>

    </form>
</div>
