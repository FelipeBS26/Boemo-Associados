<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pearson Specter Litt | Advocacia Corporativa')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-premium text-midnight font-body antialiased overflow-x-hidden">

    <header id="site-header" class="fixed top-0 left-0 w-full z-50 bg-transparent py-6 transition-all duration-500">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            
            <a href="/" class="flex items-center gap-4">
                <div class="font-title text-4xl font-bold text-champagne border-r border-champagne pr-4">PSL</div>
                <div class="font-title text-lg font-semibold text-midnight tracking-widest leading-tight uppercase">Pearson Specter Litt<br><span class="text-xs font-body tracking-[0.2em] text-midnight/60">Advogados</span></div>
            </a>
            
            <nav class="hidden lg:flex gap-10 items-center">
                <a href="/a-banca" class="text-sm tracking-widest uppercase text-midnight hover:text-champagne transition-colors duration-300">A Banca</a>
                <a href="/expertises" class="text-sm tracking-widest uppercase text-midnight hover:text-champagne transition-colors duration-300">Áreas de Expertise</a>
                <a href="/contato" id="header-btn" class="text-xs tracking-widest uppercase text-midnight border border-midnight bg-transparent px-6 py-3 rounded-full hover:bg-champagne hover:text-midnight hover:border-champagne transition-all duration-300">
                    Contato
                </a>
            </nav>

            <div id="mobile-menu" class="fixed inset-0 bg-premium/98 backdrop-blur-md z-40 flex flex-col items-center justify-center opacity-0 pointer-events-none transition-all duration-500 lg:hidden">
                <nav class="flex flex-col items-center gap-8">
                    <a href="/" class="mobile-link text-2xl font-title text-midnight hover:text-champagne transition-colors">Página Inicial</a>
                    <a href="/a-banca" class="mobile-link text-2xl font-title text-midnight hover:text-champagne transition-colors">A Banca</a>
                    <a href="/expertises" class="mobile-link text-2xl font-title text-midnight hover:text-champagne transition-colors">Áreas de Expertise</a>
                    <a href="/contato" class="mobile-link mt-4 px-8 py-4 bg-midnight text-white text-sm font-bold uppercase tracking-widest rounded-full hover:bg-champagne transition-colors shadow-lg">
                        Contato
                    </a>
                </nav>
            </div>

            <button class="lg:hidden text-midnight text-2xl relative z-50 transition-colors" id="mobile-menu-btn" aria-label="Alternar menu">☰</button>
        </div>
    </header>

    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-midnight text-premium pt-20 pb-10 border-t-4 border-champagne">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="md:col-span-2">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="font-title text-4xl font-bold text-champagne border-r border-champagne pr-4">PSL</div>
                        <div class="font-title text-lg font-semibold text-white tracking-widest leading-tight uppercase">Pearson Specter Litt</div>
                    </div>
                    <p class="text-premium/60 text-sm max-w-sm leading-relaxed font-light">
                        A última linha de defesa para corporações que não aceitam perder. Atuação cirúrgica em litígios de alta complexidade.
                    </p>
                </div>
                
                <div>
                    <h4 class="font-title text-xl text-champagne mb-6">Navegação</h4>
                    <ul class="space-y-3 text-sm text-premium/70">
                        <li><a href="/" class="hover:text-champagne transition-colors">Página Inicial</a></li>
                        <li><a href="/a-banca" class="hover:text-champagne transition-colors">A Banca</a></li>
                        <li><a href="/expertises" class="hover:text-champagne transition-colors">Expertises</a></li>
                        <li><a href="/contato" class="hover:text-champagne transition-colors">Contato</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-title text-xl text-champagne mb-6">Conexões</h4>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full border border-premium/20 flex items-center justify-center hover:bg-champagne hover:border-champagne text-premium transition-all duration-300">In</a>
                        <a href="#" class="w-10 h-10 rounded-full border border-premium/20 flex items-center justify-center hover:bg-champagne hover:border-champagne text-premium transition-all duration-300">X</a>
                        <a href="#" class="w-10 h-10 rounded-full border border-premium/20 flex items-center justify-center hover:bg-champagne hover:border-champagne text-premium transition-all duration-300">Ig</a>
                    </div>
                </div>
            </div>

            <div class="border-t border-premium/10 pt-8 flex flex-col items-center justify-center text-center">
                <p class="text-sm font-title tracking-wider text-premium/60 mb-2">
                    &copy; 2026 Pearson Specter Litt. Todos os direitos reservados.
                </p>
                <p class="text-xs text-premium/40 font-light tracking-wide">
                    Design e Desenvolvimento por <a href="#" class="text-champagne hover:underline font-bold">Felipe Boemo</a>
                </p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.getElementById('site-header');
            const btn = document.getElementById('header-btn');

            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    // Estado Rolado (Fundo sólido, botão preenchido)
                    header.classList.replace('bg-transparent', 'bg-premium/95');
                    header.classList.replace('py-6', 'py-4');
                    header.classList.add('backdrop-blur-md', 'shadow-sm');
                    
                    btn.classList.replace('bg-transparent', 'bg-midnight');
                    btn.classList.replace('text-midnight', 'text-white');
                    btn.classList.replace('border-midnight', 'border-transparent');
                } else {
                    // Estado Inicial (Transparente, botão vazado)
                    header.classList.replace('bg-premium/95', 'bg-transparent');
                    header.classList.replace('py-4', 'py-6');
                    header.classList.remove('backdrop-blur-md', 'shadow-sm');
                    
                    btn.classList.replace('bg-midnight', 'bg-transparent');
                    btn.classList.replace('text-white', 'text-midnight');
                    btn.classList.replace('border-transparent', 'border-midnight');
                }
            });
        });

        <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Lógica do Scroll no Header
            const header = document.getElementById('site-header');
            const btn = document.getElementById('header-btn');

            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.replace('bg-transparent', 'bg-premium/95');
                    header.classList.replace('py-6', 'py-4');
                    header.classList.add('backdrop-blur-md', 'shadow-sm');
                    
                    if(btn) {
                        btn.classList.replace('bg-transparent', 'bg-midnight');
                        btn.classList.replace('text-midnight', 'text-white');
                        btn.classList.replace('border-midnight', 'border-transparent');
                    }
                } else {
                    header.classList.replace('bg-premium/95', 'bg-transparent');
                    header.classList.replace('py-4', 'py-6');
                    header.classList.remove('backdrop-blur-md', 'shadow-sm');
                    
                    if(btn) {
                        btn.classList.replace('bg-midnight', 'bg-transparent');
                        btn.classList.replace('text-white', 'text-midnight');
                        btn.classList.replace('border-transparent', 'border-midnight');
                    }
                }
            });

            // Lógica do Menu Mobile
            const mobileBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileLinks = document.querySelectorAll('.mobile-link');
            let isMenuOpen = false;

            if (mobileBtn && mobileMenu) {
                const toggleMenu = () => {
                    isMenuOpen = !isMenuOpen;
                    if (isMenuOpen) {
                        // Mostra o menu e muda o ícone para "X"
                        mobileMenu.classList.remove('opacity-0', 'pointer-events-none');
                        mobileMenu.classList.add('opacity-100', 'pointer-events-auto');
                        mobileBtn.innerHTML = '✕';
                        document.body.style.overflow = 'hidden'; // Evita scroll no fundo
                    } else {
                        // Esconde o menu e volta o ícone de hambúrguer
                        mobileMenu.classList.remove('opacity-100', 'pointer-events-auto');
                        mobileMenu.classList.add('opacity-0', 'pointer-events-none');
                        mobileBtn.innerHTML = '☰';
                        document.body.style.overflow = 'auto'; // Devolve o scroll
                    }
                };

                mobileBtn.addEventListener('click', toggleMenu);

                // Fecha o menu automaticamente ao clicar em um link
                mobileLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        if (isMenuOpen) toggleMenu();
                    });
                });
            }
        });
    </script>

    </script>
    
    @stack('scripts')
</body>
</html>