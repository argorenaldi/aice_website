-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 11:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bereseller`
--

CREATE TABLE `bereseller` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `nama_provinsi` varchar(100) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  `kode_pos` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bereseller`
--

INSERT INTO `bereseller` (`id`, `nama`, `email`, `alamat`, `no_hp`, `nama_provinsi`, `nama_kota`, `nama_kecamatan`, `kode_pos`) VALUES
(2, 'argo', 'argo@gmail.com', 'ltt', 2147483647, 'JAWA BARAT', 'sukabumi', 'cibeureum', '231141'),
(3, 'udin', 'udin@gmail.com', 'ltt', 2147483647, 'JAWA BARAT', 'sukabumi', 'baros', '87979');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `position`, `deskripsi`, `contact`) VALUES
(2, 'Operator', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'aice@co.id'),
(3, 'Web designer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'aice@co.id'),
(4, 'Engineer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'aice@co.id'),
(5, 'Administrator', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'aice@co.id');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `id_kategori` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` int(12) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `id_kategori`, `nama`, `email`, `nohp`, `pesan`) VALUES
(2, '2', 'argo', 'argo@gmail.com', 2147483647, 'halo ini pesan'),
(3, '3', 'udin', 'udin@gmail.com', 2147483647, 'halo ini pesan tes'),
(4, '2', 'tes', 'argo@gmail.com', 2147483647, 'hkjggjkg'),
(6, '1', 'baru tadi', 'barutadi@gmail.com', 2147483647, 'baru tadi');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(150) DEFAULT NULL,
  `berita_isi` text,
  `berita_image` varchar(40) DEFAULT NULL,
  `berita_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`berita_id`, `berita_judul`, `berita_isi`, `berita_image`, `berita_tanggal`) VALUES
(4, 'Konsisten Dukung Kemajuan Olahraga Nasional, AICE Raih Apresiasi dari Menpora ', '<p><strong>Liputan6.com, Jakarta</strong>&nbsp;Turnamen bergengsi Piala Presiden Bola Basket 2019 yang berlangsung 20-24 November di GOR Sritex Arena, Solo, resmi dibuka oleh Menteri Pemuda dan Olahraga (Menpora), Zainudin Amali pada Rabu (20/11). Sembilan tim dari Indonesian Basketball League (IBL) siap bertanding untuk menjadi yang terbaik digelaran yang berhadiah total Rp370 juta.</p>\r\n\r\n<p>Dalam sambutannya, Menpora Zainudin Amali turut mengapresiasi Aice yang komitmen mendukung kemajuan olahraga Indonesia&nbsp;dan menjadi satu-satunya brand es krim yang terpilih dalam ajang bertujuan meningkatkan prestasi basket nasional.&nbsp;</p>\r\n\r\n<p>Kehadiran AICE di Piala Presiden Bola Basket 2019 yang pertama kali dalam sejarah dunia bola basket nasional dijelaskan oleh Sylvana Zhong, Brand Manager Aice Group Holdings Pte Ltd sebagai misi untuk menyebarkan trend gaya hidup sehat.</p>\r\n\r\n<p>&quot;Dukungan AICE di Piala Presiden Bola Basket 2019 merupakan kelanjutan dari semangat yang kami sebarkan di Asian Games 2018, yaitu mengajak generasi muda memulai trend gaya hidup sehat lewat olahraga,&quot; ujar Sylvana Zhong.</p>\r\n\r\n<p>Sylvana Zhong percaya bahwa olahraga merupakan bagian dari edukasi yang membangun masa depan generasi muda. &ldquo;Olahraga bukan hanya menghadirkan keceriaan, tetapi juga mengembangkan karakter dan kerja sama untuk mencapai sebuah tujuan. Jelas sejalan dengan visi Aice untuk menghadirkan senyuman dan menginsipirasi masyarakat luas,&rdquo; tambah Sylvana.</p>\r\n\r\n<p>Untuk memeriahkan pembukaan Piala Presiden Bola Basket 2019, AICE membagikan es krim gratis ke 1.500 orang yang hadir. &ldquo;Ini merupakan upaya dari kami dalam mendukung kemajuan dunia olahraga nasional, sembari membagikan kesegaran dan semangat bagi para penonton di GOR Sritex Arena,&rdquo; jelas Sylvana.</p>\r\n\r\n<p>Sekitar 1.500 es krim yang dibagikan, terdiri dari berbagai rasa buah yang memberikan kenikmatan dan kesegaran dari produk es krim berkualitas. &ldquo;Ada delapan varian es krim rasa buah yang siap memanjakan para penonton dalam menikmati panasnya laga antar klub basket kasta tertinggi di Indonesia ini. Mulai dari Sweet Corn, Pure Durian, Mango Slush, Nanas, Milk Melon, Semangka, Strawberry Crispy, Mochi Strawberry, hingga Mochi Durian,&rdquo; ujar Sylvana.</p>\r\n\r\n<p>Sepanjang Piala Presiden Bola Basket 2019, para penonton yang hadir di Sritex Arena akan disuguhi kenikmatan dan segarnya produk es krim Aice khususnya varian buah, sebagai teman menonton panasnya laga antar klub basket papan atas Indonesia.</p>\r\n\r\n<p>&quot;Persaingan di Piala Presiden jelas akan panas. Di situlah, kami hadir untuk menjadi teman bagi para penonton, sehingga mereka dapat menyaksikan pertandingan dengan lebih nikmat, ditemani es krim Aice yang menawarkan kesegaran buah,&quot; ucapnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Piala Presiden Bola Basket 2019 diikuti oleh sembilan tim dari Indonesian Basketball League (IBL) yakni Amartha Hangtuah, Bank BPD DIY Bima Perkasa Jogja, NSH Jakarta, Pacific Caesar&nbsp; Surabaya, Pelita Jaya Basketball, Prawira Bandung, Satria Muda Pertamina, Satya Wacana Salatiga dan tim pendatang baru Louvre Surabaya. Tidak hanya pertandingan, Piala Presiden Bola Basket juga menghadirkan festival berupa bazaar dan hiburan baik modern maupun traditional untuk para pengunjung.</p>\r\n\r\n<p>Dalam acara pembukaan, Zainudin juga memberikan komentar yang postif dan harapan untuk pengelolaan acara yang terbuka dan transparan, termasuk meningkatkan keterlibatan&nbsp;<em>private sector</em>&nbsp;dalam event berikut. Beliau di dampingi oleh Maruarar Sirait selaku ketua Steering Committee bersama ketua&nbsp;<em>Organizing Committee</em>, Cahyadi Wanda dan Gibran Rakabuming yang juga hadir menyaksikan pembukaan tersebut.</p>\r\n\r\n<p>&ldquo;Sebagai salah satu sponsor, kami berharap Piala Presiden Bola Basket 2019, dapat mendorong potensi generasi muda Indonesia untuk berprestasi dalam bidang olahraga, sehingga mampu menginspirasi lebih banyak masyarakat,&rdquo; tutup Sylvana.</p>\r\n\r\n<p>(Sumber Artikel : <a href=\"https://www.liputan6.com/bola/read/4116803/konsisten-dukung-kemajuan-olahraga-nasional-aice-raih-apresiasi-dari-menpora\">Liputan6.com</a>)</p>\r\n', '646a004b48741b806329d4b408ce39c9.png', '2019-11-27 23:36:29'),
(5, 'Wow ternyata hanya dengan menghabiskan waktu 1 jam berdiam diri dirumah anda tidak mendapatkan apa ap', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '8e312fc48a9ed9d034837bd79ec35b06.jpg', '2019-11-28 04:30:56'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;&nbsp;&nbsp; &nbsp;</p>\r\n', 'a52e92beb001608ed287259c376cf9dd.jpg', '2019-11-28 04:32:06'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,qu', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;&nbsp;</p>\r\n', 'fa7c266f69a7ca3251e0fac136596be1.jpg', '2019-11-28 04:32:43'),
(9, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>\r\n', 'e08ef345d6264206e7132e236d0cbc5d.png', '2019-11-28 06:23:39'),
(10, 'update', '<p>Di Krusty Krab, Mr. Krabs mengetahui bahwa tidak ada pelanggan baru karena ia menaruh iklan Krusty Krab yang mikroskopis di koran Bikini Bottom Examiner. Dia pergi keluar dan menemukan orang membeli koran yang berbeda yang disebut Bottomfeeder di belakang restoran. Seorang pembeli memberi tahu Mr. Krabs bahwa Examiner tidak menarik, sedangkan Bottomfeeder adalah.<br />\r\n<br />\r\nDia juga belajar bahwa cerita di Bottomfeeder tidak semuanya benar. Ketika seorang wanita lewat untuk membeli salinan, Tuan Krabs, berpura-pura menjadi baik, membuka mesin untuknya, hanya baginya untuk mendapatkannya secara gratis (dia membukanya untuknya, kemudian mengambil satu untuk dirinya sendiri) untuk mencari tahu mereka biaya 25 sen per kata. Kagum dengan harganya, Tuan Krabs memutuskan untuk membuka bisnis surat kabar sendiri. Keesokan harinya, SpongeBob menemukan bahwa Tuan Krabs akan menempatkan dia pada dua pekerjaan: tugas memasak gorengnya dan menjadi reporter utama untuk Kronik Krabby, dan kemudian diberi lencana dan kamera. Setelah menemukan cerita yang tidak menarik (meskipun perampokan bank, dua ikan menghancurkan perahu manusia, dan monster di latar belakang), dia berjalan pergi hanya untuk menemukan Patrick menunggu bus.<br />\r\n<br />\r\nMemutuskan bahwa acara umum ini akan membuat cerita yang menarik, SpongeBob mengambil gambar adegan itu, tetapi Patrick bersikeras bahwa dia hanya menonton tiang itu sehingga pada saat berikutnya bergerak, dia akan ada di sana untuk melihatnya. Di Krusty Krab, Tuan Krabs memberi tahu SpongeBob bahwa ceritanya tidak cukup berair, dan mengubah kisah Patrick yang menonton tiang ke Patrick menikahi tiang. Mr. Krabs memberi tahu SpongeBob bahwa ini bukan kebohongan, tetapi memberi orang sesuatu yang bisa mereka tertawakan.<br />\r\n<br />\r\nSetelah ini, SpongeBob menulis kebohongan tentang orang-orang, yang menyebabkan Nyonya Puff kehilangan murid-muridnya, Larry ditendang keluar dari gym, Chum Bucket ditutup, dan piala Sandy dibawa pergi. SpongeBob mencoba memberi tahu Tuan Krabs yang sekarang kaya untuk berhenti menyakiti teman-temannya serta musuh bebuyutannya, Plankton, tetapi Tuan Krabs menertawakannya, mengancam untuk mengambil spatula SpongeBob (dan mungkin pekerjaan memasaknya goreng) jika dia tidak bisa menulis lebih banyak.<br />\r\n<br />\r\nMalam itu, Tuan Krabs memberitahunya untuk memberinya kisah paling liar yang pernah ada, jadi SpongeBob tetap terjaga sepanjang malam untuk menulis cerita. Keesokan harinya, Mr. Krabs terkejut menemukan massa yang marah di restorannya. Ternyata Spongebob (jelas muak dengan kebohongan menulis tentang teman-temannya) menulis tentang Mr. Krabs yang terlalu memaksanya, memaksanya menulis kebohongan yang menghancurkan kehidupan orang lain dan menyimpan uang untuk dirinya sendiri, hanya merawat uang dan tidak peduli pada orang lain.<br />\r\n<br />\r\nMarah pada ini, massa yang marah datang dan mengambil kembali semua uang mereka. Tuan Krabs jatuh berkeping-keping, terisak-isak, sangat merindukan uangnya sehingga dia bahkan tidak kesal dengan SpongeBob. Namun, Krabs menemukan satu dolar yang membuat orang yang marah merindukan dan memutuskan untuk menggunakan printer untuk mencetak uang palsu, dan memberi tahu SpongeBob untuk memberinya gunting agar dia bisa mulai menggunakan imajinasinya dengan printer. Tulisan ini berbasis dan bersumber dari situ Spongebob Wikia.</p>\r\n', 'beefe6a4eff757ce8c9b5dfefd8741f4.jpg', '2019-11-28 06:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `image_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `deskripsi`, `image_produk`) VALUES
(4, 'Durian cup', 'Es krim susu lembut dipadukan dengan saus durian alami. Penggemar durian tak boleh ketinggalan!\r\nBerat bersih : 80 Gram', 'd5981540c0994c775100afc9d282f40e.png'),
(5, 'mochi coklat', 'Es krim susu Mochi lembut dipadukan dengan saus durian alami. Penggemar durian tak boleh ketinggalan! Berat bersih : 80 Gram ', 'dc43bf625e75816d68926e3cd02c46e7.png'),
(7, 'coklat', 'Es krim susu lembut dipadukan dengan saus durian alami. Penggemar durian tak boleh ketinggalan! Berat bersih : 80 Gram ', 'ad93aea4d0bf1ee1b547772a85e88769.png'),
(8, 'mochi vanilla', 'Es krim susu lembut dipadukan dengan saus durian alami. Penggemar durian tak boleh ketinggalan! Berat bersih : 80 Gram ', '0cbf4d48dd2fbab9f120512124734dbf.png'),
(9, 'melon', 'Es krim susu lembut dipadukan dengan saus durian alami. Penggemar durian tak boleh ketinggalan! Berat bersih : 80 Gram ', '09a43248a99e8550492a435731b264b8.png'),
(10, 'cup strawberry', 'Es krim susu lembut dipadukan dengan saus durian alami. Penggemar durian tak boleh ketinggalan! Berat bersih : 80 Gram ', 'a28d8a7781093b99e84c1cd21b47751a.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bereseller`
--
ALTER TABLE `bereseller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bereseller`
--
ALTER TABLE `bereseller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
