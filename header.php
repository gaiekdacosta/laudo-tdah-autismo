<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Laudo TDAH Autismo</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./styles.css">
</head>

<body class="text-gray-900">
    <header
        class="fixed top-0 left-0 right-0 z-30 bg-[var(--primary)] text-white flex items-center justify-between px-10 h-[var(--nav-height)] border-b border-black/10">
        <a href="/" class="flex items-center no-underline text-inherit">
            <div class="flex flex-col leading-none">
                <span class="font-bold text-2xl mb-[-0.5rem]">Laudo TDAH Autismo</span>
                <span class="text-sm">Diagnóstico de autismo 100% online</span>
            </div>
        </a>
        <nav class="hidden md:flex items-center gap-6 font-semibold text-sm" aria-label="menu">
            <a href="#home" class="px-2 py-2">Início</a>
            <a href="#funcionamento" class="px-2 py-2">Funcionamento</a>
            <a href="#sobre-mim" class="px-2 py-2">Sobre mim</a>
            <a href="#contato" class="px-2 py-2">Depoimentos</a>
            <a href="#planos" class="px-2 py-2">Planos</a>
            <a href="#contato" class="
                    flex 
                    flex-col 
                    items-center 
                    justify-center 
                    gap-1 
                    px-6 
                    py-2 
                    rounded-md 
                    text-black 
                    bg-[#D99A00] 
                    hover:bg-[var(--secondary)] 
                    hover:text-white 
                    font-bold 
                    transition">
                <p>REALIZAR TESTE</p>
            </a>
        </nav>
        <button id="hambtn"
            class="md:hidden flex items-center justify-center w-12 h-12 rounded bg-white border border-black/10"
            aria-label="Abrir menu">
            <span
                class="block w-5 h-0.5 bg-black relative before:content-[''] before:absolute before:-top-1.5 before:w-5 before:h-0.5 before:bg-black after:content-[''] after:absolute after:top-1.5 after:w-5 after:h-0.5 after:bg-black"></span>
        </button>
    </header>

    <nav id="mobileMenu"
        class="hidden absolute top-[var(--nav-height)] left-0 right-0 bg-white border-b border-black/10 shadow-lg md:hidden"
        aria-hidden="true">
        <a href="#home" class="block px-5 py-3 font-semibold border-t border-black/5">Início</a>
        <a href="#como-funciona" class="block px-5 py-3 font-semibold border-t border-black/5">Como funciona</a>
        <a href="#sobre-mim" class="block px-5 py-3 font-semibold border-t border-black/5">Sobre Mim</a>
        <a href="#depoimentos" class="block px-5 py-3 font-semibold border-t border-black/5">Depoimentos</a>
        <a href="#tratamentos" class="block px-5 py-3 font-semibold border-t border-black/5">Tratamentos</a>
        <a href="#contato" class="block px-5 py-3 font-semibold border-t border-black/5">Contato</a>
    </nav>