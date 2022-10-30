<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 py-4 pb-20 text-center sm:block sm:p-0"> 
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
            <form method="post">
                <div class="bg-white pb-4 px-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="mb-4">
                        <label for="descripcion">Descripcion: </label>
                        <input type="text" class="shadow appearance-none border rounded w-full focus:outline-none focus:shadow-outline text-gray-700 px-3 py-2 loading-tight" id="descripcion" wire:model='descripcion'>
                    </div>

                    <div class="mb-4">
                        <label for="cantidad">Cantidad: </label>
                        <input type="number" class="shadow appearance-none border rounded w-full focus:outline-none focus:shadow-outline text-gray-700 px-3 py-2 loading-tight" id="cantidad" wire:model='cantidad'>
                    </div>

                    <div class="bg-gray-50 py-3 px-4 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto ">
                            <button type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2" wire:click.prevent='guardar()' >Guardar</button>
                        </span>
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto ">
                            <button type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2" wire:click='cerrarModal()' >Cancelar</button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>