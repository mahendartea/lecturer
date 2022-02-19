<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Laravel</title>

   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

   <!-- Styles -->
   <link rel="stylesheet" href="{{ mix('css/app.css') }}">

   @livewireStyles

   <!-- Scripts -->
   <script src="{{ mix('js/app.js') }}"></script>

</head>

<body class="antialiased">

   <!-- Require css -->
   <style>
      .scroll-hidden::-webkit-scrollbar {
         height: 0px;
         background: transparent;
         /* make scrollbar transparent */
      }

   </style>

   <nav class="bg-white shadow dark:bg-gray-800">
      <div class="container px-6 py-3 mx-auto">
         <div class="flex flex-col md:flex-row md:justify-between md:items-center">
            <div class="flex items-center justify-between">
               <div class="flex items-center">
                  <a class="text-2xl font-bold text-gray-800 transition-colors duration-200 transform dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300"
                     href="#">Brand</a>

                  <!-- Search input on desktop screen -->
                  {{-- <div class="hidden mx-10 md:block">
                     <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                           <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                              <path
                                 d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              </path>
                           </svg>
                        </span>

                        <input type="text"
                           class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300"
                           placeholder="Search">
                     </div>
                  </div> --}}
               </div>

               <!-- Mobile menu button -->
               <div class="flex md:hidden">
                  <button type="button"
                     class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                     aria-label="toggle menu">
                     <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path fill-rule="evenodd"
                           d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                        </path>
                     </svg>
                  </button>
               </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="items-center md:flex">

               <div class="flex flex-col mt-2 md:flex-row md:mt-0 md:mx-1">
                  {{-- <a class="my-1 text-sm leading-5 text-gray-700 transition-colors duration-200 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                     href="#">Home</a>
                  <a class="my-1 text-sm leading-5 text-gray-700 transition-colors duration-200 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                     href="#">Blog</a>
                  <a class="my-1 text-sm leading-5 text-gray-700 transition-colors duration-200 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                     href="#">Compoents</a>
                  <a class="my-1 text-sm leading-5 text-gray-700 transition-colors duration-200 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                     href="#">Courses</a> --}}
               </div>

               <div class="flex items-center py-2 -mx-1 md:mx-0">
                  @if (Route::has('login'))
                     @auth
                        <a class="block w-1/2 px-3 py-2 mx-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-200 transform bg-gray-500 rounded-md hover:bg-blue-600 md:mx-2 md:w-auto"
                           href="{{ url('/dashboard') }}">Dashboard</a>
                     @else
                        <a class="block w-1/2 px-3 py-2 mx-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-200 transform bg-gray-500 rounded-md hover:bg-blue-600 md:mx-2 md:w-auto"
                           href="{{ url('/login') }}">Login</a>
                        @if (Route::has('register'))
                           <a class="block w-1/2 px-3 py-2 mx-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 md:mx-0 md:w-auto"
                              href="{{ route('register') }}">Registrasi</a>
                        @endif

                     @endauth
                  @endif
               </div>

               <!-- Search input on mobile screen -->
               <div class="mt-3 md:hidden">
                  <div class="relative">
                     <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                           <path
                              d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                           </path>
                        </svg>
                     </span>

                     <input type="text"
                        class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300"
                        placeholder="Search">
                  </div>
               </div>
            </div>
         </div>

      </div>
   </nav>

   <div class="relative flex items-top justify-center min-h-screen bg-gray-100  sm:items-center sm:pt-0">

      <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

         <div
            class="container flex flex-col px-6 py-4 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
            <div class="flex flex-col items-center w-full lg:flex-row lg:w-1/2">

               <div class="max-w-lg lg:mx-12 lg:order-2">
                  <h1 class="text-3xl font-medium tracking-wide text-gray-800 lg:text-4xl uppercase">
                     Aplikasi manajemen perkuliahan anda.
                  </h1>
                  <p class="mt-4 text-gray-600">Selamat datang di Lecturer Manager. Kami menyediakan
                     Fitur-fitur yang memudahkan anda mengelola data pendidikan anda. Selamat bergabung dengan kami, dan
                     selamat menggunakan segala kemudahan pemakaiannya.</p>
                  <div class="mt-6">
                     <a href="#"
                        class="block px-3 py-2 font-semibold text-center text-white transition-colors duration-200 transform bg-blue-500 rounded-md lg:inline hover:bg-blue-400">
                        Bergabung Segera
                     </a>
                  </div>
               </div>
            </div>

            <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
               <img class="object-cover w-full h-full max-w-2xl rounded-md"
                  src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80">
            </div>
         </div>

      </div>
   </div>

   <section class="bg-white">
      <div class="container grid grid-cols-1 gap-8 px-4 py-12 mx-auto lg:grid-cols-2">
         <div class="flex flex-col items-center max-w-lg mx-auto text-center">
            <h2 class="text-3xl font-semibold tracking-tight text-gray-800">
               Web development
            </h2>

            <p class="mt-3 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing
               elit. Iure ex cupiditate corrupti aliquam eum vel consequuntur hic culpa unde natus officia enim
               est impedit consequatur aut, voluptatem minima repellat non!</p>

            <a href="#"
               class="inline-flex items-center justify-center w-full px-5 py-2 mt-6 text-white bg-blue-600 rounded-lg sm:w-auto hover:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
               Start now
            </a>
         </div>

         <div class="flex flex-col items-center max-w-lg mx-auto text-center">
            <h2 class="text-3xl font-semibold tracking-tight text-gray-800">
               App development
            </h2>

            <p class="mt-3 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing
               elit. Iure ex cupiditate corrupti aliquam eum vel consequuntur hic culpa unde natus officia enim
               est impedit consequatur aut, voluptatem minima repellat non!</p>

            <a href="#"
               class="inline-flex items-center justify-center w-full px-5 py-2 mt-6 text-gray-700 transition-colors duration-150 transform bg-white border border-gray-200 rounded-lg hover:bg-gray-100 sm:w-auto focus:ring focus:ring-gray-200 focus:ring-opacity-80">
               Start now
            </a>
         </div>
      </div>
   </section>


   <section class="bg-gray-200">
      <div class="container flex flex-col items-center px-4 py-12 mx-auto xl:flex-row">
         <div class="flex justify-center xl:w-1/2">
            <img class="h-80 w-80 sm:w-[28rem] sm:h-[28rem] flex-shrink-0 object-cover rounded-full"
               src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80"
               alt="">
         </div>

         <div class="flex flex-col items-center mt-6 xl:items-start xl:w-1/2 xl:mt-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-800 xl:text-4xl ">
               Download our free mobile app
            </h2>

            <p class="block max-w-2xl mt-4 text-xl text-gray-500 ">Lorem ipsum dolor sit amet
               consectetur, adipisicing elit. Iusto recusandae tenetur iste quaerat voluptatibus quibusdam nam
               repudiandae </p>

            <div class="mt-6 sm:-mx-2">
               <div class="inline-flex w-full overflow-hidden rounded-lg shadow sm:w-auto sm:mx-2">
                  <a href="#"
                     class="inline-flex items-center justify-center w-full px-5 py-3 text-base font-medium text-white bg-gradient-to-r from-gray-700 to-gray-900 hover:from-gray-600 hover:to-gray-600 sm:w-auto">
                     <svg class="w-6 h-6 mx-2 fill-current" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 512 512" xml:space="preserve">
                        <g>
                           <g>
                              <path d="M407,0H105C47.103,0,0,47.103,0,105v302c0,57.897,47.103,105,105,105h302c57.897,0,105-47.103,105-105V105
                                        C512,47.103,464.897,0,407,0z M482,407c0,41.355-33.645,75-75,75H105c-41.355,0-75-33.645-75-75V105c0-41.355,33.645-75,75-75h302
                                        c41.355,0,75,33.645,75,75V407z"></path>
                           </g>
                        </g>
                        <g>
                           <g>
                              <path d="M305.646,123.531c-1.729-6.45-5.865-11.842-11.648-15.18c-11.936-6.892-27.256-2.789-34.15,9.151L256,124.166
                                        l-3.848-6.665c-6.893-11.937-22.212-16.042-34.15-9.151h-0.001c-11.938,6.893-16.042,22.212-9.15,34.151l18.281,31.664
                                        L159.678,291H110.5c-13.785,0-25,11.215-25,25c0,13.785,11.215,25,25,25h189.86l-28.868-50h-54.079l85.735-148.498
                                        C306.487,136.719,307.375,129.981,305.646,123.531z"></path>
                           </g>
                        </g>
                        <g>
                           <g>
                              <path d="M401.5,291h-49.178l-55.907-96.834l-28.867,50l86.804,150.348c3.339,5.784,8.729,9.921,15.181,11.65
                                        c2.154,0.577,4.339,0.863,6.511,0.863c4.332,0,8.608-1.136,12.461-3.361c11.938-6.893,16.042-22.213,9.149-34.15L381.189,341
                                        H401.5c13.785,0,25-11.215,25-25C426.5,302.215,415.285,291,401.5,291z"></path>
                           </g>
                        </g>
                        <g>
                           <g>
                              <path d="M119.264,361l-4.917,8.516c-6.892,11.938-2.787,27.258,9.151,34.15c3.927,2.267,8.219,3.345,12.458,3.344
                                        c8.646,0,17.067-4.484,21.693-12.495L176.999,361H119.264z"></path>
                           </g>
                        </g>
                     </svg>
                     <span class="mx-2">
                        Get it on the App Store
                     </span>
                  </a>
               </div>

               <div class="inline-flex w-full mt-4 overflow-hidden rounded-lg shadow sm:w-auto sm:mx-2 sm:mt-0">
                  <a href="#"
                     class="inline-flex items-center justify-center w-full px-5 py-3 text-base font-medium text-white transition-colors duration-150 transform sm:w-auto bg-gradient-to-r from-blue-700 to-blue-900 hover:from-blue-600 hover:to-blue-600">
                     <svg class="w-6 h-6 mx-2 fill-current" viewBox="-28 0 512 512.00075"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="m432.320312 215.121094-361.515624-208.722656c-14.777344-8.53125-32.421876-8.53125-47.203126 0-.121093.070312-.230468.148437-.351562.21875-.210938.125-.421875.253906-.628906.390624-14.175782 8.636719-22.621094 23.59375-22.621094 40.269532v417.445312c0 17.066406 8.824219 32.347656 23.601562 40.878906 7.390626 4.265626 15.496094 6.398438 23.601563 6.398438s16.214844-2.132812 23.601563-6.398438l361.519531-208.722656c14.777343-8.53125 23.601562-23.8125 23.601562-40.878906s-8.824219-32.347656-23.605469-40.878906zm-401.941406 253.152344c-.21875-1.097657-.351562-2.273438-.351562-3.550782v-417.445312c0-2.246094.378906-4.203125.984375-5.90625l204.324219 213.121094zm43.824219-425.242188 234.21875 135.226562-52.285156 54.539063zm-6.480469 429.679688 188.410156-196.527344 54.152344 56.484375zm349.585938-201.835938-80.25 46.332031-60.125-62.714843 58.261718-60.773438 82.113282 47.40625c7.75 4.476562 8.589844 11.894531 8.589844 14.875s-.839844 10.398438-8.589844 14.875zm0 0">
                        </path>
                     </svg>
                     <span class="mx-2">
                        Get it on Google Play
                     </span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>


   <section class="bg-white">
      <div class="container px-4 py-16 mx-auto lg:flex lg:items-center lg:justify-between">
         <h2 class="text-3xl font-semibold tracking-tight text-gray-800 xl:text-4xl">
            Join us and get the update from anywhere
         </h2>

         <div class="mt-8 lg:mt-0">
            <div class="flex flex-col space-y-3 sm:space-y-0 sm:flex-row sm:-mx-2">
               <input id="email" type="text"
                  class="px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md sm:mx-2 focus:border-blue-400  focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                  placeholder="Email Address">

               <button
                  class="px-4 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-700 rounded-md focus:ring focus:ring-blue-300 focus:ring-opacity-80 fo sm:mx-2 hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                  Get Started
               </button>
            </div>

            <p class="mt-3 text-sm text-gray-500 ">Attention! Offer expires in 30 days. Make sure not
               to miss this opportunity</p>
         </div>
      </div>
   </section>

   @livewireScripts
</body>

</html>
