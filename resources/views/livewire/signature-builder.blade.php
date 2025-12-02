<div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-6 h-screen bg-gray-50">
    
    <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden flex flex-col h-full">
        <div class="bg-indigo-600 px-6 py-4">
            <h2 class="text-lg font-bold text-white flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                </svg>
                Editor de Assinatura
            </h2>
            <p class="text-indigo-200 text-xs mt-1">Preencha os dados e escolha o estilo.</p>
        </div>

        <div class="p-6 space-y-8 overflow-y-auto custom-scrollbar">
            
            <div>
                <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Identidade</h3>
                <div class="space-y-4">
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400 group-focus-within:text-indigo-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <input type="text" wire:model.live="name" placeholder="Seu Nome Completo" 
                            class="pl-10 block w-full rounded-lg border-gray-200 bg-gray-50 focus:bg-white focus:border-indigo-500 focus:ring-indigo-500 transition-all sm:text-sm py-2.5">
                    </div>

                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400 group-focus-within:text-indigo-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <input type="text" wire:model.live="role" placeholder="Cargo / Função" 
                            class="pl-10 block w-full rounded-lg border-gray-200 bg-gray-50 focus:bg-white focus:border-indigo-500 focus:ring-indigo-500 transition-all sm:text-sm py-2.5">
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Canais de Contato</h3>
                <div class="space-y-4">
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400 group-focus-within:text-indigo-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <input type="email" wire:model.live="email" placeholder="email@empresa.com" 
                            class="pl-10 block w-full rounded-lg border-gray-200 bg-gray-50 focus:bg-white focus:border-indigo-500 focus:ring-indigo-500 transition-all sm:text-sm py-2.5">
                    </div>

                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400 group-focus-within:text-indigo-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <input type="text" wire:model.live="phone" placeholder="(99) 99999-9999" 
                            class="pl-10 block w-full rounded-lg border-gray-200 bg-gray-50 focus:bg-white focus:border-indigo-500 focus:ring-indigo-500 transition-all sm:text-sm py-2.5">
                    </div>

                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400 group-focus-within:text-indigo-500 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </div>
                        <input type="text" wire:model.live="linkedin" placeholder="URL do LinkedIn" 
                            class="pl-10 block w-full rounded-lg border-gray-200 bg-gray-50 focus:bg-white focus:border-indigo-500 focus:ring-indigo-500 transition-all sm:text-sm py-2.5">
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Escolha o Modelo</h3>
                <div class="grid grid-cols-3 gap-3">
                    
                    <label class="cursor-pointer relative">
                        <input type="radio" wire:model.live="template" value="classic" class="sr-only peer">
                        <div class="border-2 rounded-lg p-2 text-center hover:bg-gray-50 peer-checked:border-indigo-600 peer-checked:bg-indigo-50 transition-all">
                            <div class="h-8 w-8 bg-gray-200 rounded-full mx-auto mb-2 peer-checked:bg-indigo-200"></div>
                            <span class="text-xs font-medium text-gray-600 peer-checked:text-indigo-700">Clássico</span>
                        </div>
                    </label>

                    <label class="cursor-pointer relative">
                        <input type="radio" wire:model.live="template" value="modern" class="sr-only peer">
                        <div class="border-2 rounded-lg p-2 text-center hover:bg-gray-50 peer-checked:border-indigo-600 peer-checked:bg-indigo-50 transition-all">
                            <div class="h-8 w-8 bg-gray-800 rounded mx-auto mb-2 peer-checked:bg-indigo-800"></div>
                            <span class="text-xs font-medium text-gray-600 peer-checked:text-indigo-700">Moderno</span>
                        </div>
                    </label>

                    <label class="cursor-pointer relative">
                        <input type="radio" wire:model.live="template" value="minimal" class="sr-only peer">
                        <div class="border-2 rounded-lg p-2 text-center hover:bg-gray-50 peer-checked:border-indigo-600 peer-checked:bg-indigo-50 transition-all">
                            <div class="h-8 w-1/2 bg-gray-300 mx-auto mb-2 peer-checked:bg-indigo-300"></div>
                            <span class="text-xs font-medium text-gray-600 peer-checked:text-indigo-700">Minimal</span>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col items-center justify-center bg-gray-200 rounded-lg p-4 border-2 border-dashed border-gray-400">
        <h3 class="text-gray-500 mb-4 uppercase tracking-wider text-sm">Visualização (Preview)</h3>
        
        <div id="signature-preview" class="bg-white p-8 shadow-lg rounded max-w-lg w-full">
            @include('signatures.templates.' . $template)
        </div>

        <div class="mt-6 flex space-x-4" x-data="{ copied: false, copiedVisual: false }">
            
            <button 
                @click="
                    let html = document.getElementById('signature-preview').innerHTML;
                    navigator.clipboard.writeText(html);
                    copied = true;
                    setTimeout(() => copied = false, 2000);
                "
                class="bg-gray-800 text-white px-6 py-2 rounded hover:bg-gray-900 transition flex items-center"
            >
                <span x-show="!copied">Copiar Código HTML</span>
                <span x-show="copied" class="text-green-400 font-bold">Copiado! ✅</span>
            </button>

            <button 
                @click="
                    let range = document.createRange();
                    range.selectNode(document.getElementById('signature-preview'));
                    window.getSelection().removeAllRanges();
                    window.getSelection().addRange(range);
                    document.execCommand('copy');
                    window.getSelection().removeAllRanges();
                    copiedVisual = true;
                    setTimeout(() => copiedVisual = false, 2000);
                "
                class="bg-indigo-600 text-white px-6 py-2 rounded hover:bg-indigo-700 transition flex items-center"
            >
                <span x-show="!copiedVisual">Copiar Visual</span>
                <span x-show="copiedVisual" class="text-green-200 font-bold">Pronto para Colar! ✅</span>
            </button>
        </div>
        
        <p class="text-xs text-gray-500 mt-4 text-center">
            Dica: Use <strong>"Copiar Visual"</strong> para colar direto na caixa de assinatura do Gmail ou Outlook.
        </p>
    </div>
</div>