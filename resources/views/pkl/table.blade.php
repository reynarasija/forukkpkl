<table class="w-full text-lg text-left text-gray-500 dark:text-gray-300">
    <thead class="text-base text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th>No.</th>
            <th>Siswa</th>
            <th>Guru</th>
            <th>Industri</th>
            <th>Mulai</th>
            <th>Selesai</th>
        </tr>
    </thead>
    <tbody>
        @forelse($pkls as $pkl)
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            <tr class="{{ $loop->odd ? 'bg-white dark:bg-gray-800' : 'bg-gray-50 dark:bg-gray-700' }}">
                <td class="px-2 py-2">{{ $loop->iteration }}</td>
                <td class="px-2 py-2">{{ $pkl->siswa->nama ?? '-' }}</td>
                <td class="px-2 py-2">{{ $pkl->guru->nama ?? '-' }}</td>
                <td class="px-2 py-2">{{ $pkl->industri->nama ?? '-' }}</td>
                <td class="px-2 py-2">{{ \Carbon\Carbon::parse($pkl->mulai)->locale('id')->translatedFormat('d F Y') }}</td>
                <td class="px-2 py-2">{{ \Carbon\Carbon::parse($pkl->selesai)->locale('id')->translatedFormat('d F Y') }}</td>
            </tr>
            </tbody>
        @empty
            <tr>
                <td colspan="6" class="text-center py-4">Tidak ada data yang ditemukan.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<div class="mt-4">
    {{ $pkls->withQueryString()->links() }}
</div>