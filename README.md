# BRDigital CRM Portal

Fondasi CRM dan company profile BRDigital untuk deployment di VPS PHP/MySQL.

## Menjalankan lokal

1. Salin `.env.example` menjadi `.env` dan isi koneksi MySQL.
2. Jalankan schema: `mysql -u root -p < database/schema.sql`.
3. Buat akun admin menggunakan hash password PHP:

	```bash
	php -r "echo password_hash('GANTI_PASSWORD', PASSWORD_DEFAULT), PHP_EOL;"
	```

	Lalu masukkan hash tersebut ke tabel `users` dengan role `admin`.
4. Jalankan server:

	```bash
	php -S 127.0.0.1:8000 -t public public/index.php
	```

5. Buka `http://127.0.0.1:8000`.

## Deployment VPS

Gunakan Ubuntu 24.04, Nginx, PHP-FPM, dan MySQL. Document root Nginx harus diarahkan ke folder `public`, bukan root repository. Salin `.env.example` menjadi `.env`, isi `APP_URL=https://brdigital.click`, lalu jalankan schema MySQL sebelum membuka form konsultasi.

Contoh konfigurasi Nginx tersedia di `deploy/nginx/brdigital.conf.example`. Setelah DNS `brdigital.click` mengarah ke `103.89.0.99`, aktifkan HTTPS dengan `certbot --nginx -d brdigital.click -d www.brdigital.click`.

Tahap berikutnya mencakup modul client, project, milestone, task, file, invoice, dan CMS publik.