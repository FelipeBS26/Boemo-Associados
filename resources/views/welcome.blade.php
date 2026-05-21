@extends('layouts.app')

@section('title', 'Specter Litt | Advocacia de Elite')

@section('content')
    <section class="relative min-h-[85vh] flex items-center pt-10 lg:pt-0">
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

            <div class="lg:col-span-5 h-[400px] md:h-[500px] lg:h-[650px] relative rounded-t-full overflow-hidden shadow-2xl border-4 border-white">
                <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?auto=format&fit=crop&w=800&q=80" 
                     alt="Estatua da Justiça" 
                     class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <section class="py-24 bg-midnight border-y border-champagne/20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <span class="block text-xs uppercase tracking-[0.3em] text-champagne font-bold mb-4">Corpo Técnico</span>
                <h2 class="font-title text-4xl md:text-5xl text-white font-semibold">Nossos Sócios Seniores</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <div class="group bg-premium rounded-2xl overflow-hidden shadow-lg transition-transform duration-300 hover:-translate-y-2">
                    <div class="h-80 overflow-hidden">
                        <img src="https://i.pinimg.com/736x/88/ce/1f/88ce1fa472f1b4020a5decc72023dc88.jpg" alt="Harvey Specter" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-title text-2xl text-midnight font-bold mb-1">Harvey Specter</h3>
                        <p class="text-xs font-bold uppercase tracking-widest text-champagne">Name Partner / M&A</p>
                    </div>
                </div>

                <div class="group bg-premium rounded-2xl overflow-hidden shadow-lg transition-transform duration-300 hover:-translate-y-2">
                    <div class="h-80 overflow-hidden">
                        <img src="https://i.pinimg.com/736x/cb/d9/af/cbd9af8402db2bd4f31cce1676677f52.jpg" alt="Jessica Pearson" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-title text-2xl text-midnight font-bold mb-1">Jessica Pearson</h3>
                        <p class="text-xs font-bold uppercase tracking-widest text-champagne">Managing Partner</p>
                    </div>
                </div>

                <div class="group bg-premium rounded-2xl overflow-hidden shadow-lg transition-transform duration-300 hover:-translate-y-2">
                    <div class="h-80 overflow-hidden">
                        <img src="https://i.pinimg.com/736x/43/d7/c7/43d7c7112028682a0b3c66ba21c43105.jpg" alt="Louis Litt" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-title text-2xl text-midnight font-bold mb-1">Louis Litt</h3>
                        <p class="text-xs font-bold uppercase tracking-widest text-champagne">Name Partner / Tributário</p>
                    </div>
                </div>

                <div class="group bg-premium rounded-2xl overflow-hidden shadow-lg transition-transform duration-300 hover:-translate-y-2">
                    <div class="h-80 overflow-hidden">
                        <img src="https://i.pinimg.com/736x/01/cc/08/01cc08dfa5edaa86e30eb45ca09cdd5c.jpg" alt="Mike Ross" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-title text-2xl text-midnight font-bold mb-1">Mike Ross</h3>
                        <p class="text-xs font-bold uppercase tracking-widest text-champagne">Sócio Júnior / Contencioso</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center divide-y md:divide-y-0 md:divide-x divide-champagne/30">
                <div class="py-4 md:py-0">
                    <span class="block font-title text-5xl md:text-6xl text-midnight font-bold mb-2">+200</span>
                    <span class="block text-xs uppercase tracking-widest text-midnight/60">Casos Ganhos<br>no Ano</span>
                </div>
                <div class="py-4 md:py-0">
                    <span class="block font-title text-5xl md:text-6xl text-midnight font-bold mb-2">98%</span>
                    <span class="block text-xs uppercase tracking-widest text-midnight/60">De Acordos<br>Favoráveis</span>
                </div>
                <div class="py-4 md:py-0">
                    <span class="block font-title text-5xl md:text-6xl text-midnight font-bold mb-2">R$ 5 Bi</span>
                    <span class="block text-xs uppercase tracking-widest text-midnight/60">Em Operações<br>Estruturadas</span>
                </div>
            </div>
        </div>
    </section>
@endsection