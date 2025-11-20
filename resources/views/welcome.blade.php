<x-layouts.base>
  <div class="min-h-screen bg-neutral-50 selection:bg-blue-100 selection:text-blue-900 overflow-x-hidden">
      
      {{-- Background Pattern (Grid Sutil) --}}
      <div class="absolute inset-0 -z-10 h-full w-full bg-white bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] bg-size-[16px_16px] mask-[radial-gradient(ellipse_50%_50%_at_50%_50%,#000_70%,transparent_100%)] opacity-50"></div>

      {{-- Navbar --}}
      <nav class="fixed w-full z-50 transition-all duration-300 bg-white/70 backdrop-blur-md border-b border-neutral-200/60">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="flex justify-between items-center h-16">
                  <div class="flex items-center gap-3 group cursor-pointer">
                      <span class="flex h-9 w-9 p-1 items-center justify-center rounded-xl bg-neutral-900 text-white transition-transform group-hover:scale-105 shadow-lg shadow-neutral-900/20">
                          <x-app-logo-icon />
                      </span>
                      <span class="text-xl font-bold text-neutral-900 tracking-tight">ChronoCert</span>
                  </div>
                  <div class="flex items-center gap-4">
                      <x-button href="{{ route('login') }}" class="rounded-full! shadow-lg shadow-blue-500/20 transition-transform active:scale-95">
                          Acessar Portal
                          <x-icon name="arrow-right" class="w-4 h-4 ml-2" />
                      </x-button>
                  </div>
              </div>
          </div>
      </nav>

      {{-- Hero Section --}}
      <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
              <h1 class="text-5xl lg:text-7xl font-extrabold text-neutral-900 tracking-tight mb-6 leading-[1.1]">
                  Suas horas complementares, <br class="hidden sm:block" />
                  <span class="text-transparent bg-clip-text bg-linear-to-r from-blue-600 to-indigo-600">
                      sem burocracia.
                  </span>
              </h1>
              
              <p class="text-lg text-neutral-600 mb-10 max-w-2xl mx-auto leading-relaxed">
                  Abandone as planilhas e e-mails perdidos. O ChronoCert centraliza o envio de alunos e a validação de coordenadores em uma única plataforma inteligente.
              </p>
              
              <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
                  <x-button href="{{ route('login') }}" class="py-4! px-8! text-base! rounded-full! w-full sm:w-auto shadow-xl shadow-blue-600/20 hover:shadow-blue-600/30 transition-all hover:-translate-y-1">
                      Começar Agora
                  </x-button>
                  <a href="#como-funciona" class="px-8 py-4 rounded-full text-neutral-600 font-medium hover:bg-white hover:text-neutral-900 transition-all border border-transparent hover:border-neutral-200 w-full sm:w-auto">
                      Como funciona?
                  </a>
              </div>

              {{-- Fake Dashboard Preview (CSS Only - Leve e Rápido) --}}
              <div class="relative max-w-5xl mx-auto mt-12 perspective-1000">
                  <div class="relative bg-white rounded-2xl border border-neutral-200 shadow-2xl overflow-hidden transform rotate-x-12 transition-transform duration-700 hover:rotate-0">
                      {{-- Browser Bar --}}
                      <div class="bg-neutral-50 border-b border-neutral-200 px-4 py-3 flex items-center gap-2">
                          <div class="flex gap-1.5">
                              <div class="w-3 h-3 rounded-full bg-red-400"></div>
                              <div class="w-3 h-3 rounded-full bg-amber-400"></div>
                              <div class="w-3 h-3 rounded-full bg-green-400"></div>
                          </div>
                          <div class="ml-4 bg-white border border-neutral-200 rounded-md px-3 py-1 text-xs text-neutral-400 flex-1 text-center font-mono">
                              chronocert.app/dashboard
                          </div>
                      </div>
                      {{-- App Content Mockup --}}
                      <div class="p-6 sm:p-8 bg-neutral-50/50">
                          <div class="grid grid-cols-12 gap-6">
                              {{-- Sidebar Mock --}}
                              <div class="hidden sm:block col-span-3 space-y-3">
                                  <div class="h-8 bg-neutral-200/80 rounded-lg w-3/4"></div>
                                  <div class="h-4 bg-neutral-200/50 rounded w-1/2 mt-6"></div>
                                  <div class="h-4 bg-neutral-200/50 rounded w-2/3"></div>
                                  <div class="h-4 bg-neutral-200/50 rounded w-3/4"></div>
                              </div>
                              {{-- Main Content Mock --}}
                              <div class="col-span-12 sm:col-span-9 space-y-6">
                                  <div class="flex justify-between items-end">
                                      <div class="space-y-2">
                                          <div class="h-6 bg-neutral-900/10 rounded w-48"></div>
                                          <div class="h-4 bg-neutral-900/5 rounded w-32"></div>
                                      </div>
                                      <div class="h-10 w-32 bg-blue-600 rounded-lg shadow-lg shadow-blue-600/20"></div>
                                  </div>
                                  {{-- Stats Grid --}}
                                  <div class="grid grid-cols-3 gap-4">
                                      <div class="bg-white p-4 rounded-xl border border-neutral-100 shadow-sm h-24"></div>
                                      <div class="bg-white p-4 rounded-xl border border-neutral-100 shadow-sm h-24"></div>
                                      <div class="bg-white p-4 rounded-xl border border-neutral-100 shadow-sm h-24"></div>
                                  </div>
                                  {{-- Table Mock --}}
                                  <div class="bg-white rounded-xl border border-neutral-100 shadow-sm overflow-hidden">
                                      <div class="border-b border-neutral-100 p-4 flex gap-4">
                                          <div class="h-4 bg-neutral-100 rounded w-full"></div>
                                      </div>
                                      <div class="p-4 space-y-4">
                                          <div class="h-3 bg-neutral-50 rounded w-full"></div>
                                          <div class="h-3 bg-neutral-50 rounded w-full"></div>
                                          <div class="h-3 bg-neutral-50 rounded w-full"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  {{-- Decorative Blobs --}}
                  <div class="absolute -top-24 -right-24 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl -z-10"></div>
                  <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl -z-10"></div>
              </div>
          </div>
      </section>

      {{-- Seção: Problema vs Solução --}}
      <section class="py-24 bg-white">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="grid md:grid-cols-2 gap-16 items-center">
                  <div>
                      <h2 class="text-3xl font-bold text-neutral-900 mb-6">
                          Chega de papelada e planilhas confusas.
                      </h2>
                      <p class="text-neutral-600 mb-8 text-lg leading-relaxed">
                          Coordenadores perdem horas organizando e-mails. Alunos ficam sem saber se suas horas foram aceitas. O ChronoCert resolve isso.
                      </p>
                      
                      <div class="space-y-4">
                          <div class="flex items-center gap-4 p-4 rounded-xl bg-neutral-50 border border-neutral-100 hover:border-blue-100 transition-colors">
                              <div class="shrink-0 w-10 h-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center">
                                  <x-icon name="check" class="w-5 h-5" />
                              </div>
                              <div>
                                  <h4 class="font-semibold text-neutral-900">Organização Automática</h4>
                                  <p class="text-sm text-neutral-500">Certificados categorizados por tipo e status.</p>
                              </div>
                          </div>
                          <div class="flex items-center gap-4 p-4 rounded-xl bg-neutral-50 border border-neutral-100 hover:border-blue-100 transition-colors">
                              <div class="shrink-0 w-10 h-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center">
                                  <x-icon name="clock" class="w-5 h-5" />
                              </div>
                              <div>
                                  <h4 class="font-semibold text-neutral-900">Feedback em Tempo Real</h4>
                                  <p class="text-sm text-neutral-500">O aluno sabe na hora se foi aprovado ou rejeitado.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="relative">
                      {{-- Illustration Abstract --}}
                      <div class="absolute inset-0 bg-linear-to-tr from-blue-100 to-indigo-50 rounded-3xl transform rotate-3"></div>
                      <div class="relative bg-white border border-neutral-200 rounded-3xl p-8 shadow-xl">
                          {{-- Fake Card Stack --}}
                          <div class="space-y-3">
                              <div class="flex items-center justify-between p-3 bg-white border border-neutral-100 rounded-lg shadow-sm">
                                  <div class="flex items-center gap-3">
                                      <div class="w-8 h-8 bg-red-100 rounded text-red-500 flex items-center justify-center text-xs">PDF</div>
                                      <div class="text-sm font-medium text-neutral-700">Certificado_Java.pdf</div>
                                  </div>
                                  <span class="px-2 py-1 bg-green-100 text-green-700 text-xs font-bold rounded">Aprovado</span>
                              </div>
                              <div class="flex items-center justify-between p-3 bg-white border border-neutral-100 rounded-lg shadow-sm opacity-75">
                                  <div class="flex items-center gap-3">
                                      <div class="w-8 h-8 bg-red-100 rounded text-red-500 flex items-center justify-center text-xs">PDF</div>
                                      <div class="text-sm font-medium text-neutral-700">Palestras_2024.pdf</div>
                                  </div>
                                  <span class="px-2 py-1 bg-yellow-100 text-yellow-700 text-xs font-bold rounded">Análise</span>
                              </div>
                              <div class="flex items-center justify-between p-3 bg-white border border-neutral-100 rounded-lg shadow-sm opacity-50">
                                  <div class="flex items-center gap-3">
                                      <div class="w-8 h-8 bg-red-100 rounded text-red-500 flex items-center justify-center text-xs">PDF</div>
                                      <div class="text-sm font-medium text-neutral-700">Workshop_Design.pdf</div>
                                  </div>
                                  <span class="px-2 py-1 bg-neutral-100 text-neutral-700 text-xs font-bold rounded">Pendente</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      {{-- Como Funciona (Steps) --}}
      <section id="como-funciona" class="py-24 bg-neutral-50 relative overflow-hidden">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
              <div class="text-center mb-16">
                  <h2 class="text-3xl font-bold text-neutral-900 mb-4">Fluxo Simplificado</h2>
                  <p class="text-neutral-600 max-w-xl mx-auto">Do upload à aprovação em três passos simples.</p>
              </div>

              <div class="grid md:grid-cols-3 gap-12 relative">
                  {{-- Connecting Line (Desktop) --}}
                  <div class="hidden md:block absolute top-12 left-0 w-full h-0.5 bg-linear-to-r from-transparent via-neutral-300 to-transparent z-0"></div>

                  {{-- Step 1 --}}
                  <div class="relative z-10 flex flex-col items-center text-center group">
                      <div class="w-24 h-24 bg-white border-4 border-neutral-100 rounded-full flex items-center justify-center mb-6 shadow-lg group-hover:border-blue-100 group-hover:scale-110 transition-all duration-300">
                          <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center text-blue-600">
                              <x-icon name="arrow-up-tray" class="w-8 h-8" />
                          </div>
                      </div>
                      <h3 class="text-xl font-bold text-neutral-900 mb-2">1. Envio do Aluno</h3>
                      <p class="text-neutral-600 text-sm leading-relaxed px-4">
                          O aluno acessa a plataforma, faz upload do PDF e seleciona a categoria da atividade.
                      </p>
                  </div>

                  {{-- Step 2 --}}
                  <div class="relative z-10 flex flex-col items-center text-center group">
                      <div class="w-24 h-24 bg-white border-4 border-neutral-100 rounded-full flex items-center justify-center mb-6 shadow-lg group-hover:border-indigo-100 group-hover:scale-110 transition-all duration-300">
                          <div class="w-16 h-16 bg-indigo-50 rounded-full flex items-center justify-center text-indigo-600">
                              <x-icon name="check-badge" class="w-8 h-8" />
                          </div>
                      </div>
                      <h3 class="text-xl font-bold text-neutral-900 mb-2">2. Validação</h3>
                      <p class="text-neutral-600 text-sm leading-relaxed px-4">
                          O coordenador visualiza o arquivo e aprova ou rejeita com um clique, justificando se necessário.
                      </p>
                  </div>

                  {{-- Step 3 --}}
                  <div class="relative z-10 flex flex-col items-center text-center group">
                      <div class="w-24 h-24 bg-white border-4 border-neutral-100 rounded-full flex items-center justify-center mb-6 shadow-lg group-hover:border-green-100 group-hover:scale-110 transition-all duration-300">
                          <div class="w-16 h-16 bg-green-50 rounded-full flex items-center justify-center text-green-600">
                              <x-icon name="chart-bar" class="w-8 h-8" />
                          </div>
                      </div>
                      <h3 class="text-xl font-bold text-neutral-900 mb-2">3. Contabilização</h3>
                      <p class="text-neutral-600 text-sm leading-relaxed px-4">
                          As horas são somadas automaticamente ao progresso do aluno e o histórico fica salvo.
                      </p>
                  </div>
              </div>
          </div>
      </section>

      {{-- Final CTA --}}
      <section class="py-24 bg-neutral-900 relative overflow-hidden">
          <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#fff_1px,transparent_1px)] bg-size-[20px_20px]"></div>
          <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
              <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                  Pronto para modernizar sua gestão?
              </h2>
              <p class="text-neutral-400 text-lg mb-10">
                  Junte-se aos coordenadores e alunos que já economizam tempo com o ChronoCert.
              </p>
              <div class="flex flex-col sm:flex-row justify-center gap-4">
                  <x-button href="{{ route('login') }}" class="bg-white! text-neutral-900! border-white! hover:bg-neutral-100! text-lg! px-8! py-3!">
                      Acessar Sistema
                  </x-button>
              </div>
          </div>
      </section>

      <x-guest-footer />
  </div>
</x-layouts.base>