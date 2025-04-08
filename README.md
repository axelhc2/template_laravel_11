<p align="center">
  <a href="https://axelchetail.eu" target="_blank">
    <img src="https://i.imgur.com/LXRXvbY.png" width="200" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <b>Template prête à l'emploi, configurée par <a href="https://axelchetail.eu" target="_blank">Axel Chetail</a></b><br>
  Application Laravel entièrement préparée pour démarrer rapidement.
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Version">
  </a>
  <a href="https://opensource.org/licenses/MIT">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

---

## Prérequis

- PHP 8.4
- Composer
- Node.js 20+
- npm
- Nginx ou Apache2
- Git

---

## Installation des dépendances système

### PHP 8.4 (via PPA)

```bash
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install php8.4 php8.4-cli php8.4-mbstring php8.4-xml php8.4-curl php8.4-mysql php8.4-zip php8.4-bcmath php8.4-gd unzip curl
```

### Composer

```bash
cd ~
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
sudo mv composer.phar /usr/local/bin/composer
composer --version
```

### Node.js 20+ & npm (via NodeSource)

```bash
curl -fsSL https://deb.nodesource.com/setup_20.x | sudo -E bash -
sudo apt install -y nodejs
node -v
npm -v
```

---

## Cloner et lancer le projet

```bash
sudo apt install git -y

git clone https://github.com/axelhc2/template_laravel_12.git mon_app
cd mon_app
sudo chown -R www-data:www-data /var/www/mon_app

composer install
npm install
```

---

## Configuration

### Fichier `.env`

```bash
nano .env
```

Modifiez les variables nécessaires : `APP_URL`, `DB_*`, etc.

### Fichier `vite.config.js`

Modifiez les paramètres du serveur si besoin (host, SSL, etc.) :

```js
server: {
        host: 'localhost',
        port: 5173,
        watch: {
            usePolling: true,
        },
        cors: {
            origin: 'http://localhost:8443', 
            methods: ['GET', 'POST', 'PUT', 'DELETE'],
            allowedHeaders: ['Content-Type'],
        },
        /////////////////////////////
        ///////  SSL CONFIG  ////////
        /////////////////////////////
        // https: {
        //   key: fs.readFileSync('privkey.pem'),
        //   cert: fs.readFileSync('fullchain.pem'),
        // },
    },
```

---

## Exemple de configuration Nginx

```nginx
server {
    listen 80;
    server_name mon-site.local;
    return 301 https://$server_name$request_uri;
}

server {
    listen 443 ssl http2;
    server_name mon-site.local;

    root /var/www/mon_app/public;
    index index.php;


    client_max_body_size 100m;
    client_body_timeout 120s;

    sendfile off;

    ssl_certificate /etc/letsencrypt/live/mon-site.local/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/mon-site.local/privkey.pem;
    ssl_session_cache shared:SSL:10m;
    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_ciphers "ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305:DHE-RSA-AES128-GCM-SHA256:DHE-RSA-AES256-GCM-SHA384";
    ssl_prefer_server_ciphers on;

    add_header X-Content-Type-Options nosniff;
    add_header X-XSS-Protection "1; mode=block";
    add_header X-Robots-Tag none;
    add_header Content-Security-Policy "frame-ancestors 'self'";
    add_header X-Frame-Options DENY;
    add_header Referrer-Policy same-origin;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/run/php/php8.4-fpm.sock;
        fastcgi_index index.php;
        include fastcgi_params;
        fastcgi_param PHP_VALUE "upload_max_filesize = 100M \n post_max_size=100M";
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param HTTP_PROXY "";
        fastcgi_intercept_errors off;
        fastcgi_buffer_size 16k;
        fastcgi_buffers 4 16k;
        fastcgi_connect_timeout 300;
        fastcgi_send_timeout 300;
        fastcgi_read_timeout 300;
        include /etc/nginx/fastcgi_params;
    }

    location ~ /\.ht {
        deny all;
    }
}
```

```bash
sudo systemctl reload nginx
```

---

## Finalisation

```bash
php artisan key:generate
php artisan migrate
npm run dev
```

Accéder à l'application :

```
http://mon-site.local
```

---

## Tout est prêt

Votre application Laravel est opérationnelle.
