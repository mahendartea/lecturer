<div>
   <h1 class="my-5 font-bold">Daftar Matakuliah Ganjil 2021/2022</h1>
   <table class="w-full table-auto border-collapse border border-gray-500">
      <thead class="bg-gray-200 text-gray-600 uppercase loading-normal  ">
      <tr class="">
         <th class="border border-gray-500 py-2 bg-gray-500 text-gray-200">No</th>
         <th class="border border-gray-500 bg-gray-500 text-gray-200">Nama Mata Kuliah</th>
         <th class="border border-gray-500 bg-gray-500 text-gray-200">Nama Kelas</th>
         <th class="border border-gray-500 bg-gray-500 text-gray-200">Peserta</th>
         <th class="border border-gray-500 bg-gray-500 text-gray-200">Action</th>
      </tr>
      </thead>
      <tbody class="text-gray-600 text-sm font-light">
      @php
         $no = ($subjects->currentpage() - 1) * $subjects->perpage() + 1;
      @endphp
      @foreach($subjects as $subject)
         <tr class="">
            <td class="py-2">{{$no++}}</td>
            <td>{{$subject->name_course}}</td>
            <td>{{$subject->class}}</td>
            <td>{{30}}</td>
            <td>
               <a href="#" class="bg-gray-700 text-gray-300 px-3 py-1 ">Absen</a>
               <a href="#" class="bg-gray-700 text-gray-300 px-3 py-1">Berita Acara</a>
            </td>
         </tr>
      @endforeach
      </tbody>

   </table>
   <div class="pt-5">
      {{ $subjects->links() }}
   </div>
</div>
