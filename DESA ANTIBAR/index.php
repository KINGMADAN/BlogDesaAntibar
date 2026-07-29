<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal & Blog Resmi Desa Antibar</title>
    <!-- Tailwind CSS Engine (Digunakan oleh Antigravity Ecosystem) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f0fdf4',
                            500: '#22c55e',
                            700: '#15803d',
                            900: '#14532d',
                        }
                    }
                }
            }
        }
    </script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased flex flex-col min-h-screen">

    <!-- NAVBAR HEADER -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-3">
                    <div class="bg-brand-700 text-white p-2.5 rounded-xl shadow-md">
                        <i data-lucide="landmark" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <span class="text-xl font-bold tracking-tight text-slate-900 block leading-none">Desa Antibar</span>
                        <span class="text-xs text-slate-500 font-medium">Sistem Informasi & Portal Berita</span>
                    </div>
                </div>
                <nav class="hidden md:flex space-x-8 font-medium text-sm text-slate-600">
                    <a href="#beranda" class="hover:text-brand-700 transition">Beranda</a>
                    <a href="#layanan" class="hover:text-brand-700 transition">Layanan Desa</a>
                    <a href="#kabar-desa" class="hover:text-brand-700 transition">Kabar Desa</a>
                    <a href="#statistik" class="hover:text-brand-700 transition">Statistik</a>
                </nav>
                <div>
                    <a href="#kontak" class="bg-brand-700 hover:bg-brand-900 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition shadow-sm hover:shadow-md">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section id="beranda" class="relative bg-slate-900 text-white py-24 overflow-hidden">
        <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#22c55e_1px,transparent_1px)] [background-size:16px_16px]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 bg-brand-500/20 text-brand-500 text-xs font-semibold px-3 py-1 rounded-full border border-brand-500/30 mb-6">
                    <i data-lucide="sparkles" class="w-3.5 h-3.5"></i> Website Layanan Publik
                </span>
                <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight leading-tight mb-6">
                    Mewujudkan Pelayanan Desa Antibar yang Transparan & Digital.
                </h1>
                <p class="text-slate-300 text-lg leading-relaxed mb-8">
                    Pusat informasi resmi, transparansi tata kelola, dan akses layanan administrasi terpadu untuk segenap masyarakat Desa Antibar.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#kabar-desa" class="bg-brand-500 hover:bg-brand-700 text-white font-semibold px-6 py-3 rounded-xl transition shadow-lg">
                        Baca Kabar Desa
                    </a>
                    <a href="#layanan" class="bg-slate-800 hover:bg-slate-700 text-white font-semibold px-6 py-3 rounded-xl transition border border-slate-700">
                        Ajukan Surat
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- QUICK STATS -->
    <section id="statistik" class="py-12 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-4">
                    <p class="text-3xl font-extrabold text-brand-700">3.420</p>
                    <p class="text-sm font-medium text-slate-500 mt-1">Penduduk</p>
                </div>
                <div class="p-4">
                    <p class="text-3xl font-extrabold text-brand-700">890</p>
                    <p class="text-sm font-medium text-slate-500 mt-1">Kepala Keluarga</p>
                </div>
                <div class="p-4">
                    <p class="text-3xl font-extrabold text-brand-700">4</p>
                    <p class="text-sm font-medium text-slate-500 mt-1">Dusun</p>
                </div>
                <div class="p-4">
                    <p class="text-3xl font-extrabold text-brand-700">100%</p>
                    <p class="text-sm font-medium text-slate-500 mt-1">Transparansi Publik</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG / KABAR DESA -->
    <main id="kabar-desa" class="flex-grow py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div>
                <h2 class="text-3xl font-bold text-slate-900 tracking-tight">Kabar & Artikel Desa</h2>
                <p class="text-slate-500 mt-2">Informasi kegiatan dan perkembangan terbaru dari Desa Antibar.</p>
            </div>
        </div>

<!-- 1. TRANSPARANSI ANGGARAN (APBDes) -->
    <section class="py-12 bg-white border-y border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-brand-700 font-bold text-xs uppercase tracking-wider">Transparansi Publik</span>
                <h2 class="text-2xl font-bold text-slate-900 mt-1">Transparansi APBDes Tahun Ini</h2>
                <p class="text-slate-500 text-sm mt-2">Laporan pengelolaan keuangan Desa Antibar secara akuntabel dan terbuka.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Pendapatan Desa -->
                <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-semibold text-slate-500">Pendapatan Desa</span>
                        <div class="p-2 bg-emerald-100 text-emerald-700 rounded-lg">
                            <i data-lucide="wallet" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <p class="text-2xl font-black text-slate-900">Rp 1.450.000.000</p>
                    <div class="w-full bg-slate-200 h-2 rounded-full mt-4 overflow-hidden">
                        <div class="bg-emerald-500 h-full w-[92%]"></div>
                    </div>
                    <p class="text-xs text-slate-500 mt-2">Realisasi: 92% dari target</p>
                </div>

                <!-- Pembelanjaan Desa -->
                <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-semibold text-slate-500">Belanja Desa</span>
                        <div class="p-2 bg-blue-100 text-blue-700 rounded-lg">
                            <i data-lucide="shopping-bag" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <p class="text-2xl font-black text-slate-900">Rp 1.120.000.000</p>
                    <div class="w-full bg-slate-200 h-2 rounded-full mt-4 overflow-hidden">
                        <div class="bg-blue-500 h-full w-[77%]"></div>
                    </div>
                    <p class="text-xs text-slate-500 mt-2">Terpakai: 77% dari anggaran</p>
                </div>

                <!-- Pembiayaan / Sisa -->
                <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-semibold text-slate-500">Pembiayaan / SilPA</span>
                        <div class="p-2 bg-amber-100 text-amber-700 rounded-lg">
                            <i data-lucide="piggy-bank" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <p class="text-2xl font-black text-slate-900">Rp 330.000.000</p>
                    <div class="w-full bg-slate-200 h-2 rounded-full mt-4 overflow-hidden">
                        <div class="bg-amber-500 h-full w-[100%]"></div>
                    </div>
                    <p class="text-xs text-slate-500 mt-2">Sisa anggaran aman untuk cadangan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. LAYANAN MANDIRI & FORMULIR PENGADUAN WARGA -->
    <section id="layanan" class="py-16 bg-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <!-- Sisi Kiri: Layanan Administrasi Cepat -->
                <div>
                    <span class="text-brand-700 font-bold text-xs uppercase tracking-wider">Layanan Publik</span>
                    <h2 class="text-3xl font-bold text-slate-900 mt-1 mb-4">Pengurusan Surat Online</h2>
                    <p class="text-slate-600 mb-6 leading-relaxed">
                        Masyarakat tidak perlu antre lama di kantor desa. Pilih jenis surat keterangan yang dibutuhkan, isi draf awal, lalu ambil surat fisik yang sudah ditandatangani oleh Kepala Desa.
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm border border-slate-200">
                            <div class="p-2.5 bg-brand-50 text-brand-700 rounded-lg shrink-0">
                                <i data-lucide="file-text" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm">Surat Keterangan Usaha (SKU)</h4>
                                <p class="text-xs text-slate-500 mt-0.5">Persyaratan administrasi UMKM & pengajuan kredit bank.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm border border-slate-200">
                            <div class="p-2.5 bg-brand-50 text-brand-700 rounded-lg shrink-0">
                                <i data-lucide="user-check" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm">Surat Keterangan Dominasi / Domisili</h4>
                                <p class="text-xs text-slate-500 mt-0.5">Pengurusan identitas diri dan pendaftaran wilayah.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-white rounded-xl shadow-sm border border-slate-200">
                            <div class="p-2.5 bg-brand-50 text-brand-700 rounded-lg shrink-0">
                                <i data-lucide="heart-handshake" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm">Surat Keterangan Tidak Mampu (SKTM)</h4>
                                <p class="text-xs text-slate-500 mt-0.5">Untuk keperluan bantuan pendidikan dan kesehatan.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sisi Kanan: Form Lapor Desa -->
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-slate-200">
                    <h3 class="text-xl font-bold text-slate-900 mb-1">Lapor / Aspirasi Warga</h3>
                    <p class="text-xs text-slate-500 mb-6">Sampaikan laporan fasilitas publik atau saran pembangunan langsung ke Sekretaris Desa.</p>

                    <form action="#" method="POST" class="space-y-4" onsubmit="event.preventDefault(); alert('Modul UI Pengaduan Terkirim!');">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Nama Lengkap</label>
                            <input type="text" placeholder="Masukkan nama sesuai KTP" class="w-full text-sm px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-brand-500">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Kategori Laporan</label>
                            <select class="w-full text-sm px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-brand-500 text-slate-600">
                                <option>Infrastruktur & Jalan</option>
                                <option>Pelayanan Administrasi</option>
                                <option>Keamanan & Ketertiban</option>
                                <option>Saran & Aspirasi</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Pesan Laporan</label>
                            <textarea rows="3" placeholder="Tuliskan detail kondisi atau aspirasi Anda..." class="w-full text-sm px-4 py-2.5 rounded-lg border border-slate-300 focus:outline-none focus:ring-2 focus:ring-brand-500"></textarea>
                        </div>

                        <button type="submit" class="w-full bg-brand-700 hover:bg-brand-900 text-white font-semibold py-2.5 rounded-lg transition text-sm flex items-center justify-center gap-2">
                            <i data-lucide="send" class="w-4 h-4"></i> Kirim Laporan
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>  

        <?php
        // Data Dummy Terstruktur (Dapat dihubungkan ke MySQL via Laragon)
        $posts = [
            [
                'id' => 1,
                'title' => 'Musyawarah Pembangunan Desa (Musrenbangdes) Tahun Anggaran Ini',
                'category' => 'Pemerintahan',
                'date' => '24 Juli 2026',
                'author' => 'Sekretariat Desa',
                'excerpt' => 'Aparat desa bersama tokoh masyarakat menyepakati fokus pembangunan infrastruktur jaringan air bersih dan akses jalan tani.',
                'image' => 'https://images.unsplash.com/photo-1577495508048-b635879837f1?auto=format&fit=crop&w=800&q=80'
            ],
            [
                'id' => 2,
                'title' => 'Program Digitalisasi Pelayanan Surat Keterangan Bagi Warga',
                'category' => 'Inovasi',
                'date' => '18 Juli 2026',
                'author' => 'Tim TI Antibar',
                'excerpt' => 'Kini warga Desa Antibar dapat mengajukan draf surat pengantar secara mandiri melalui portal resmi desa untuk mempercepat verifikasi.',
                'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80'
            ],
            [
                'id' => 3,
                'title' => 'Pelatihan Posyandu Lansia dan Balita Dusun Sejahtera',
                'category' => 'Kesehatan',
                'date' => '10 Juli 2026',
                'author' => 'Kader Kesehatan',
                'excerpt' => 'Kegiatan rutin pemeriksaan kesehatan gratis dan pembagian suplemen nutrisi bagi balita serta lansia berjalan lancar.',
                'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=800&q=80'
            ]
        ];
        ?>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($posts as $post): ?>
                <article class="bg-white rounded-2xl overflow-hidden border border-slate-200 shadow-sm hover:shadow-lg transition flex flex-col">
                    <div class="h-48 overflow-hidden bg-slate-100 relative">
                        <img src="<?= $post['image']; ?>" alt="<?= $post['title']; ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                        <span class="absolute top-4 left-4 bg-white/90 backdrop-blur-md text-slate-800 text-xs font-bold px-3 py-1 rounded-full shadow-sm">
                            <?= $post['category']; ?>
                        </span>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center gap-2 text-xs text-slate-400 mb-3">
                            <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3.5 h-3.5"></i> <?= $post['date']; ?></span>
                            <span>•</span>
                            <span class="flex items-center gap-1"><i data-lucide="user" class="w-3.5 h-3.5"></i> <?= $post['author']; ?></span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3 hover:text-brand-700 transition leading-snug">
                            <a href="#"><?= $post['title']; ?></a>
                        </h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6 flex-grow">
                            <?= $post['excerpt']; ?>
                        </p>
                        <a href="#" class="inline-flex items-center gap-2 text-sm font-semibold text-brand-700 hover:text-brand-900 transition">
                            Baca Selengkapnya <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- FOOTER -->
    <footer id="kontak" class="bg-slate-900 text-slate-400 py-12 border-t border-slate-800 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h4 class="text-white font-bold text-lg mb-3">Kantor Desa Antibar</h4>
                    <p class="text-sm leading-relaxed">
                        Jl. Raya Utama Desa Antibar<br>
                        Kecamatan Mempawah Timur, Kabupaten Mempawah<br>
                        Kalimantan Barat
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-bold text-lg mb-3">Kontak Layanan</h4>
                    <p class="text-sm leading-relaxed">
                        Email: pelayanan@antibar.desa.id<br>
                        WhatsApp: +62 812-3456-7890
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-bold text-lg mb-3">Jam Operasional</h4>
                    <p class="text-sm leading-relaxed">
                        Senin - Kamis: 08.00 - 15.00 WIB<br>
                        Jumat: 08.00 - 11.00 WIB
                    </p>
                </div>
            </div>
            <div class="pt-8 border-t border-slate-800 text-center text-xs">
                <p>&copy; <?= date('Y'); ?> Desa Antibar. System Architecture & Development for Academic & Community Service.</p>
            </div>
        </div>
    </footer>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>