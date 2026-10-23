@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
    <h2>Daftar Laporan Banjir</h2>

    @forelse ($daftarLaporan as $laporan)
        @if ($laporan['tinggi'] < 30)
            @php($status = 'Waspada') @php($kelas = 'waspada')
        @elseif ($laporan['tinggi'] <= 70)
            @php($status = 'Siaga') @php($kelas = 'siaga')
        @else
            @php($status = 'Awas') @php($kelas = 'awas')
        @endif

        @include('partials.laporan-card', ['laporan' => $laporan, 'status' => $status, 'kelas' => $kelas])
    @empty
        <x-alert type="info">Belum ada laporan banjir.</x-alert>
    @endforelse
@endsection
