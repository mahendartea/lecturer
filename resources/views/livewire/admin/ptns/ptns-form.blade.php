<div>
   <section class="max-w-4xl p-6 mx-auto bg-white dark:bg-gray-800">
      <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">
         Tambah Universitas
      </h2>

      <form wire:submit.prevent="store">
         @csrf
         <div class="flex flex-col sm:grid sm:gap-6 mt-4 sm:grid-cols-2">
            <div class="mt-2 sm:mt-0">
               <x-jet-label for="name" value="{{ __('Nama Universitas') }}" />
               <x-jet-input id="name" wire:model="name"
                  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                  type="text" :value="old('name')" autofocus autocomplete="name" placeholder="Nama Universitas..." />
               @error('name') <span class="error text-red-600 italic">{{ $message }}</span> @enderror
            </div>

            <div class="mt-2 sm:mt-0">
               <x-jet-label for="statuspt" value="{{ __('Status') }}" />
               <select wire:model="statuspt" x-model="statuspt"
                  class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                  <option value="1">Negeri</option>
                  <option value="2">Swasta</option>
               </select>
               @error('statuspt') <span class="error text-red-600 italic">{{ $message }}</span> @enderror
            </div>

            <div class="mt-2 sm:mt-0">
               <x-jet-label for="email" value="{{ __('Alamat Email') }}" />
               <x-jet-input id="email" wire:model="email"
                  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                  type="text" :value="old('email')" autofocus autocomplete="email" placeholder="Email..." />
               @error('email') <span class="error text-red-600 italic">{{ $message }}</span> @enderror
            </div>

            <div class="mt-2 sm:mt-0">
               <x-jet-label for="weblink" value="{{ __('Alamat Web') }}" />
               <x-jet-input id="weblink" wire:model="weblink"
                  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                  type="text" :value="old('weblink')" autofocus autocomplete="weblink" placeholder="Alamat web..." />

               @error('weblink')
                  <span class="error text-red-600 italic">{{ $message }}</span>
                  <span class="text-gray-600 text-xs italic">contoh : https://ui.ac.id</span>
               @enderror
            </div>

            <div class="col-span-2 mt-2 sm:mt-0">
               <x-jet-label for="alamat" value="{{ __('Alamat') }}" />
               <x-jet-input id="alamat" wire:model="alamat" class="block mt-1 w-full h-10" type="text"
                  :value="old('alamat')" placeholder="Alamat..." />
               @error('alamat') <span class="error text-red-600 italic">{{ $message }}</span>
               @enderror
            </div>

            <div class="col-span-2 mt-2 sm:mt-0">
               <x-jet-label for="deskripsi" value="{{ __('Deskripsi Profil') }}" />
               <textarea id="deskripsi" wire:model="deskripsi"
                  class="block mt-1 w-full h-24 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                  type="text" :value="old('deskripsi')"></textarea>
               @error('deskripsi') <span class="error text-red-600 italic">{{ $message }}</span>
               @enderror
            </div>

            <div class="mt-2 sm:mt-0">
               <x-jet-label for="kontak" value="{{ __('Kontak') }}" />
               <x-jet-input id="kontak" wire:model="kontak"
                  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                  type="text" :value="old('kontak')" autofocus autocomplete="kontak" placeholder="Kontak..." />
               @error('kontak') <span class="error text-red-600 italic">{{ $message }}</span> @enderror
            </div>

            <div class="mt-2 sm:mt-0">
               <div class="flex">
                  <span class="mr-2" aria-label="Facebook">
                     <svg
                        class="w-5 h-5 text-gray-700 fill-current dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                           d="M426.8 64H85.2C73.5 64 64 73.5 64 85.2v341.6c0 11.7 9.5 21.2 21.2 21.2H256V296h-45.9v-56H256v-41.4c0-49.6 34.4-76.6 78.7-76.6 21.2 0 44 1.6 49.3 2.3v51.8h-35.3c-24.1 0-28.7 11.4-28.7 28.2V240h57.4l-7.5 56H320v152h106.8c11.7 0 21.2-9.5 21.2-21.2V85.2c0-11.7-9.5-21.2-21.2-21.2z" />
                     </svg>
                  </span>
                  <x-jet-label for="facebook" value="{{ __('Facebook') }}" />
               </div>
               <x-jet-input id="facebook"
                  class="block w-full px-4 py-2 mt-2 text-black bg-gray-400 border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                  type="text" :value="old('facebook')" autofocus autocomplete="facebook" disabled
                  placeholder="soon.." />
               @error('facebook') <span class="error text-red-600 italic">{{ $message }}</span> @enderror
            </div>

            <div class="mt-2 sm:mt-0">
               <div class="flex">
                  <span class="mr-2" aria-label="Instagram">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                           d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                     </svg>
                  </span>
                  <x-jet-label for="instagram" value="{{ __('Instagram') }}" />
               </div>
               <x-jet-input id="instagram"
                  class="block w-full px-4 py-2 mt-2 text-black bg-gray-400 border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                  type="text" :value="old('instagram')" autofocus autocomplete="instagram" disabled
                  placeholder="soon.." />
               @error('instagram') <span class="error text-red-600 italic">{{ $message }}</span> @enderror
            </div>

            <div class="mt-2 sm:mt-0">
               <div class="flex">
                  <span class="mr-2" aria-label="twitter">
                     <svg
                        class="w-5 h-5 text-gray-700 fill-current dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                           d="M492 109.5c-17.4 7.7-36 12.9-55.6 15.3 20-12 35.4-31 42.6-53.6-18.7 11.1-39.4 19.2-61.5 23.5C399.8 75.8 374.6 64 346.8 64c-53.5 0-96.8 43.4-96.8 96.9 0 7.6.8 15 2.5 22.1-80.5-4-151.9-42.6-199.6-101.3-8.3 14.3-13.1 31-13.1 48.7 0 33.6 17.2 63.3 43.2 80.7-16-.4-31-4.8-44-12.1v1.2c0 47 33.4 86.1 77.7 95-8.1 2.2-16.7 3.4-25.5 3.4-6.2 0-12.3-.6-18.2-1.8 12.3 38.5 48.1 66.5 90.5 67.3-33.1 26-74.9 41.5-120.3 41.5-7.8 0-15.5-.5-23.1-1.4C62.8 432 113.7 448 168.3 448 346.6 448 444 300.3 444 172.2c0-4.2-.1-8.4-.3-12.5C462.6 146 479 129 492 109.5z" />
                     </svg>
                  </span>
                  <x-jet-label for="instagram" value="{{ __('Twitter') }}" />
               </div>
               <x-jet-input id="twitter"
                  class="block w-full px-4 py-2 mt-2 text-black bg-gray-400 border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                  type="text" :value="old('twitter')" autofocus autocomplete="twitter" disabled placeholder="soon.." />
               @error('twitter') <span class="error text-red-600 italic">{{ $message }}</span> @enderror
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
