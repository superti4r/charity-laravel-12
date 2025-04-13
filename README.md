<h1 align="center">💙 Simple Charity</h1>
<p align="center">Responsive Laravel 12 donation page with TailwindCSS & Midtrans integration</p>

<p align="center">
 <a href="https://laravel.com"><img src="https://img.shields.io/badge/Laravel-12-red?style=for-the-badge&logo=laravel" alt="Laravel"></a>
 <a href="https://tailwindcss.com"><img src="https://img.shields.io/badge/TailwindCSS-4-blue?style=for-the-badge&logo=tailwindcss" alt="TailwindCSS"></a>
 <a href="https://github.com/superti4r/charity-laravel-12/blob/main/LICENSE"><img src="https://img.shields.io/github/license/superti4r/charity-laravel-12?style=for-the-badge" alt="License"></a>
</p>

---

## ✨ Features

- ✅ Simple donation form
- ✅ Clean and minimalist design
- ✅ Responsive to all screen sizes
- ✅ Smooth fade-in animation effects

---

## 📦 Technology

- [Laravel 12](https://laravel.com)
- [Tailwind CSS v4](https://tailwindcss.com)
- [Midtrans](https://midtrans.com)

---

## 🚀 How to Run

```bash
# 1. Clone repository
git clone https://github.com/superti4r/charity-laravel-12.git
cd charity-laravel-12

# 2. Install dependency backend & frontend
composer install
npm install

# 3. Setup environment
cp .env.example .env
php artisan key:generate

# 4. Configure database then run migration
php artisan migrate

# 6. Run Laravel server
composer run dev
