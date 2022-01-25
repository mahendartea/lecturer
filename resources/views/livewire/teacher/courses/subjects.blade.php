<div class="overflow-x-auto">
    <div class="flex mx-auto justify-between items-center">
        <h1 class="my-5 font-bold text-neutral">Daftar Matakuliah {{ $ta->ket_tahun_ajar }}</h1>
        <button class="text-rigth btn btn-sm btn-primary-content"> Tambah</button>
    </div>
    @if (count($subjects) >= 1)
        <table class="table w-full">
            <thead>
                <tr>
                    <th class="bg-neutral text-primary-content">No</th>
                    <th class="bg-neutral text-primary-content">Kode MK</th>
                    <th class="bg-neutral text-primary-content">Nama Mata Kuliah</th>
                    <th class="bg-neutral text-primary-content">Kelas</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = ($subjects->currentpage() - 1) * $subjects->perpage() + 1;
                @endphp

                @foreach ($subjects as $subject)
                    <tr>
                        <td class="py-2 text-neutral">{{ $no++ }}</td>
                        <td class="text-neutral">{{ $subject->code_course }}</td>
                        <td class="text-neutral">{{ $subject->name_course }}</td>
                        <td class="text-neutral">{{ $subject->class }}</td>
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
</div>
