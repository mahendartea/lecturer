<div class="w-full">
   <section class="dark:bg-gray-900 lg:py-5 lg:flex lg:justify-center">
      <div class="bg-white dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-md lg:rounded-lg w-full">
         <div class="max-w-xl px-7 py-12 lg:max-w-5xl lg:w-1/2 bg-gray-100">
            <div class="h-64 bg-cover lg:rounded-lg lg:h-full" style="
             background-image: url('https://images.unsplash.com/photo-1593642532400-2682810df593?ixlib=rb-1.2.1&ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80');
           "></div>
         </div>

         <div class="text-center lg:text-left max-w-xl px-7 py-12 lg:max-w-5xl lg:w-1/2 bg-gray-100">
            <h2 class="text-2xl font-bold text-indigo-600 dark:text-white md:text-2xl">
               {{ $namaUniv }}
               <span>
                  @if ($weblink)
                     <a href="{{ $weblink }}" target="_blank" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                           <path fill-rule="evenodd"
                              d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z" />
                           <path fill-rule="evenodd"
                              d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z" />
                        </svg>
                     </a>
                  @endif
               </span>
            </h2>

            @if ($description)
               <p class="my-4 mx-1 text-gray-600 dark:text-gray-400 h-32 overflow-auto border border-gray-200 p-1">
                  {{ $description }}
               </p>
            @else
               <p
                  class="my-4 mx-1 text-gray-600 dark:text-gray-400 h-32 overflow-auto border border-gray-200 p-1 italic">
                  Deskripsi profil perguruan tinggi belum ada..
               </p>
            @endif
            <div class="flex flex-col text-gray-600 text-sm">
               @if ($alamat)
                  <div class="flex text-gray-600 my-2">
                     <span class="h-5 w-5 mr-4">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                        </svg>
                     </span>

                     <span>{{ $alamat }}</span>
                  </div>

               @endif
               @if ($kontak)
                  <div class="flex text-gray-600 my-1">
                     <span class="h-5 w-5 mr-4">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                           fill="currentColor">
                           <path
                              d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                     </span>
                     <span>{{ $kontak }}</span>
                  </div>
               @endif
            </div>

            <div class="flex mt-4 text-gray-600 justify-between items-center">
               <div class="flex items-center">
                  @if ($emailUniv)
                     <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                     </svg>
                     <span class="mx-4">{{ $emailUniv }}</span>

                  @endif
               </div>
               <div class="flex items-center">
                  <a class="mx-2" href="#" aria-label="Twitter">
                     <svg
                        class="w-5 h-5 text-gray-700 fill-current dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                           d="M492 109.5c-17.4 7.7-36 12.9-55.6 15.3 20-12 35.4-31 42.6-53.6-18.7 11.1-39.4 19.2-61.5 23.5C399.8 75.8 374.6 64 346.8 64c-53.5 0-96.8 43.4-96.8 96.9 0 7.6.8 15 2.5 22.1-80.5-4-151.9-42.6-199.6-101.3-8.3 14.3-13.1 31-13.1 48.7 0 33.6 17.2 63.3 43.2 80.7-16-.4-31-4.8-44-12.1v1.2c0 47 33.4 86.1 77.7 95-8.1 2.2-16.7 3.4-25.5 3.4-6.2 0-12.3-.6-18.2-1.8 12.3 38.5 48.1 66.5 90.5 67.3-33.1 26-74.9 41.5-120.3 41.5-7.8 0-15.5-.5-23.1-1.4C62.8 432 113.7 448 168.3 448 346.6 448 444 300.3 444 172.2c0-4.2-.1-8.4-.3-12.5C462.6 146 479 129 492 109.5z" />
                     </svg>
                  </a>

                  <a class="mx-2" href="#" aria-label="Facebook">
                     <svg
                        class="w-5 h-5 text-gray-700 fill-current dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                           d="M426.8 64H85.2C73.5 64 64 73.5 64 85.2v341.6c0 11.7 9.5 21.2 21.2 21.2H256V296h-45.9v-56H256v-41.4c0-49.6 34.4-76.6 78.7-76.6 21.2 0 44 1.6 49.3 2.3v51.8h-35.3c-24.1 0-28.7 11.4-28.7 28.2V240h57.4l-7.5 56H320v152h106.8c11.7 0 21.2-9.5 21.2-21.2V85.2c0-11.7-9.5-21.2-21.2-21.2z" />
                     </svg>
                  </a>

                  <a class="mx-2" href="#" aria-label="Linkden">
                     <svg
                        class="w-5 h-5 text-gray-700 fill-current dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                           d="M417.2 64H96.8C79.3 64 64 76.6 64 93.9V415c0 17.4 15.3 32.9 32.8 32.9h320.3c17.6 0 30.8-15.6 30.8-32.9V93.9C448 76.6 434.7 64 417.2 64zM183 384h-55V213h55v171zm-25.6-197h-.4c-17.6 0-29-13.1-29-29.5 0-16.7 11.7-29.5 29.7-29.5s29 12.7 29.4 29.5c0 16.4-11.4 29.5-29.7 29.5zM384 384h-55v-93.5c0-22.4-8-37.7-27.9-37.7-15.2 0-24.2 10.3-28.2 20.3-1.5 3.6-1.9 8.5-1.9 13.5V384h-55V213h55v23.8c8-11.4 20.5-27.8 49.6-27.8 36.1 0 63.4 23.8 63.4 75.1V384z" />
                     </svg>
                  </a>

                  <a class="mx-2" href="#" aria-label="Github">
                     <svg
                        class="w-5 h-5 text-gray-700 fill-current dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                           d="M256 32C132.3 32 32 134.9 32 261.7c0 101.5 64.2 187.5 153.2 217.9 1.4.3 2.6.4 3.8.4 8.3 0 11.5-6.1 11.5-11.4 0-5.5-.2-19.9-.3-39.1-8.4 1.9-15.9 2.7-22.6 2.7-43.1 0-52.9-33.5-52.9-33.5-10.2-26.5-24.9-33.6-24.9-33.6-19.5-13.7-.1-14.1 1.4-14.1h.1c22.5 2 34.3 23.8 34.3 23.8 11.2 19.6 26.2 25.1 39.6 25.1 10.5 0 20-3.4 25.6-6 2-14.8 7.8-24.9 14.2-30.7-49.7-5.8-102-25.5-102-113.5 0-25.1 8.7-45.6 23-61.6-2.3-5.8-10-29.2 2.2-60.8 0 0 1.6-.5 5-.5 8.1 0 26.4 3.1 56.6 24.1 17.9-5.1 37-7.6 56.1-7.7 19 .1 38.2 2.6 56.1 7.7 30.2-21 48.5-24.1 56.6-24.1 3.4 0 5 .5 5 .5 12.2 31.6 4.5 55 2.2 60.8 14.3 16.1 23 36.6 23 61.6 0 88.2-52.4 107.6-102.3 113.3 8 7.1 15.2 21.1 15.2 42.5 0 30.7-.3 55.5-.3 63 0 5.4 3.1 11.5 11.4 11.5 1.2 0 2.6-.1 4-.4C415.9 449.2 480 363.1 480 261.7 480 134.9 379.7 32 256 32z" />
                     </svg>
                  </a>
               </div>
            </div>

            <div class="mt-10 mr-2 flex items-center justify-end">
               <div>
                  <button
                     class="px-5 py-2 font-semibold text-gray-100 transition-colors duration-200 transform bg-blue-900 rounded-md hover:bg-blue-700">
                     Kelola
                  </button>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
