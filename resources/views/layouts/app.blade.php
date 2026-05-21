<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Specter Litt | Advocacia de Alta Performance')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-premium text-midnight font-body antialiased overflow-x-hidden">

    <header id="header" class="fixed top-0 left-0 w-full z-50 bg-premium/95 backdrop-blur-md border-b border-champagne/20 transition-all duration-500">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center" id="nav-container">
            
            <a href="/" class="flex items-center gap-4">
                <div class="font-title text-4xl font-bold text-champagne border-r border-champagne pr-4">SL</div>
                <div class="font-title text-lg font-semibold text-midnight tracking-widest leading-tight uppercase">Specter Litt<br><span class="text-xs font-body tracking-[0.2em] text-midnight/60">Advogados</span></div>
            </a>
            
            <nav class="hidden lg:flex gap-10 items-center">
                <a href="/a-banca" class="text-sm tracking-widest uppercase text-midnight hover:text-champagne transition-colors duration-300">A Banca</a>
                <a href="/expertises" class="text-sm tracking-widest uppercase text-midnight hover:text-champagne transition-colors duration-300">Áreas de Expertise</a>
                <a href="/contato" class="text-xs tracking-widest uppercase text-white bg-midnight px-6 py-3 rounded-full hover:bg-champagne transition-colors duration-300">Contato</a>
            </nav>

            <button class="lg:hidden text-midnight text-2xl" id="mobile-menu-btn" aria-label="Abrir menu">☰</button>
        </div>
    </header>

    <main class="min-h-screen pt-28">
        @yield('content')
    </main>

    <footer class="bg-midnight text-premium pt-24 pb-10">
        <div class="max-w-7xl mx-auto px-6 text-center lg:text-left">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16 items-center">
                <div>
                    <div class="font-title text-3xl font-semibold text-champagne mb-4">Specter Litt Advogados</div>
                    <p class="text-premium/70 text-sm max-w-md leading-relaxed font-light mx-auto lg:mx-0">
                        A última linha de defesa para corporações que não aceitam perder.
                    </p>
                </div>
                <div class="flex flex-col md:items-end justify-center">
                    <a href="/contato" class="inline-flex items-center justify-center bg-champagne text-midnight px-8 py-4 text-xs font-bold uppercase tracking-widest rounded-full hover:bg-white hover:text-midnight transition-all duration-300 shadow-lg">
                        Solicitar Parecer Executivo
                    </a>
                </div>
            </div>
            <div class="border-t border-premium/10 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-premium/40 tracking-wider">
                <p>&copy; {{ date('Y') }} Specter Litt. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

</body>
</html>