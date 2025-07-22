<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Detail Publikasi - LPPM IT Del</title>
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

    .glass-card {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    .publication-meta {
      background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
      border: 1px solid #e2e8f0;
    }

    .category-badge {
      background: linear-gradient(135deg, #42145f 0%, #5a1a7f 100%);
      color: white;
      padding: 8px 16px;
      border-radius: 20px;
      font-size: 0.875rem;
      font-weight: 500;
      display: inline-block;
    }

    .icon-box {
      background: linear-gradient(135deg, #42145f 0%, #5a1a7f 100%);
      color: white;
      width: 48px;
      height: 48px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 16px;
      flex-shrink: 0;
    }

    .download-btn {
      background: linear-gradient(135deg, #059669 0%, #047857 100%);
      color: white;
      padding: 12px 24px;
      border-radius: 12px;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(5, 150, 105, 0.3);
    }

    .download-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(5, 150, 105, 0.4);
    }

    .back-btn {
      background: rgba(255, 255, 255, 0.9);
      color: #42145f;
      padding: 8px 16px;
      border-radius: 8px;
      font-weight: 500;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: all 0.3s ease;
      border: 1px solid rgba(66, 20, 95, 0.2);
    }

    .back-btn:hover {
      background: rgba(255, 255, 255, 1);
      transform: translateY(-1px);
    }

    .description-content {
      line-height: 1.8;
      color: #374151;
    }

    .description-content p {
      margin-bottom: 16px;
    }

    .description-content p:last-child {
      margin-bottom: 0;
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
          <div class="relative" @click.away="open = false">
            <button @click="open = !open"
                    class="bg-white text-[#42145f] px-4 py-2 rounded-full font-semibold flex items-center space-x-2 hover:bg-blue-50 transition duration-300">
                <span>Admin User</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <!-- Dropdown -->
            <div x-show="open"
                 x-transition
                 class="absolute right-0 mt-2 w-48 bg-white text-[#42145f] rounded shadow-lg py-2 z-50">
                <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">
                    Logout
                </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <main class="flex-1 py-8">
    <div class="container mx-auto px-6">
      
      <!-- Back Button -->
      <div class="mb-8">
        <a href="/" class="back-btn">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
          </svg>
          Kembali ke Daftar Publikasi
        </a>
      </div>

      <!-- Publication Detail Card -->
      <div class="glass-card rounded-3xl p-8 mb-8">
        
        <!-- Publication Header -->
        <div class="mb-8">
          <div class="flex justify-between items-start mb-6">
            <div class="flex-1">
               <h1 class="text-4xl font-bold text-gray-800 mb-4 leading-tight">
                    {{ $publication->title }}
                </h1>
              <div class="flex items-center space-x-4 mb-4">
                <span class="category-badge">{{ $publication->category->name }}</span>
                <span class="text-gray-500 text-sm">
                  
            
                </span>
              </div>
            </div>
            <div class="ml-8">
              <a href="{{ asset('storage/' . $publication->file_path) }}" class="download-btn">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                Download PDF
              </a>
            </div>
          </div>
        </div>

        <!-- Publication Metadata -->
        <div class="publication-meta rounded-2xl p-6 mb-8">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- Author Information -->
            <div class="flex items-start">
              <div class="icon-box">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
              </div>
              <div>
                <h3 class="font-semibold text-gray-800 mb-1">Penulis</h3>
                <p class="text-gray-600">{{ $publication->author }}</p>
              </div>
            </div>

            <!-- Publication Date -->
            <div class="flex items-start">
              <div class="icon-box">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
              </div>
              <div>
                <h3 class="font-semibold text-gray-800 mb-1">Tanggal Publikasi</h3>
                <p class="text-gray-600">{{ \Carbon\Carbon::parse($publication->published_at)->translatedFormat('d F Y') }}</p>
              </div>
            </div>

            <!-- ISBN Information -->
            <div class="flex items-start">
              <div class="icon-box">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"/>
                </svg>
              </div>
              <div>
                <h3 class="font-semibold text-gray-800 mb-1">ISBN</h3>
                <p class="text-gray-600 font-mono">{{ $publication->isbn ?? '-' }}</p>
              </div>
            </div>

            <!-- ISSN Information -->
            <div class="flex items-start">
              <div class="icon-box">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
              </div>
              <div>
                <h3 class="font-semibold text-gray-800 mb-1">ISSN</h3>
                <p class="text-gray-600 font-mono">{{ $publication->issn ?? '-' }}</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Abstract/Description Section -->
        <div class="mb-8">
          <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
            <div class="icon-box mr-4">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
              </svg>
            </div>
            Deskripsi
          </h2>
        <div class="description-content prose prose-lg text-gray-700 max-w-none">
    {!! $publication->description !!}
</div>

        </div>

        <!-- Citation Section -->
        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-200">
          <h3 class="text-xl font-bold text-gray-800 mb-4">Cara Mengutip</h3>
          <div class="bg-white rounded-lg p-4 border border-gray-200 font-mono text-sm text-gray-700">
            Adhinugraha, M., Malau, S., & Siahaan, N. (2025). Implementasi Machine Learning dalam Sistem Rekomendasi E-Commerce untuk Meningkatkan User Experience. <em>LPPM IT Del</em>. ISBN: 978-602-1234-56-7
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-gradient-to-r from-[#42145f] via-[#5a1a7f] to-[#42145f] text-white shadow-2xl relative overflow-hidden mt-16">
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