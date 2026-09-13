# Laravel Development Starter

A clean and reusable Laravel development starter for building web applications with Laravel, PHP, and MySQL.

## 1. Install Laravel Herd for Windows

Download Laravel Herd for Windows:

https://herd.laravel.com/windows

After installation, close all CMD and PowerShell windows and open a new terminal.

## 2. Verify Required Development Tools

Check that PHP, Composer, Node.js, npm, and Git are installed:

```cmd
php -v
composer --version
node -v
npm -v
git --version
```

## 3.Create a new Laravel demo project:
```cmd
composer create-project laravel/laravel project-demo
```

```cmd
cd project-demo
```

```cmd
php artisan --version
```

```cmd
npm install
```
```cmd
php artisan serve
```
## Run Database Migrations

```cmd
php artisan migrate
```
or

```cmd
php artisan migrate:fresh
```

# Ubuntu Setup
## 1. Update Ubuntu

```bash
sudo apt update && sudo apt upgrade -y
```

## 2. Install PHP

Install PHP and the extensions required by Laravel:

```bash
sudo apt install -y php php-cli php-fpm php-mysql php-mbstring php-xml php-curl php-zip php-bcmath php-intl php-gd unzip git
```

Check the installation:

```bash
php -v
```

## 3. Install Composer

```bash
sudo apt install -y composer
```

Check:

```bash
composer --version
```

## 4. Install MySQL

```bash
sudo apt install -y mysql-server
```

Start MySQL and enable it at boot:

```bash
sudo systemctl enable --now mysql
```

Check the service:

```bash
sudo systemctl status mysql
```

## 5. Configure MySQL

Try connecting as root:

```bash
sudo mysql -u root -p
```

### Create the Laravel database

Once connected to MySQL:

```sql
CREATE DATABASE laravel_db;
```

Verify:

```sql
SHOW DATABASES;
```

Then:

```sql
EXIT;
```

## 6. Create the Laravel Project

Create the project with Composer:

```bash
composer create-project laravel/laravel laravel-dev-starter
```

Enter the project:

```bash
cd laravel-dev-starter
```

## 7. Configure Environment

Laravel automatically creates the `.env` file.

Open it:

```bash
nano .env
```

Configure the database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=root
DB_PASSWORD=
```

If your MySQL root account has a password, put it after `DB_PASSWORD=`.

## 8. Generate Application Key

```bash
php artisan key:generate
```

## 9. Test the MySQL Connection

Run Laravel migrations:

```bash
php artisan migrate
```

If migrations complete successfully, Laravel is connected to MySQL.

You can also check the database:

```bash
sudo mysql
```

Then:

```sql
USE laravel_db;
SHOW TABLES;
```

You should see Laravel tables such as:

```text
cache
cache_locks
jobs
job_batches
migrations
password_reset_tokens
sessions
```

## 10. Run Laravel

Start the development server:

```bash
php artisan serve
```

Open:

```text
http://127.0.0.1:8000
```
