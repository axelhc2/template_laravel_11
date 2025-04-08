<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Axel CHETAIL - Administrateur système &amp; réseau, développeur full stack</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Axel Chetail, développeur full stack et administrateur systèmes et réseaux, expert en BGP, sécurité réseau, DevOps et infrastructures IT. Explorez mes projets et services.">
    <meta name="keywords" content="Axel Chetail, développeur full stack, administrateur systèmes, réseaux, BGP, sécurité réseau, DevOps, infrastructures IT, développement web, systèmes, cloud">
    <meta name="author" content="Axel Chetail">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://axelchetail.eu">
    <meta property="og:title" content="Axel Chetail | Développeur Full Stack & Administrateur Systèmes et Réseaux">
    <meta property="og:description" content="Découvrez Axel Chetail, expert en développement full stack, administration systèmes et réseaux, spécialisé en BGP et infrastructures IT.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://axelchetail.eu">
    <meta property="og:image" content="https://axelchetail.eu/images/axel-chetail.jpg">
    <meta property="og:site_name" content="Axel Chetail - Développeur Full Stack">
    <meta property="og:locale" content="fr_FR">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Axel Chetail | Développeur Full Stack & Administrateur Systèmes et Réseaux">
    <meta name="twitter:description" content="Découvrez les compétences d'Axel Chetail en développement full stack, administration systèmes et réseaux, expert en BGP et DevOps.">
    <meta name="twitter:image" content="https://axelchetail.eu/images/axel-chetail.jpg">
    <meta name="twitter:site" content="@AxelChetail">
    <link href="/assets/images/custom/carrer.png" rel="icon">
    <link href="/assets/images/custom/carrer.png" rel="apple-touch-icon">
    <link rel="icon" href="/assets/images/custom/carrer.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/vendor/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="/assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="/assets/css/vendor/animate.min.css">
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9aa2220903.js" crossorigin="anonymous"></script>
    <?php if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))): ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php else: ?>
    <?php endif; ?>



</head>
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
<body class="relative bg-[#0d0d18] text-white min-h-screen flex flex-col items-center justify-center px-4 overflow-hidden">
    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 py-4">
        <img src="https://i.imgur.com/LXRXvbY.png" class="w-34" alt="Logo">
    </div>
    <div class="glow bottom-0 center-0"></div>
    
    <div class="relative z-10 text-center flex flex-col items-center justify-center mt-25 md:mt-50">
        <!-- Texte ajouté au-dessus des cartes avec la même largeur -->
        <p class="text-sm text-gray-100/50 mb-6 px-4 sm:px-0 max-w-6xl mx-auto">
            Voici une template Laravel 12 préinstallée et configurée, conçue pour vous offrir une prise en main rapide. Il vous suffit simplement d'installer les dépendances via npm. Des mises à jour régulières seront effectuées sur cette template afin de garantir une évolution continue et une performance optimale.
        </p>
    
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-10 max-w-6xl mx-auto">
            <div class="bg-[rgba(28,28,46,0.7)] rounded-2xl p-6 shadow-lg border border-[#303042] transition-transform transform hover:translate-y-[-10px] hover:shadow-lg">
                <div class="flex items-center gap-2 mb-1">
                    <div class="w-10 h-10 rounded-xl bg-[#7760F7]/20 flex items-center justify-center group-hover:bg-[#7760F7]/30 transition-all duration-300">
                        <i class="fas fa-cogs text-[#615af7] text-xl"></i>
                    </div>
                    <p class="text-xl font-bold">Laravel 12</p>
                </div>
                <p class="text-sm text-gray-400 text-left">Une base solide pour vos applications web avec une gestion d'API, la gestion des bases de données, et plus encore.</p>
            </div>
            
            <div class="bg-[rgba(28,28,46,0.7)] rounded-2xl p-6 shadow-lg border border-[#303042] transition-transform transform hover:translate-y-[-10px] hover:shadow-lg">
                <div class="flex items-center gap-2 mb-1">
                    <div class="w-10 h-10 rounded-xl bg-[#7760F7]/20 flex items-center justify-center group-hover:bg-[#7760F7]/30 transition-all duration-300">
                        <i class="fas fa-globe text-[#615af7] text-xl"></i>
                    </div>
                    <p class="text-xl font-bold">Vite.js</p>
                </div>
                <p class="text-sm text-gray-400 text-left">Un bundler moderne et rapide qui offre une expérience de développement réactive et sans délai.</p>
            </div>
            
            <div class="bg-[rgba(28,28,46,0.7)] rounded-2xl p-6 shadow-lg border border-[#303042] transition-transform transform hover:translate-y-[-10px] hover:shadow-lg">
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
        
        <p class="text-purple-400 text-sm mb-6 px-4 sm:px-0 max-w-6xl mx-auto">
            Framework de référence avec <span class="text-white font-bold">Laravel 12, Vite.js et Tailwind CSS</span>, garantissant des applications web rapides et évolutives.
        </p>
    
        <div class="flex gap-4 justify-center mb-10">
            <a target="_blank" href="https://github.com/axelhc2/template_laravel_12" class="bg-[#7760F7]/10 p-6 shadow-lg border border-[#615af7] px-5 py-2 rounded-xl font-semibold flex items-center space-x-2 transition-transform transform hover:translate-y-[-5px] hover:shadow-md">
                <i class="fab fa-github"></i> 
                <span>Github</span>
            </a>
            <a target="_blank" href="https://axelchetail.eu" class="bg-[rgba(28,28,46,0.7)] p-6 shadow-lg border border-[#303042] px-5 py-2 rounded-xl font-semibold flex items-center space-x-2 transition-transform transform hover:translate-y-[-5px] hover:shadow-md">
                <i class="fas fa-link"></i> 
                <span>Vitrine</span>
            </a>
        </div>
    </div>
</body>
</html>
<?php /**PATH /var/www/axial-host.fr/resources/views/welcome.blade.php ENDPATH**/ ?>