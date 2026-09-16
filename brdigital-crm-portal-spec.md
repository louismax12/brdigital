# BRDigital CRM Portal
## Tim Bumantara Digital Raileten

### 1. Identitas Proyek

**Nama brand:** BRDigital  
**Nama tim:** Tim Bumantara Digital Raileten  
**Domain:** https://brdigital.click  
**Tagline:** Memajukan UMKM melalui profesionalisme website.

BRDigital adalah tim pengembangan website yang membantu UMKM memiliki kehadiran digital yang profesional, mudah dikelola, dan sesuai kebutuhan bisnis. Portal ini digunakan sebagai CRM internal sekaligus portal client untuk menerima, mengelola, dan menyerahkan website yang dibuat oleh tim.

### 2. Anggota Tim

#### Louis Maximillian
- Peran: Web Developer
- Pekerjaan utama: Web Developer di Rumah Sakit RKZ
- Tanggung jawab: Analisis kebutuhan, arsitektur sistem, backend, database, deployment, maintenance, dan komunikasi teknis.

#### Mario Klau
- Peran: Web Developer
- Status: Fresh Graduate
- Tanggung jawab: Frontend, implementasi halaman, integrasi API, testing, dokumentasi, dan dukungan pengembangan.

### 3. Visi dan Misi

#### Visi
Memajukan UMKM melalui profesionalisme website.

#### Misi
1. Membantu UMKM membangun identitas digital yang terpercaya.
2. Menyediakan website yang profesional, responsif, dan mudah digunakan.
3. Memberikan proses pengerjaan yang transparan melalui portal client.
4. Menjaga komunikasi, dokumentasi, dan histori pekerjaan secara terstruktur.
5. Membantu client memahami dan mengelola aset digital mereka.

### 4. Tujuan Sistem

Sistem CRM Portal BRDigital harus mampu:

- Menerima calon client dan permintaan pembuatan website.
- Menyimpan data client dan bisnisnya.
- Mengelola pipeline calon client dari inquiry sampai selesai.
- Membuat dan mengelola project website.
- Menampilkan progres pekerjaan kepada client.
- Mengelola dokumen, brief, revisi, dan persetujuan.
- Mengelola invoice atau status pembayaran secara sederhana.
- Menyerahkan website kepada client secara terstruktur.
- Menyediakan komunikasi dan notifikasi antara tim dan client.
- Menyimpan histori aktivitas untuk kebutuhan audit dan evaluasi.

### 5. Jenis Pengguna

#### Admin / Owner
Akses penuh terhadap seluruh sistem:
- Mengelola user dan role.
- Mengelola client, lead, project, task, invoice, dan dokumen.
- Melihat dashboard dan laporan.
- Mengatur konfigurasi layanan.

#### Team Member
Akses sesuai tugas:
- Melihat project yang ditugaskan.
- Mengelola task dan progres.
- Mengunggah hasil pekerjaan.
- Memberikan komentar dan update.
- Melihat data client yang relevan.

#### Client
Akses terbatas pada data miliknya:
- Melihat profil bisnis.
- Mengisi brief website.
- Melihat status project.
- Melihat milestone dan task yang dapat dilihat client.
- Mengunggah materi seperti logo, foto, teks, dan dokumen.
- Memberikan komentar dan persetujuan.
- Melihat invoice dan status pembayaran.
- Menerima hasil akhir website.

### 6. Modul Utama

#### A. Landing Page
Halaman publik untuk memperkenalkan BRDigital:
- Hero section dengan value proposition.
- Profil Tim Bumantara Digital Raileten.
- Layanan website.
- Proses kerja.
- Portofolio.
- Testimoni client.
- FAQ.
- CTA untuk menghubungi atau mengajukan project.
- Kontak dan tautan domain `brdigital.click`.

#### B. Lead / Prospective Client Management
Data yang perlu disimpan:
- Nama bisnis.
- Nama contact person.
- Nomor WhatsApp.
- Email.
- Jenis usaha.
- Kota atau area usaha.
- Kebutuhan website.
- Estimasi budget.
- Sumber lead.
- Status lead.

Status lead:
1. New
2. Contacted
3. Qualified
4. Proposal Sent
5. Negotiation
6. Won
7. Lost

#### C. Client Management
- Profil client.
- Profil bisnis.
- Kontak.
- Alamat.
- Media sosial.
- Catatan komunikasi.
- Daftar project.
- Riwayat pembayaran.
- Dokumen client.

#### D. Project Management
Data project:
- Nama project.
- Client.
- Jenis website.
- Deskripsi.
- Paket layanan.
- Nilai project.
- Tanggal mulai.
- Target selesai.
- Status.
- PIC.
- Domain.
- Hosting.
- Repository.
- Catatan teknis.

Status project:
1. Draft
2. Onboarding
3. Requirement Gathering
4. Design
5. Development
6. Internal Review
7. Client Review
8. Revision
9. Deployment
10. Handover
11. Maintenance
12. Completed
13. On Hold
14. Cancelled

#### E. Task dan Milestone
Setiap project dapat memiliki milestone dan task.

Field task:
- Judul.
- Deskripsi.
- PIC.
- Prioritas.
- Status.
- Deadline.
- Persentase progres.
- Lampiran.
- Komentar.
- Riwayat perubahan.

Status task:
- To Do
- In Progress
- Review
- Revision
- Done
- Blocked

#### F. Client Brief
Formulir kebutuhan website:
- Nama usaha.
- Deskripsi usaha.
- Target audience.
- Tujuan website.
- Halaman yang dibutuhkan.
- Referensi website.
- Warna dan gaya visual.
- Logo.
- Foto produk.
- Konten teks.
- Kontak bisnis.
- Integrasi yang dibutuhkan.
- Catatan tambahan.

#### G. Dokumen dan File
Dokumen dapat dikategorikan sebagai:
- Brief.
- Proposal.
- Kontrak atau kesepakatan.
- Materi konten.
- Desain.
- Hasil development.
- Berita acara handover.
- Dokumen maintenance.

Setiap file harus memiliki:
- Nama file.
- Kategori.
- Pemilik.
- Project.
- Uploaded by.
- Tanggal upload.
- Hak akses.

#### H. Komunikasi
- Komentar per project.
- Komentar per task.
- Mention user.
- Status komentar: open/resolved.
- Notifikasi aktivitas penting.
- Riwayat komunikasi.

Integrasi WhatsApp dapat disiapkan sebagai fitur lanjutan. Untuk MVP, gunakan tombol deep link WhatsApp tanpa mengharuskan integrasi WhatsApp Business API.

#### I. Invoice dan Pembayaran
Fitur sederhana:
- Nomor invoice.
- Client.
- Project.
- Item layanan.
- Subtotal.
- Diskon.
- Total.
- Jatuh tempo.
- Status pembayaran.

Status pembayaran:
- Unpaid
- Partial
- Paid
- Overdue
- Cancelled

#### J. Handover Website
Checklist serah terima:
- Domain aktif.
- Hosting aktif.
- Source code diserahkan atau disimpan sesuai kesepakatan.
- Akun admin website.
- Dokumentasi penggunaan.
- Backup.
- Materi client.
- Training singkat.
- Persetujuan client.
- Tanggal handover.

### 7. Dashboard

#### Dashboard Admin
Tampilkan:
- Total lead.
- Lead baru.
- Project aktif.
- Project mendekati deadline.
- Invoice belum dibayar.
- Aktivitas terbaru.
- Ringkasan pendapatan.
- Distribusi status project.
- Task berdasarkan anggota tim.

#### Dashboard Client
Tampilkan:
- Project aktif.
- Persentase progres.
- Milestone berikutnya.
- Task yang membutuhkan feedback.
- Dokumen terbaru.
- Invoice.
- Pesan atau komentar terbaru.
- Tombol menghubungi tim.

### 8. Rekomendasi Teknologi

Gunakan teknologi yang realistis, mudah dirawat, dan sesuai kemampuan tim.

Rekomendasi default:
- Frontend: HTML, CSS, Tailwind CSS, dan JavaScript.
- Backend: PHP dengan pola MVC sederhana atau framework PHP yang stabil.
- Database: MySQL.
- API: REST API berbasis JSON.
- Authentication: Session untuk dashboard web atau JWT untuk API.
- File storage: Local storage pada tahap awal, dengan opsi object storage di masa depan.
- Deployment: VPS atau shared hosting yang mendukung PHP dan MySQL.
- Version control: Git.
- Dokumentasi API: OpenAPI atau dokumentasi Markdown.

Jika memilih framework, jelaskan alasan pemilihan dan pastikan kompatibel dengan environment hosting.

### 9. Struktur Data Minimal

Entitas utama:
- users
- roles
- permissions
- leads
- clients
- client_contacts
- businesses
- projects
- project_members
- milestones
- tasks
- task_comments
- project_comments
- files
- invoices
- invoice_items
- payments
- notifications
- activity_logs
- handover_checklists
- service_packages

Setiap tabel sebaiknya memiliki:
- id
- created_at
- updated_at
- created_by jika relevan
- status jika relevan

Gunakan primary key, foreign key jika didukung environment, index untuk kolom pencarian, dan validasi relasi. Jangan menghapus foreign key hanya untuk mengatasi masalah performa tanpa analisis terlebih dahulu.

### 10. Keamanan

Wajib menerapkan:
- Password hashing menggunakan algoritma modern.
- Validasi dan sanitasi input.
- Prepared statements.
- Proteksi CSRF untuk form berbasis session.
- Validasi role dan permission pada setiap endpoint.
- Pembatasan akses file berdasarkan client/project.
- Rate limiting pada login.
- Session timeout.
- Audit log untuk aktivitas penting.
- Jangan menyimpan password dalam bentuk plaintext.
- Jangan menaruh secret key di repository publik.
- Gunakan HTTPS pada domain production.
- Backup database secara berkala.

### 11. Alur Bisnis

#### Alur Lead sampai Project
1. Calon client mengisi form inquiry.
2. Admin menerima lead.
3. Admin menghubungi calon client.
4. Admin mengubah status lead menjadi Qualified.
5. Tim mengumpulkan kebutuhan.
6. Admin membuat proposal.
7. Jika disetujui, lead diubah menjadi Won.
8. Sistem membuat client dan project.
9. Client menerima akses portal.
10. Client mengisi brief dan mengunggah materi.
11. Tim mengerjakan project berdasarkan milestone.
12. Client melakukan review dan memberikan feedback.
13. Tim menyelesaikan revisi.
14. Website dideploy.
15. Tim melakukan handover.
16. Project masuk status Maintenance atau Completed.

### 12. Desain UI/UX

Gaya visual:
- Profesional.
- Modern.
- Bersih.
- Ramah untuk UMKM.
- Tidak terlalu korporat.
- Mobile responsive.
- Mudah digunakan oleh client non-teknis.

Komponen UI:
- Sidebar dashboard.
- Top navigation.
- Breadcrumb.
- Card statistik.
- Table dengan filter.
- Kanban pipeline.
- Progress bar.
- Timeline project.
- Modal form.
- Toast notification.
- Empty state.
- Loading state.
- Error state.
- Confirmation dialog.

Gunakan bahasa Indonesia sebagai bahasa utama. Istilah teknis boleh menggunakan bahasa Inggris jika lebih umum.

### 13. MVP Prioritas

Bangun secara bertahap.

#### Tahap 1 — Fondasi
- Authentication.
- Role dan permission.
- Dashboard admin.
- Dashboard client.
- Client management.
- Project management.
- Activity log dasar.

#### Tahap 2 — Operasional Project
- Client brief.
- Milestone.
- Task.
- Komentar.
- Upload file.
- Notifikasi dasar.

#### Tahap 3 — Komersial
- Lead management.
- Proposal.
- Invoice.
- Payment tracking.
- Laporan sederhana.

#### Tahap 4 — Handover dan Maintenance
- Handover checklist.
- Dokumentasi.
- Maintenance ticket.
- Backup record.
- Portal knowledge base.

### 14. Acceptance Criteria

Sistem dianggap memenuhi MVP apabila:
- Admin dapat login dan mengelola data.
- Client hanya dapat melihat project miliknya.
- Admin dapat membuat client dan project.
- Client dapat mengisi brief.
- Tim dapat membuat milestone dan task.
- Client dapat melihat progres project.
- Client dapat memberikan feedback.
- File dapat diunggah dan diakses sesuai permission.
- Aktivitas penting tercatat.
- Sistem dapat digunakan dengan baik melalui desktop dan mobile.
- Tidak ada akses silang antar-client.
- Validasi form dan error handling tersedia.
- Database memiliki relasi dan index yang sesuai.

### 15. Instruksi untuk AI Code Generator

Bangun sistem ini secara bertahap, jangan langsung menghasilkan seluruh kode tanpa struktur.

Urutan pekerjaan:
1. Analisis requirement.
2. Tentukan arsitektur.
3. Buat struktur folder.
4. Buat database schema dan migration SQL.
5. Buat authentication dan authorization.
6. Buat layout dashboard.
7. Buat modul client.
8. Buat modul project.
9. Buat modul task dan milestone.
10. Buat modul brief dan file.
11. Buat komentar dan notifikasi.
12. Buat invoice.
13. Buat handover.
14. Buat testing.
15. Buat dokumentasi instalasi dan deployment.

Untuk setiap tahap:
- Jelaskan file yang dibuat atau diubah.
- Tampilkan kode lengkap untuk file baru.
- Jangan menghapus fitur yang sudah selesai.
- Gunakan reusable component.
- Pisahkan controller, model, view, service, dan utility.
- Terapkan validasi server-side.
- Gunakan prepared statement.
- Berikan SQL yang dapat dijalankan.
- Sertakan contoh data dummy.
- Sertakan instruksi testing manual.
- Jika ada asumsi, tuliskan sebelum implementasi.
- Jangan mengarang integrasi eksternal yang belum tersedia.
- Prioritaskan MVP yang dapat dijalankan.

### 16. Prompt Awal untuk AI

> Anda adalah software architect dan senior full-stack developer. Bangun CRM Portal untuk BRDigital — Tim Bumantara Digital Raileten, sebuah tim web development yang terdiri dari Louis Maximillian dan Mario Klau. BRDigital membantu UMKM memiliki website profesional dengan visi “Memajukan UMKM melalui profesionalisme website”.
>
> Domain brand: `brdigital.click`.
>
> Buat sistem CRM portal yang memiliki role Admin/Owner, Team Member, dan Client. Sistem harus mendukung lead management, client management, project management, milestone, task, client brief, file management, komentar, notifikasi, invoice, payment tracking, dan handover website.
>
> Gunakan arsitektur yang sederhana, aman, mudah dipelihara, dan cocok untuk deployment pada VPS atau hosting PHP/MySQL. Bahasa antarmuka utama adalah Bahasa Indonesia.
>
> Mulai dari analisis requirement, arsitektur folder, database schema, dan authentication. Jangan melompat ke seluruh fitur sekaligus. Setelah setiap tahap selesai, tampilkan perubahan file, kode lengkap, cara menjalankan, dan cara melakukan testing.


## 17. Integrasi Company Profile dan CRM dalam Satu Sistem

BRDigital harus memiliki dua area utama dalam satu aplikasi dan satu database:

### A. Website Publik / Company Profile

Website publik dapat diakses tanpa login melalui domain `brdigital.click`.

Halaman yang wajib tersedia:

1. **Home**
   - Hero section.
   - Tagline: “Memajukan UMKM melalui profesionalisme website.”
   - Penjelasan singkat tentang BRDigital.
   - CTA “Konsultasi Sekarang” dan “Lihat Portofolio”.

2. **Tentang Kami**
   - Nama tim: Tim Bumantara Digital Raileten.
   - Profil BRDigital.
   - Visi dan misi.
   - Nilai kerja: profesional, transparan, kolaboratif, dan berorientasi pada kebutuhan UMKM.

3. **Profil Tim**
   - Louis Maximillian — Web Developer di Rumah Sakit RKZ.
   - Mario Klau — Web Developer fresh graduate.
   - Foto, deskripsi, keahlian, dan tanggung jawab dapat dikelola melalui dashboard admin.

4. **Layanan**
   - Company profile website.
   - Website UMKM.
   - Landing page.
   - Website katalog produk.
   - Maintenance dan pengembangan lanjutan.
   - Layanan tambahan dapat dikelola admin.

5. **Portofolio**
   - Daftar project yang telah selesai.
   - Gambar atau thumbnail.
   - Nama project.
   - Deskripsi.
   - Teknologi.
   - Link demo.
   - Client atau kategori bisnis.
   - Status publikasi.

6. **Proses Kerja**
   - Konsultasi.
   - Analisis kebutuhan.
   - Proposal.
   - Desain.
   - Development.
   - Review dan revisi.
   - Deployment.
   - Handover dan maintenance.

7. **Testimoni**
   - Nama client.
   - Nama bisnis.
   - Isi testimoni.
   - Foto atau logo jika tersedia.
   - Status publikasi.

8. **FAQ**
   - Pertanyaan umum tentang harga, waktu pengerjaan, revisi, domain, hosting, dan maintenance.

9. **Contact / Konsultasi**
   - Form nama.
   - Nama bisnis.
   - WhatsApp.
   - Email.
   - Jenis layanan.
   - Deskripsi kebutuhan.
   - Estimasi budget.
   - Pesan.
   - Setelah dikirim, data otomatis masuk ke modul `leads` CRM.

### B. CMS Company Profile pada Dashboard Admin

Admin harus dapat mengelola konten website publik tanpa mengubah kode secara manual.

Modul CMS minimal:

- Pengaturan identitas brand.
- Pengaturan tagline.
- Profil tim.
- Daftar layanan.
- Portofolio.
- Testimoni.
- FAQ.
- Kontak.
- Media sosial.
- SEO title dan meta description.
- Open Graph image.
- Status publish/draft.
- Urutan tampilan konten.

Entitas database tambahan:

- site_settings
- team_members
- services
- portfolios
- testimonials
- faqs
- contact_settings
- social_links
- seo_settings
- content_sections

Setiap konten publik sebaiknya memiliki:
- id
- title
- slug jika relevan
- description/content
- image/file jika relevan
- sort_order
- status
- created_at
- updated_at
- published_at jika relevan

### C. Integrasi Company Profile dengan CRM

Form konsultasi pada website publik harus membuat record baru pada tabel `leads`.

Alur:

1. Pengunjung membuka `brdigital.click`.
2. Pengunjung melihat layanan dan portofolio.
3. Pengunjung mengisi form konsultasi.
4. Sistem melakukan validasi input.
5. Sistem menyimpan inquiry sebagai lead dengan status `New`.
6. Admin menerima notifikasi.
7. Admin menghubungi calon client.
8. Admin mengubah lead menjadi `Contacted`, `Qualified`, atau status berikutnya.
9. Jika disetujui, lead dikonversi menjadi client dan project.
10. Client menerima akun portal.

Jangan membuat database terpisah untuk company profile dan CRM. Gunakan satu database dengan pemisahan modul dan hak akses.

### D. Routing yang Disarankan

Contoh routing:

- `/` — Home
- `/tentang-kami` — About
- `/layanan` — Services
- `/portofolio` — Portfolio
- `/proses-kerja` — Process
- `/kontak` — Contact
- `/konsultasi` — Consultation form
- `/login` — Login
- `/portal` — Client portal
- `/admin` — Admin dashboard
- `/admin/cms` — CMS management
- `/admin/leads` — Lead management
- `/admin/clients` — Client management
- `/admin/projects` — Project management

### E. Persyaratan Tambahan Company Profile

- Tampilan profesional dan ramah UMKM.
- Mobile responsive.
- Loading cepat.
- SEO dasar.
- URL yang bersih.
- Form konsultasi memiliki validasi server-side.
- Konten publik hanya menampilkan data dengan status `Published`.
- Admin dapat menyimpan konten sebagai draft sebelum dipublikasikan.
- Gambar memiliki kompresi dan alt text.
- Website tetap dapat digunakan apabila JavaScript tidak aktif untuk fungsi dasar.
- Semua form memiliki halaman sukses dan pesan error yang jelas.

## 18. Prompt Tambahan untuk AI Code Generator

> Selain CRM Portal, bangun Company Profile BRDigital dalam aplikasi yang sama. Company Profile menggunakan domain `brdigital.click` dan menjadi halaman publik untuk memperkenalkan Tim Bumantara Digital Raileten, Louis Maximillian, dan Mario Klau.
>
> Buat halaman Home, Tentang Kami, Layanan, Portofolio, Proses Kerja, Testimoni, FAQ, dan Contact/Konsultasi. Form konsultasi harus terhubung langsung ke modul Lead CRM dan menyimpan inquiry dengan status `New`.
>
> Buat CMS sederhana pada dashboard admin agar admin dapat mengelola profil tim, layanan, portofolio, testimoni, FAQ, pengaturan kontak, media sosial, dan SEO tanpa mengedit kode. Gunakan satu aplikasi, satu database, dan satu sistem authentication, tetapi pisahkan route publik, route client, dan route admin berdasarkan permission.
>
> Prioritaskan struktur yang mudah dikembangkan, aman, mobile responsive, SEO-friendly, dan mudah di-deploy pada hosting PHP/MySQL. Mulai dengan database schema dan struktur folder, kemudian implementasikan halaman publik dan integrasi form konsultasi ke CRM.
