<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Company Profile - LPPM IT Del</title>
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
              <img src="download.jpeg" alt="Logo IT Del" class="h-full object-contain" />
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
        Profil <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#42145f] to-blue-600">LPPM IT Del</span>
      </h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8 fade-in">
        Lembaga Penelitian dan Pengabdian kepada Masyarakat Institut Teknologi Del berkomitmen untuk memajukan ilmu pengetahuan dan teknologi melalui penelitian berkualitas tinggi dan pengabdian kepada masyarakat
      </p>
    </div>
  </section>

  <!-- Main Content -->
  <main class="flex-1 py-16">
    <div class="container mx-auto px-6">
      
      <!-- About Section -->
      <section class="mb-16">
        <div class="section-card rounded-3xl p-8 md:p-12 shadow-xl">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
              <h3 class="text-3xl font-bold text-gray-800 mb-6">Tentang LPPM IT Del</h3>
              <p class="text-gray-600 mb-4 leading-relaxed">
                Lembaga Penelitian dan Pengabdian kepada Masyarakat (LPPM) Institut Teknologi Del didirikan dengan visi untuk menjadi pusat unggulan penelitian dan pengabdian kepada masyarakat di bidang teknologi informasi, sistem informasi, dan teknik elektro.
              </p>
              <p class="text-gray-600 mb-6 leading-relaxed">
                Sejak berdiri, LPPM IT Del telah menghasilkan berbagai penelitian inovatif yang berkontribusi pada kemajuan teknologi di Indonesia, khususnya di wilayah Sumatera Utara dan sekitarnya.
              </p>
              <div class="flex space-x-4">
                <div class="text-center">
                  <div class="text-3xl font-bold text-[#42145f]">50+</div>
                  <div class="text-sm text-gray-600">Penelitian</div>
                </div>
                <div class="text-center">
                  <div class="text-3xl font-bold text-[#42145f]">25+</div>
                  <div class="text-sm text-gray-600">Publikasi</div>
                </div>
                <div class="text-center">
                  <div class="text-3xl font-bold text-[#42145f]">30+</div>
                  <div class="text-sm text-gray-600">Kegiatan PKM</div>
                </div>
              </div>
            </div>
<div class="relative">
  <div class="w-full h-[24rem] bg-gradient-to-br from-[#42145f] to-blue-600 rounded-2xl flex flex-col items-center justify-center">
    <img src="{{ asset('del1.jpg') }}" alt="Kampus IT Del" class="h-60 w-auto object-cover rounded-xl shadow-2xl mb-4" />
    <p class="text-white text-lg font-semibold">Kampus IT Del</p>
  </div>
</div>



          </div>
        </div>
      </section>

      <!-- Vision & Mission Section -->
      <section class="mb-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
          <!-- Vision -->
          <div class="section-card rounded-3xl p-8 shadow-xl card-hover">
         
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Visi</h3>
            <p class="text-gray-600 leading-relaxed">
              Menjadi lembaga penelitian dan pengabdian kepada masyarakat yang unggul dan terdepan di bidang teknologi informasi, sistem informasi, dan teknik elektro yang berkontribusi pada kemajuan teknologi nasional dan kesejahteraan masyarakat.
            </p>
          </div>

          <!-- Mission -->
          <div class="section-card rounded-3xl p-8 shadow-xl card-hover">
           
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Misi</h3>
            <ul class="text-gray-600 space-y-2 leading-relaxed">
              <li>• Melakukan penelitian berkualitas tinggi yang inovatif dan berdampak</li>
              <li>• Mengembangkan teknologi yang dapat diterapkan untuk kemajuan masyarakat</li>
              <li>• Melaksanakan pengabdian kepada masyarakat yang berkelanjutan</li>
              <li>• Membangun kemitraan strategis dengan industri dan pemerintah</li>
              <li>• Mempublikasikan hasil penelitian di jurnal nasional dan internasional</li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Research Areas -->


      <!-- Leadership Team -->
      <section class="mb-16">
        <div class="text-center mb-12">
          <h3 class="text-3xl font-bold text-gray-800 mb-4">Tim Kepemimpinan</h3>
          <p class="text-gray-600 max-w-2xl mx-auto">
            Tim yang berpengalaman dan berdedikasi dalam memimpin LPPM IT Del menuju pencapaian visi dan misi
          </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Leader 1 -->
          <div class="leadership-card rounded-2xl p-6 shadow-lg text-center">
            <div class="w-24 h-24 bg-gradient-to-r from-[#42145f] to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
              </svg>
            </div>
            <h4 class="text-xl font-semibold text-gray-800 mb-2">Dr. Ir. John Doe, M.T.</h4>
            <p class="text-[#42145f] font-medium mb-2">Kepala LPPM</p>
            <p class="text-gray-600 text-sm">Ahli dalam bidang Teknologi Informasi dan Sistem Cerdas</p>
          </div>

          <!-- Leader 2 -->
          <div class="leadership-card rounded-2xl p-6 shadow-lg text-center">
            <div class="w-24 h-24 bg-gradient-to-r from-green-500 to-teal-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
              </svg>
            </div>
            <h4 class="text-xl font-semibold text-gray-800 mb-2">Dr. Jane Smith, M.Si.</h4>
            <p class="text-[#42145f] font-medium mb-2">Wakil Kepala LPPM</p>
            <p class="text-gray-600 text-sm">Spesialis dalam Sistem Informasi dan Manajemen Data</p>
          </div>

          <!-- Leader 3 -->
          <div class="leadership-card rounded-2xl p-6 shadow-lg text-center">
            <div class="w-24 h-24 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
              </svg>
            </div>
            <h4 class="text-xl font-semibold text-gray-800 mb-2">Dr. Ir. Bob Johnson, M.T.</h4>
            <p class="text-[#42145f] font-medium mb-2">Koordinator Penelitian</p>
            <p class="text-gray-600 text-sm">Expert dalam Teknik Elektro dan Sistem Kendali</p>
          </div>
        </div>
      </section>

    </div>
  </main>

  <!-- Footer -->
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
              <img src="download.jpeg" alt="Logo IT Del" class="h-full object-contain" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>