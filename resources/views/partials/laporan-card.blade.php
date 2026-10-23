<div class="card {{ $kelas }}">
    <h3>{{ $laporan['lokasi'] }}</h3>
    <p>Pelapor: {{ $laporan['nama'] }}</p>
    <p>Tinggi genangan: <strong>{{ $laporan['tinggi'] }} cm</strong></p>
    <p>Waktu: {{ $laporan['waktu'] }}</p>
    <p>Status: <span class="badge {{ $kelas }}">{{ $status }}</span></p>
</div>
