<div>
    <p class="mb-3 font-bold text-gray-700 uppercase">Perkuliahan</p>
    <hr>
    <div class="flex shadow-md bg-base-300">
        <div class="w-1/4 p-5">
            <div class="flex justify-between items-center mb-2">
                <p class="font-bold text-gray-700">Tahun Ajar</p>
                <div wire:click="$toggle('showFormAddYear')" class="inline-flex text-gray-700 cursor-pointer">
                    @if(!$showFormAddYear)
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                  clip-rule="evenodd"/>
                        </svg>
                    @else
                        cancel
                    @endif
                </div>
            </div>

            <ul class="pl-2 mt-5">
                @if($showFormAddYear)
                    <form wire:submit.prevent="store">
                        @csrf
                        <select wire:model="smt" class="select select-bordered w-full max-w-xs" id="smt" >
                            <option selected>Pilih</option>
                            <option value="Ganjil">Ganjil</option>
                            <option value="Genap">Genap</option>
                        </select>
                        @error('smt') <span class="error text-red-600 italic">{{ $message }}</span> @enderror

                        <div wire:model="tAjar" class="form-control my-1">
                            <input type="text" placeholder="Tahun Ajar (2021)" class="input input-bordered">
                            @error('tAjar') <span class="error text-red-600 italic">{{ $message }}</span> @enderror
                        </div>
                        <div class="text-right" >
                            <button type="submit" class="btn btn-xs btn-primary">Tambah</button>
                        </div>
                    </form>
                @endif

                @foreach($CourseHis as $chis)
                    <li wire:click="toChangeCourseYearValue({{$chis->id}})"
                        class="hover:bg-neutral-focus bg-neutral text-center font-bold my-2 p-2 cursor-pointer text-primary-content @if($chis->id == $courseYearActive) border-r-4 border-primary  @endif">{{$chis->ket_tahun_ajar}} </li>
                @endforeach
            </ul>
        </div>
        <div class="w-3/4 p-5 text-center border-l border-neutral">
            <livewire:teacher.courses.subjects :idyear="$courseYearActive" :key="$courseYearActive"/>
        </div>
    </div>
</div>
