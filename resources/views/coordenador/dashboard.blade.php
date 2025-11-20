<x-layouts.app>
    <div class="max-w-7xl mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-neutral-900">Dashboard do Coordenador</h1>
            <p class="text-neutral-600 mt-2">Bem-vindo, {{ auth()->user()->name }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <x-card>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-neutral-600">Certificados Pendentes</p>
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
                        <p class="text-sm text-neutral-600">Alunos do Curso</p>
                        <p class="text-3xl font-bold text-neutral-900">0</p>
                    </div>
                    <div class="w-12 h-12 bg-accent/10 text-accent rounded-lg flex items-center justify-center">
                        <x-icon name="users" class="w-6 h-6" />
                    </div>
                </div>
            </x-card>

            <x-card>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-neutral-600">Aprovados Hoje</p>
                        <p class="text-3xl font-bold text-neutral-900">0</p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 text-green-600 rounded-lg flex items-center justify-center">
                        <x-icon name="check-circle" class="w-6 h-6" />
                    </div>
                </div>
            </x-card>
        </div>

        <x-card>
            <h2 class="text-xl font-semibold text-neutral-900 mb-4">Ações Rápidas</h2>
            <div class="flex flex-wrap gap-3">
                <x-button color="outline">
                    <x-icon name="document-check" class="w-4 h-4" />
                    Validar Certificados
                </x-button>
                <x-button color="outline">
                    <x-icon name="plus" class="w-4 h-4" />
                    Cadastrar Aluno
                </x-button>
            </div>
        </x-card>
    </div>
</x-layouts.app>
