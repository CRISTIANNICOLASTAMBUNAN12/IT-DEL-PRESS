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

    .publication-card {
      transition: all 0.3s ease;
      border: 1px solid rgba(226, 232, 240, 0.8);
      background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    }

    .publication-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
      border-color: rgba(99, 102, 241, 0.3);
    }

    .publication-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #42145f, #6366f1, #8b5cf6);
      border-radius: 12px 12px 0 0;
    }

    .search-container {
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, 0.9);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .filter-button {
      transition: all 0.3s ease;
      border: 1px solid rgba(226, 232, 240, 1);
    }

    .filter-button:hover {
      background: linear-gradient(135deg, #42145f, #6366f1);
      color: white;
      transform: translateY(-2px);
    }

    .filter-button.active {
      background: linear-gradient(135deg, #42145f, #6366f1);
      color: white;
    }

    .author-tag {
      background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
      color: #0369a1;
      border: 1px solid #7dd3fc;
    }

    .isbn-badge {
      background: linear-gradient(135deg, #f0fdf4, #dcfce7);
      color: #16a34a;
      border: 1px solid #86efac;
    }

    .issn-badge {
      background: linear-gradient(135deg, #fef3c7, #fde68a);
      color: #d97706;
      border: 1px solid #fbbf24;
    }

    .publication-icon {
      background: linear-gradient(135deg, #42145f, #6366f1);
      box-shadow: 0 4px 15px rgba(66, 20, 95, 0.3);
    }

    .view-count {
      background: linear-gradient(135deg, #fef2f2, #fee2e2);
      color: #dc2626;
      border: 1px solid #fca5a5;
    }

    .floating-stats {
      position: absolute;
      top: 16px;
      right: 16px;
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      border-radius: 12px;
      padding: 8px 12px;
      font-size: 0.75rem;
      font-weight: 500;
      color: #6b7280;
      border: 1px solid rgba(226, 232, 240, 0.8);
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
      @forelse ($announcements as $a)
        <div class="mb-4">
          <div class="announcement-date">
            {{ \Carbon\Carbon::parse($a->date)->translatedFormat('d F Y') }}
          </div>
          <div class="announcement-title">
            {{ $a->title }}
          </div>
        </div>
      @empty
        <p class="text-sm text-gray-500">Belum ada pengumuman</p>
      @endforelse
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
  <section class="py-16 bg-gradient-to-r from-blue-50 to-indigo-50">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
        Sistem Informasi <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#42145f] to-blue-600">IT Del Press</span>
      </h2>
      <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-8">
        Temukan berbagai jurnal penelitian terkini dari Institut Teknologi Del yang telah dipublikasikan
      </p>
    </div>
  </section>

  <!-- Main Content -->
  <main class="flex-1 py-16">
    <div class="container mx-auto px-6">

      <!-- Enhanced Publication Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        @foreach($publications as $publication)
        <div class="publication-card rounded-2xl p-6 shadow-lg relative overflow-hidden group">
         
          <div class="relative z-10">

            <h3 class="text-xl font-bold text-gray-800 mb-2 line-clamp-2 hover:text-[#42145f] transition duration-300">
              <a href="{{ route('publication.preview', $publication->id) }}"> {{ $publication->title }}</a>
            </h3>

            <!-- Author Information -->
       <div class="flex flex-wrap gap-2 mb-3">
  @foreach(explode('||', $publication->author) as $author)
    <span class="flex items-center space-x-1 bg-blue-50 border border-blue-300 text-blue-800 text-xs font-medium px-3 py-1 rounded-full">
      <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
      </svg>
      <span>{{ trim($author) }}</span>
    </span>
  @endforeach
</div>

            <!-- Publication Date -->
            <p class="text-sm text-gray-500 mb-3 flex items-center">
              <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
              Diterbitkan pada {{ \Carbon\Carbon::parse($publication->published_at)->translatedFormat('d F Y') }}
            </p>

            <!-- Abstract -->
  <p class="text-sm text-gray-600 mb-4 line-clamp-3">
  {{ Str::limit(strip_tags($publication->description), 200) }}
</p>



            <!-- Tags and Badges -->
            <div class="flex flex-wrap gap-2 mb-4">
              <span class="text-xs bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800 px-3 py-1 rounded-full font-medium">
               {{ $publication->category->name }}
              </span>
              <span class="isbn-badge px-2 py-1 rounded-full text-xs font-medium">
                ISBN:{{ $publication->isbn ?? '-' }}
              </span>
              <span class="issn-badge px-2 py-1 rounded-full text-xs font-medium">
                ISSN: {{ $publication->issn ?? '-' }}
              </span>
            </div>

            <!-- Action Buttons -->
        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
  <!-- Tombol Lihat Detail -->
  <a href="{{ route('publication.preview', $publication->id) }}" 
     class="flex items-center space-x-2 text-[#42145f] hover:text-blue-600 font-medium text-sm transition duration-300">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
    </svg>
    <span>Lihat Detail</span>
  </a>

  <!-- Tombol Download PDF -->
  <a href="{{ asset('storage/' . ltrim(str_replace('public/', '', $publication->file_path), '/')) }}" 
     class="flex items-center space-x-2 text-gray-500 hover:text-gray-700 font-medium text-sm transition duration-300">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
    </svg>
    <span>Download PDF</span>
  </a>
</div>

          </div>
        </div>
        @endforeach


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
              <img src="download.jpeg" alt="Logo IT Del" class="h-full object-contain" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>