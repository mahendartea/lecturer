<div>
   <header class="shadow bg-white rounded-b-md z-10 mb-5">
      <div class="mx-auto py-5 sm:px-6 lg:px-8">
         <div class="flex justify-self-start">
            <div wire:click="toCoursesIndex" class="flex justify-start mx-2 text-gray-500 @if ($lmsstatus==1) text-indigo-500 @endif hover:text-gray-600 cursor-pointer">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
               </svg>
               <button  class="font-semibold text-sm rounded-lg leading-tight mx-1
                   focus:outline-none ">
                  {{ __('News') }}
               </button>
            </div>
            <div wire:click="toCoursesLecturer" class="flex justify-start mx-2 text-gray-500 @if ($lmsstatus==2) text-indigo-500 @endif hover:text-gray-600 cursor-pointer">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
               </svg>
               <button class="font-semibold text-sm rounded-lg leading-tight mx-1 focus:outline-none"
                  focus:outline-none ">
                  {{ __('Dosen') }}
               </button>
            </div>
{{--            <div class="flex justify-start mx-2 text-gray-500 hover:text-gray-600 cursor-pointer">--}}
{{--               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                  <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />--}}
{{--               </svg>--}}
{{--               <button class="font-semibold text-sm rounded-lg leading-tight mx-1 focus:outline-none"--}}
{{--                  focus:outline-none ">--}}
{{--                  {{ __('Mahasiswa') }}--}}
{{--               </button>--}}
{{--            </div>--}}
{{--            <div class="flex justify-start mx-2 text-gray-500 hover:text-gray-600 cursor-pointer">--}}
{{--               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                  <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />--}}
{{--                  <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />--}}
{{--               </svg>--}}
{{--               <button class="font-semibold text-sm rounded-lg leading-tight mx-1 focus:outline-none"--}}
{{--                  focus:outline-none ">--}}
{{--                  {{ __('Penelitian') }}--}}
{{--               </button>--}}
{{--            </div>--}}
{{--            <div class="flex justify-start mx-2 text-gray-500 hover:text-gray-600 cursor-pointer">--}}
{{--               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                  <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd" />--}}
{{--               </svg>--}}
{{--               <button class="font-semibold text-sm rounded-lg leading-tight mx-1 focus:outline-none"--}}
{{--                  focus:outline-none ">--}}
{{--                  {{ __('Pengabdian') }}--}}
{{--               </button>--}}
{{--            </div>--}}
{{--            <div class="flex justify-start mx-2 text-gray-500 hover:text-gray-600 cursor-pointer">--}}
{{--               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                  <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />--}}
{{--                  <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11h4m-2-2v4" />--}}
{{--               </svg>--}}
{{--               <button class="font-semibold text-sm rounded-lg leading-tight mx-1 focus:outline-none"--}}
{{--                  focus:outline-none ">--}}
{{--                  {{ __('Penunjang') }}--}}
{{--               </button>--}}
{{--            </div>--}}
{{--            <div class="flex justify-start mx-2 text-gray-500 hover:text-gray-600 cursor-pointer">--}}
{{--               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                  <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />--}}
{{--               </svg>--}}
{{--               <button class="font-semibold text-sm rounded-lg leading-tight mx-1 focus:outline-none"--}}
{{--                       focus:outline-none ">--}}
{{--               {{ __('Pengaturan') }}--}}
{{--               </button>--}}
{{--            </div>--}}
         </div>
      </div>
   </header>

   @if (session()->has('message'))
      <div class="mt-5" x-data="{}" x-init="setTimeout(() => { $wire.closeComponent() }, 2000);">
         <div class="flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="flex items-center justify-center w-12 bg-green-500">
               <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
               </svg>
            </div>
            <div class="px-4 py-2 -mx-3">
               <div class="mx-3">
                  <span class="font-semibold text-green-500 dark:text-green-400">Success</span>
                  <p class="text-sm text-gray-600 dark:text-gray-200">
                     {{ session('message') }}
                  </p>
               </div>
            </div>

         </div>
      </div>
   @endif

   <div class="my-5 bg-white p-10 rounded-lg shadow-xl">
      @switch($lmsstatus)
         @case(1)
            <livewire:admin.lmss.lms-index />
         @break
         @case(2)
            <livewire:admin.lmss.lms-lecturer />
         @break
         {{-- @case(3)
            <livewire:admin.ptns.ptns-swasta />
         @break
         @case(4)
            <livewire:admin.ptns.ptns-form />
         @break
         @case(5)
            <livewire:admin.ptns.detail-pt />
         @break
         @case(6)
            <livewire:admin.ptns.ptns-edit />
         @break --}}
      @endswitch

   </div>

</div>
