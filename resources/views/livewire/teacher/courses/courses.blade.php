<div data-theme="light">
    <header class="shadow bg-white rounded-b-md z-10 mb-5">
        <div class="mx-auto py-7 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <div class="flex">
                    <div wire:click="toHistoryCourses"
                        class="flex justify-start mx-2 text-gray-500  hover:text-gray-600
                  cursor-pointer @if ($coursePage == 1) ? text-indigo-500 : @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                        </svg>
                        <button
                            class="font-semibold text-sm rounded-lg leading-tight mx-1
                      focus:outline-none ">
                            {{ __('Perkuliahan') }}
                        </button>
                    </div>
                    <div wire:click="toCounseling"
                        class="flex justify-start mx-2 text-gray-500  hover:text-gray-600
                  cursor-pointer @if ($coursePage == 2) ? text-indigo-500 : @endif"">
                  <svg xmlns=" http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <button
                            class="font-semibold text-sm rounded-lg leading-tight mx-1
                      focus:outline-none ">
                            {{ __('Bimbingan') }}
                        </button>
                    </div>
                    <div wire:click="toTimeTable"
                        class="flex justify-start mx-2 text-gray-500  hover:text-gray-600
                  cursor-pointer @if ($coursePage == 3) ? text-indigo-500 : @endif">
                        <svg xmlns=" http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <button
                            class="font-semibold text-sm rounded-lg leading-tight mx-1
                      focus:outline-none ">
                            {{ __('Jadwal') }}
                        </button>
                    </div>
                </div>
                <div>
                    <div {{-- wire:click="toCoursesIndex" --}}
                        class="flex justify-start mx-2 text-gray-500  hover:text-gray-600
                  cursor-pointer @if ($coursePage == 5) ? text-indigo-500 : @endif"">
                  <svg xmlns=" http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                        <button
                            class="font-semibold text-sm rounded-lg leading-tight mx-1
                      focus:outline-none ">
                            {{ __('Pengaturan') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @if (session()->has('message'))
        <div class="mt-5" x-data="{}" x-init="setTimeout(() => { $wire.closeComponent() }, 2000);">
            <div class="flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md ">
                <div class="flex items-center justify-center w-12 bg-green-500">
                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
                    </svg>
                </div>

                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-semibold text-green-500">Success</span>
                        <p class="text-sm text-gray-600">
                            {{ session('message') }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    @endif


    <div class="my-5 bg-white p-10 rounded-xl shadow-xl">
        @switch($coursePage)
            @case(1)
                <livewire:teacher.courses.history-courses />
            @break
            @case(2)
                Ke Halalaman Bimbingan
            @break
            @case(3)
                Ke Halaman Jadwal
            @break
            {{-- @case(2)
            <livewire:admin.users.user-lecturer />
         @break
         @case(3)
            <livewire:admin.users.user-student />
         @break
         @case(4)
            <livewire:admin.users.user-form />
         @break
         @case(5)
            <livewire:admin.users.detail-user />
         @break
         @case(6)
            <livewire:admin.users.users-edit />
         @break --}}
        @endswitch

    </div>

</div>
