<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Laravel</title>
    <script src="https://kit.fontawesome.com/9aa2220903.js" crossorigin="anonymous"></script>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif
    <style>
        .glow {
            position: absolute;
            width: 1000px;
            height: 1000px;
            background: radial-gradient(circle, rgba(97,95,255, 0.5) 0%, transparent 70%);
            filter: blur(100px);
            z-index: 0;
        }
    </style>
</head>
<body class="relative bg-[#0d0d18] text-white min-h-screen flex flex-col items-center justify-center px-4 overflow-hidden">
    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 py-4">
        <img src="https://i.imgur.com/LXRXvbY.png" class="w-34" alt="Logo">
    </div>
    
    <div class="glow bottom-0 center-0"></div>
    
    <div class="relative z-10 text-center flex flex-col items-center justify-center mt-25 md:mt-50">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-10 max-w-6xl mx-auto">
            <div class="bg-[rgba(28,28,46,0.7)] rounded-2xl p-6 shadow-lg border border-[#303042]">
                <div class="flex items-center gap-2 mb-1">
                    <div class="w-10 h-10 rounded-xl bg-[#7760F7]/20 flex items-center justify-center group-hover:bg-[#7760F7]/30 transition-all duration-300">
                        <i class="fas fa-cogs text-[#615af7] text-xl"></i>
                    </div>
                    <p class="text-xl font-bold">Laravel 12</p>
                </div>
                <p class="text-sm text-gray-400 text-left">Une base solide pour vos applications web avec une gestion d'API, la gestion des bases de données, et plus encore.</p>
            </div>
            
            <div class="bg-[rgba(28,28,46,0.7)] rounded-2xl p-6 shadow-lg border border-[#303042]">
                <div class="flex items-center gap-2 mb-1">
                    <div class="w-10 h-10 rounded-xl bg-[#7760F7]/20 flex items-center justify-center group-hover:bg-[#7760F7]/30 transition-all duration-300">
                        <i class="fas fa-globe text-[#615af7] text-xl"></i>
                    </div>
                    <p class="text-xl font-bold">Vite.js</p>
                </div>
                <p class="text-sm text-gray-400 text-left">Un bundler moderne et rapide qui offre une expérience de développement réactive et sans délai.</p>
            </div>
            
            <div class="bg-[rgba(28,28,46,0.7)] rounded-2xl p-6 shadow-lg border border-[#303042]">
                <div class="flex items-center gap-2 mb-1">
                    <div class="w-10 h-10 rounded-xl bg-[#7760F7]/20 flex items-center justify-center group-hover:bg-[#7760F7]/30 transition-all duration-300">
                        <i class="fas fa-globe text-[#615af7] text-xl"></i>
                    </div>
                    <p class="text-xl font-bold">Tailwind CSS</p>
                </div>
                <p class="text-sm text-gray-400 text-left">Un framework de conception rapide et flexible, vous permettant de créer des interfaces utilisateur modernes et réactives.</p>
            </div>

            <div class="bg-[rgba(28,28,46,0.7)] rounded-2xl p-6 shadow-lg border border-[#303042] col-span-1 sm:col-span-2 lg:col-span-3">
                <p class="text-sm text-gray-400">
                    Intégrant Laravel 12, Vite.js et Tailwind CSS, notre système permet un développement rapide et performant d'applications web modernes.
                </p>
            </div>
        </div>
        
        <p class="text-purple-400 text-sm mb-6 px-4 sm:px-0">
            Framework de référence avec <span class="text-white font-bold">Laravel 12, Vite.js et Tailwind CSS</span>, garantissant des applications web rapides et évolutives.
        </p>

        <div class="flex gap-4 justify-center mb-10">
            <a target="_blank" href="#" class="bg-[#7760F7]/10 p-6 shadow-lg border border-[#615af7] px-5 py-2 rounded-xl font-semibold flex items-center space-x-2">
                <i class="fab fa-github"></i> 
                <span>Github</span>
            </a>
            <a target="_blank" href="https://axelchetail.eu" class="bg-[rgba(28,28,46,0.7)] rounded-2xl p-6 shadow-lg border border-[#303042] px-5 py-2 rounded-xl font-semibold flex items-center space-x-2">
                <i class="fas fa-link"></i> 
                <span>Vitrine</span>
            </a>
        </div>
    </div>
</body>
</html>