<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Struktur Organisasi - LPPM IT Del</title>
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

    .org-card {
      background: white;
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
      border: 1px solid rgba(66, 20, 95, 0.1);
      transition: all 0.3s ease;
      overflow: hidden;
    }

    .org-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 30px rgba(0,0,0,0.15);
    }

    .org-level {
      position: relative;
      margin-bottom: 3rem;
    }

    .org-level::after {
      content: '';
      position: absolute;
      bottom: -1.5rem;
      left: 50%;
      transform: translateX(-50%);
      width: 2px;
      height: 1.5rem;
      background: linear-gradient(to bottom, #42145f, #5a1a7f);
    }

    .org-level:last-child::after {
      display: none;
    }

    .connection-line {
      position: absolute;
      top: -1.5rem;
      left: 50%;
      transform: translateX(-50%);
      width: 2px;
      height: 1.5rem;
      background: linear-gradient(to bottom, #42145f, #5a1a7f);
    }

    .position-title {
      background: linear-gradient(135deg, #42145f 0%, #5a1a7f 100%);
      color: white;
      padding: 1rem;
      font-weight: 600;
      font-size: 1.1rem;
      text-align: center;
    }

    .person-info {
      padding: 1.5rem;
      text-align: center;
    }

    .person-name {
      font-size: 1.2rem;
      font-weight: 700;
      color: #1f2937;
      margin-bottom: 0.5rem;
    }

    .person-detail {
      color: #6b7280;
      font-size: 0.9rem;
      margin-bottom: 0.25rem;
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
        Struktur Organisasi <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#42145f] to-blue-600">LPPM IT Del</span>
      </h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8 fade-in">
        Struktur organisasi dan kepemimpinan Lembaga Penelitian dan Pengabdian kepada Masyarakat Institut Teknologi Del
      </p>
    </div>
  </section>

  <!-- Main Content -->
<main class="flex-1 py-16">
    <div class="container mx-auto px-6">
      
      <!-- Organizational Structure -->
      <div class="max-w-6xl mx-auto">
        
        <!-- Level 1: Kepala LPPM -->
        <div class="org-level">
          <div class="flex justify-center">
            <div class="org-card w-80">
              <div class="position-title">
                Kepala LPPM
              </div>
              <div class="person-info">
                <div class="person-name">Rosni Lumbantoruan, Ph.D.</div>
                <div class="person-detail">Email: kepala.lppm@del.ac.id</div>
                <div class="person-detail">Ext: 1001</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Level 2: Sekretaris -->
        <div class="org-level">
          <div class="flex justify-center">
            <div class="org-card w-80">
              <div class="connection-line"></div>
              <div class="position-title">
                Sekretaris
              </div>
              <div class="person-info">
                <div class="person-name">Tegar Arifin Prasetyo, S.Si., M.Si.</div>
                <div class="person-detail">Email: sekretaris.lppm@del.ac.id</div>
                <div class="person-detail">Ext: 1002</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Level 3: Staf -->
        <div class="org-level">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            
            <!-- Staf 1 -->
            <div class="org-card">
              <div class="connection-line"></div>
              <div class="position-title">
                Staf Administrasi
              </div>
              <div class="person-info">
                <div class="person-name">Helmina Girsang</div>
                <div class="person-detail">Email: helmina.girsang@del.ac.id</div>
                <div class="person-detail">Ext: 1003</div>
              </div>
            </div>

            <!-- Staf 2 -->
            <div class="org-card">
              <div class="connection-line"></div>
              <div class="position-title">
                Staf Administrasi
              </div>
              <div class="person-info">
                <div class="person-name">Nani Parapat</div>
                <div class="person-detail">Email: nani.parapat@del.ac.id</div>
                <div class="person-detail">Ext: 1004</div>
              </div>
            </div>
          </div>
        </div>

      </div>
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
 <img src="{{asset('download.jpeg')}}" alt="Logo IT Del" class="h-full object-contain" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>