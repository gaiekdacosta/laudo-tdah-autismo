<section id="home"
        class="relative flex items-center justify-center px-[10%] py-20 min-h-screen overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100">

        <!-- Formas decorativas -->
        <div
            class="absolute top-0 right-0 w-[420px] h-[420px] bg-[var(--secondary)] opacity-10 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[280px] h-[280px] bg-[var(--secondary)] opacity-10 rounded-full blur-2xl -translate-x-1/3 translate-y-1/3">
        </div>

        <div class="flex flex-col md:flex-row items-center justify-around gap-10 max-w-7xl w-full z-10 relative">

            <!-- Texto principal -->
            <div class="flex flex-col gap-6 flex-1 text-center md:text-left animate-fadeInUp">
                <h1 class="text-[2.8rem] md:text-[3rem] font-extrabold leading-tight tracking-wide text-gray-900">
                    Descubra se você <br class="hidden md:block" />
                    tem <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-[var(--primary)] to-yellow-200">autismo!</span>
                </h1>

                <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                    Comece sua jornada de autodescoberta com nosso
                    <b>teste de autismo avançado</b> — rápido, seguro e sem julgamentos.
                </p>

                <a href="#"
                    class="inline-flex items-center justify-center gap-3 bg-[#25D366] hover:bg-[#1DA851] transition-all text-white px-8 py-4 rounded-lg font-semibold text-lg shadow-lg self-center md:self-start animate-pulse-slow">
                    <i class="fa-brands fa-whatsapp text-2xl"></i>
                    Quero Fechar Meu Diagnóstico de TEA
                </a>

                <!-- Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-6 text-center md:text-left">
                    <div
                        class="flex flex-col items-center md:items-start bg-white shadow-md rounded-xl p-4 transition-transform hover:-translate-y-1 hover:shadow-lg">
                        <i class="fa-solid fa-shield-halved text-[var(--secondary)] text-3xl mb-2"></i>
                        <p class="font-semibold">100% Seguro</p>
                    </div>
                    <div
                        class="flex flex-col items-center md:items-start bg-white shadow-md rounded-xl p-4 transition-transform hover:-translate-y-1 hover:shadow-lg">
                        <i class="fa-solid fa-user-doctor text-[var(--secondary)] text-3xl mb-2"></i>
                        <p class="font-semibold">Laudo por neurologista</p>
                    </div>
                    <div
                        class="flex flex-col items-center md:items-start bg-white shadow-md rounded-xl p-4 transition-transform hover:-translate-y-1 hover:shadow-lg">
                        <i class="fa-solid fa-bolt text-[var(--secondary)] text-3xl mb-2"></i>
                        <p class="font-semibold">Resultado rápido</p>
                    </div>
                </div>

                <p class="text-sm text-gray-600 mt-4 italic">
                    Mais de <b>5.000 pessoas</b> já descobriram seu perfil com nosso teste.
                </p>
            </div>

            <!-- Imagem -->
            <div class="flex-1 flex justify-center relative animate-fadeIn">
                <div class="absolute inset-0 bg-[var(--secondary)] opacity-10 rounded-full blur-2xl"></div>
                <img src="./public/undraw_choose_5kz4.svg" alt="Dr. Tiago Marinho"
                    class="relative max-h-[480px] w-auto drop-shadow-2xl">
            </div>
        </div>
    </section>