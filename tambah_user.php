<?php
// 1. Konfigurasi Database (Sesuaikan dengan DB Anda)
$host = 'localhost';
$db   = 'nama_database_kamu';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (\PDOException $e) {
     echo "Koneksi database gagal: " . $e->getMessage() . PHP_EOL;
     exit(1);
}

// 2. Mengambil Input dari Terminal
echo "=== FORM TAMBAH USER ADMIN ===" . PHP_EOL;
echo "Nama Lengkap : ";
$name = trim(fgets(STDIN));

echo "Username/Email: ";
$username = trim(fgets(STDIN));

echo "Password     : ";
$password_biasa = trim(fgets(STDIN));

// 3. Proses Hashing Password Otomatis
$password_hash = password_hash($password_biasa, PASSWORD_BCRYPT);

// 4. Eksekusi Query ke Database
$sql = "INSERT INTO users (name, username, email, password_hash, role, status, created_at, updated_at) 
        VALUES (:name, :username, :email, :password_hash, 'admin', 'active', NOW(), NOW())";

$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([
        'name'          => $name,
        'username'      => $username,
        'email'         => $username, // Menggunakan username sebagai email sesuai contoh query Anda
        'password_hash' => $password_hash
    ]);
    echo PHP_EOL . "? User berhasil ditambahkan ke database dengan password aman (sudah di-hash)!" . PHP_EOL;
} catch (\PDOException $e) {
    echo PHP_EOL . "? Gagal menyimpan data: " . $e->getMessage() . PHP_EOL;
}