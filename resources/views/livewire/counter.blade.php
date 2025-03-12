<div class="p-6 bg-white rounded-lg shadow-lg">
    <div class="space-y-6">
        <!-- Compteur -->
        <div class="text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Compteur Interactif</h2>
            <div class="flex items-center justify-center space-x-4">
                <button wire:click="decrement" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition-colors">
                    -
                </button>
                <span class="text-3xl font-bold text-gray-700">{{ $count }}</span>
                <button wire:click="increment" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-colors">
                    +
                </button>
            </div>
        </div>

        <!-- Démo Alpine.js -->
        <div x-data="{ open: false }" class="text-center">
            <button @click="open = !open" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors">
                Toggle Message
            </button>
            
            <div x-show="open" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-90"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100 transform scale-100"
                 x-transition:leave-end="opacity-0 transform scale-90"
                 class="mt-4 p-4 bg-blue-100 text-blue-700 rounded-lg">
                Ceci est un message animé avec Alpine.js! 🎉
            </div>
        </div>

        <!-- Input Livewire -->
        <div class="mt-6">
            <input type="text" wire:model.live="name" placeholder="Entrez votre nom" 
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            
            @if($name)
                <p class="mt-2 text-green-600">
                    Bonjour, {{ $name }} ! 👋
                </p>
            @endif
        </div>
    </div>
</div>
