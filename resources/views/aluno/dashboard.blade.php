<x-layouts.app>
    <div class="max-w-7xl mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-neutral-900">Meus Certificados</h1>
            <p class="text-neutral-600 mt-2">Bem-vindo, {{ auth()->user()->name }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <x-card>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-neutral-600">Certificados Enviados</p>
                        <p class="text-3xl font-bold text-neutral-900">0</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center">
                        <x-icon name="document" class="w-6 h-6" />
                    </div>
                </div>
            </x-card>

            <x-card>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-neutral-600">Em Análise</p>
                        <p class="text-3xl font-bold text-neutral-900">0</p>
                    </div>
                    <div class="w-12 h-12 bg-yellow-100 text-yellow-600 rounded-lg flex items-center justify-center">
                        <x-icon name="clock" class="w-6 h-6" />
                    </div>
                </div>
            </x-card>

            <x-card>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-neutral-600">Horas Aprovadas</p>
                        <p class="text-3xl font-bold text-neutral-900">0h</p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 text-green-600 rounded-lg flex items-center justify-center">
                        <x-icon name="check-circle" class="w-6 h-6" />
                    </div>
                </div>
            </x-card>
        </div>

        <x-card>
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-semibold text-neutral-900">Meus Certificados</h2>
                <x-button>
                    <x-icon name="plus" class="w-4 h-4" />
                    Enviar Certificado
                </x-button>
            </div>
            
            <div class="text-center py-12 text-neutral-500">
                <x-icon name="document" class="w-16 h-16 mx-auto mb-4 text-neutral-400" />
                <p>Nenhum certificado enviado ainda.</p>
                <p class="text-sm mt-2">Clique em "Enviar Certificado" para começar.</p>
            </div>
        </x-card>
    </div>
</x-layouts.app>
