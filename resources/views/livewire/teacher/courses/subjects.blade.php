<div class="overflow-x-auto">
   <div class="flex mx-5 justify-between items-center">
      <h1 class="my-5 font-bold text-neutral">Daftar Matakuliah {{ $ta->ket_tahun_ajar }}</h1>
      @if (session('message'))
         <div
            class="flex w-full max-w-sm mx-auto overflow-hidden bg-white opacity-90 rounded-lg shadow-lg absolute top-8 right-5 transition delay-300 duration-150"
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
      <button class="btn btn-active btn-sm text-sm capitalize" wire:click="$toggle('statusFormCourse')" role="button"
         aria-pressed="true"> + Tambah </button>
   </div>
   @if (count($subjects) >= 1)
      <table class="table w-full">
         <thead>
            <tr>
               <th class="text-gray-100 bg-gray-500">No</th>
               <th class="text-gray-100 bg-gray-500">Kode MK</th>
               <th class="text-gray-100 bg-gray-500">Nama Mata Kuliah</th>
               <th class="text-gray-100 bg-gray-500">Kelas</th>
               <th class="text-gray-100 bg-gray-500">Tahun Ajar</th>
               <th class="text-gray-100 bg-gray-500">Prodi MK</th>
               <th class="text-gray-100 bg-gray-500">Aksi</th>
            </tr>
         </thead>
         <tbody>
            @php
               $no = ($subjects->currentpage() - 1) * $subjects->perpage() + 1;
            @endphp

            @foreach ($subjects as $subject)
               <tr>
                  <td class="py-2 text-base-content bg-base-200 text-xs">{{ $no++ }}</td>
                  <td class="text-base-content bg-base-200 text-xs">{{ $subject->code_course }}</td>
                  <td class="text-base-content bg-base-200 text-xs">{{ $subject->name_course }}</td>
                  <td class="text-base-content bg-base-200 text-xs">{{ $subject->class }}</td>
                  <td class="text-base-content bg-base-200 text-xs">{{ $subject->courseyear->ket_tahun_ajar }}</td>
                  <td class="text-base-content bg-base-200 text-xs">{{ $subject->studyprogram->prodi_name }}</td>
                  <td class="text-base-content bg-base-200">
                     <div class="flex space-x-3 items-center">
                        <div class="text-xs cursor-pointer tooltip" data-tip="ubah"
                           wire:click="editSubject({{ $subject->id }})">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              class="w-5" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                           </svg>
                        </div>
                        <div wire:click="showDeleteSubjectItem({{ $subject->id }})"
                           class="text-xs cursor-pointer tooltip" data-tip="hapus">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                              class="w-5" stroke="currentColor">
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

      <div class="pt-5">
         {{ $subjects->links() }}
      </div>

   @else
      <div class="text-primary mt-10"> 👈🏾 Silahkan pilih Tahun Ajar terlebih dahulu..!</div>
   @endif

   {{-- Modal Tambah Matakuliah --}}
   @if ($statusFormCourse)
      <form wire:submit.prevent="storemk">
         <x-jet-dialog-modal wire:model="statusFormCourse">
            @csrf
            <x-slot name="title">
               {{ __('Formulir penambahan Mata Kuliah') }}
            </x-slot>

            <x-slot name="content">

               <div class="form-control" wire:model="coursecode">
                  <label class="label">
                     <span class="label-text">Kode MataKuliah</span>
                  </label>
                  <input type="text" placeholder="Masukan kode matakuliah" class="input input-bordered">
                  @error('coursecode')
                     <span class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                  @enderror
               </div>

               <div class="form-control" wire:model="coursename">
                  <label class="label">
                     <span class="label-text">Nama MataKuliah</span>
                  </label>
                  <input type="text" placeholder="Masukan nama matakuliah" class="input input-bordered">
                  @error('coursename')
                     <span class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                  @enderror
               </div>

               <div class="form-control" wire:model="cls">
                  <label class="label">
                     <span class="label-text">Kelas</span>
                  </label>
                  <input type="text" placeholder="Masukan Kelas" class="input input-bordered">
                  @error('cls')
                     <span class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                  @enderror
               </div>

               <div class="flex items-center justify-between my-2">
                  <div class="w-1/2 form-control px-1">
                     <label class="label">
                        <span class="label-text">Pilih Tahun Ajar</span>
                     </label>
                     <select wire:model="courseyear" class="select select-bordered w-full max-w-xs">
                        <option selected="selected">Pilih TA Makul ini...</option>
                        @foreach ($talist as $tlist)
                           <option value="{{ $tlist->id }}">{{ $tlist->ket_tahun_ajar }}</option>
                        @endforeach
                     </select>
                     @error('courseyear')
                        <span class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                     @enderror
                  </div>

                  <div class="w-1/2 form-control px-1">
                     <label class="label">
                        <span class="label-text">Pilih Program Studi</span>
                     </label>
                     <select wire:model="courseprodi" class="select select-bordered w-full max-w-xs">
                        <option selected="selected">Pilih Program Studi MK Ini...</option>
                        @foreach ($prodies as $prodi)
                           <option value="{{ $prodi->id }}">{{ $prodi->prodi_name }}</option>
                        @endforeach
                     </select>
                     @error('courseprodi')
                        <span class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                     @enderror
                  </div>
               </div>

            </x-slot>

            <x-slot name="footer">
               <x-jet-secondary-button wire:click="$toggle('statusFormCourse')" wire:loading.attr="disabled">
                  {{ __('Cancel') }}
               </x-jet-secondary-button>

               <x-jet-button class="ml-2">
                  {{ __('Tambah') }}
               </x-jet-button>

            </x-slot>
         </x-jet-dialog-modal>
      </form>
   @endif
   {{-- end modal tambah matakuliah --}}

   {{-- modal edit matakuliah --}}
   @if ($editFormSubject)
      <form wire:submit.prevent="updatemk">
         <x-jet-dialog-modal wire:model="editFormSubject">
            @csrf
            <x-slot name="title">
               {{ __('Formulir ubah matakuliah') }}
            </x-slot>

            <x-slot name="content">
               <input type="text" value={{ $idmk }} hidden>
               <div class="form-control" wire:model="coursecode">
                  <label class="label">
                     <span class="label-text">Kode MK</span>
                  </label>
                  <input type="text" placeholder="Masukan kode matakuliah" class="input input-bordered"
                     value={{ $coursecode }}>
                  @error('coursecode')
                     <span class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                  @enderror
               </div>

               <div class="form-control" wire:model="coursename">
                  <label class="label">
                     <span class="label-text">Nama MK</span>
                  </label>
                  <input type="text" placeholder="Masukan nama matakuliah" class="input input-bordered"
                     value="{{ $coursename }}">
                  @error('coursename')
                     <span class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                  @enderror
               </div>

               <div class="form-control" wire:model="cls">
                  <label class="label">
                     <span class="label-text">Kelas</span>
                  </label>
                  <input type="text" placeholder="Masukan Kelas" class="input input-bordered"
                     value="{{ $cls }}">
                  @error('cls')
                     <span class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                  @enderror
               </div>

               <div class="flex items-center justify-between">
                  <div class="form-control mx-1 w-1/2">
                     <label class="label">
                        <span class="label-text">Pilih Tahun Ajar</span>
                     </label>
                     <select wire:model="courseyear" class="select select-bordered w-full max-w-xs">
                        <option selected="selected" value={{ $courseyear }}>{{ $ta->ket_tahun_ajar }}</option>
                     </select>
                     @error('courseyear')
                        <span class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                     @enderror
                  </div>

                  <div class="form-control mx-1 w-1/2">
                     <label class="label">
                        <span class="label-text">Pilih Program Studi</span>
                     </label>
                     <select wire:model="courseprodi" class="select select-bordered w-full max-w-xs">
                        <option selected="selected" value={{ $courseprodi }}>{{ $nameProdi }} (Selected)</option>
                        @foreach ($listprodies as $pro)
                           <option value={{ $pro->id }}>
                              {{ $pro->prodi_name }}
                           </option>
                        @endforeach
                     </select>
                     @error('courseprodi')
                        <span class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                     @enderror
                  </div>
               </div>

            </x-slot>

            <x-slot name="footer">
               <x-jet-secondary-button wire:click="$toggle('editFormSubject')" wire:loading.attr="disabled">
                  {{ __('Cancel') }}
               </x-jet-secondary-button>

               <x-jet-button class="ml-2">
                  {{ __('Ubah') }}
               </x-jet-button>

            </x-slot>
         </x-jet-dialog-modal>
      </form>
   @endif
   {{-- end edit modal matakuliah --}}

   {{-- modal hapus matakuliah --}}
   @if ($deleteFormSubject)
      <x-jet-dialog-modal wire:model="deleteFormSubject">
         <x-slot name="title">
            {{ __('Apakah anda yakin?') }}
         </x-slot>

         <x-slot name="content">
            {{ __('Apakah anda ingin menghapus Matakuliah ini? ') }}

         </x-slot>

         <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('deleteFormSubject')" wire:loading.attr="disabled">
               {{ __('Tidak') }}
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="deleteSubject({{ $idmk }})"
               wire:loading.attr="disabled">
               {{ __('Hapus Tahun Ajar') }}
            </x-jet-danger-button>
         </x-slot>
      </x-jet-dialog-modal>
   @endif
</div>
