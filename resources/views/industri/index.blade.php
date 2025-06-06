<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Industri List') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 flex justify-between">
                <form action="{{ route('industri.index') }}" method="GET" class="flex space-x-2">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama industri..."
                        class="rounded-lg border-gray-300 shadow-sm text-sm px-4 py-2 dark:bg-gray-700 dark:text-white" />
                    <button type="submit"
                        class=" bg-blue-600 text-white font-medium rounded-lg text-base px-5 py-2.5 hover:bg-blue-700">Cari</button>
                </form>
                <a href="{{ route('industri.create') }}" 
                    class="inline-block text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-base px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Tambah List Industri
                </a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-lg text-center">
                <div class="p-2">
                    <h1>Data Industri</h1>
                </div>
                <table class="w-full text-lg text-left rtl:text-right text-gray-500 dark:text-gray-300">
                    <thead class="text-base text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="text-center align-middle">No.</th>
                        <th class="text-center align-middle">Nama Perusahaan</th>
                        <th class="text-center align-middle">Bidang Usaha</th>
                        <th class="text-center align-middle">Alamat</th>
                        <th class="text-center align-middle">Kontak</th>
                        <th class="text-center align-middle">Email</th>
                    </tr>
                </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach($industris as $industri)
                    <tr class="{{ $loop->odd ? 'bg-white dark:bg-gray-800' : 'bg-gray-50 dark:bg-gray-700' }}">
                    <td class="px-2 py-2">{{ $loop->iteration }}</td>
                    <td class="px-2 py-2">{{ $industri->nama }}</td>
                    <td class="px-2 py-2">{{ $industri->bidang_usaha }}</td>
                    <td class="px-2 py-2">{{ $industri->alamat }}</td>
                    <td class="px-2 py-2">{{ $industri->kontak }}</td>
                    <td class="px-2 py-2">{{ $industri->email }}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            </div>
            <div class="mt-4">
                {{ $industris->withQueryString()->links() }}
            </div>
        </div>
    </div>
</div>
</x-app-layout>
