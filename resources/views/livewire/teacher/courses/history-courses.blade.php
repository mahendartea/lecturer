<div>
   <p class="mb-3 font-bold text-gray-700 uppercase">Perkuliahan</p>
   <hr>
   <div class="flex shadow-md bg-base-300">
      <div class="w-1/4 p-5">
         <div class="flex justify-between items-center mb-2">
            <p class="font-bold text-gray-700">Tahun Ajar</p>
            <div class="inline-flex text-gray-700 cursor-pointer">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
               </svg>
            </div>
         </div>

         <ul class="pl-2 mt-5">
            @foreach($CourseHis as $chis)
            <li wire:click="toChangeCourseYearValue({{$chis->id}})" class="hover:bg-neutral-focus bg-neutral text-center font-bold my-2 p-2 cursor-pointer text-primary-content @if($chis->id == $courseYearActive) border-r-8 border-primary  @endif">{{$chis->ket_tahun_ajar}} </li>
            @endforeach
         </ul>
      </div>
      <div class="w-3/4 p-5 text-center border-l border-neutral">
         <livewire:teacher.courses.subjects :idyear="$courseYearActive" :key="$courseYearActive"/>
      </div>
   </div>
</div>
