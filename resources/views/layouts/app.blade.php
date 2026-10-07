<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $judul ?? 'Laravel' }} - TugasWeb P9</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { theme: { extend: { fontFamily: { sans: ['"Plus Jakarta Sans"', 'ui-sans-serif', 'system-ui', 'sans-serif'] } } } }
    </script>
</head>
<body class="relative min-h-screen overflow-x-hidden bg-slate-950 font-sans text-slate-300 antialiased">

    {{-- Cahaya dekoratif latar belakang --}}
    <div class="pointer-events-none absolute inset-0 -z-0 overflow-hidden">
        <div class="absolute -left-32 -top-32 h-96 w-96 rounded-full bg-pink-600/25 blur-3xl"></div>
        <div class="absolute -right-24 top-40 h-96 w-96 rounded-full bg-violet-600/25 blur-3xl"></div>
        <div class="absolute bottom-0 left-1/3 h-80 w-80 rounded-full bg-cyan-500/10 blur-3xl"></div>
    </div>

    <div class="relative z-10">
        <header class="sticky top-0 z-20 border-b border-white/10 bg-slate-950/60 backdrop-blur-xl">
            <nav class="mx-auto flex max-w-5xl items-center justify-between px-5 py-3.5">
                <a href="{{ url('/') }}" class="flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-gradient-to-br from-pink-500 to-violet-500 text-sm font-extrabold text-white shadow-lg shadow-pink-500/30">L9</span>
                    <span class="text-lg font-extrabold tracking-tight text-white">Laravel<span class="text-pink-500">.P9</span></span>
                </a>

                @php $menu = ['/' => 'Beranda', 'about' => 'Tentang', 'contact' => 'Kontak']; @endphp
                <div class="flex items-center gap-1">
                    @foreach ($menu as $pola => $label)
                        <a href="{{ url($pola) }}"
                           class="rounded-full px-4 py-2 text-sm font-medium transition {{ request()->is($pola) ? 'bg-white/10 text-white' : 'text-slate-400 hover:text-white' }}">{{ $label }}</a>
                    @endforeach
                </div>
            </nav>
        </header>

        <main class="mx-auto max-w-5xl px-5 py-14">
            @yield('content')
        </main>

        <footer class="pb-10 text-center text-sm text-slate-500">
            Tugas Rutin 9 &middot; Setup Laravel &middot; dibuat dengan Blade &amp; Tailwind
        </footer>
    </div>
</body>
</html>
