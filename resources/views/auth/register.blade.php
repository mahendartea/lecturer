<x-guest-layout>
    {{-- <x-jet-authentication-card> --}}
    <x-slot name="logo">
        {{-- <x-jet-authentication-card-logo /> --}}
    </x-slot>

    <x-jet-validation-errors class="mb-4" />

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-3xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h1 class="my-2 text-center text-xl">Formulir Pendaftaran</h1>
            <form method="POST" action="{{ route('register') }}" x-data="{role_id: 2, status_pt:1}">
                @csrf
                <div>
                    <div class="grid grid-cols-1 gap-2 mt-4 sm:grid-cols-2">
                        <div class="px-2 my-2">
                            <x-jet-label for="name" value="{{ __('Nama Lengkap') }}" />
                            <x-jet-input id="name" class="m-auto w-full" type="text" name="name" :value="old('name')"
                                required autofocus autocomplete="name" />
                        </div>

                        <div class="px-2 my-2">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="m-auto w-full" type="email" name="email"
                                :value="old('email')" required />
                        </div>

                        <div class="px-2 my-2">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="m-auto w-full" type="password" name="password" required
                                autocomplete="new-password" />
                        </div>

                        <div class="px-2 my-2">
                            <x-jet-label for="password_confirmation" value="{{ __('Konfirmasi Password') }}" />
                            <x-jet-input id="password_confirmation" class="m-auto w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                        </div>

                        <div class="px-2 my-2">
                            <x-jet-label for="role_id" value="{{ __('Mendaftar sebagai:') }}" />
                            <select name="role_id" x-model="role_id"
                                class="m-auto w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="2">Mahasiswa</option>
                                <option value="3">Dosen</option>
                            </select>
                        </div>

                        <div class="px-2 my-2" x-show="status_pt == 1">
                            <x-jet-label for="institution" value="{{ __('Universitas / Institusi Negeri') }}" />
                            @php $dataPt = App\Models\Dataptn::all() @endphp
                            <select name="institution"
                                class="m-auto w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                @foreach ($dataPt as $ptn)
                                    <option value="{{ $ptn->id }}">{{ $ptn->nama_universitas }}</option>
                                @endforeach
                            </select>
                            <small class="text-muted text-xs italic">Jika tidak terdaftar, hubungi administrator</small>
                        </div>

                        <div class="px-2 my-2" x-show="role_id == 2">
                            <x-jet-label for="student_address" value="{{ __('Alamat (Kota/Kabupaten)') }}" />
                            <x-jet-input id="student_address" class="m-auto w-full" type="text"
                                :value="old('student_address')" name="student_address" />
                        </div>

                        <div class="px-2 my-2" x-show="role_id == 2">
                            <x-jet-label for="student_licence_number" value="{{ __('Nomor Induk') }}" />
                            <x-jet-input id="student_licence_number" class="m-auto w-full" type="text"
                                :value="old('student_licence_number')" name="student_licence_number" />
                        </div>

                        <div class="px-2 my-2" x-show="role_id == 3">
                            <x-jet-label for="teacher_qualifications" value="{{ __('Keahlian') }}" />
                            <x-jet-input id="teacher_qualifications" class="m-auto w-full" type="text"
                                :value="old('teacher_qualifications')" name="teacher_qualifications" />
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="px-2 my-2">
                                <x-jet-label for="terms">
                                    <div class="flex items-center">
                                        <x-jet-checkbox name="terms" id="terms" />

                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Terms of Service') . '</a>',
    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="underline text-sm text-gray-600 hover:text-gray-900">' . __('Privacy Policy') . '</a>',
]) !!}
                                        </div>
                                    </div>
                                </x-jet-label>
                            </div>
                        @endif

                    </div>
                    <div class="px-2 my-5 w-full text-right">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-jet-button class="ml-4">
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
            </form>
        </div>
    </div>
    </div>
    {{-- </x-jet-authentication-card> --}}
</x-guest-layout>
