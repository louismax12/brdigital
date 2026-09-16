# BRDigital CRM Portal

Fondasi CRM dan company profile BRDigital untuk deployment di VPS PHP/MySQL.

## Ringkasan Sistem

BRDigital CRM adalah sistem berbasis web yang menggabungkan:

- website publik untuk company profile dan lead generation
- dashboard admin untuk mengelola lead, client, project, task, invoice, dan laporan
- portal client untuk melihat progress project dan dokumen
- database MySQL untuk seluruh data operasional bisnis

Tujuan utamanya adalah mengubah prospek dari website menjadi client, lalu mengelola seluruh alur project dari awal hingga invoice dibayar.

## Struktur Sistem

### 1. Layer Public / Website
Bagian ini melayani pengunjung umum:

- halaman utama / home
- tentang perusahaan
- layanan
- portofolio
- kontak
- form konsultasi

### 2. Layer Admin CRM
Bagian ini untuk tim internal:

- login admin
- dashboard statistik
- manajemen lead
- manajemen client
- manajemen project
- milestone dan task
- dokumen file proyek
- invoice dan pembayaran
- laporan dan analisis

### 3. Layer Client Portal
Bagian ini untuk klien:

- login portal
- melihat project aktif
- melihat milestone dan progress
- unduh file proyek
- melihat tagihan dan status pembayaran

### 4. Layer Data / Database
Data utama dikelola melalui MySQL dengan tabel utama:

- users
- leads
- clients
- projects
- milestones
- tasks
- files
- invoices
- activity_logs
- cms_pages

## Modul Utama

### A. Auth & User
- login/logout
- role-based access
- password hashing
- session management
- CSRF protection

Role yang disarankan:

- admin
- manager
- staff
- client

### B. Lead Management
Fungsi:

- menerima form konsultasi dari website
- validasi input
- status lead: New, Contacted, Qualified, Proposal, Won, Lost
- assign ke sales atau manager
- riwayat komunikasi

Tabel utama:

- leads

### C. Client Management
Fungsi:

- konversi lead menjadi client
- menyimpan profil perusahaan dan kontak utama
- data bisnis dan alamat

Tabel utama:

- clients

### D. Project Management
Fungsi:

- membuat project berdasarkan client
- menetapkan timeline
- status project
- progress tracking

Tabel utama:

- projects

### E. Milestone & Task Management
Fungsi:

- memecah project menjadi milestone
- membuat task per milestone
- assign ke user tertentu
- mengelola deadline dan status tugas

Tabel utama:

- milestones
- tasks

### F. File Management
Fungsi:

- upload dokumen proyek
- menyimpan proposal, kontrak, revisi, deliverables
- membatasi akses berdasarkan role

Tabel utama:

- files

### G. Invoice & Payment
Fungsi:

- membuat invoice per project
- status pembayaran
- due date
- log pembayaran

Tabel utama:

- invoices

### H. Dashboard & Reporting
Fungsi:

- total leads
- total client
- project aktif
- task overdue
- pendapatan bulanan
- laporan performa bisnis

### I. CMS Publik
Fungsi:

- mengatur halaman statis website
- content layanan, profile, FAQ, halaman umum

Tabel utama:

- cms_pages

## Struktur Folder yang Disarankan

```text
brdigital/
├─ app/
│  ├─ Database.php
│  ├─ helpers.php
│  ├─ controllers/
│  │  ├─ AuthController.php
│  │  ├─ DashboardController.php
│  │  ├─ LeadController.php
│  │  ├─ ClientController.php
│  │  ├─ ProjectController.php
│  │  ├─ MilestoneController.php
│  │  ├─ TaskController.php
│  │  ├─ InvoiceController.php
│  │  └─ CmsController.php
│  ├─ models/
│  │  ├─ User.php
│  │  ├─ Lead.php
│  │  ├─ Client.php
│  │  ├─ Project.php
│  │  ├─ Milestone.php
│  │  ├─ Task.php
│  │  ├─ Invoice.php
│  │  └─ File.php
│  ├─ services/
│  │  ├─ AuthService.php
│  │  ├─ LeadService.php
│  │  ├─ ProjectService.php
│  │  ├─ InvoiceService.php
│  │  └─ ReportService.php
│  └─ views/
│     ├─ home.php
│     ├─ contact.php
│     ├─ login.php
│     ├─ dashboard.php
│     ├─ leads.php
│     ├─ clients.php
│     ├─ projects.php
│     ├─ tasks.php
│     ├─ invoices.php
│     └─ admin/
│        ├─ users.php
│        ├─ reports.php
│        └─ profile.php
├─ config/
│  └─ config.php
├─ database/
│  └─ schema.sql
├─ public/
│  ├─ index.php
│  └─ assets/
│     └─ style.css
├─ deploy/
│  └─ nginx/
│     └─ brdigital.conf.example
├─ README.md
├─ .env.example
└─ .htaccess
```

## Blueprint Database

### Tabel users
```sql
users (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(150),
  email VARCHAR(150) UNIQUE,
  password_hash VARCHAR(255),
  role ENUM('admin','manager','staff','client'),
  phone VARCHAR(30),
  status ENUM('active','inactive'),
  created_at DATETIME,
  updated_at DATETIME
)
```

### Tabel leads
```sql
leads (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  business_name VARCHAR(150),
  contact_name VARCHAR(150),
  email VARCHAR(150),
  whatsapp VARCHAR(30),
  service_type VARCHAR(100),
  message TEXT,
  source VARCHAR(50),
  status ENUM('New','Contacted','Qualified','Proposal','Won','Lost'),
  assigned_to BIGINT NULL,
  created_at DATETIME,
  updated_at DATETIME,
  FOREIGN KEY (assigned_to) REFERENCES users(id)
)
```

### Tabel clients
```sql
clients (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  lead_id BIGINT NULL,
  company_name VARCHAR(150),
  contact_person VARCHAR(150),
  email VARCHAR(150),
  phone VARCHAR(30),
  address TEXT,
  status ENUM('active','inactive'),
  created_at DATETIME,
  updated_at DATETIME,
  FOREIGN KEY (lead_id) REFERENCES leads(id)
)
```

### Tabel projects
```sql
projects (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  client_id BIGINT,
  project_name VARCHAR(200),
  description TEXT,
  status ENUM('Draft','Active','On Hold','Completed','Cancelled'),
  start_date DATE,
  end_date DATE,
  budget DECIMAL(15,2),
  progress INT DEFAULT 0,
  created_at DATETIME,
  updated_at DATETIME,
  FOREIGN KEY (client_id) REFERENCES clients(id)
)
```

### Tabel milestones
```sql
milestones (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  project_id BIGINT,
  title VARCHAR(200),
  description TEXT,
  due_date DATE,
  status ENUM('Pending','In Progress','Completed','Delayed'),
  created_at DATETIME,
  updated_at DATETIME,
  FOREIGN KEY (project_id) REFERENCES projects(id)
)
```

### Tabel tasks
```sql
tasks (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  project_id BIGINT,
  milestone_id BIGINT NULL,
  title VARCHAR(200),
  description TEXT,
  assignee_id BIGINT NULL,
  priority ENUM('Low','Medium','High'),
  status ENUM('Todo','In Progress','Review','Done','Blocked'),
  due_date DATE,
  completed_at DATETIME NULL,
  created_at DATETIME,
  updated_at DATETIME,
  FOREIGN KEY (project_id) REFERENCES projects(id),
  FOREIGN KEY (milestone_id) REFERENCES milestones(id),
  FOREIGN KEY (assignee_id) REFERENCES users(id)
)
```

### Tabel files
```sql
files (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  project_id BIGINT NULL,
  uploaded_by BIGINT NULL,
  file_name VARCHAR(255),
  file_path VARCHAR(500),
  file_type VARCHAR(100),
  created_at DATETIME,
  FOREIGN KEY (project_id) REFERENCES projects(id),
  FOREIGN KEY (uploaded_by) REFERENCES users(id)
)
```

### Tabel invoices
```sql
invoices (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  project_id BIGINT,
  client_id BIGINT,
  invoice_number VARCHAR(100) UNIQUE,
  amount DECIMAL(15,2),
  due_date DATE,
  status ENUM('Draft','Sent','Paid','Overdue','Cancelled'),
  paid_at DATETIME NULL,
  notes TEXT,
  created_at DATETIME,
  updated_at DATETIME,
  FOREIGN KEY (project_id) REFERENCES projects(id),
  FOREIGN KEY (client_id) REFERENCES clients(id)
)
```

### Tabel activity_logs
```sql
activity_logs (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  user_id BIGINT NULL,
  entity_type VARCHAR(100),
  entity_id BIGINT,
  action VARCHAR(100),
  description TEXT,
  created_at DATETIME,
  FOREIGN KEY (user_id) REFERENCES users(id)
)
```

### Tabel cms_pages
```sql
cms_pages (
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  slug VARCHAR(150) UNIQUE,
  title VARCHAR(200),
  content LONGTEXT,
  status ENUM('draft','published'),
  created_at DATETIME,
  updated_at DATETIME
)
```

## Alur Sistem Utama

### Alur lead generation
1. Visitor membuka website
2. Mengisi form konsultasi
3. Data masuk ke tabel leads
4. Admin memeriksa lead baru
5. Lead diubah status menjadi Qualified atau Proposal
6. Bila cocok, lead dikonversi jadi client
7. Project dibuat untuk client tersebut

### Alur project
1. Admin memilih client
2. Project dibuat
3. Milestone dibuat
4. Task dibuat dan ditugaskan
5. Progress diperbarui
6. File proyek diupload
7. Invoice dibuat sesuai progres

### Alur invoice
1. Invoice dibuat dari project
2. Status invoice berubah menjadi Sent
3. Client membayar
4. Admin menandai invoice menjadi Paid
5. Log aktivitas tercatat

## Security Blueprint

Beberapa aspek penting:

- password hashing menggunakan `password_hash()`
- CSRF token untuk form
- validasi input dan sanitasi output
- role-based access control
- session management yang aman
- pembatasan upload file
- validasi data dan escape HTML

## Tahap Pengembangan

### Tahap 1: Foundation
- auth
- user
- dashboard
- lead management

### Tahap 2: Operational CRM
- client
- project
- milestone
- task

### Tahap 3: Commercial
- invoice
- payment
- reporting

### Tahap 4: Scale
- CMS
- file manager
- notifications
- export report
- audit log

## Deployment VPS

Gunakan Ubuntu 24.04, Nginx, PHP-FPM, dan MySQL. Document root Nginx harus diarahkan ke folder `public`, bukan root repository. Salin `.env.example` menjadi `.env`, isi `APP_URL=https://brdigital.click`, lalu jalankan schema MySQL sebelum membuka form konsultasi.

Contoh konfigurasi Nginx tersedia di `deploy/nginx/brdigital.conf.example`. Setelah DNS `brdigital.click` mengarah ke `103.89.0.99`, aktifkan HTTPS dengan `certbot --nginx -d brdigital.click -d www.brdigital.click`.

## Menjalankan Lokal

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

## Kesimpulan

Blueprint sistem BRDigital adalah gabungan antara:

- website publik untuk branding dan lead generation
- CRM internal untuk pengelolaan prospek dan project
- portal client untuk monitoring progress dan invoice

Ini adalah struktur yang solid untuk pengembangan ke depan, dan siap diperluas menjadi sistem CRM full-featured tanpa perlu rebuild dari nol.

Tahap berikutnya mencakup modul client, project, milestone, task, file, invoice, dan CMS publik.