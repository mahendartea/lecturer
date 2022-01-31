<x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Dashboard') }}
      </h2>
   </x-slot>

   <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
      <div class="hero min-h-screen bg-base-200">
         <div class="text-center hero-content">
            <div class="max-w-md">
               <h1 class="mb-5 text-5xl font-bold">
                  Selamat Datang
               </h1>
               <p class="mb-5">
                  Selamat Datang di Aplikasi Elearning Ini. Aplikasi dibuat untuk kebutuhan keamademian pada Universitas
                  dan Politeknik seluruh Indonesia.
               </p>
               <button class="btn btn-primary">Mulai</button>
            </div>
         </div>
      </div>
   </div>
</x-app-layout>
