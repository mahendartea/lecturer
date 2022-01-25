<div class="overflow-x-auto">
    <div class="flex mx-5 justify-between items-center">
        <h1 class="my-5 font-bold text-neutral">Daftar Matakuliah {{ $ta->ket_tahun_ajar }}</h1>
        @if (session('message'))
            <div class="alert alert-info my-0 mx-1 px-1 py-0">
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
        <button class="btn btn-active btn-sm text-sm capitalize" wire:click="$toggle('statusFormCourse')" role="button"
            aria-pressed="true"> + Tambah</button>
    </div>
    @if (count($subjects) >= 1)
        <table class="table w-full">
            <thead>
                <tr>
                    <th class="bg-neutral text-primary-content">No</th>
                    <th class="bg-neutral text-primary-content">Kode MK</th>
                    <th class="bg-neutral text-primary-content">Nama Mata Kuliah</th>
                    <th class="bg-neutral text-primary-content">Kelas</th>
                    <th class="bg-neutral text-primary-content">Tahun Ajar</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = ($subjects->currentpage() - 1) * $subjects->perpage() + 1;
                @endphp

                @foreach ($subjects as $subject)
                    <tr>
                        <td class="py-2 text-neutral text-sm">{{ $no++ }}</td>
                        <td class="text-neutral text-sm">{{ $subject->code_course }}</td>
                        <td class="text-neutral text-sm">{{ $subject->name_course }}</td>
                        <td class="text-neutral text-sm">{{ $subject->class }}</td>
                        <td class="text-neutral text-sm">{{ $ta->ket_tahun_ajar }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="text-primary">Data untuk Tahun Ajar ini kosong..!</div>
    @endif
    <div class="pt-5">
        {{ $subjects->links() }}
    </div>

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
                            <span class="label-text">Kode MK</span>
                        </label>
                        <input type="text" placeholder="Masukan kode matakuliah" class="input input-bordered">
                        @error('coursecode') <span
                                class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control" wire:model="coursename">
                        <label class="label">
                            <span class="label-text">Nama MK</span>
                        </label>
                        <input type="text" placeholder="Masukan nama matakuliah" class="input input-bordered">
                        @error('coursename') <span
                                class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control" wire:model="cls">
                        <label class="label">
                            <span class="label-text">Kelas</span>
                        </label>
                        <input type="text" placeholder="Masukan Kelas" class="input input-bordered">
                        @error('cls') <span
                                class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Pilih Tahun Ajar</span>
                        </label>
                        <select wire:model="courseyear" class="select select-bordered w-full max-w-xs">
                            <option selected="selected">Pilih TA Makul ini...</option>
                            @foreach ($talist as $tlist)
                                <option value="{{ $tlist->id }}">{{ $tlist->ket_tahun_ajar }}</option>
                            @endforeach
                        </select>
                        @error('courseyear') <span
                                class="error text-center mt-1 text-red-600 text-xs italic">{{ $message }}</span>
                        @enderror
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
</div>
