<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard.') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-xl font-semibold mb-4 text-center">Data Sarana Prasarana</h1>
                    <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 mx-auto">
                        <thead>
                            <thead>
                <tr class="bg-gray-200 dark:bg-gray-700">
                    <th class="px-4 py-2 font-semibold text-left">Nama Moda</th>
                    <th class="px-4 py-2 font-semibold text-left">Jenis</th>
                    <th class="px-4 py-2 font-semibold text-left">Nomor</th>
                    <th class="px-4 py-2 font-semibold text-left">Deskripsi</th>
                    <th class="px-4 py-2 font-semibold text-left">Lokasi</th>
                    <th class="px-4 py-2 font-semibold text-left">Kapasitas</th>
                    <th class="px-4 py-2 font-semibold text-left">Satuan</th>
                    <th class="px-4 py-2 font-semibold text-left">Tanggal Pembelian</th>
                    <th class="px-4 py-2 font-semibold text-left">Aksi</th>
                </tr>
            </thead>
                        </thead>
                        <tbody>
                            @foreach ($saranaPrasarana as $sarana)
                                <tr>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $sarana->nama_moda }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $sarana->jenis }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $sarana->nomor }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $sarana->deskripsi }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $sarana->lokasi }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $sarana->kapasitas }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $sarana->satuan }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">{{ $sarana->tanggal_pembelian }}</td>
                                    <td class="py-2 px-4 border-b border-gray-200 dark:border-gray-700">
                                        <form action="{{ route('sarana.destroy', $sarana->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                                        </form>
                                        <form action="{{ route('sarana.destroy', $sarana->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus sarana prasarana ini?')">
                                             
                                                 Hapus</button>
                                        </form>
                                    </td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
