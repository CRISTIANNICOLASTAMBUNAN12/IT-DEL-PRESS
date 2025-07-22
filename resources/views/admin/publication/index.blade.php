<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publikasi - IT Del Press</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-pulse-slow {
            animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .glass-morphism {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .glow-effect {
            box-shadow: 0 0 30px rgba(66, 20, 95, 0.3);
        }
        
        .pattern-bg {
            background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.3) 1px, transparent 0);
            background-size: 30px 30px;
        }

        /* Sidebar styles */
        .sidebar {
            transition: all 0.3s ease;
        }
        
        .sidebar-collapsed {
            width: 80px;
        }
        
        .sidebar-expanded {
            width: 260px;
        }
        
        .main-content {
            transition: margin-left 0.3s ease;
        }
        
        .nav-item {
            transition: all 0.2s ease;
        }
        
        .nav-item:hover {
            transform: translateX(5px);
        }
        
        .active-nav {
            background: linear-gradient(90deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.05) 100%);
            border-right: 3px solid #667eea;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 via-purple-50 to-blue-50 min-h-screen" x-data="{ sidebarOpen: window.innerWidth > 1024, sidebarCollapsed: false }" @resize.window="sidebarOpen = window.innerWidth > 1024">

    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 z-50">
        <div class="sidebar bg-white shadow-xl h-full flex flex-col" 
             :class="sidebarCollapsed ? 'sidebar-collapsed' : 'sidebar-expanded'"
             x-show="sidebarOpen" 
             @click.away="sidebarOpen = window.innerWidth > 1024 ? true : false"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="-translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full">
            
            <!-- Sidebar Header -->
            <div class="flex items-center justify-between p-4 border-b">
                <div class="flex items-center space-x-2" x-show="!sidebarCollapsed">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-purple-600 to-blue-600 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <span class="text-xl font-bold gradient-text">IT Del Press</span>
                </div>
                <button @click="sidebarCollapsed = !sidebarCollapsed" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!sidebarCollapsed" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        <path x-show="sidebarCollapsed" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            
            <!-- Sidebar Content -->
            <div class="flex-1 overflow-y-auto py-4">
                <nav class="px-2 space-y-1">
                    <!-- Dashboard -->
                    <a href="{{ route('dashboard') }}" class="group flex items-center px-4 py-3 text-sm font-medium rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-50">
                        <svg class="mr-3 h-5 w-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span x-show="!sidebarCollapsed">Dashboard</span>
                    </a>
                     <a href="{{ route('announcement.index') }}" class="group flex items-center px-4 py-3 text-sm font-medium rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-50">
                    <svg class="mr-3 h-5 w-5 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m0-4h.01M12 20c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8z" />
                    </svg>
                    <span x-show="!sidebarCollapsed">Pengumuman</span>
                      </a>
                    <!-- Publications -->
                    <a href="{{ route('publication.index') }}" class="group flex items-center px-4 py-3 text-sm font-medium rounded-md text-gray-900 bg-gray-100">
                        <svg class="mr-3 h-5 w-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span x-show="!sidebarCollapsed">Publikasi</span>
                    </a>
                    
                    <!-- Categories -->
                    <a href="{{ route('categories.index') }}" class="group flex items-center px-4 py-3 text-sm font-medium rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-50">
                        <svg class="mr-3 h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                        </svg>
                        <span x-show="!sidebarCollapsed">Kategori</span>
                    </a>
                    
                </nav>
            </div>
            
            <!-- Sidebar Footer -->
            <div class="p-4 border-t">
                <div class="flex items-center" x-show="!sidebarCollapsed">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-r from-purple-500 to-blue-500 flex items-center justify-center text-white font-semibold text-sm mr-3">
                        {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-gray-500">Super Admin</p>
                    </div>
                </div>
                <div class="flex justify-center mt-4" x-show="sidebarCollapsed">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-r from-purple-500 to-blue-500 flex items-center justify-center text-white font-semibold text-sm">
                        {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile sidebar backdrop -->
    <div class="fixed inset-0 z-40 bg-black bg-opacity-50 transition-opacity duration-300" 
         x-show="sidebarOpen && window.innerWidth <= 1024" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="sidebarOpen = false"
         style="display: none;">
    </div>

    <!-- Main Content -->
    <div class="main-content" :class="sidebarOpen ? (sidebarCollapsed ? 'lg:ml-20' : 'lg:ml-64') : 'lg:ml-0'">
        <!-- HEADER MODERN -->
        <header class="glass-morphism shadow-xl border-b border-white/20 sticky top-0 z-40">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="flex justify-between items-center">
                    <!-- Left: Mobile menu button -->
                    <div class="flex items-center lg:hidden">
                        <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 hover:text-gray-600 focus:outline-none">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Center: Logo and Title (hidden on mobile) -->
                    <div class="flex items-center space-x-4 lg:mx-auto">
                        <div class="w-12 h-12 rounded-xl overflow-hidden shadow-lg bg-white flex items-center justify-center">
                            <img src="{{asset('download.jpeg')}}" alt="Logo IT Del" class="object-contain w-full h-full" />
                        </div>

                        <div class="hidden md:block">
                            <h1 class="text-2xl font-bold gradient-text">IT Del Press</h1>
                            <p class="text-sm text-gray-600">Manajemen Publikasi</p>
                        </div>
                    </div>

                    <!-- Right: Date & User Dropdown -->
                    <div class="flex items-center space-x-4">
                        <div class="hidden sm:block text-right">
                            <p class="text-sm text-gray-600">{{ now()->translatedFormat('l, d F Y') }}</p>
                            <p class="text-xs text-gray-500">{{ now()->format('h:i A') }}</p>
                        </div>

                        <!-- Dropdown -->
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="w-10 h-10 rounded-full bg-gradient-to-r from-purple-600 to-blue-600 flex items-center justify-center text-white font-semibold text-sm focus:outline-none">
                                {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
                            </button>

                            <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-50">
                                <div class="px-4 py-2 text-sm text-gray-800 border-b">
                                    {{ Auth::user()->name }}
                                </div>
                                <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100">Profil</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">Keluar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- MAIN CONTENT -->
        <main class="py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header with Create Button -->
                <br>
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Daftar Publikasi</h2>
                        <p class="text-gray-600">Kelola semua publikasi Anda</p>
                    </div>
                    <a href="{{ route('publication.create') }}" class="bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white font-medium py-2 px-4 rounded-lg shadow-md transition-all duration-300 transform hover:-translate-y-1 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Tambah Publikasi
                    </a>
                </div>

                <!-- Success Message -->
                @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg shadow-md">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                </div>
                @endif

                <!-- Publications Table -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                           <thead class="bg-gray-50">
    <tr>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            No
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Judul Publikasi
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Kategori
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Tanggal Publikasi
        </th>
        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
            Aksi
        </th>
    </tr>
</thead>
<tbody class="bg-white divide-y divide-gray-200">
    @forelse($publications as $publication)
    <tr class="hover:bg-gray-50 transition-colors duration-150">
        <!-- Kolom Nomor -->
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{ ($publications->currentPage() - 1) * $publications->perPage() + $loop->iteration }}
        </td>

        <!-- Kolom Judul Publikasi -->
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
             
                <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">{{ $publication->title }}</div>
                </div>
            </div>
        </td>

        <!-- Kolom Kategori -->
        <td class="px-6 py-4 whitespace-nowrap">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                {{ $publication->category->name }}
            </span>
        </td>

        <!-- Kolom Tanggal Publikasi -->
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{ \Carbon\Carbon::parse($publication->published_at)->format('d M Y') }}
        </td>

        <!-- Kolom Aksi -->
        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <div class="flex justify-end space-x-2">
                <a href="{{ route('publication.edit', $publication->id) }}" class="text-indigo-600 hover:text-indigo-900">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </a>
                <form action="{{ route('publication.destroy', $publication->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus publikasi ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-900">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">
            Tidak ada publikasi yang tersedia. Mulailah dengan menambahkan publikasi baru.
        </td>
    </tr>
    @endforelse
</tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination -->
                    @if($publications->hasPages())
                    <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                        {{ $publications->links() }}
                    </div>
                    @endif
                </div>
            </div>
        </main>
        <br><br><br><br><br><br><br><br><br>
        <!-- Footer -->
        <footer class="bg-white/80 backdrop-blur-sm border-t border-gray-200 mt-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="flex items-center space-x-2 mb-4 md:mb-0">
                        <div class="w-8 h-8 bg-gradient-to-r from-purple-600 to-blue-600 rounded-lg flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 7.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-800">IT Del Press</p>
                            <p class="text-xs text-gray-600">Dashboard Management System</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-6 text-sm text-gray-600">
                        <a href="#" class="hover:text-purple-600 transition-colors">Bantuan</a>
                        <a href="#" class="hover:text-purple-600 transition-colors">Dokumentasi</a>
                        <a href="#" class="hover:text-purple-600 transition-colors">Kontak</a>
                        <div class="text-xs">
                            © 2025 IT Del Press. All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Animate statistics on load
        document.addEventListener('DOMContentLoaded', function() {
            const stats = document.querySelectorAll('.text-3xl');
            stats.forEach(stat => {
                const text = stat.textContent.trim();
                if (/^\d+$/.test(text)) {
                    const finalValue = parseInt(text);
                    let currentValue = 0;
                    const increment = finalValue / 50;

                    const animation = setInterval(() => {
                        currentValue += increment;
                        if (currentValue >= finalValue) {
                            stat.textContent = finalValue;
                            clearInterval(animation);
                        } else {
                            stat.textContent = Math.floor(currentValue);
                        }
                    }, 30);
                }
            });
        });
    </script>
</body>
</html>