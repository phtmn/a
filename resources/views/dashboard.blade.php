<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Aurora') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="" style="color: black">
                        <label for="">User ID :</label><br>
                        <input  type="text" name="user" id="user"><br><br>
                        <label for="">Título :</label><br>
                        <input  type="text" name="titulo" id="titulo"><br><br>
                        <label for="">Descrição :</label><br>
                        <input type="text" name="desc" id="desc"><br><br>
                        <label for="">Imagem :</label><br>
                        <input type="file" src="" alt=""><br><br>
                        <label for="">Regulation :</label><br>
                        <input type="text" name="regu" id="regu"><br><br>
                        <label for="">Comissão :</label><br>
                        <input type="text" name="comiss" id="comiss" style="border: black "><br><br><br>

                        <input type="submit" value="Postar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
