<div>
   <div class="flex justify-between my-2 items-center">
      <h1 class="text-gray-600 text-lg">Mahasiswa</h1>
      <div class="flex items-center">
         {{-- <span class="inline-flex mr-2">search</span> --}}
         <div class="w-full">
            <div class="relative">
               <input type="search" wire:model="searchS"
                  class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                  placeholder="Search...">
               <div class="absolute top-0 left-0 inline-flex items-center p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24"
                     stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                     <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                     <circle cx="10" cy="10" r="7" />
                     <line x1="21" y1="21" x2="15" y2="15" />
                  </svg>
               </div>
            </div>
         </div>
      </div>
   </div>
   <table class="w-full table-auto border-collapse">
      <thead>
         <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left hidden lg:table-cell">No</th>
            <th class="py-3 px-6 text-left hidden lg:table-cell">Nomor Induk</th>
            <th class="py-3 px-6 text-left hidden lg:table-cell">Nama</th>
            <th class="py-3 px-6 text-center hidden lg:table-cell">Institusi</th>
            <th class="py-3 px-6 text-center hidden lg:table-cell">Actions</th>
         </tr>
      </thead>
      <tbody class="text-gray-600 text-sm font-light">
         @php
            // untuk increment no urut di pagination
            $no = ($students->currentpage() - 1) * $students->perpage() + 1;
         @endphp
         @foreach ($students as $student)
            <tr
               class="border-b border-gray-200 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap lg:mb-0">
               <td
                  class="py-3 px-6 whitespace-nowrap w-full lg:w-auto lg:table-cell relative lg:static bg-gray-100 lg:border-gray-400 border-blue-700 lg:bg-white">
                  <div class="flex items-center lg:justify-start justify-center">
                     <div class="">
                        <span
                           class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">No.</span>
                        <span class="text-xs lg:text-md">{{ $no++ }}</span>
                     </div>
                  </div>
               </td>

               <td
                  class="py-3 px-6 text-left w-full lg:w-auto lg:table-cell relative lg:static bg-gray-100 lg:border-gray-400 border-blue-700 lg:bg-white">
                  <div class="flex items-center lg:justify-start justify-center">
                     <span
                        class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">NIM</span>
                     <span class="text-gray-700 py-1 px-3">{{ $student->student_licence_number }}</span>
                  </div>
               </td>

               <td
                  class="py-3 px-6 text-left w-full lg:w-auto lg:table-cell relative lg:static bg-gray-100 lg:border-gray-400 border-blue-700 lg:bg-white">
                  <div class="flex items-center lg:justify-start justify-center">
                     <span
                        class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Nama</span>
                     <div class="mr-2">
                        <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg" />
                     </div>
                     <span class="text-xs lg:text-md uppercase">{{ $student->name }}</span>
                  </div>
               </td>

               <td
                  class="py-3 px-6 text-center w-full lg:w-auto lg:table-cell relative lg:static bg-gray-100 lg:border-gray-400 border-blue-700 lg:bg-white">
                  <span
                     class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Institusi</span>
                  <span class="text-gray-700 py-1 px-3 uppercase text-xs lg:text-md">{{ $student->nama_universitas }}
                  </span>
               </td>

               <td
                  class="py-3 px-6 text-center w-full lg:w-auto lg:table-cell relative lg:static bg-gray-100 lg:border-gray-400 border-blue-700 lg:bg-white">
                  <span
                     class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Action</span>
                  <div class="flex item-center justify-center">
                     <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer">
                        <svg wire:click="viewDetail({{ $student->id }})" xmlns="http://www.w3.org/2000/svg"
                           fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                     </div>
                     <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer">
                        <svg wire:click="editUser({{ $student->id }})" xmlns="http://www.w3.org/2000/svg" fill="none"
                           viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                     </div>
                     <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer">
                        <svg wire:click="deleteUser({{ $student->id }})" wire:loading.attr="disabled"
                           xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                     </div>
                  </div>
               </td>

            </tr>
         @endforeach
      </tbody>
   </table>

   <div class="p-5">
      {{ $students->links() }}
   </div>

   <x-jet-dialog-modal wire:model="confirmingUserDeletion">
      <x-slot name="title">
         {{ __('Delete Account') }}
      </x-slot>

      <x-slot name="content">
         {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}

      </x-slot>

      <x-slot name="footer">
         <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
            {{ __('Nevermind') }}
         </x-jet-secondary-button>

         <x-jet-danger-button class="ml-2" wire:click="confirmDeleteUser({{ $iduser }})"
            wire:loading.attr="disabled">
            {{ __('Delete Account') }}
         </x-jet-danger-button>
      </x-slot>
   </x-jet-dialog-modal>

</div>
