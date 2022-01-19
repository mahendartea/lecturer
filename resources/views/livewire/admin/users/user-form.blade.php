<div>
   <section class="max-w-4xl p-6 mx-auto bg-white dark:bg-gray-800">
      <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">
         Tambah Baru
      </h2>

      <form wire:submit.prevent="store" x-data="{role_id: 1}">
         @csrf
         <div class="flex flex-col sm:grid sm:gap-6 mt-4 sm:grid-cols-2">
            <div class="mt-2 sm:mt-0">
               <x-jet-label for="name" value="{{ __('Nama Lengkap') }}" />
               <x-jet-input id="name" wire:model="name"
                  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                  type="text" :value="old('name')" autofocus autocomplete="name" />
               @error('name') <span class="error text-red-600 italic">{{ $message }}</span> @enderror
            </div>
            <div class="mt-2 sm:mt-0">
               <x-jet-label for="email" value="{{ __('Email') }}" />
               <x-jet-input id="email" wire:model="email"
                  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                  type="text" :value="old('email')" autocomplete="email" />
               @error('email') <span class="error text-red-600 italic">{{ $message }}</span> @enderror
            </div>
            <div class="mt-2 sm:mt-0">
               <x-jet-label for="password" value="{{ __('Password') }}" />
               <x-jet-input id="password" wire:model="password"
                  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                  type="password" autocomplete="password" />
               @error('password') <span class="error text-red-600 italic">{{ $message }}</span> @enderror
            </div>
            <div class="mt-2 sm:mt-0">
               <x-jet-label for="password_confirmation" value="{{ __('Konfirmasi Passowrd') }} " />
               <x-jet-input id="password_confirmation" wire:model="password_confirmation"
                  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                  type="password" autocomplete="password" />
               @error('password_confirmation') <span class="error text-red-600 italic">{{ $message }}</span>
               @enderror
            </div>

            <div class="col-span-2 mt-2 sm:mt-0">
               <x-jet-label for="student_address" value="{{ __('Alamat') }}" />
               <x-jet-input id="student_address" wire:model="student_address" class="block mt-1 w-full" type="text"
                  :value="old('student_address')" />
               @error('student_address') <span class="error text-red-600 italic">{{ $message }}</span>
               @enderror
            </div>

            <div class="mt-2 sm:mt-0">
               <x-jet-label for="role_id" value="{{ __('Role Access') }}" />
               <select wire:model="role_id" x-model="role_id"
                  class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                  <option value="1">Admin</option>
                  <option value="2">Mahasiwa</option>
                  <option value="3">Dosen</option>
               </select>
               @error('role_id') <span class="error text-red-600 italic">{{ $message }}</span> @enderror
            </div>

            <div wire:ignore class="mt-2 sm:mt-0">
               <x-jet-label for="institution" value="{{ __('Institusi') }}" />
{{--               <input type="text" wire:model="institution" id="institution" class="m-auto w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">--}}

               <select wire:model="institution" id="institution"
                  class="m-auto w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                  wire:model="institution">
                  @foreach ($datapt as $pt)
                     <option wire:key="lang{{ $loop->index }}" value="{{ $pt->id }}">
                        {{ $pt->nama_universitas }}
                     </option>
                  @endforeach
               </select>

               @error('institution') <span class="error text-red-600 italic">{{ $message }}</span>
               @enderror
            </div>


            <div x-show="role_id == 2" class="mt-2 sm:mt-0">
               <x-jet-label for="student_licence_number" value="{{ __('Nomor Induk Mahasiswa') }}" />
               <x-jet-input id="student_licence_number" wire:model="student_licence_number" class="block mt-1 w-full"
                  type="text" :value="old('student_licence_number')" />
               @error('student_licence_number') <span class="error text-red-600 italic">{{ $message }}</span>
               @enderror
            </div>
            <div x-show="role_id == 3" class="mt-2 sm:mt-0">
               <x-jet-label for="teacher_nidn" value="{{ __('NIDN') }}" />
               <x-jet-input id="teacher_nidn" wire:model="teacher_nidn" class="block mt-1 w-full" type="text"
                  :value="old('teacher_nidn')" />
               @error('teacher_nidn') <span class="error text-red-600 italic">{{ $message }}</span>
               @enderror
            </div>
            <div x-show="role_id == 3" class="mt-2 sm:mt-0">
               <x-jet-label for="teacher_qualifications" value="{{ __('Kualifikasi') }}" />
               <x-jet-input id="teacher_qualifications" wire:model="teacher_qualifications" class="block mt-1 w-full"
                  type="text" :value="old('teacher_qualifications')" />
               @error('teacher_qualifications') <span class="error text-red-600 italic">{{ $message }}</span>
               @enderror
            </div>

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
