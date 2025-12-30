# Project Setup

Use this guide to get the project running on a fresh machine, including example environment values.

## Prerequisites
- PHP ^8.2 with required extensions (pdo, mbstring, tokenizer, xml, ctype, json, openssl, fileinfo)
- Composer 2.x
- Node.js 20.x and npm
- A database server (MySQL 8/PostgreSQL/SQLite) and Git

### Quick installs
- macOS (Homebrew):
  ```bash
  brew install php composer node git mysql
  brew services start mysql   # start MySQL as a service
  ```
- Ubuntu/Debian:
  ```bash
  sudo apt update
  sudo apt install -y php php-cli php-mbstring php-xml php-bcmath php-sqlite3 php-mysql composer nodejs npm git mysql-server
  sudo systemctl enable --now mysql
  ```
- Windows (PowerShell + Chocolatey):
  ```powershell
  choco install -y php composer nodejs git mysql
  # Restart shell so php/composer/node are on PATH
  net start mysql          # start MySQL service
  ```

## Environment file
Copy the example file and adjust values for your machine:
```bash
cp .env.example .env
```

Example `.env` snippet:
```env
APP_NAME="Laravel App"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=secret

QUEUE_CONNECTION=database
CACHE_DRIVER=file
SESSION_DRIVER=file

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

## Install and build
Run from the project root:
```bash
composer install
npm install
php artisan key:generate
php artisan migrate --seed   # drop --seed if you do not want seed data
npm run build                # or npm run dev for a watch build
```

## One-shot setup
A Composer helper script runs the common steps:
```bash
composer run setup
```
This will install PHP deps, create `.env` if missing, generate the app key, run migrations, install JS deps, and build assets.

## Run the app
- Backend: `php artisan serve` (defaults to http://127.0.0.1:8000)
- Frontend/Vite dev server (hot reload): `npm run dev`

## Verification
- Visit `http://127.0.0.1:8000` and ensure pages load.
- Check database tables exist: `php artisan migrate:status`.
