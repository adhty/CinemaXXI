@extends('layouts.app')

@section('content')
<div class="p-6 bg-gray-100 min-h-screen">
    <!-- judul -->

    <h1 class="text-3x1 font-bold text-gray-800 mb-6">Dashboard Bioskop</h1>

    <!--ringkasan datanya-->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-5 rounded-x1 shadow hover:shadow-1g transition">
            <h2 class="text-gray-500">Total Film</h2>
            <p class="text-3x1 font-bold text-blue-600">{{ $total_film ?? 0 }}</p>
        </div>

        <div class="bg-white p-5 rounded-x1 shadow hover:shadow-1g transition">
            <h2 class="text-gray-500">Jadwal Tayang</h2>
            <p class="text-3x1 font-bold text-green-600">{{ $total_jadwal ?? 0 }}</p>
        </div>

        <div class="bg-white p-5 rounded-x1 shadow hover:shadow-1g transition">
            <h2 class="text-gray-500">Tiket Terjual</h2>
            <p class="text-3x1 font-bold text-orange-600">{{ $total_tiket ?? 0 }}</p>
        </div>

        <div class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition">
            <h2 class="text-gray-500">Pendapatan</h2>
            <p class="text-3xl font-bold text-red-600">Rp {{ number_format($pendapatan ?? 0, 0, ',', '.') }}</p>
        </div>
    </div>

     <!-- Tabel Jadwal Film -->
    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-semibold mb-4">Jadwal Film Terbaru</h2>
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-3">No</th>
                    <th class="p-3">Judul Film</th>
                    <th class="p-3">Tanggal</th>
                    <th class="p-3">Jam</th>
                    <th class="p-3">Studio</th>
                    <th class="p-3">Sisa Kursi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($jadwal as $index => $item)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3">{{ $index + 1 }}</td>
                    <td class="p-3">{{ $item->film->judul ?? '-' }}</td>
                    <td class="p-3">{{ $item->tanggal ?? '-' }}</td>
                    <td class="p-3">{{ $item->jam ?? '-' }}</td>
                    <td class="p-3">{{ $item->studio->nama ?? '-' }}</td>
                    <td class="p-3">{{ $item->sisa_kursi ?? 0 }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center p-4 text-gray-500">Tidak ada jadwal tersedia</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection