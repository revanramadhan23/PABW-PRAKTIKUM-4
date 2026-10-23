<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // Data contoh (tanpa database)
    private function dataLaporan(): array
    {
        return [
            ['id' => 1, 'nama' => 'Asep Sunandar',  'lokasi' => 'Dayeuhkolot, Kab. Bandung', 'tinggi' => 85, 'waktu' => '2026-10-20 07:15'],
            ['id' => 2, 'nama' => 'Siti Rahmawati', 'lokasi' => 'Baleendah, Kab. Bandung',   'tinggi' => 45, 'waktu' => '2026-10-20 09:40'],
            ['id' => 3, 'nama' => 'Dedi Kurniawan', 'lokasi' => 'Bojongsoang, Kab. Bandung', 'tinggi' => 20, 'waktu' => '2026-10-21 06:05'],
            ['id' => 4, 'nama' => 'Rina Marlina',   'lokasi' => 'Rancaekek, Kab. Bandung',   'tinggi' => 70, 'waktu' => '2026-10-22 18:30'],
        ];
    }

    public function form()
    {
        return view('laporan.form');
    }

    public function kirim(Request $request)
    {
        $data = $request->validate([
            'nama'   => 'required|string|max:100',
            'lokasi' => 'required|string|max:150',
            'tinggi' => 'required|integer|min:1|max:500',
        ]);

        // Post-Redirect-Get: data disimpan sementara di session (flash)
        return redirect()->route('laporan.konfirmasi')->with('laporan', $data);
    }

    public function konfirmasi()
    {
        $laporan = session('laporan');

        if (!$laporan) {
            return redirect()->route('laporan.form');
        }

        return view('laporan.konfirmasi', compact('laporan'));
    }

    public function index()
    {
        return view('laporan.index', ['daftarLaporan' => $this->dataLaporan()]);
    }
}
