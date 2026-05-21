@extends('layouts.app')

@section('title', 'Pearson Specter Litt | Advocacia e Soluções')

@section('content')

    <section class="relative min-h-[90vh] flex items-center pt-24 pb-12 lg:pb-0 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-premium via-premium to-midnight/5 z-0"></div>
        
        <div class="max-w-7xl mx-auto px-6 w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10">
            <div class="lg:col-span-7 pr-0 lg:pr-10 text-center lg:text-left">
                <span class="block text-xs uppercase tracking-[0.3em] text-champagne font-bold mb-6">
                    A Excelência não é negociável
                </span>
                
                <h1 class="font-title text-5xl md:text-6xl lg:text-7xl text-midnight leading-[1.1] font-semibold mb-8">
                    Não jogamos as probabilidades.<br>Nós jogamos o homem.
                </h1>
                
                <p class="text-lg md:text-xl text-midnight/70 leading-relaxed mb-10 max-w-2xl font-light mx-auto lg:mx-0">
                    Defendemos os interesses de corporações e grandes patrimônios com discrição absoluta, agressividade estratégica e precisão cirúrgica.
                </p>
                
                <a href="/contato" class="inline-flex items-center justify-center bg-midnight text-white px-10 py-4 text-sm font-bold uppercase tracking-widest rounded-full hover:bg-champagne transition-all duration-300 shadow-xl">
                    Falar com um Sócio
                </a>
            </div>

            <div class="lg:col-span-5 h-[400px] md:h-[500px] lg:h-[650px] relative rounded-t-full overflow-hidden shadow-2xl border-4 border-white bg-black/10 flex items-center justify-center">
                <span class="text-midnight/40 font-body text-center px-4">[ Imagem Hero: <br>Fachada ou Estátua da Justiça ]</span>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <div class="relative">
                <div class="mb-8">
                    <span class="font-title text-4xl text-champagne font-semibold">24/7</span>
                    <p class="text-xs uppercase tracking-widest text-midnight/60 mt-1">Serviço Dedicado ao Caso</p>
                </div>

                <div class="w-full h-[400px] bg-premium rounded-2xl flex items-center justify-center mb-10 relative border border-champagne/10">
                    <span class="text-midnight/30 font-body text-sm">[ Imagem: Balança da Justiça ]</span>
                    
                    <div class="absolute -bottom-8 left-0 right-0 flex justify-center gap-4">
                        <div class="w-28 h-28 bg-white rounded-full flex flex-col items-center justify-center shadow-xl border border-premium z-10">
                            <div class="font-title text-2xl font-bold text-midnight flex items-center">
                                +<span class="counter" data-target="200">0</span>
                            </div>
                            <span class="text-[10px] uppercase tracking-wider text-midnight/60 text-center leading-tight mt-1">Casos<br>Ganhos</span>
                        </div>
                        <div class="w-28 h-28 bg-white rounded-full flex flex-col items-center justify-center shadow-xl border border-premium z-10">
                            <div class="font-title text-2xl font-bold text-midnight flex items-center">
                                <span class="counter" data-target="65">0</span>%
                            </div>
                            <span class="text-[10px] uppercase tracking-wider text-midnight/60 text-center leading-tight mt-1">Acordos<br>Vantajosos</span>
                        </div>
                        <div class="w-28 h-28 bg-white rounded-full flex flex-col items-center justify-center shadow-xl border border-premium z-10">
                            <div class="font-title text-2xl font-bold text-midnight flex items-center">
                                <span class="counter" data-target="90">0</span>%
                            </div>
                            <span class="text-[10px] uppercase tracking-wider text-midnight/60 text-center leading-tight mt-1">Satisfação<br>de Clientes</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:pl-10">
                <h2 class="font-title text-4xl md:text-5xl text-midnight font-semibold mb-6 leading-tight">
                    Nossa ampla <br><span class="text-champagne">experiência jurídica</span>
                </h2>
                <p class="text-midnight/70 leading-relaxed mb-8 font-light text-base">
                    Com décadas de atuação nos tribunais superiores e em negociações corporativas de alto risco, estruturamos defesas sólidas e criamos oportunidades através do ordenamento jurídico. O sucesso não é acaso, é método.
                </p>
                
                <div class="mt-12 bg-premium p-8 rounded-2xl border-l-4 border-champagne relative">
                    <span class="absolute -top-4 left-6 text-5xl text-champagne font-title leading-none">“</span>
                    <p class="text-midnight font-title text-xl italic mb-4 mt-2">
                        Quando você estiver com as costas contra a parede, derrube a maldita parede.
                    </p>
                    <span class="text-xs uppercase tracking-widest font-bold text-midnight/60">— Harvey Specter</span>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-midnight border-y border-champagne/10 text-center">
        <div class="max-w-7xl mx-auto px-6">
            <span class="block text-xs uppercase tracking-[0.3em] text-champagne font-bold mb-4">A Banca</span>
            <h2 class="font-title text-4xl md:text-5xl text-white font-semibold mb-16">
                Nossos <span class="text-champagne">Sócios</span>
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <div class="relative group cursor-pointer">
                    <div class="absolute -inset-2 border border-champagne rounded-3xl opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all duration-500 z-0"></div>
                    
                    <div class="bg-premium rounded-2xl overflow-hidden relative z-10 text-left shadow-lg">
                        <div class="h-80 bg-black/10 flex items-center justify-center">
                            <span class="text-midnight/40 text-sm font-body">[ Imagem: Harvey Specter ]</span>
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="font-title text-2xl text-midnight font-bold mb-1">Harvey Specter</h3>
                            <p class="text-xs uppercase tracking-widest text-champagne font-bold">Name Partner</p>
                        </div>
                    </div>
                </div>

                <div class="relative group cursor-pointer">
                    <div class="absolute -inset-2 border border-champagne rounded-3xl opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all duration-500 z-0"></div>
                    <div class="bg-premium rounded-2xl overflow-hidden relative z-10 text-left shadow-lg">
                        <div class="h-80 bg-black/10 flex items-center justify-center">
                            <span class="text-midnight/40 text-sm font-body">[ Imagem: Jessica Pearson ]</span>
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="font-title text-2xl text-midnight font-bold mb-1">Jessica Pearson</h3>
                            <p class="text-xs uppercase tracking-widest text-champagne font-bold">Managing Partner</p>
                        </div>
                    </div>
                </div>

                <div class="relative group cursor-pointer">
                    <div class="absolute -inset-2 border border-champagne rounded-3xl opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all duration-500 z-0"></div>
                    <div class="bg-premium rounded-2xl overflow-hidden relative z-10 text-left shadow-lg">
                        <div class="h-80 bg-black/10 flex items-center justify-center">
                            <span class="text-midnight/40 text-sm font-body">[ Imagem: Louis Litt ]</span>
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="font-title text-2xl text-midnight font-bold mb-1">Louis Litt</h3>
                            <p class="text-xs uppercase tracking-widest text-champagne font-bold">Name Partner</p>
                        </div>
                    </div>
                </div>

                <div class="relative group cursor-pointer">
                    <div class="absolute -inset-2 border border-champagne rounded-3xl opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all duration-500 z-0"></div>
                    <div class="bg-premium rounded-2xl overflow-hidden relative z-10 text-left shadow-lg">
                        <div class="h-80 bg-black/10 flex items-center justify-center">
                            <span class="text-midnight/40 text-sm font-body">[ Imagem: Mike Ross ]</span>
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="font-title text-2xl text-midnight font-bold mb-1">Mike Ross</h3>
                            <p class="text-xs uppercase tracking-widest text-champagne font-bold">Sócio Júnior</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-premium overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-champagne font-title text-3xl italic mb-2 block">Serviços</span>
                <h2 class="font-title text-4xl md:text-5xl text-midnight font-semibold mb-12">
                    Áreas de <br><span class="text-champagne">Atendimento</span>
                </h2>

                <ul class="space-y-6">
                    <li class="flex items-center gap-6 border-b border-champagne/20 pb-4 group cursor-pointer">
                        <div class="w-10 h-10 flex items-center justify-center text-champagne group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <span class="text-xl font-title text-midnight font-semibold group-hover:text-champagne transition-colors">Fusões e Aquisições (M&A)</span>
                    </li>
                    <li class="flex items-center gap-6 border-b border-champagne/20 pb-4 group cursor-pointer">
                        <div class="w-10 h-10 flex items-center justify-center text-champagne group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <span class="text-xl font-title text-midnight font-semibold group-hover:text-champagne transition-colors">Contencioso Estratégico</span>
                    </li>
                    <li class="flex items-center gap-6 border-b border-champagne/20 pb-4 group cursor-pointer">
                        <div class="w-10 h-10 flex items-center justify-center text-champagne group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
                        </div>
                        <span class="text-xl font-title text-midnight font-semibold group-hover:text-champagne transition-colors">Direito Societário</span>
                    </li>
                    <li class="flex items-center gap-6 border-b border-champagne/20 pb-4 group cursor-pointer">
                        <div class="w-10 h-10 flex items-center justify-center text-champagne group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <span class="text-xl font-title text-midnight font-semibold group-hover:text-champagne transition-colors">Planejamento Tributário</span>
                    </li>
                    <li class="flex items-center gap-6 border-b border-champagne/20 pb-4 group cursor-pointer">
                        <div class="w-10 h-10 flex items-center justify-center text-champagne group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.957 11.957 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <span class="text-xl font-title text-midnight font-semibold group-hover:text-champagne transition-colors">Blindagem Patrimonial</span>
                    </li>
                </ul>
            </div>

            <div class="h-[600px] w-full bg-transparent flex items-center justify-center relative">
                <div class="absolute inset-0 border border-dashed border-midnight/20 rounded-2xl flex flex-col items-center justify-center">
                    <span class="text-midnight/40 font-body text-center mb-2">Lady Justice (PNG Transparente)</span>
                    <span class="text-xs text-midnight/30">Ocupará este espaço</span>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white border-t border-champagne/10">
        <div class="max-w-7xl mx-auto px-6">
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-32">
                <div>
                    <div class="text-champagne text-7xl font-title leading-none mb-4">“</div>
                    <h2 class="font-title text-4xl md:text-5xl text-midnight font-semibold">
                        Relatos dos <br>nossos <span class="text-champagne">Clientes</span>
                    </h2>
                </div>
                <div class="text-center lg:text-left flex flex-col items-center lg:items-start">
                    <div class="flex gap-2 justify-center lg:justify-start mb-6">
                        <div class="w-10 h-10 rounded-full bg-black/5 border border-white flex items-center justify-center text-[10px] text-midnight/40">Img</div>
                        <div class="w-10 h-10 rounded-full bg-black/5 border border-white -ml-4 flex items-center justify-center text-[10px] text-midnight/40">Img</div>
                        <div class="w-14 h-14 rounded-full bg-premium border-2 border-white -ml-4 shadow-md flex items-center justify-center text-[10px] text-midnight/60 z-10">Img</div>
                        <div class="w-10 h-10 rounded-full bg-black/5 border border-white -ml-4 flex items-center justify-center text-[10px] text-midnight/40">Img</div>
                    </div>
                    <h4 class="font-bold text-midnight mb-1">Richard Gomes</h4>
                    <p class="text-champagne text-sm mb-4 tracking-widest">★★★★★</p>
                    <p class="text-midnight/70 font-light italic max-w-md text-sm md:text-base leading-relaxed text-center lg:text-left">
                        "Eles mitigaram um risco de altíssimo nível na nossa última fusão. A clareza e agressividade da equipe me deram total tranquilidade para focar no negócio."
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                
                <div class="w-full h-[500px] bg-premium rounded-[40px] rounded-tr-none flex items-center justify-center shadow-lg relative border border-champagne/20">
                    <span class="text-midnight/40 font-body text-center z-10">[ Imagem: Reunião com Clientes ]</span>
                </div>

                <div class="pt-8">
                    <h2 class="font-title text-4xl text-midnight font-semibold mb-8">
                        Fale com um <br><span class="text-champagne">sócio hoje</span>
                    </h2>

                    <form class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <input type="text" placeholder="Nome" class="w-full bg-transparent border border-midnight/20 rounded-full px-6 py-4 text-sm font-light outline-none focus:border-champagne transition-colors">
                            <input type="text" placeholder="Sobrenome" class="w-full bg-transparent border border-midnight/20 rounded-full px-6 py-4 text-sm font-light outline-none focus:border-champagne transition-colors">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <input type="email" placeholder="E-mail" class="w-full bg-transparent border border-midnight/20 rounded-full px-6 py-4 text-sm font-light outline-none focus:border-champagne transition-colors">
                            <input type="tel" placeholder="Telefone" class="w-full bg-transparent border border-midnight/20 rounded-full px-6 py-4 text-sm font-light outline-none focus:border-champagne transition-colors">
                        </div>
                        <textarea placeholder="Sua mensagem..." rows="4" class="w-full bg-transparent border border-midnight/20 rounded-3xl px-6 py-4 text-sm font-light outline-none focus:border-champagne transition-colors resize-none"></textarea>
                        
                        <div class="pt-2">
                            <button type="submit" class="bg-champagne text-midnight font-bold uppercase tracking-widest text-xs px-10 py-4 rounded-full hover:bg-midnight hover:text-white transition-all duration-300">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.counter');
        const speed = 200; // Quanto menor, mais rápido

        const animateCounters = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const updateCount = () => {
                        const target = +counter.getAttribute('data-target');
                        const count = +counter.innerText;
                        const inc = target / speed;

                        if (count < target) {
                            counter.innerText = Math.ceil(count + inc);
                            setTimeout(updateCount, 15);
                        } else {
                            counter.innerText = target;
                        }
                    };
                    updateCount();
                    observer.unobserve(counter); // Roda apenas uma vez
                }
            });
        };

        const observer = new IntersectionObserver(animateCounters, {
            threshold: 0.5 // Só ativa quando 50% do número estiver visível na tela
        });

        counters.forEach(counter => {
            observer.observe(counter);
        });
    });
</script>
@endpush