<div>
   <p class="my-2 text-xl font-bold">{{ $namapt }}</p>
   <ul class="m-0 p-0">
      <li class="text-xs">Status Kepemilikan : <span
            class="font-bold">{{ $statuspt == '1' ? 'Negeri' : 'Swasta' }}</span></li>
      <li class="text-xs">
         Email : <span class="font-bold">{{ $emailpt }}</span>
      </li>
      <li class="text-xs">
         Telp : <span class="font-bold">{{ $kontakpt }}</span>
      </li>
   </ul>

   <hr />

   <div class="w-full shadow stats my-5">
      {{-- Stat Fakultas --}}
      <div class="stat">
         <div class="stat-figure text-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-building"
               viewBox="0 0 16 16">
               <path fill-rule="evenodd"
                  d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
               <path
                  d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
            </svg>
         </div>
         <div class="stat-title font-bold">
            Fakultas
         </div>
         <div class="stat-value">{{ $jmlfakultas }}</div>
         <label for="modalfak"
            class="stat-desc text-primary hover:text-gray-800 hover:font-bold cursor-pointer modal-button">Tambah
            Fakultas</label>
         <input type="checkbox" id="modalfak" class="modal-toggle" hidden>
         {{-- modal fak show --}}
         <div class="modal">
            <div class="modal-box">
               <form wire:submit.prevent="storefak">
                  @csrf
                  <div class="flex justify-between">
                     <h1 class="text-lg">Tambah Fakultas </h1>
                     <span class="text-xs font-bold"> {{ $namapt }} </span>
                  </div>
                  <hr />
                  <div class="mt-3">
                     <input type="text" wire:model={{ $idpt }} placeholder="{{ $idpt }}" hidden>
                     <div class="form-control">
                        <label class="label">
                           <span class="label-text">Kode Fakultas</span>
                        </label>
                        <input wire:model="kodefak" type="text" placeholder="Kode Fakultas"
                           class="input input-bordered">
                        @error('kodefak') <span
                              class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-control">
                        <label class="label">
                           <span class="label-text">Nama Fakultas</span>
                        </label>
                        <input wire:model="namafak" type="text" placeholder="Nama Fakultas"
                           class="input input-bordered">
                        @error('namafak') <span
                              class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                        @enderror
                     </div>
                  </div>
                  <div class="modal-action">
                     <label for="modalfak"></label>
                     @if (session('message'))
                        <div class="alert alert-info my-0 mx-1 px-1 py-0 w-full" x-data="{show: true}"
                           x-init="setTimeout(() => show = false, 3000)" x-show="show">
                           <div class="flex-1">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#009688"
                                 class="flex-shrink-0 w-6 h-6 mx-2">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                 </path>
                              </svg>
                              <label>{{ session('message') }}</label>
                           </div>
                        </div>
                     @endif
                     <button for="modalfak" class="font-bold uppercase btn btn-primary" type="submit">Tambah</button>
                     <label for="modalfak" class="btn">Tutup</label>
                  </div>
               </form>
            </div>
         </div>
      </div>
      {{-- Stat Fakultas End --}}

      {{-- Stat Prodi --}}
      <div class="stat">
         <div class="stat-figure text-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-door-open"
               viewBox="0 0 16 16">
               <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
               <path
                  d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z" />
            </svg>

         </div>
         <div class="stat-title font-bold">
            Program Studi
         </div>
         <div class="stat-value">{{ $jmlprodi }}</div>
         {{-- <div class="stat-desc text-primary hover:text-gray-800 hover:font-bold cursor-pointer">Tambah Data</div> --}}
         <label for="modalpro"
            class="stat-desc text-primary hover:text-gray-800 hover:font-bold cursor-pointer modal-button">Tambah
            Prodi</label>
         <input type="checkbox" id="modalpro" class="modal-toggle" hidden>
         {{-- modal form --}}

         <div class="modal">
            <div class="modal-box">
               <form wire:submit.prevent="storepro">
                  @csrf
                  <div class="flex justify-between">
                     <h1 class="text-lg">Tambah Prodi </h1>
                     <span class="text-xs font-bold"> {{ $namapt }} </span>
                  </div>
                  <hr />
                  <div class="mt-3">
                     <input type="text" wire:model={{ $idpt }} placeholder="{{ $idpt }}" hidden>
                     <div class="form-control">
                        <label class="label">
                           <span class="label-text">Kode Prodi</span>
                        </label>
                        <input wire:model="kodepro" type="text" placeholder="Kode Program Studi"
                           class="input input-bordered">
                        @error('kodepro') <span
                              class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                        @enderror
                     </div>
                     <div class="form-control">
                        <label class="label">
                           <span class="label-text">Nama Prodi</span>
                        </label>
                        <input wire:model="namapro" type="text" placeholder="Nama Program Studi"
                           class="input input-bordered">
                        @error('namapro') <span
                              class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                        @enderror
                     </div>

                     <div class="form-control w-full mt-3">
                        <label for="label">
                           <span class="label-text">Pilih Fakultas</span>
                        </label>
                        <select class="select select-bordered w-full max-w-xs" wire:model="idfak">
                           <option selected="selected">Pilih Fakultas</option>
                           @foreach ($faculties as $fakul)
                              <option value="{{ $fakul->id }}"> {{ $fakul->faculty_name }}</option>
                           @endforeach
                        </select>
                        @error('idfak') <span
                              class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                        @enderror
                     </div>

                  </div>
                  <div class="modal-action">
                     <label for="modalpro"></label>
                     @if (session('message'))
                        <div class="alert alert-info my-0 mx-1 px-1 py-0 w-full" x-data="{show: true}"
                           x-init="setTimeout(() => show = false, 3000)" x-show="show">
                           <div class="flex-1">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#009688"
                                 class="flex-shrink-0 w-6 h-6 mx-2">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                 </path>
                              </svg>
                              <label>{{ session('message') }}</label>
                           </div>
                        </div>
                     @endif
                     <button for="modalpro" class="font-bold uppercase btn btn-primary" type="submit">Tambah</button>
                     <label for="modalpro" class="btn">Tutup</label>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div class="stat">
         <div class="stat-figure text-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
               class="bi bi-person-badge" viewBox="0 0 16 16">
               <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
               <path
                  d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
            </svg>
         </div>
         <div class="stat-title font-bold">
            Dosen
         </div>
         <div class="stat-value">{{ $jmldosen }}</div>
         <div class="stat-desc text-primary hover:text-gray-800 hover:font-bold cursor-pointer">Tambah Data</div>
      </div>
   </div>
   {{-- Stat Prodi End --}}

   <hr />

   <div class="w-full my-5 flex">

      <div class="mr-3 w-1/2">
         @foreach ($faculties as $fac)
            <div class="collapse mb-3 border rounded-box border-base-300 collapse-arrow">
               <input type="checkbox">
               <div class="collapse-title text-xl font-medium">
                  {{ $fac->faculty_name }}
               </div>
               <div class="collapse-content ">
                  <ul>
                     @foreach ($fac->studyprogram as $prodi)
                        <li class="ml-2 my-1 p-3 hover:bg-gray-300 rounded-md">
                           {{ $prodi->prodi_name }}
                        </li>
                     @endforeach
                  </ul>
               </div>
            </div>
         @endforeach
      </div>

      <div class="ml-3 w-1/2 rounded-md">
         <p class="text-center text-md font-bold mb-2 bg-gray-300 py-1">Data Dosen</p>
         <div class="mt-3 px-2">
            @php
               $no = ($dataDosen->currentpage() - 1) * $dataDosen->perpage() + 1;
            @endphp
            @foreach ($dataDosen as $dosen)
               <div class="hover:bg-gray-300 p-2">
                  <div class="flex justify-between items-center">
                     <span>{{ $no++ }}.
                        {{ $dosen->name }}
                     </span>
                     <span class="text-xs font-light">
                        {{ $dosen->teacher_nidn }}
                     </span>
                  </div>
               </div>
            @endforeach
         </div>
         <div class="p-5 text-sm">
            {{ $dataDosen->links() }}
         </div>
      </div>
   </div>

</div>
