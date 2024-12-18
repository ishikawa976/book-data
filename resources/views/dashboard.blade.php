<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   ようこそ、蔵書データベースへ!!
                </div>
                <div class="p-6 text-gray-900">
                    2024年12月17日現在<br>
                    <br>
                    使用言語<br>
                   <a href="https://www.php.net/" class="text-blue-600">PHP</a> 8.3.14<br>
                   <br>
                   フレームワーク<br>
                   <a href="https://laravel.com/" class="text-blue-600">Laravel</a> 11.35.0<br>
                   <br>
                   データベース<br>
                   <a href="https://www.phpmyadmin.net/" class="text-blue-600">phpMyAdmin</a> 5.2.1<br>
                    <br>
                   開発環境<br>
                   <a href="https://learn.microsoft.com/en-us/windows/wsl/" class="text-blue-600">WSL</a> 2.3.26.0<br>
                   <a href="https://www.docker.com/" class="text-blue-600"> Docker</a> 27.2.0 build 3ab4256<br>
                   <br>
                   作成<br>
                   2024年11月25日<br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
