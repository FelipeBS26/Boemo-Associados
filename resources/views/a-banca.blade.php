@extends('layouts.app')

@section('title', 'A Banca | Pearson Specter Litt')

@section('content')

    <section class="relative pt-40 pb-32 border-b border-champagne/20 overflow-hidden">
        
        <div class="absolute inset-0 w-full h-full bg-fixed bg-center bg-cover" style="background-image: url('https://images.unsplash.com/photo-1589829085413-56de8ae18c73?auto=format&fit=crop&w=1920&q=80');">
            </div>

        <div class="absolute inset-0 bg-midnight/85 z-0"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <span class="block text-xs uppercase tracking-[0.3em] text-champagne font-bold mb-6">
                Corpo Técnico
            </span>
            <h1 class="font-title text-5xl md:text-6xl text-white font-semibold mb-8">
                Tradição, Método e <br><span class="text-champagne">Resultados Implacáveis.</span>
            </h1>
            <p class="text-lg text-white/70 max-w-2xl mx-auto font-light leading-relaxed">
                Nossa banca não aceita derrotas. Cada sócio é escolhido a dedo, formando um conselho escudo treinado para lidar com os litígios e negociações mais hostis do mercado.
            </p>
        </div>
    </section>

    <section class="py-24 bg-premium">
        <div class="max-w-6xl mx-auto px-6 space-y-32">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center group">
                <div class="lg:col-span-5 relative">
                    <div class="absolute -inset-2 border border-champagne rounded-3xl opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all duration-500 z-0"></div>
                    <div class="h-[500px] bg-black/10 rounded-2xl relative z-10 flex items-center justify-center shadow-lg overflow-hidden">
                         <span class="text-midnight/40 text-sm font-body">[ Imagem: Harvey Specter Vertical ]</span>
                    </div>
                </div>
                <div class="lg:col-span-7 lg:pl-10">
                    <span class="text-xs font-bold uppercase tracking-widest text-champagne mb-2 block">Name Partner & Head of Litigation</span>
                    <h2 class="font-title text-4xl md:text-5xl text-midnight font-bold mb-6">Harvey Specter</h2>
                    <p class="text-midnight/70 leading-relaxed font-light mb-6 text-lg">
                        Conhecido como o "melhor fechador" de Nova York (e agora atuando em âmbito global), Harvey constrói e destrói cenários jurídicos com uma facilidade que beira a arrogância — uma arrogância justificada por um histórico invicto.
                    </p>
                    <p class="text-midnight/70 leading-relaxed font-light mb-8 text-base">
                        Sua metodologia não se baseia em discutir a lei, mas em controlar as circunstâncias e os oponentes. Especialista em fusões hostis e litígios de altíssimo risco.
                    </p>
                    <div class="flex gap-4 border-t border-champagne/20 pt-6">
                        <a href="#" class="text-xs tracking-widest uppercase text-midnight hover:text-champagne font-bold transition-colors">LinkedIn</a>
                        <span class="text-champagne">•</span>
                        <a href="mailto:harvey@pearsonspecter.com" class="text-xs tracking-widest uppercase text-midnight hover:text-champagne font-bold transition-colors">Enviar Email</a>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center group">
                <div class="lg:col-span-7 lg:pr-10 order-2 lg:order-1">
                    <span class="text-xs font-bold uppercase tracking-widest text-champagne mb-2 block">Managing Partner</span>
                    <h2 class="font-title text-4xl md:text-5xl text-midnight font-bold mb-6">Jessica Pearson</h2>
                    <p class="text-midnight/70 leading-relaxed font-light mb-6 text-lg">
                        A arquiteta do poder. Jessica possui uma visão sistêmica inigualável sobre estruturas corporativas complexas. Ela não apenas enxerga o tabuleiro dez jogadas à frente; ela é quem desenha o tabuleiro.
                    </p>
                    <p class="text-midnight/70 leading-relaxed font-light mb-8 text-base">
                        Sua expertise em blindagem patrimonial e governança corporativa garante que a firma, e seus clientes, permaneçam intocáveis sob qualquer escrutínio regulatório.
                    </p>
                    <div class="flex gap-4 border-t border-champagne/20 pt-6">
                        <a href="#" class="text-xs tracking-widest uppercase text-midnight hover:text-champagne font-bold transition-colors">LinkedIn</a>
                        <span class="text-champagne">•</span>
                        <a href="mailto:jessica@pearsonspecter.com" class="text-xs tracking-widest uppercase text-midnight hover:text-champagne font-bold transition-colors">Enviar Email</a>
                    </div>
                </div>
                <div class="lg:col-span-5 relative order-1 lg:order-2">
                    <div class="absolute -inset-2 border border-champagne rounded-3xl opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all duration-500 z-0"></div>
                    <div class="h-[500px] bg-black/10 rounded-2xl relative z-10 flex items-center justify-center shadow-lg overflow-hidden">
                         <span class="text-midnight/40 text-sm font-body">[ Imagem: Jessica Pearson Vertical ]</span>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center group">
                <div class="lg:col-span-5 relative">
                    <div class="absolute -inset-2 border border-champagne rounded-3xl opacity-0 scale-95 group-hover:opacity-100 group-hover:scale-100 transition-all duration-500 z-0"></div>
                    <div class="h-[500px] bg-black/10 rounded-2xl relative z-10 flex items-center justify-center shadow-lg overflow-hidden">
                         <span class="text-midnight/40 text-sm font-body">[ Imagem: Louis Litt Vertical ]</span>
                    </div>
                </div>
                <div class="lg:col-span-7 lg:pl-10">
                    <span class="text-xs font-bold uppercase tracking-widest text-champagne mb-2 block">Name Partner & Head of Finance</span>
                    <h2 class="font-title text-4xl md:text-5xl text-midnight font-bold mb-6">Louis Litt</h2>
                    <p class="text-midnight/70 leading-relaxed font-light mb-6 text-lg">
                        Um gênio indiscutível da matemática financeira e do planejamento tributário. Louis encontra brechas legais e falhas estruturais onde auditores seniores apenas enxergam números mortos.
                    </p>
                    <p class="text-midnight/70 leading-relaxed font-light mb-8 text-base">
                        Apesar de sua abordagem excêntrica, sua lealdade à firma e sua capacidade de destruir adversários através de auditorias minuciosas fazem dele uma arma letal nas cortes financeiras.
                    </p>
                    <div class="flex gap-4 border-t border-champagne/20 pt-6">
                        <a href="#" class="text-xs tracking-widest uppercase text-midnight hover:text-champagne font-bold transition-colors">LinkedIn</a>
                        <span class="text-champagne">•</span>
                        <a href="mailto:louis@pearsonspecter.com" class="text-xs tracking-widest uppercase text-midnight hover:text-champagne font-bold transition-colors">Enviar Email</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="py-24 bg-white border-t border-champagne/10 text-center">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="font-title text-4xl text-midnight font-bold mb-6">Sua demanda exige este nível de excelência?</h2>
            <p class="text-midnight/60 font-light mb-10 leading-relaxed">
                Agende uma consulta de viabilidade técnica. Discutiremos o seu cenário com total sigilo antes de firmarmos qualquer acordo representativo.
            </p>
            <a href="/contato" class="inline-flex items-center justify-center bg-midnight text-white px-10 py-4 text-sm font-bold uppercase tracking-widest rounded-full hover:bg-champagne transition-all duration-300 shadow-lg">
                Agendar Reunião Confidencial
            </a>
        </div>
    </section>

@endsection