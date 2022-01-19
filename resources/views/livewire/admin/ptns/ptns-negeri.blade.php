<div>
   @if (session()->has('message'))
      <div class="mt-5 bg-green-300">
         {{ session('message_red') }}
      </div>
   @endif
   <div class="flex justify-between my-2 items-center">
      <h1 class="text-gray-600 text-lg">Universitas Negeri</h1>
      <div class="flex items-center">
         {{-- <span class="inline-flex mr-2">search</span> --}}
         <div class="w-full">
            <div class="relative">
               <input type="search" wire:model="search"
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
   <table class="min-w-max w-full table-auto">
      <thead>
         <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">No</th>
            <th class="py-3 px-6 text-left">Nama Universitas</th>
            {{-- <th class="py-3 px-6 text-left">Singakatan</th> --}}
            <th class="py-3 px-6 text-left">Status</th>
            {{-- <th class="py-3 px-6 text-left">Email</th> --}}
            <th class="py-3 px-6 text-left">Alamat Web</th>
            <th class="py-3 px-6 text-center">Action</th>
         </tr>
      </thead>
      <tbody class="text-gray-600 text-sm font-light ">
         @php
            // untuk increment no urut di pagination
            $no = ($ptns->currentpage() - 1) * $ptns->perpage() + 1;
         @endphp
         @foreach ($ptns as $ptn)
            <tr class="border-b border-gray-200 hover:bg-gray-100">
               <td class="py-3 px-6 text-left whitespace-nowrap">
                  <div class="flex items-center">
                     <div class="text-center">
                        <span class="font-medium">{{ $no++ }}</span>
                     </div>
                  </div>
               </td>
               <td class="py-3 px-6 text-left">
                  <div class="flex items-center">
                     <span>{{ $ptn->nama_universitas }}</span>
                  </div>
               </td>
               {{-- <td class="py-3 px-6 text-left"></td> --}}
               <td
                  class="py-3 px-6 text-left uppercase font-bold {{ $ptn->statuspt == 1 ? 'text-gray-700' : 'text-gray-500' }}">
                  {{ $ptn->statuspt == 1 ? 'Negeri' : 'Swasta' }}</td>
               {{-- <td class="py-3 px-6 text-left">{{ $ptn->email }}</td> --}}
               <td class="py-3 px-6 text-left">
                  @if ($ptn->weblink)
                     <a class="rounded-lg bg-gray-700 py-1 px-2 text-white text-xs" target="_blank"
                        href="{{ $ptn->weblink }}">Kunjungi</a>
                  @endif
               </td>
               <td class="py-3 px-6">
                  <div class="flex item-center justify-center text-left">
                     <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer">
                        <div title="view">
                           <svg wire:click="viewDetailPt({{ $ptn->id }})" xmlns="http://www.w3.org/2000/svg"
                              fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                           </svg>
                        </div>
                     </div>
                     <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer">
                        <div title="edit">
                           <svg wire:click="editPt({{ $ptn->id }})" xmlns="http://www.w3.org/2000/svg" fill="none"
                              viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                           </svg>
                        </div>
                     </div>
                     <div wire:click="deletePt({{ $ptn->id }})"
                        class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer">
                        <div title="delete">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                           </svg>
                        </div>
                     </div>
                  </div>
               </td>
            </tr>
         @endforeach
      </tbody>
   </table>

   <div class="pt-5">
      {{ $ptns->links() }}
   </div>

   <x-jet-dialog-modal wire:model="confirmingPtDeletion">
      <x-slot name="title">
         {{ __('Delete Account') }}
      </x-slot>

      <x-slot name="content">
         {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}

      </x-slot>

      <x-slot name="footer">
         <x-jet-secondary-button wire:click="$toggle('confirmingPtDeletion')" wire:loading.attr="disabled">
            {{ __('Nevermind') }}
         </x-jet-secondary-button>

         <x-jet-danger-button class="ml-2" wire:click="confirmDeletePT({{ $idPt }})"
            wire:loading.attr="disabled">
            {{ __('Delete Account') }}
         </x-jet-danger-button>
      </x-slot>
   </x-jet-dialog-modal>

</div>
