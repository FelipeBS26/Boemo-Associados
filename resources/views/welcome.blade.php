@extends('layouts.app')

@section('title', 'Boemo & Associados | Engenharia Jurídica Corporativa')

@section('content')
    <section class="relative min-h-[90vh] flex items-center pt-10 lg:pt-0">
        <div class="absolute inset-0 bg-gradient-to-r from-premium via-premium to-midnight/5 z-0"></div>
        
        <div class="max-w-7xl mx-auto px-6 w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10">
            
            <div class="lg:col-span-7 pr-0 lg:pr-10">
                <span class="block text-xs uppercase tracking-[3px] text-champagne font-semibold mb-6">
                    Excelência e Resolutividade Jurídica
                </span>
                
                <h1 class="font-title text-4xl md:text-5xl lg:text-6xl text-midnight leading-[1.15] font-medium mb-8">
                    A última linha de defesa do seu patrimônio e a primeira diretriz da sua expansão.
                </h1>
                
                <p class="text-lg text-midnight/70 leading-relaxed mb-12 max-w-2xl font-light">
                    A complexidade do cenário corporativo não admite falhas. A Boemo & Associados entrega engenharia jurídica de alta performance para a proteção, estruturação e perpetuidade de grandes negócios.
                </p>
                
                <a href="/contato" class="inline-flex items-center justify-center bg-champagne text-midnight px-8 py-4 text-sm font-semibold uppercase tracking-widest border border-champagne hover:bg-transparent hover:text-champagne transition-all duration-300">
                    Solicitar Parecer Executivo
                </a>
            </div>

            <div class="lg:col-span-5 h-[500px] lg:h-[650px] relative rounded-sm overflow-hidden shadow-2xl">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80" 
                     alt="Fachada corporativa" 
                     class="w-full h-full object-cover">
                
                <div class="absolute inset-0 bg-midnight/20"></div>
            </div>
            
        </div>
    </section>

    <section class="py-32 bg-white border-b border-champagne/10">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            
            <div class="lg:col-span-5 flex justify-center items-center bg-premium p-16 rounded-sm">
                <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full max-w-[280px] text-champagne">
                    <circle cx="50" cy="50" r="48" stroke="currentColor" stroke-width="0.5"/>
                    <path d="M50 15V85" stroke="currentColor" stroke-width="1"/>
                    <path d="M25 35H75" stroke="currentColor" stroke-width="0.5"/>
                    <path d="M30 65H70" stroke="currentColor" stroke-width="0.5"/>
                </svg>
            </div>

            <div class="lg:col-span-7 pl-0 lg:pl-10">
                <span class="block text-xs uppercase tracking-[3px] text-champagne font-semibold mb-4">
                    A Nossa Filosofia
                </span>
                
                <h2 class="font-title text-3xl md:text-4xl text-midnight leading-snug font-medium mb-8">
                    O Direito como Ferramenta <br>de Poder e Proteção.
                </h2>
                
                <p class="text-midnight/60 leading-relaxed mb-12 text-lg font-light">
                    Não atuamos com o padrão da indústria. Cada caso que assumimos passa por uma análise multidisciplinar rigorosa. Nosso foco não é apenas mitigar riscos, mas criar cenários jurídicos seguros que viabilizem o crescimento e a perpetuidade dos seus negócios.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-10">
                    
                    <div class="flex items-start gap-4">
                        <span class="text-champagne text-xl mt-1">❖</span>
                        <div>
                            <h3 class="text-midnight font-medium text-base mb-2">Conselho Escudo</h3>
                            <p class="text-sm text-midnight/60 leading-relaxed">Acesso direto e exclusivo aos sócios diretores em todas as etapas estruturais da sua demanda.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <span class="text-champagne text-xl mt-1">❖</span>
                        <div>
                            <h3 class="text-midnight font-medium text-base mb-2">Visão de Negócios</h3>
                            <p class="text-sm text-midnight/60 leading-relaxed">Utilizamos o ordenamento jurídico como ferramenta propulsora de segurança e escalabilidade corporativa.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <span class="text-champagne text-xl mt-1">❖</span>
                        <div>
                            <h3 class="text-midnight font-medium text-base mb-2">Confidencialidade</h3>
                            <p class="text-sm text-midnight/60 leading-relaxed">Blindagem e sigilo absoluto de dados corporativos e informações sensíveis familiares.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="py-32 bg-premium">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
                <div>
                    <span class="block text-xs uppercase tracking-[3px] text-champagne font-semibold mb-4">Nossos Campos de Força</span>
                    <h2 class="font-title text-3xl md:text-4xl text-midnight leading-snug font-medium">Nossas Áreas de Expertise</h2>
                </div>
                <a href="/expertises" class="text-sm font-semibold uppercase tracking-widest text-midnight hover:text-champagne transition-colors duration-300 flex items-center gap-2 group">
                    Conheça nossas verticais <span class="group-hover:translate-x-1 transition-transform duration-300">&rarr;</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <a href="/expertises" class="group block border border-champagne/20 bg-white p-10 hover:bg-midnight hover:border-midnight transition-all duration-500 shadow-sm hover:shadow-2xl">
                    <h3 class="font-title text-2xl text-midnight group-hover:text-champagne mb-4 transition-colors duration-500">Direito Societário e M&A</h3>
                    <p class="text-midnight/70 group-hover:text-premium/80 leading-relaxed transition-colors duration-500 font-light">Estruturação de operações societárias complexas, governança e auditoria jurídica para aquisições transacionais.</p>
                </a>
                
                <a href="/expertises" class="group block border border-champagne/20 bg-white p-10 hover:bg-midnight hover:border-midnight transition-all duration-500 shadow-sm hover:shadow-2xl">
                    <h3 class="font-title text-2xl text-midnight group-hover:text-champagne mb-4 transition-colors duration-500">Planejamento Tributário</h3>
                    <p class="text-midnight/70 group-hover:text-premium/80 leading-relaxed transition-colors duration-500 font-light">Engenharia fiscal de alta performance voltada para a otimização de ativos corporativos sob estrita segurança legal.</p>
                </a>
                
                <a href="/expertises" class="group block border border-champagne/20 bg-white p-10 hover:bg-midnight hover:border-midnight transition-all duration-500 shadow-sm hover:shadow-2xl">
                    <h3 class="font-title text-2xl text-midnight group-hover:text-champagne mb-4 transition-colors duration-500">Contencioso Estratégico</h3>
                    <p class="text-midnight/70 group-hover:text-premium/80 leading-relaxed transition-colors duration-500 font-light">Defesa implacável em litígios de alta complexidade em tribunais superiores, mitigando riscos financeiros.</p>
                </a>
                
                <a href="/expertises" class="group block border border-champagne/20 bg-white p-10 hover:bg-midnight hover:border-midnight transition-all duration-500 shadow-sm hover:shadow-2xl">
                    <h3 class="font-title text-2xl text-midnight group-hover:text-champagne mb-4 transition-colors duration-500">Blindagem Patrimonial</h3>
                    <p class="text-midnight/70 group-hover:text-premium/80 leading-relaxed transition-colors duration-500 font-light">Mecanismos sofisticados de governança familiar e estruturação de holdings para proteção e perpetuidade de bens.</p>
                </a>

            </div>
        </div>
    </section>

    <section class="py-24 bg-midnight border-y border-champagne/20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16 text-center divide-y md:divide-y-0 md:divide-x divide-champagne/20">
                
                <div class="py-4 md:py-0">
                    <span class="block font-title text-5xl md:text-6xl text-champagne mb-4">+25</span>
                    <span class="block text-sm uppercase tracking-widest text-premium/70">Anos de Atuação<br>Corporativa</span>
                </div>
                
                <div class="py-4 md:py-0">
                    <span class="block font-title text-5xl md:text-6xl text-champagne mb-4">R$ X Bi</span>
                    <span class="block text-sm uppercase tracking-widest text-premium/70">Em Operações<br>Estruturadas</span>
                </div>
                
                <div class="py-4 md:py-0">
                    <span class="block font-title text-5xl md:text-6xl text-champagne mb-4">Exclusivo</span>
                    <span class="block text-sm uppercase tracking-widest text-premium/70">Multinacionais e<br>Family Offices</span>
                </div>

            </div>
        </div>
    </section>

@endsection