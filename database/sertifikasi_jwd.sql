-- ============================================================
-- Database Sertifikasi JWD (Junior Web Developer) - VSGA
-- Import file ini di phpMyAdmin lalu pilih database yang dibuat.
-- Akun bawaan:
--   Admin : username = admin   password = admin123
--   User  : username = user    password = user123
-- ============================================================

CREATE DATABASE IF NOT EXISTS `sertifikasi_jwd`
  DEFAULT CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

USE `sertifikasi_jwd`;

-- ------------------------------------------------------------
-- Tabel users
-- role '1'  = user biasa (login.php mengarah ke landingPage)
-- role selain '1' = admin (login.php mengarah ke admin.php)
-- NOTE: menu admin di navbar baru muncul jika username == 'admin'
-- ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` VARCHAR(50)  NOT NULL,
  `email`    VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `role`     VARCHAR(10)  NOT NULL DEFAULT '1',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Password di-hash dengan password_hash() (bcrypt)
INSERT INTO `users` (`username`, `email`, `password`, `role`) VALUES
  ('admin', 'admin@diginova.id', '$2y$12$T6bT6FZ6qAUxC79be1luge0wZxlCu2DpPiEYh3bG8ygNrH2B21PnC', '0'),
  ('user',  'user@diginova.id',  '$2y$12$eC2NDDIs6YWeQkUXY8Sqg.H74Zu3RHT3ast/B3NihpHwK06lqIZxS', '1');

-- ------------------------------------------------------------
-- Tabel blogs
-- Kolom primary key BERNAMA "1d" (diapit backtick)!
-- Jangan ubah ke `id` tanpa migrasi, kode memakai $data['1d']
-- dan WHERE 1d = ...
-- ------------------------------------------------------------

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `1d`          INT          NOT NULL AUTO_INCREMENT,
  `title`       VARCHAR(255) NOT NULL,
  `description` TEXT         NOT NULL,
  `image`       VARCHAR(255) NOT NULL,
  PRIMARY KEY (`1d`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- image merujuk ke file di src/uploads/
INSERT INTO `blogs` (`1d`, `title`, `description`, `image`) VALUES
  (1, 'Kurikulum Terbaik', 'Kurikulum yang kami susun disesuaikan dengan kebutuhan industri saat ini. Materi dibuat praktis dan berbasis proyek, sehingga peserta tidak hanya paham teori tapi juga siap terjun ke dunia kerja. Setiap modul dilengkapi studi kasus nyata dan tugas yang mengasah kemampuan problem solving.', '68a56fbc8842c.png'),
  (2, 'Fokus adalah Kunci', 'Di tengah banyaknya distraksi, kemampuan untuk fokus menjadi pembeda utama antara tim yang biasa dan tim yang luar biasa. Artikel ini membahas teknik manajemen fokus, cara membangun lingkungan kerja yang minim gangguan, dan kebiasaan kecil yang berdampak besar untuk produktivitas harian.', '68a66ee4bd2fc.png');

-- ------------------------------------------------------------
-- Tabel event
-- ------------------------------------------------------------

DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `id_event` INT          NOT NULL AUTO_INCREMENT,
  `title`    VARCHAR(255) NOT NULL,
  `desc`     TEXT         NOT NULL,
  `image`    VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `event` (`id_event`, `title`, `desc`, `image`) VALUES
  (1, 'Webinar Digital Marketing', 'Webinar gratis untuk memahami strategi pemasaran digital mulai dari dasar. Materi mencakup SEO, media sosial, dan email marketing yang langsung bisa dipraktikkan oleh UMKM dan startup.', '68a669af1f5cb.png'),
  (2, 'Workshop UI/UX Design', 'Workshop praktis mendesain antarmuka aplikasi yang ramah pengguna. Peserta belajar wireframe, prototyping, dan prinsip desain menggunakan tools yang populer di industri.', '68a66942e21e0.png'),
  (3, 'Bootcamp Fullstack Developer', 'Bootcamp intensif membangun aplikasi web dari nol hingga deploy. Peserta berlatih langsung membangun proyek nyata dengan pendampingan mentor berpengalaman.', '68a66f2347e87.png');
