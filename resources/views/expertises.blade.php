@extends('layouts.app')

@section('title', 'Áreas de Expertise | Pearson Specter Litt')

@section('content')

    <section class="relative pt-40 pb-32 border-b border-champagne/20 overflow-hidden">
        
        <div class="absolute inset-0 w-full h-full bg-fixed bg-center bg-cover" style="background-image: url('https://images.unsplash.com/photo-1505664194779-8beaceb93744?auto=format&fit=crop&w=1920&q=80');"></div>

        <div class="absolute inset-0 bg-midnight/85 z-0"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <span class="block text-xs uppercase tracking-[0.3em] text-champagne font-bold mb-6">
                Nossos Campos de Força
            </span>
            <h1 class="font-title text-5xl md:text-6xl text-white font-semibold mb-8">
                Engenharia Jurídica <br><span class="text-champagne">Multidisciplinar.</span>
            </h1>
            <p class="text-lg text-white/70 max-w-2xl mx-auto font-light leading-relaxed">
                Atuamos nas interseções mais complexas do direito corporativo, financeiro e tributário. Não oferecemos respostas padronizadas; construímos estruturas legais exclusivas para proteger e expandir o seu patrimônio.
            </p>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-5xl mx-auto px-6 space-y-24">
            
            <div class="flex flex-col md:flex-row gap-8 md:gap-16 items-start group">
                <div class="w-16 h-16 shrink-0 rounded-full border border-champagne flex items-center justify-center text-champagne group-hover:bg-champagne group-hover:text-white transition-all duration-300 shadow-sm">
                    <span class="font-title text-2xl font-bold">01</span>
                </div>
                <div>
                    <h2 class="font-title text-3xl md:text-4xl text-midnight font-semibold mb-4 group-hover:text-champagne transition-colors">Fusões e Aquisições (M&A)</h2>
                    <p class="text-midnight/70 leading-relaxed font-light mb-6 text-lg">
                        Estruturação integral de operações societárias, desde *due diligence* rigorosa até a formatação de contratos definitivos. Blindamos a transação contra passivos ocultos e otimizamos a arquitetura do negócio para garantir a máxima rentabilidade e segurança dos acionistas.
                    </p>
                    <ul class="space-y-2 text-sm uppercase tracking-widest font-bold text-midnight/50">
                        <li>— Auditoria Jurídica (Due Diligence)</li>
                        <li>— Negociações de Compra e Venda (SPA)</li>
                        <li>— Joint Ventures e Alianças Estratégicas</li>
                    </ul>
                </div>
            </div>

            <hr class="border-champagne/20">

            <div class="flex flex-col md:flex-row gap-8 md:gap-16 items-start group">
                <div class="w-16 h-16 shrink-0 rounded-full border border-champagne flex items-center justify-center text-champagne group-hover:bg-champagne group-hover:text-white transition-all duration-300 shadow-sm">
                    <span class="font-title text-2xl font-bold">02</span>
                </div>
                <div>
                    <h2 class="font-title text-3xl md:text-4xl text-midnight font-semibold mb-4 group-hover:text-champagne transition-colors">Contencioso Estratégico</h2>
                    <p class="text-midnight/70 leading-relaxed font-light mb-6 text-lg">
                        Representação incisiva em litígios de alta sensibilidade financeira e reputacional. Nossa atuação vai além das cortes: mapeamos as fraquezas da parte oponente e alavancamos pressões estruturais para forçar acordos altamente favoráveis ou aniquilar teses adversárias nos tribunais superiores.
                    </p>
                    <ul class="space-y-2 text-sm uppercase tracking-widest font-bold text-midnight/50">
                        <li>— Litígios Societários e de Mercado de Capitais</li>
                        <li>— Disputas Contratuais Complexas</li>
                        <li>— Atuação em Tribunais Superiores (STJ e STF)</li>
                    </ul>
                </div>
            </div>

            <hr class="border-champagne/20">

            <div class="flex flex-col md:flex-row gap-8 md:gap-16 items-start group">
                <div class="w-16 h-16 shrink-0 rounded-full border border-champagne flex items-center justify-center text-champagne group-hover:bg-champagne group-hover:text-white transition-all duration-300 shadow-sm">
                    <span class="font-title text-2xl font-bold">03</span>
                </div>
                <div>
                    <h2 class="font-title text-3xl md:text-4xl text-midnight font-semibold mb-4 group-hover:text-champagne transition-colors">Planejamento Tributário</h2>
                    <p class="text-midnight/70 leading-relaxed font-light mb-6 text-lg">
                        Engenharia fiscal projetada para mitigar severamente a carga tributária sem expor a corporação a riscos regulatórios. Desenhamos estruturas inteligentes que aproveitam as assimetrias e incentivos do sistema fiscal para converter o que seria passivo em fluxo de caixa ativo.
                    </p>
                    <ul class="space-y-2 text-sm uppercase tracking-widest font-bold text-midnight/50">
                        <li>— Otimização de Carga Tributária Corporativa</li>
                        <li>— Estruturação Fiscal de Operações Internacionais</li>
                        <li>— Defesa em Autuações Fiscais de Grande Porte</li>
                    </ul>
                </div>
            </div>

            <hr class="border-champagne/20">

            <div class="flex flex-col md:flex-row gap-8 md:gap-16 items-start group">
                <div class="w-16 h-16 shrink-0 rounded-full border border-champagne flex items-center justify-center text-champagne group-hover:bg-champagne group-hover:text-white transition-all duration-300 shadow-sm">
                    <span class="font-title text-2xl font-bold">04</span>
                </div>
                <div>
                    <h2 class="font-title text-3xl md:text-4xl text-midnight font-semibold mb-4 group-hover:text-champagne transition-colors">Blindagem e Sucessão Patrimonial</h2>
                    <p class="text-midnight/70 leading-relaxed font-light mb-6 text-lg">
                        Mecanismos definitivos para a preservação do legado familiar e corporativo. Isolamos ativos valiosos de riscos operacionais através da criação de Holdings, Offshores e Fundos Exclusivos, garantindo uma transição geracional livre de conflitos e litígios predatórios.
                    </p>
                    <ul class="space-y-2 text-sm uppercase tracking-widest font-bold text-midnight/50">
                        <li>— Constituição de Holdings Patrimoniais</li>
                        <li>— Governança e Protocolos Familiares</li>
                        <li>— Proteção Internacional de Ativos</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section class="py-24 bg-premium border-t border-champagne/10 text-center">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="font-title text-4xl text-midnight font-bold mb-6">Precisa de um diagnóstico preciso?</h2>
            <p class="text-midnight/60 font-light mb-10 leading-relaxed">
                Submeta o escopo da sua demanda para análise. Um de nossos diretores retornará com uma avaliação preliminar do cenário jurídico aplicável.
            </p>
            <a href="/contato" class="inline-flex items-center justify-center bg-midnight text-white px-10 py-4 text-sm font-bold uppercase tracking-widest rounded-full hover:bg-champagne transition-all duration-300 shadow-lg">
                Iniciar Contato Confidencial
            </a>
        </div>
    </section>

@endsection