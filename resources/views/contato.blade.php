@extends('layouts.app')

@section('title', 'Contato Confidencial | Pearson Specter Litt')

@section('content')

    <section class="relative pt-40 pb-32 border-b border-champagne/20 overflow-hidden">
        
        <div class="absolute inset-0 w-full h-full bg-fixed bg-center bg-cover" style="background-image: url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1920&q=80');"></div>

        <div class="absolute inset-0 bg-midnight/85 z-0"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <span class="block text-xs uppercase tracking-[0.3em] text-champagne font-bold mb-6">
                Consultoria Executiva
            </span>
            <h1 class="font-title text-5xl md:text-6xl text-white font-semibold mb-8">
                Inicie uma <br><span class="text-champagne">Conversa Confidencial.</span>
            </h1>
            <p class="text-lg text-white/70 max-w-2xl mx-auto font-light leading-relaxed">
                Nossas linhas são criptografadas e protegidas pelo mais absoluto sigilo profissional. Preencha os dados preliminares abaixo para que o sócio responsável pelo seu setor seja alocado para o caso.
            </p>
        </div>
    </section>

    <section class="py-12 bg-white pb-32">
        <div class="max-w-3xl mx-auto px-6">
            
            <div class="bg-premium border border-champagne/20 rounded-3xl p-8 md:p-12 shadow-xl relative overflow-hidden">
                
                <div class="absolute top-0 left-0 w-full h-1 bg-midnight/10">
                    <div id="progress-bar" class="h-full bg-champagne transition-all duration-500 w-1/3"></div>
                </div>

                <form id="interactive-form" action="#" method="POST" class="relative min-h-[300px]">
                    
                    <div id="step-1" class="form-step transition-all duration-500 absolute w-full inset-0">
                        <h3 class="font-title text-3xl text-midnight font-semibold mb-2">Qual a natureza da sua demanda?</h3>
                        <p class="text-sm text-midnight/50 mb-8">Selecione a área principal para direcionarmos ao especialista correto.</p>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <label class="cursor-pointer">
                                <input type="radio" name="area" value="M&A" class="peer hidden" required>
                                <div class="border border-midnight/20 rounded-full px-6 py-4 text-center text-midnight font-medium hover:border-champagne peer-checked:bg-champagne peer-checked:text-white peer-checked:border-champagne transition-all">Fusões e Aquisições</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="area" value="Contencioso" class="peer hidden">
                                <div class="border border-midnight/20 rounded-full px-6 py-4 text-center text-midnight font-medium hover:border-champagne peer-checked:bg-champagne peer-checked:text-white peer-checked:border-champagne transition-all">Contencioso Estratégico</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="area" value="Tributário" class="peer hidden">
                                <div class="border border-midnight/20 rounded-full px-6 py-4 text-center text-midnight font-medium hover:border-champagne peer-checked:bg-champagne peer-checked:text-white peer-checked:border-champagne transition-all">Planejamento Tributário</div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="area" value="Blindagem" class="peer hidden">
                                <div class="border border-midnight/20 rounded-full px-6 py-4 text-center text-midnight font-medium hover:border-champagne peer-checked:bg-champagne peer-checked:text-white peer-checked:border-champagne transition-all">Blindagem Patrimonial</div>
                            </label>
                        </div>
                        <div class="mt-10 flex justify-end">
                            <button type="button" onclick="nextStep(2)" class="bg-midnight text-white px-8 py-3 rounded-full text-xs font-bold uppercase tracking-widest hover:bg-champagne transition-colors">Próximo Passo &rarr;</button>
                        </div>
                    </div>

                    <div id="step-2" class="form-step opacity-0 pointer-events-none translate-x-10 transition-all duration-500 absolute w-full inset-0">
                        <h3 class="font-title text-3xl text-midnight font-semibold mb-2">Descreva o cenário resumidamente.</h3>
                        <p class="text-sm text-midnight/50 mb-8">Forneça os detalhes iniciais. Nenhuma informação financeira sensível deve ser inserida aqui.</p>
                        
                        <textarea name="mensagem" rows="4" placeholder="Ex: Estamos em processo de due diligence para aquisição de uma concorrente e precisamos de auditoria..." class="w-full bg-transparent border border-midnight/20 rounded-2xl p-6 text-sm outline-none focus:border-champagne transition-colors resize-none" required></textarea>
                        
                        <div class="mt-8 flex justify-between items-center">
                            <button type="button" onclick="prevStep(1)" class="text-xs uppercase tracking-widest text-midnight/50 hover:text-midnight font-bold transition-colors">&larr; Voltar</button>
                            <button type="button" onclick="nextStep(3)" class="bg-midnight text-white px-8 py-3 rounded-full text-xs font-bold uppercase tracking-widest hover:bg-champagne transition-colors">Último Passo &rarr;</button>
                        </div>
                    </div>

                    <div id="step-3" class="form-step opacity-0 pointer-events-none translate-x-10 transition-all duration-500 absolute w-full inset-0">
                        <h3 class="font-title text-3xl text-midnight font-semibold mb-2">Para onde enviamos nosso parecer?</h3>
                        <p class="text-sm text-midnight/50 mb-8">Nossa equipe executiva entrará em contato em até 4 horas úteis.</p>
                        
                        <div class="space-y-4">
                            <input type="text" name="nome" placeholder="Nome Completo" class="w-full bg-transparent border border-midnight/20 rounded-full px-6 py-4 text-sm outline-none focus:border-champagne transition-colors" required>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <input type="email" name="email" placeholder="E-mail Corporativo" class="w-full bg-transparent border border-midnight/20 rounded-full px-6 py-4 text-sm outline-none focus:border-champagne transition-colors" required>
                                <input type="tel" name="telefone" placeholder="Telefone Direto" class="w-full bg-transparent border border-midnight/20 rounded-full px-6 py-4 text-sm outline-none focus:border-champagne transition-colors" required>
                            </div>
                        </div>

                        <div class="mt-8 flex justify-between items-center">
                            <button type="button" onclick="prevStep(2)" class="text-xs uppercase tracking-widest text-midnight/50 hover:text-midnight font-bold transition-colors">&larr; Voltar</button>
                            <button type="submit" class="bg-champagne text-midnight px-8 py-3 rounded-full text-xs font-bold uppercase tracking-widest hover:bg-midnight hover:text-white transition-colors shadow-lg">Solicitar Parecer</button>
                        </div>
                    </div>

                </form>
            </div>
            
            <div class="mt-20 text-center">
                <span class="text-champagne text-3xl mb-4 block">❖</span>
                <h4 class="font-title text-2xl text-midnight font-semibold mb-2">Pearson Specter Litt | Matriz</h4>
                <p class="text-midnight/60 font-light text-sm">601 Lexington Avenue, 50th Floor<br>New York, NY 10022</p>
                <p class="text-midnight/60 font-light text-sm mt-4">+1 (212) 555-0198</p>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    function nextStep(stepNumber) {
        // Esconde todos
        document.querySelectorAll('.form-step').forEach(step => {
            step.classList.add('opacity-0', 'pointer-events-none', '-translate-x-10');
            step.classList.remove('opacity-100', 'pointer-events-auto', 'translate-x-0');
        });

        // Mostra o atual
        const currentStep = document.getElementById(`step-${stepNumber}`);
        currentStep.classList.remove('opacity-0', 'pointer-events-none', '-translate-x-10', 'translate-x-10');
        currentStep.classList.add('opacity-100', 'pointer-events-auto', 'translate-x-0');

        // Atualiza a barra de progresso (33%, 66%, 100%)
        const progressBar = document.getElementById('progress-bar');
        progressBar.style.width = `${(stepNumber / 3) * 100}%`;
    }

    function prevStep(stepNumber) {
        // Esconde todos empurrando para a direita
        document.querySelectorAll('.form-step').forEach(step => {
            step.classList.add('opacity-0', 'pointer-events-none', 'translate-x-10');
            step.classList.remove('opacity-100', 'pointer-events-auto', 'translate-x-0', '-translate-x-10');
        });

        // Mostra o atual
        const currentStep = document.getElementById(`step-${stepNumber}`);
        currentStep.classList.remove('opacity-0', 'pointer-events-none', 'translate-x-10');
        currentStep.classList.add('opacity-100', 'pointer-events-auto', 'translate-x-0');

        // Atualiza a barra
        const progressBar = document.getElementById('progress-bar');
        progressBar.style.width = `${(stepNumber / 3) * 100}%`;
    }
</script>
@endpush