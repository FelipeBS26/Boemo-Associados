<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Boemo & Associados | Advocacia de Alto Padrão')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-premium text-midnight font-body antialiased overflow-x-hidden">

    <header id="header" class="fixed top-0 left-0 w-full z-50 bg-premium/95 backdrop-blur-md border-b border-champagne/20 transition-all duration-500">
        <div class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center transition-all duration-500" id="nav-container">
            <a href="/" class="flex items-center gap-3">
                <div class="font-title text-3xl font-semibold text-champagne border-r border-champagne pr-3">B&A</div>
                <div class="font-title text-sm font-medium text-midnight tracking-wider leading-tight uppercase">Boemo &<br>Associados</div>
            </a>
            
            <nav class="hidden lg:flex gap-10">
                <a href="/a-banca" class="text-sm tracking-wide text-midnight hover:text-champagne transition-colors duration-300">A Banca</a>
                <a href="/expertises" class="text-sm tracking-wide text-midnight hover:text-champagne transition-colors duration-300">Áreas de Expertise</a>
                <a href="/contato" class="text-sm tracking-wide text-midnight hover:text-champagne transition-colors duration-300">Contato</a>
            </nav>

            <button class="lg:hidden text-midnight text-2xl" id="mobile-menu-btn" aria-label="Abrir menu">
                ☰
            </button>
        </div>
    </header>

    <main class="min-h-screen pt-28">
        @yield('content')
    </main>

    <footer class="bg-midnight text-premium pt-24 pb-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
                <div>
                    <div class="font-title text-2xl font-semibold text-champagne mb-4">Boemo & Associados</div>
                    <p class="text-premium/70 text-sm max-w-md leading-relaxed font-light">
                        Engenharia jurídica de alta performance para a proteção, estruturação e perpetuidade de grandes negócios.
                    </p>
                </div>
                <div class="flex flex-col md:items-end justify-center">
                    <a href="/contato" class="inline-flex items-center justify-center bg-champagne text-midnight px-8 py-4 text-xs font-semibold uppercase tracking-widest border border-champagne hover:bg-transparent hover:text-champagne transition-all duration-300">
                        Solicitar Parecer Executivo
                    </a>
                </div>
            </div>

            <div class="border-t border-premium/10 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-premium/40 tracking-wider">
                <p>&copy; {{ date('Y') }} Boemo & Associados. Advocacia Executiva.</p>
                <div class="flex gap-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-champagne transition-colors duration-300">Privacidade</a>
                    <a href="#" class="hover:text-champagne transition-colors duration-300">Termos de Uso</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>