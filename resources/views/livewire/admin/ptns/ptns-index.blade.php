<div>
  @if (session()->has('message'))
  <div class="mt-5 bg-green-300">
    {{ session('message_red') }}
  </div>
  @endif
  <div class="flex justify-between my-2 items-center">
    <h1 class="text-gray-600 text-lg">Semua Universitas</h1>
    <div class="flex items-center">
      <div class="w-full">
        <div class="relative">
          <input type="search" wire:model="search" class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium" placeholder="Search...">
          <div class="absolute top-0 left-0 inline-flex items-center p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
              <circle cx="10" cy="10" r="7" />
              <line x1="21" y1="21" x2="15" y2="15" />
            </svg>
          </div>
        </div>
      </div>

    </div>
  </div>
  <table class="min-w-max w-full table-auto">
    <thead>
      <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
        <th class="py-3 px-6 text-left">No</th>
        <th class="py-3 px-6 text-left">Nama Universitas</th>
        <th class="py-3 px-6 text-left">Status</th>
        <th class="py-3 px-6 text-left">Email</th>
        <th class="py-3 px-6 text-left">Kontak</th>
        <th class="py-3 px-6 text-center">Action</th>
      </tr>
    </thead>
    <tbody class="text-gray-600 text-sm font-light ">
      @php
      $no = ($ptns->currentpage() - 1) * $ptns->perpage() + 1;
      @endphp
      @foreach ($ptns as $ptn)
      <tr class="border-b border-gray-200 hover:bg-gray-100">
        <td class="py-3 px-6 text-left whitespace-nowrap">
          <div class="flex items-center">
            <div class="text-center">
              <span class="font-medium">{{ $no++ }}</span>
            </div>
          </div>
        </td>
        <td class="py-3 px-6 text-left">
          <div class="flex items-center">
            <span class="mr-1">
              {{ $ptn->nama_universitas }}
            </span>
            @if ($ptn->weblink)
            <span class="cursor-pointer">
              <a href="{{ $ptn->weblink }}" target="_blank" title="Kunjungi">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle-fill" viewBox="0 0 16 16">
                  <path d="M0 8a8 8 0 1 0 16 0A8 8 0 0 0 0 8zm5.904 2.803a.5.5 0 1 1-.707-.707L9.293 6H6.525a.5.5 0 1 1 0-1H10.5a.5.5 0 0 1 .5.5v3.975a.5.5 0 0 1-1 0V6.707l-4.096 4.096z" />
                </svg>
              </a>
            </span>
            @endif
          </div>
        </td>
        <td class="py-3 px-6 text-left uppercase font-bold {{ $ptn->statuspt == 1 ? 'text-gray-700' : 'text-gray-500' }}" 1>
          {{ $ptn->statuspt == 1 ? 'Negeri' : 'Swasta' }}
        </td>
        <td class="py-3 px-6 text-left flex cursor-pointer">
          <span class="mr-1 hover:underline">{{ $ptn->email }}</span>
        </td>
        <td class="py-3 px-6 text-left">
          {{ $ptn->kontak }}
        </td>
        <td class="py-3 px-6">
          <div class="flex item-center justify-center text-left">
            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer">
              <div title="view">
                <svg wire:click="viewDetailPt({{ $ptn->id }})" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
              </div>
            </div>
            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer">
              <div title="edit">
                <svg wire:click="editPt({{ $ptn->id }})" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
              </div>
            </div>
            <div wire:click="deletePt({{ $ptn->id }})" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 cursor-pointer">
              <div title="delete">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
              </div>
            </div>
            <div wire:click="managePt({{ $ptn->id }})" class="hover:text-purple-500 hover:scale-110 cursor-pointer" title="atur">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
              </svg>
            </div>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div class="pt-5">
    {{ $ptns->links() }}
  </div>

  <x-jet-dialog-modal wire:model="confirmingPtDeletion">
    <x-slot name="title">
      {{ __('Delete Account') }}
    </x-slot>

    <x-slot name="content">
      {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}

    </x-slot>

    <x-slot name="footer">
      <x-jet-secondary-button wire:click="$toggle('confirmingPtDeletion')" wire:loading.attr="disabled">
        {{ __('Nevermind') }}
      </x-jet-secondary-button>

      <x-jet-danger-button class="ml-2" wire:click="confirmDeletePT({{ $idPt }})" wire:loading.attr="disabled">
        {{ __('Delete Account') }}
      </x-jet-danger-button>
    </x-slot>
  </x-jet-dialog-modal>

</div>
