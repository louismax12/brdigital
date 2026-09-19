Saya ingin membangun website Company Profile yang terintegrasi dengan sistem CRM (Customer Relationship Management) sederhana untuk bisnis "Jasa Pembuatan & Service Website". 

Sistem ini akan dibangun menggunakan PHP Murni (Native PHP tanpa framework seperti Laravel) dan database MySQL. Sistem ini nantinya akan dideploy di VPS Biznet Gio (Ubuntu Server, Apache/Nginx).

Tolong buatkan dokumen System Design (Desain Sistem) yang mencakup:

1. ARSITEKTUR & STRUKTUR FOLDER:
Buat struktur folder project PHP Native yang rapi, aman, dan modular (misalnya memisahkan folder admin/CRM, aset public, konfigurasi database, dan core functions). Silakan gunakan pendekatan OOP (Object-Oriented) atau MVC sederhana agar kode mudah dikelola.

2. SKEMA DATABASE (MySQL):
Buat struktur tabel database lengkap dengan tipe data, primary key, foreign key, dan relasinya. Tabel yang saya butuhkan minimal meliputi:
- users (untuk admin dan staf)
- services (untuk daftar layanan website yang ditawarkan)
- leads_inquiry (untuk menampung data dari form kontak/pemesanan di halaman depan)
- crm_pipelines (untuk melacak status prospek, misal: New, Contacted, Proposal Sent, Deal, Cancelled)
- support_tickets (untuk fitur service/maintenance klien lama)

3. ALUR KERJA SISTEM (WORKFLOW):
Jelaskan alur bagaimana data dari form Company Profile di sisi depan (client-facing) masuk ke dalam database dan bagaimana admin mengelolanya di dashboard CRM (sisi belakang).

4. REKOMENDASI KEAMANAN & DEPLOYMENT DI VPS BIZNET:
Berikan tips singkat untuk keamanan PHP Native (seperti mencegah SQL Injection & XSS) serta konfigurasi dasar yang perlu diperhatikan saat deploy di VPS Biznet Gio.

Tolong berikan penjelasan yang terstruktur, jelas, dan mudah dipahami oleh developer.


company-crm/
│
├── config/
│   └── database.php       # Koneksi database PDO
│
├── includes/
│   ├── header.php         # Header halaman depan
│   ├── footer.php         # Footer halaman depan
│   └── functions.php      # Fungsi keamanan (XSS protection, dll)
│
├── public/                # Folder aset yang bisa diakses publik
│   ├── css/
│   ├── js/
│   └── uploads/           # Tempat menyimpan file/gambar
│
├── admin/                 # PANEL CRM (Khusus Admin/Staf)
│   ├── login.php
│   ├── dashboard.php      # Statistik Lead & Tiket
│   ├── leads.php          # Manajemen Prospek Klien
│   └── tickets.php        # Manajemen Tiket Service Web
│
├── index.php              # Halaman Utama Company Profile
├── services.php           # Halaman Layanan Website
├── contact.php            # Halaman Hubungi Kami (Form Input Lead)
└── submit-lead.php        # Proses input form ke DB (Koneksi CRM)
