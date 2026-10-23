<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Beranda') | LaporBanjir</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background: #f1f5f9; color: #1e293b; display: flex; flex-direction: column; min-height: 100vh; }
        header { background: #0b5ea8; color: #fff; padding: 18px 24px; }
        header h1 { margin: 0; font-size: 1.5rem; }
        header p { margin: 4px 0 0; font-size: .85rem; opacity: .9; }
        nav { background: #084a86; padding: 0 24px; }
        nav a { display: inline-block; color: #cfe4f7; text-decoration: none; padding: 12px 16px; }
        nav a:hover, nav a.active { background: #0b5ea8; color: #fff; }
        main { flex: 1; max-width: 900px; width: 100%; margin: 24px auto; padding: 0 16px; }
        footer { background: #1e293b; color: #cbd5e1; text-align: center; padding: 14px; font-size: .85rem; }
        .panel { background: #fff; padding: 24px; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,.1); }
        label { display: block; margin: 14px 0 6px; font-weight: bold; }
        input { width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 6px; }
        .btn { display: inline-block; margin-top: 18px; background: #0b5ea8; color: #fff; border: 0; padding: 10px 20px; border-radius: 6px; cursor: pointer; text-decoration: none; }
        .error { color: #b91c1c; font-size: .85rem; margin-top: 4px; }
        .alert { padding: 14px 16px; border-radius: 6px; margin-bottom: 18px; }
        .alert-success { background: #dcfce7; color: #166534; border: 1px solid #86efac; }
        .alert-danger  { background: #fee2e2; color: #991b1b; border: 1px solid #fca5a5; }
        .alert-info    { background: #dbeafe; color: #1e40af; border: 1px solid #93c5fd; }
        .card { background: #fff; border-left: 6px solid #94a3b8; border-radius: 8px; padding: 16px 20px; margin-bottom: 14px; box-shadow: 0 1px 3px rgba(0,0,0,.1); }
        .card h3 { margin: 0 0 6px; }
        .card p { margin: 3px 0; font-size: .92rem; }
        .card.waspada { border-color: #eab308; } .card.siaga { border-color: #f97316; } .card.awas { border-color: #dc2626; }
        .badge { display: inline-block; padding: 3px 10px; border-radius: 12px; color: #fff; font-size: .8rem; font-weight: bold; }
        .badge.waspada { background: #eab308; } .badge.siaga { background: #f97316; } .badge.awas { background: #dc2626; }
        table { width: 100%; border-collapse: collapse; } td { padding: 6px 0; } td:first-child { width: 160px; font-weight: bold; }
    </style>
    @stack('styles')
</head>
<body>
    <header>
        <h1>LaporBanjir</h1>
        <p>Sistem Pelaporan Banjir BPBD Kabupaten Bandung</p>
    </header>

    <nav>
        <a href="{{ route('laporan.form') }}" class="{{ request()->routeIs('laporan.form', 'laporan.konfirmasi') ? 'active' : '' }}">Lapor Banjir</a>
        <a href="{{ route('laporan.index') }}" class="{{ request()->routeIs('laporan.index') ? 'active' : '' }}">Daftar Laporan</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>&copy; {{ date('Y') }} BPBD Kabupaten Bandung &mdash; LaporBanjir (Prototipe)</footer>
</body>
</html>
