<div>
   <div class="flex items-center space-x-5 mb-3">
      <p class="font-bold text-neutral uppercase">Perkuliahan</p>
      @if (session('message'))
         <div
            class="flex w-full max-w-sm mx-auto overflow-hidden bg-white opacity-70 rounded-lg shadow-md absolute top-2 right-5"
            x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
            <div class="flex items-center justify-center w-12 bg-green-500">
               <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
               </svg>
            </div>

            <div class="px-4 py-2 -mx-3">
               <div class="mx-3">
                  <span class="font-semibold text-green-500 ">Berhasil...</span>
                  <p class="text-sm text-gray-600">{{ session('message') }}</p>
               </div>
            </div>
         </div>
      @endif
      @if (session('error'))
         <div
            class="flex w-full max-w-sm mx-auto overflow-hidden bg-white opacity-70 rounded-lg shadow-md absolute top-2 right-5"
            x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
            <div class="flex items-center justify-center w-12 bg-red-500">
               <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z" />
               </svg>
            </div>

            <div class="px-4 py-2 -mx-3">
               <div class="mx-3">
                  <span class="font-semibold text-red-500 ">Gagal...</span>
                  <p class="text-sm text-gray-600">{{ session('error') }}</p>
               </div>
            </div>
         </div>
      @endif
   </div>
   <div class="flex shadow-md rounded-lg bg-gray-200">
      <div class="w-1/4 p-5 text-center">
         <div class="flex justify-between items-center mb-2">
            <p class="font-bold text-neutral">Tahun Ajar</p>
            <div class="flex items-center justify-end">
               <div wire:click="$toggle('showFormAddYear')" class="inline-flex text-neutral cursor-pointer mr-2">
                  @if (!$showFormAddYear)
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                           d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                           clip-rule="evenodd" />
                     </svg>
                  @else
                     cancel
                  @endif
               </div>
               <div wire:click="$toggle('deleteStatus')" class="inline-flex text-neutral cursor-pointer">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-trash" viewBox="0 0 16 16">
                     <path
                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                     <path fill-rule="evenodd"
                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                  </svg>
               </div>
            </div>
         </div>

         <div class="pl-2 mt-5">

            @if ($showFormAddYear)
               <form wire:submit.prevent="store" class="border-b border-gray-500 mb-2">
                  @csrf
                  <select wire:model="smt" class="select select-bordered w-full max-w-xs text-gray-800" id="smt">
                     <option selected>Pilih</option>
                     <option value="Ganjil">Ganjil</option>
                     <option value="Genap">Genap</option>
                  </select>
                  @error('smt')
                     <span class="error text-red-600 text-xs italic">{{ $message }}</span>
                  @enderror

                  <div wire:model="tAjar" class="form-control my-1">
                     <input type="text" placeholder="Tahun Ajar (2021)" class="input input-bordered">
                     @error('tAjar')
                        <span class="error text-red-600 text-xs italic">{{ $message }}</span>
                     @enderror
                  </div>
                  <div class="text-right mb-5">
                     <button type="submit" class="btn btn-xs btn-primary">Tambah</button>
                  </div>
               </form>
            @endif

            <div class="my-1 flex mx-auto">
               <ul class="menu w-64 py-3 border bg-base-100 rounded-box">
                  @foreach ($CourseHis as $chis)
                     <div class="@if (!$deleteStatus) flex items-center justify-between @endif">

                        <li
                           class="@if ($chis->id == $courseYearActive) bordered @endif @if (!$deleteStatus) w-3/4 @else w-full @endif">
                           <button wire:click="toChangeCourseYearValue({{ $chis->id }})"
                              class=" text-xs cursor-pointer text-base-content rounded-xs @if ($chis->id == $courseYearActive) hover:bg-indigo-200 bg-indigo-300 @endif">
                              {{ $chis->ket_tahun_ajar }}
                           </button>
                        </li>
                        @if (!$deleteStatus)
                           <button wire:click="deleteYear({{ $chis->id }})"
                              class="hover:bg-red-300 p-2 bg-red-600 mr-3 rounded-md text-gray-100">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-trash" viewBox="0 0 16 16">
                                 <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                 <path fill-rule="evenodd"
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                              </svg>
                           </button>
                        @endif
                     </div>
                  @endforeach
               </ul>
            </div>
         </div>

         <div class="px-5 mt-3">
            {{ $CourseHis->links() }}
         </div>

      </div>

      {{-- Komponen list Matakuliah (Subjects) --}}
      <div class="w-3/4 p-5 text-center border-l border-gray-300">
         <livewire:teacher.courses.subjects :idyear="$courseYearActive" :key="$courseYearActive" />
      </div>


   </div>
   @if ($confirmingDeleteYear)
      <x-jet-dialog-modal wire:model="confirmingDeleteYear">
         <x-slot name="title">
            {{ __('Apakah anda yakin?') }}
         </x-slot>

         <x-slot name="content">
            {{ __('Apakah anda ingin menghapus Tahun Ajar ini? Hati-hati dalam menghapus tahun ajar, dikarenakan ada matakuliah yang berelasi dengan Tahun Ajar ini.') }}

         </x-slot>

         <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmingDeleteYear')" wire:loading.attr="disabled">
               {{ __('Tidak') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="deleteYearNow({{ $idYear }})"
               wire:loading.attr="disabled">
               {{ __('Hapus Tahun Ajar') }}
            </x-jet-danger-button>
         </x-slot>
      </x-jet-dialog-modal>
   @endif
</div>
