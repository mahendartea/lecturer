<div>
   <div>
      <section class="max-w-4xl p-6 mx-auto bg-white dark:bg-gray-800">
         <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">
            Account settings
         </h2>

         <form wire:submit.prevent="store" x-data="{role_id: 1, open: false}">
            @csrf
            <input type="hidden" name="" wire:model="IdUser">
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
               <div>
                  <x-jet-label for="name" value="{{ __('Nama Lengkap') }}" />
                  <x-jet-input id="name" wire:model="name"
                     class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                     type="text" :value="old('name')" autofocus autocomplete="name" />
                  @error('name') <span class="error text-red-600 italic">{{ $message }}</span> @enderror
               </div>
               <div>
                  <x-jet-label for="email" value="{{ __('Email') }}" />
                  <x-jet-input id="email" wire:model="email"
                     class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                     type="text" :value="old('email')" autocomplete="email" />
                  @error('email') <span class="error text-red-600 italic">{{ $message }}</span> @enderror
               </div>

               <div>
                  <div class="flex flex-col items-center">
                     <x-jet-label for="password_confirmation" value="{{ __('') }} " />
                     <span @click="open = true"
                        class="w-full py-2 mt-2 px-2 text-center text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600 cursor-pointer">Ganti
                        Password? </span>
                  </div>

               </div>
               <div x-show="open" @click.away="open = false">
                  {{-- <x-jet-label for="password" value="{{ __('New Password') }}" /> --}}
                  <x-jet-input id="password" wire:model="password"
                     class="block w-full px-4 py-2 mt-2 text-gray-700  border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                     type="password" autocomplete="password" placeholder="new Password" />
                  @error('password') <span class="error text-red-600 italic">{{ $message }}</span> @enderror
               </div>


               <div class="col-span-2">
                  <x-jet-label for="student_address" value="{{ __('Alamat') }}" />
                  <x-jet-input id="student_address" wire:model="student_address" class="block mt-1 w-full" type="text"
                     :value="old('student_address')" />
                  @error('student_address') <span class="error text-red-600 italic">{{ $message }}</span>
                  @enderror
               </div>

               <div>
                  <x-jet-label for="role_id" value="{{ __('Hak Akses') }}" />
                  <select wire:model="role_id" x-model="role_id" disabled
                     class="block mt-1 w-full border-gray-300 bg-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                     @if ($role_id == 1)
                        <option value="1">Admin</option>
                     @elseif($role_id == 2)
                        <option value="2">Mahasiswa</option>
                     @else
                        <option value="2">Dosen</option>
                     @endif
                  </select>
                  @error('role_id') <span class="error text-red-600 italic">{{ $message }}</span> @enderror
               </div>

               <div wire:ignore>
                  <x-jet-label for="institution" value="{{ __('Universitas') }}" />
                  <select name="institution" id="institution"
                     class="m-auto w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                     wire:model="institution">
                     @foreach ($allptn as $pt)
                        <option wire:key="lang{{ $loop->index }}" value="{{ $pt->id }}">
                           {{ $pt->nama_universitas }}
                        </option>
                     @endforeach
                  </select>

                  @error('institution') <span class="error text-red-600 italic">{{ $message }}</span>
                  @enderror
               </div>

               @if ($role_id == 2)
                  <div>
                     <x-jet-label for="student_licence_number" value="{{ __('No. Induk Mahasiswa') }}" />
                     <x-jet-input id="student_licence_number" wire:model="student_licence_number"
                        class="block mt-1 w-full" type="text" value="{{ $student_licence_number }}" />
                     @error('student_licence_number') <span
                        class="error text-red-600 italic">{{ $message }}</span> @enderror
                  </div>
               @elseif($role_id == 3)
                  <div>
                     <x-jet-label for="teacher_qualifications" value="{{ __('Kualifikasi') }}" />
                     <x-jet-input id="teacher_qualifications" wire:model="teacher_qualifications"
                        class="block mt-1 w-full" type="text" value="{{ $teacher_qualifications }}" />
                     @error('teacher_qualifications') <span
                        class="error text-red-600 italic">{{ $message }}</span> @enderror
                  </div>
                  <div>
                     <x-jet-label for="teacher_nidn" value="{{ __('NIDN') }}" />
                     <x-jet-input id="teacher_nidn" wire:model="teacher_nidn" class="block mt-1 w-full" type="text"
                        value="{{ $teacher_nidn }}" />
                     @error('teacher_nidn') <span class="error text-red-600 italic">{{ $message }}</span>
                     @enderror
                  </div>
               @endif
            </div>
            <div class="flex justify-end mt-6">
               <button type="submit"
                  class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
                  Save
               </button>
            </div>
         </form>
      </section>
   </div>
   {{-- @php var_dump($ptns) @endphp --}}
</div>
