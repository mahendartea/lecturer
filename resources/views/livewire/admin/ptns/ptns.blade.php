<div>
   <div class="shadow bg-white rounded-b-md">
      <div class="mx-auto py-4 sm:px-6 lg:px-8">
         <div class="flex justify-between">
            <div>
               <button wire:click="ptnsIndex"
                  class="font-semibold text-md px-3 rounded-lg text-gray-500 @if ($ptnsStatus == 1) text-indigo-600 @endif leading-tight mx-3
                  hover:text-gray-700 cursor-pointer focus:outline-none">
                  {{ __('Semua') }}
               </button>
               <button wire:click="ptnsNegeri"
                  class="font-semibold text-md px-3 rounded-lg text-gray-500 @if ($ptnsStatus == 2) text-indigo-600 @endif leading-tight mx-3
                  hover:text-gray-700 cursor-pointer focus:outline-none">
                  {{ __('Negeri') }}
               </button>
               <button wire:click="ptnsSwasta"
                  class="font-semibold text-md px-3 rounded-lg text-gray-500 leading-tight @if ($ptnsStatus == 3) text-indigo-600 @endif mx-3 hover:text-gray-700
                  cursor-pointer focus:outline-none">
                  {{ __('Swasta') }}
               </button>
            </div>
            <div>
               <button wire:click="addPtns"
                  class="flex items-center bg-gray-700 py-1 px-4 shadow-md rounded-md
                        font-semibold text-md text-white @if ($ptnsStatus == 4) bg-indigo-600 @endif leading-tight mx-3 hover:bg-gray-600 cursor-pointer
                  focus:outline-none">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                     <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                  </svg>
                  <span class="ml-2">Tambah</span>
               </button>
            </div>
         </div>
      </div>
   </div>

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
     
      @switch($ptnsStatus)
         @case(1)
            <livewire:admin.ptns.ptns-index />
         @break
         @case(2)
            <livewire:admin.ptns.ptns-negeri />
         @break
         @case(3)
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
         @break
         @case(7)
            <livewire:admin.ptns.ptn-manage />
         @endswitch
   </div>

</div>
