<section id="contato" class="min-h-screen bg-white flex items-center justify-center">
    <div class="w-full max-w-5xl mx-auto grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h3 class="text-4xl font-bold text-[var(--primary)] mb-4">Agende sua consulta</h3>
            <p class="mb-6 text-gray-600">
                Entre em contato e agende sua avaliação para começar sua transformação com o Dr. Tiago Marinho.
            </p>
            <ul class="space-y-4">
                <li class="flex items-center gap-3">
                    <i class="fa-solid fa-phone text-[var(--primary)]"></i>
                    <span>(85) 9 1234-5678</span>
                </li>
                <li class="flex items-center gap-3">
                    <i class="fa-solid fa-envelope text-[var(--primary)]"></i>
                    <span>contato@drtiagomarinho.com.br</span>
                </li>
                <li class="flex items-center gap-3">
                    <i class="fa-solid fa-location-dot text-[var(--primary)]"></i>
                    <span>Av. Exemplo, 123 - Fortaleza, CE</span>
                </li>
            </ul>
        </div>
        <form action="#" class="bg-gray-100 p-6 rounded-lg shadow-md space-y-4">
            <div>
                <label for="nome" class="block text-sm font-medium">Nome</label>
                <input type="text" id="nome" class="w-full p-2 rounded border border-gray-300">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium">Whatsapp</label>
                <input type="email" id="email" class="w-full p-2 rounded border border-gray-300">
            </div>
            <div>
                <label for="mensagem" class="block text-sm font-medium">Mensagem</label>
                <textarea id="mensagem" rows="4" class="w-full p-2 rounded border border-gray-300"></textarea>
            </div>
            <button type="submit"
                class="w-full bg-[var(--primary)] text-white font-semibold py-2 rounded hover:bg-[var(--secondary)] transition">
                Enviar
            </button>
        </form>
    </div>
</section>