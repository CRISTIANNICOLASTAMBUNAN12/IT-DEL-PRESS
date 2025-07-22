<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Panduan Pembuatan Buku - LPPM IT Del</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

    body {
      font-family: 'Inter', sans-serif;
    }

    .hero-pattern {
      background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.1) 1px, transparent 0);
      background-size: 20px 20px;
    }

    .dropdown {
      position: relative;
    }

    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 50%;
      transform: translate(-50%, 8px);
      background: rgba(255, 255, 255, 0.95);
      border-radius: 12px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.15);
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 50;
      min-width: 320px;
      border: 1px solid rgba(255,255,255,0.2);
      backdrop-filter: blur(10px);
    }

    .dropdown:hover .dropdown-menu {
      opacity: 1;
      visibility: visible;
    }

    .announcement-badge {
      background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
      color: white;
      padding: 2px 8px;
      border-radius: 12px;
      font-size: 0.75rem;
      font-weight: 500;
      margin-left: 8px;
    }

    .announcement-date {
      color: #6b7280;
      font-size: 0.875rem;
      font-weight: 400;
    }

    .announcement-title {
      color: #1f2937;
      font-weight: 500;
      margin: 4px 0;
    }

    .fade-in {
      animation: fadeIn 0.3s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .guide-card {
      background: white;
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
      border: 1px solid rgba(66, 20, 95, 0.1);
      transition: all 0.3s ease;
      overflow: hidden;
    }

    .guide-card:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 30px rgba(0,0,0,0.12);
    }

    .step-number {
      background: linear-gradient(135deg, #42145f 0%, #5a1a7f 100%);
      color: white;
      width: 2.5rem;
      height: 2.5rem;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 1.1rem;
      margin-right: 1rem;
      flex-shrink: 0;
    }

    .requirement-item {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 8px;
      padding: 1rem;
      margin-bottom: 0.5rem;
      border-left: 4px solid #42145f;
    }

    .contact-card {
      background: linear-gradient(135deg, #42145f 0%, #5a1a7f 100%);
      color: white;
      border-radius: 16px;
      padding: 2rem;
      box-shadow: 0 8px 30px rgba(66, 20, 95, 0.3);
    }

    .contact-item {
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
      padding: 0.75rem;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 8px;
      backdrop-filter: blur(10px);
    }

    .contact-icon {
      width: 1.5rem;
      height: 1.5rem;
      margin-right: 0.75rem;
      opacity: 0.9;
    }

    .timeline-item {
      position: relative;
      padding-left: 2rem;
      margin-bottom: 1.5rem;
    }

    .timeline-item::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0.5rem;
      width: 0.75rem;
      height: 0.75rem;
      background: #42145f;
      border-radius: 50%;
      border: 2px solid white;
      box-shadow: 0 0 0 2px #42145f;
    }

    .timeline-item::after {
      content: '';
      position: absolute;
      left: 0.3125rem;
      top: 1.25rem;
      width: 2px;
      height: calc(100% + 0.5rem);
      background: #e2e8f0;
    }

    .timeline-item:last-child::after {
      display: none;
    }
  </style>
</head>
<body class="bg-gradient-to-br from-slate-50 to-blue-50">

  <!-- HEADER -->
 <header class="bg-gradient-to-r from-[#42145f] via-[#5a1a7f] to-[#42145f] text-white shadow-2xl relative z-50">

    <div class="hero-pattern absolute inset-0 opacity-10"></div>
    <div class="container mx-auto px-6 py-6 relative z-20">

      <div class="grid grid-cols-3 items-center">

        <!-- Kolom 1: Logo + Judul -->
        <div class="flex items-center space-x-4 group">
          <div class="relative">
            <div class="h-20 w-auto">
              <img src="{{asset('download.jpeg')}}" alt="Logo IT Del" class="h-full object-contain" />
            </div>
          </div>
          <div>
            <h1 class="text-2xl font-bold tracking-wide bg-gradient-to-r from-white to-blue-100 bg-clip-text text-transparent">
              LPPM IT Del
            </h1>
            <p class="text-sm opacity-80">Lembaga Penelitian & Pengabdian Masyarakat</p>
          </div>
        </div>

        <!-- Kolom 2: Navigation Menu -->
<nav class="hidden md:flex justify-center space-x-8 text-lg font-medium relative z-20">
  <a href="/" class="hover:text-blue-200 transition duration-300 relative group">
    Home
    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-200 transition-all duration-300 group-hover:w-full"></span>
  </a>

  <!-- Dropdown Company Profile -->
  <div class="relative group dropdown">
<a href="/company" class="hover:text-blue-200 transition duration-300 relative group whitespace-nowrap">
  Company Profile
</a>

    <div class="dropdown-menu fade-in">
      <div class="p-4">
        <a href="/company" class="block text-gray-800 hover:text-[#42145f] mb-2 font-medium">Profil LPPM</a>
        <a href="/struktur-organisasi" class="block text-gray-800 hover:text-[#42145f] font-medium">Struktur Organisasi</a>
      </div>
    </div>
  </div>

  <!-- Tab Panduan -->
  <a href="/panduan" class="hover:text-blue-200 transition duration-300 relative group">
    Panduan
    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-200 transition-all duration-300 group-hover:w-full"></span>
  </a>

  <!-- Dropdown Announcement -->
  <div class="relative group dropdown">
    <a href="#" class="hover:text-blue-200 transition duration-300 relative group">
      Announcement
      <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-blue-200 transition-all duration-300 group-hover:w-full"></span>
    </a>
    <div class="dropdown-menu fade-in">
      <div class="p-4">
        <div class="mb-4">
          <div class="announcement-date">9 Juli 2025</div>
          <div class="announcement-title">Workshop Penelitian Internal</div>
        </div>
        <div class="mb-4">
          <div class="announcement-date">11 Juli 2025</div>
          <div class="announcement-title">Kegiatan Pengabdian di Toba</div>
        </div>
      </div>
    </div>
  </div>
</nav>


        <!-- Kolom 3: Tombol Login -->
       <div class="flex justify-end items-center space-x-4" x-data="{ open: false }">
    @guest
        <a href="{{ route('login') }}" class="bg-white text-[#42145f] px-6 py-2 rounded-full hover:bg-blue-50 font-semibold transition duration-300 transform hover:scale-105 shadow-lg">
            Login
        </a>
    @else
        <div class="relative" @click.away="open = false">
            <button @click="open = !open"
                    class="bg-white text-[#42145f] px-4 py-2 rounded-full font-semibold flex items-center space-x-2 hover:bg-blue-50 transition duration-300">
                <span>{{ Auth::user()->name }}</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <!-- Dropdown -->
            <div x-show="open"
                 x-transition
                 class="absolute right-0 mt-2 w-48 bg-white text-[#42145f] rounded shadow-lg py-2 z-50">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    @endguest
</div>


      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="py-16 bg-gradient-to-r from-blue-50 to-indigo-50 relative overflow-hidden">
    <div class="hero-pattern absolute inset-0 opacity-5"></div>
    <div class="container mx-auto px-6 text-center relative z-10">
      <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6 fade-in">
        Panduan <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#42145f] to-blue-600">Pembuatan Buku</span>
      </h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8 fade-in">
        Panduan lengkap untuk penerbitan buku melalui LPPM Institut Teknologi Del. Ikuti langkah-langkah berikut untuk menerbitkan karya Anda
      </p>
    </div>
  </section>

  <!-- Main Content -->
  <main class="flex-1 py-16">
    <div class="container mx-auto px-6">
      
      <!-- Introduction -->
      <div class="max-w-4xl mx-auto mb-12">
        <div class="guide-card p-8">
          <h3 class="text-2xl font-bold text-gray-800 mb-4">Selamat Datang di Panduan Penerbitan Buku</h3>
          <p class="text-gray-600 text-lg leading-relaxed">
            LPPM IT Del berkomitmen untuk mendukung sivitas akademika dalam menerbitkan karya ilmiah dalam bentuk buku. 
            Panduan ini akan membantu Anda memahami proses, persyaratan, dan tahapan yang diperlukan untuk menerbitkan buku 
            melalui LPPM IT Del. Silakan ikuti setiap langkah dengan seksama untuk memastikan proses penerbitan berjalan lancar.
          </p>
        </div>
      </div>

      <!-- Step-by-Step Guide -->
      <div class="max-w-4xl mx-auto mb-12">
        <h3 class="text-3xl font-bold text-gray-800 mb-8 text-center">Langkah-langkah Penerbitan Buku</h3>
        
        <div class="space-y-6">
          <!-- Step 1 -->
          <div class="guide-card p-6">
            <div class="flex items-start">
              <div class="step-number">1</div>
              <div class="flex-1">
                <h4 class="text-xl font-semibold text-gray-800 mb-3">Persiapan Naskah</h4>
                <p class="text-gray-600 mb-4">
                  Pastikan naskah Anda sudah lengkap dan sesuai dengan standar penulisan ilmiah. 
                  Naskah harus dalam format yang dapat diedit (Word/LaTeX) dan sudah melalui proses review internal.
                </p>
              </div>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="guide-card p-6">
            <div class="flex items-start">
              <div class="step-number">2</div>
              <div class="flex-1">
                <h4 class="text-xl font-semibold text-gray-800 mb-3">Pengajuan Proposal</h4>
                <p class="text-gray-600 mb-4">
                  Submit proposal penerbitan buku yang mencakup sinopsis, target pembaca, dan justifikasi pentingnya buku tersebut. 
                  Proposal akan direview oleh tim editorial LPPM.
                </p>
              </div>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="guide-card p-6">
            <div class="flex items-start">
              <div class="step-number">3</div>
              <div class="flex-1">
                <h4 class="text-xl font-semibold text-gray-800 mb-3">Review dan Evaluasi</h4>
                <p class="text-gray-600 mb-4">
                  Tim editorial akan melakukan review terhadap proposal dan naskah. 
                  Proses ini memakan waktu 2-4 minggu tergantung kompleksitas naskah.
                </p>
              </div>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="guide-card p-6">
            <div class="flex items-start">
              <div class="step-number">4</div>
              <div class="flex-1">
                <h4 class="text-xl font-semibold text-gray-800 mb-3">Editing dan Layout</h4>
                <p class="text-gray-600 mb-4">
                  Setelah disetujui, naskah akan melalui proses editing profesional dan layout design. 
                  Tim LPPM akan bekerja sama dengan penulis untuk finalisasi.
                </p>
              </div>
            </div>
          </div>

          <!-- Step 5 -->
          <div class="guide-card p-6">
            <div class="flex items-start">
              <div class="step-number">5</div>
              <div class="flex-1">
                <h4 class="text-xl font-semibold text-gray-800 mb-3">Penerbitan dan Distribusi</h4>
                <p class="text-gray-600 mb-4">
                  Buku akan diterbitkan dalam format cetak dan/atau digital. 
                  LPPM akan membantu dalam proses distribusi dan promosi buku.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Requirements Section -->
      <div class="max-w-4xl mx-auto mb-12">
        <h3 class="text-3xl font-bold text-gray-800 mb-8 text-center">Persyaratan Penerbitan</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Persyaratan Umum -->
          <div class="guide-card p-6">
            <h4 class="text-xl font-semibold text-gray-800 mb-4">Persyaratan Umum</h4>
            <div class="space-y-3">
              <div class="requirement-item">
                <h5 class="font-medium text-gray-800">Penulis</h5>
                <p class="text-sm text-gray-600">Dosen/Staff IT Del atau kolaborasi dengan eksternal</p>
              </div>
              <div class="requirement-item">
                <h5 class="font-medium text-gray-800">Bidang Keilmuan</h5>
                <p class="text-sm text-gray-600">Sesuai dengan fokus IT Del: Teknologi, Sains, dan Humaniora</p>
              </div>
              <div class="requirement-item">
                <h5 class="font-medium text-gray-800">Orisinalitas</h5>
                <p class="text-sm text-gray-600">Karya asli, belum pernah diterbitkan sebelumnya</p>
              </div>
              <div class="requirement-item">
                <h5 class="font-medium text-gray-800">Kualitas Akademik</h5>
                <p class="text-sm text-gray-600">Memenuhi standar penulisan ilmiah yang baik</p>
              </div>
            </div>
          </div>

          <!-- Persyaratan Teknis -->
          <div class="guide-card p-6">
            <h4 class="text-xl font-semibold text-gray-800 mb-4">Persyaratan Teknis</h4>
            <div class="space-y-3">
              <div class="requirement-item">
                <h5 class="font-medium text-gray-800">Format Naskah</h5>
                <p class="text-sm text-gray-600">Microsoft Word (.docx) atau LaTeX</p>
              </div>
              <div class="requirement-item">
                <h5 class="font-medium text-gray-800">Jumlah Halaman</h5>
                <p class="text-sm text-gray-600">Minimal 80 halaman, maksimal 300 halaman</p>
              </div>
              <div class="requirement-item">
                <h5 class="font-medium text-gray-800">Font dan Spasi</h5>
                <p class="text-sm text-gray-600">Times New Roman 12pt, spasi 1.5</p>
              </div>
              <div class="requirement-item">
                <h5 class="font-medium text-gray-800">Referensi</h5>
                <p class="text-sm text-gray-600">Minimal 30 referensi, 70% dari 10 tahun terakhir</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Timeline -->
      <div class="max-w-4xl mx-auto mb-12">
        <h3 class="text-3xl font-bold text-gray-800 mb-8 text-center">Timeline Penerbitan</h3>
        
        <div class="guide-card p-8">
          <div class="space-y-6">
            <div class="timeline-item">
              <h4 class="text-lg font-semibold text-gray-800">Minggu 1-2: Pengajuan dan Review Awal</h4>
              <p class="text-gray-600">Penulis mengajukan proposal dan naskah untuk review awal oleh tim editorial</p>
            </div>
            <div class="timeline-item">
              <h4 class="text-lg font-semibold text-gray-800">Minggu 3-6: Review Mendalam</h4>
              <p class="text-gray-600">Tim reviewer melakukan evaluasi konten, struktur, dan kualitas akademik</p>
            </div>
            <div class="timeline-item">
              <h4 class="text-lg font-semibold text-gray-800">Minggu 7-10: Revisi dan Perbaikan</h4>
              <p class="text-gray-600">Penulis melakukan revisi berdasarkan masukan reviewer</p>
            </div>
            <div class="timeline-item">
              <h4 class="text-lg font-semibold text-gray-800">Minggu 11-14: Editing dan Layout</h4>
              <p class="text-gray-600">Proses editing profesional dan desain layout buku</p>
            </div>
            <div class="timeline-item">
              <h4 class="text-lg font-semibold text-gray-800">Minggu 15-16: Finalisasi dan Penerbitan</h4>
              <p class="text-gray-600">Proofreading akhir, cetak, dan distribusi buku</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact Information -->
      <div class="max-w-4xl mx-auto">
        <h3 class="text-3xl font-bold text-gray-800 mb-8 text-center">Informasi Kontak</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Contact Card -->
          <div class="contact-card">
            <h4 class="text-2xl font-bold mb-6">Hubungi Kami</h4>
            
            <div class="contact-item">
              <svg class="contact-icon" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
              </svg>
              <div>
                <p class="font-medium">Email</p>
                <p class="text-sm opacity-90">lppm@del.ac.id</p>
              </div>
            </div>

            <div class="contact-item">
              <svg class="contact-icon" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
              </svg>
              <div>
                <p class="font-medium">Telepon</p>
                <p class="text-sm opacity-90">(0632) 331-1234</p>
              </div>
            </div>

            <div class="contact-item">
              <svg class="contact-icon" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
              </svg>
              <div>
                <p class="font-medium">Alamat</p>
                <p class="text-sm opacity-90">Gedung Rektorat Lt. 2<br>Jl. Sisingamangaraja, Sitoluama<br>Laguboti, Toba Samosir 22381</p>
              </div>
            </div>

            <div class="contact-item">
              <svg class="contact-icon" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
              </svg>
              <div>
                <p class="font-medium">Jam Kerja</p>
                <p class="text-sm opacity-90">Senin - Jumat: 08:00 - 16:00 WIB</p>
              </div>
            </div>
          </div>

          <!-- Additional Info -->
          <div class="guide-card p-6">
            <h4 class="text-xl font-semibold text-gray-800 mb-4">Kontak Spesialis</h4>
            
            <div class="space-y-4">
              <div class="p-4 bg-gray-50 rounded-lg">
                <h5 class="font-medium text-gray-800">Koordinator Penerbitan</h5>
                <p class="text-sm text-gray-600">Dr. Nama Koordinator, M.T.</p>
                <p class="text-sm text-gray-600">Email: penerbitan@del.ac.id</p>
                <p class="text-sm text-gray-600">Ext: 1008</p>
              </div>
              
              <div class="p-4 bg-gray-50 rounded-lg">
                <h5 class="font-medium text-gray-800">Editor Utama</h5>
                <p class="text-sm text-gray-600">Dr. Nama Editor, M.Kom.</p>
                <p class="text-sm text-gray-600">Email: editor@del.ac.id</p>
                <p class="text-sm text-gray-600">Ext: 1009</p>
              </div>
              
              <div class="p-4 bg-gray-50 rounded-lg">
                <h5 class="font-medium text-gray-800">Staf Administrasi</h5>
                <p class="text-sm text-gray-600">Nama Staf, S.S.</p>
                <p class="text-sm text-gray-600">Email: admin.penerbitan@del.ac.id</p>
                <p class="text-sm text-gray-600">Ext: 1010</p>
              </div>
            </div>
            
         
          </div>
        </div>
      </div>
    </div>
  </main>
    <br>
    <footer class="bg-gradient-to-r from-[#42145f] via-[#5a1a7f] to-[#42145f] text-white shadow-2xl relative overflow-hidden">
    <div class="hero-pattern absolute inset-0 opacity-10"></div>
    <div class="container mx-auto px-6 py-6 relative z-10">
      <div class="flex justify-between items-center">
        
        <!-- Left Side - Contact & Quick Links -->
        <div class="flex space-x-12">
          <!-- Contact Info -->
          <div class="space-y-2">
            <h4 class="text-lg font-semibold text-white">Kontak</h4>
            <div class="space-y-1 text-sm opacity-80">
              <p>Jl. Sisingamangaraja, Sitoluama</p>
              <p>Laguboti, Toba Samosir 22381</p>
              <p>Email: lppm@del.ac.id</p>
              <p>Tel: (0632) 331-1234</p>
            </div>
          </div>
          
          <!-- Quick Links -->
          <div class="space-y-2">
            <h4 class="text-lg font-semibold text-white">Tautan Cepat</h4>
            <div class="space-y-1 text-sm">
              <a href="#" class="footer-link block opacity-80 hover:opacity-100">Tentang Kami</a>
              <a href="#" class="footer-link block opacity-80 hover:opacity-100">Panduan Penulis</a>
              <a href="#" class="footer-link block opacity-80 hover:opacity-100">Kebijakan Editorial</a>
              <a href="#" class="footer-link block opacity-80 hover:opacity-100">Kontak</a>
            </div>
          </div>
        </div>

        <!-- Right Side - Logo & Institution -->
        <div class="flex items-center space-x-4 group">
          <div class="text-right">
            <h3 class="text-2xl font-bold tracking-wide bg-gradient-to-r from-white to-blue-100 bg-clip-text text-transparent">
              LPPM IT Del
            </h3>
            <p class="text-sm opacity-80">Lembaga Penelitian & Pengabdian Masyarakat</p>
            <p class="text-xs opacity-60 mt-1">© 2024 Institut Teknologi Del</p>
          </div>
          <div class="relative">
            <div class="h-20 w-auto">
 <img src="{{asset('download.jpeg')}}" alt="Logo IT Del" class="h-full object-contain" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>