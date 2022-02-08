<div>
   <p class="my-2 text-xl font-bold">{{ $namapt }}</p>
   <ul class="m-0 p-0">
      <li class="text-xs">Status Kepemilikan : <span
            class="font-bold">{{ $statuspt == '1' ? 'Negeri' : 'Swasta' }}</span></li>
      <li class="text-xs">
         Email : <span class="font-bold">{{ $emailpt }}</span>
      </li>
   </ul>

   <hr />
   <div class="w-full shadow stats my-5">
      <div class="stat">
         <div class="stat-figure text-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-building"
               viewBox="0 0 16 16">
               <path fill-rule="evenodd"
                  d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
               <path
                  d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
            </svg>
         </div>
         <div class="stat-title font-bold">Fakultas</div>
         <div class="stat-value">{{ $jmlfakultas }}</div>
         <div class="stat-desc">Jan 1st - Feb 1st</div>
      </div>
      <div class="stat">
         <div class="stat-figure text-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-door-open"
               viewBox="0 0 16 16">
               <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
               <path
                  d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z" />
            </svg>

         </div>
         <div class="stat-title font-bold">Program Studi</div>
         <div class="stat-value">{{ $jmlprodi }}</div>
         <div class="stat-desc text-success">↗︎ 400 (22%)</div>
      </div>
      <div class="stat">
         <div class="stat-figure text-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
               class="bi bi-person-badge" viewBox="0 0 16 16">
               <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
               <path
                  d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
            </svg>
         </div>
         <div class="stat-title font-bold">Dosen</div>
         <div class="stat-value">{{ $jmldosen }}</div>
         <div class="stat-desc text-error">↘︎ 90 (14%)</div>
      </div>
   </div>

   <hr />

   <div class="w-full my-5">

      @foreach ($faculties as $fac)
         <div class="collapse w-1/2 my-3 border rounded-box border-base-300 collapse-arrow">
            <input type="checkbox">
            <div class="collapse-title text-xl font-medium">
               {{ $fac->faculty_name }}
            </div>
            <div class="collapse-content ">
               <ul class="">
                  @foreach ($fac->studyprogram as $prodi)
                     <li class="ml-2 my-2 p-5 hover:bg-gray-300 rounded-md">
                        {{ $prodi->prodi_name }}
                     </li>
                  @endforeach
               </ul>
            </div>
         </div>
      @endforeach
   </div>
</div>
