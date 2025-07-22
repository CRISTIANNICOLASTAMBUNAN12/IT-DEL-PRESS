<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Publikasi - IT Del Press</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
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
        
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .glass-morphism {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .file-upload {
            border: 2px dashed #cbd5e0;
            transition: all 0.3s ease;
        }
        
        .file-upload:hover {
            border-color: #667eea;
        }
        
        .current-file {
            background-color: #f0f9ff;
            border-left: 4px solid #60a5fa;
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
                    <a href="{{ route('publication.index') }}" class="group flex items-center px-4 py-3 text-sm font-medium rounded-md text-gray-900 bg-gray-100">
                        <svg class="mr-3 h-5 w-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span x-show="!sidebarCollapsed">Publikasi</span>
                    </a>
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
        <!-- Header -->
        <header class="glass-morphism shadow-xl border-b border-white/20 sticky top-0 z-40">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="flex justify-between items-center">
                    <div class="flex items-center lg:hidden">
                        <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 hover:text-gray-600 focus:outline-none">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="flex items-center space-x-4 lg:mx-auto">
                        <div class="w-12 h-12 rounded-xl overflow-hidden shadow-lg bg-white flex items-center justify-center">
                            <img src="{{asset('download.jpeg')}}" alt="Logo IT Del" class="object-contain w-full h-full" />
                        </div>

                        <div class="hidden md:block">
                            <h1 class="text-2xl font-bold gradient-text">IT Del Press</h1>
                            <p class="text-sm text-gray-600">Edit Publikasi</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="hidden sm:block text-right">
                            <p class="text-sm text-gray-600">{{ now()->translatedFormat('l, d F Y') }}</p>
                            <p class="text-xs text-gray-500">{{ now()->format('h:i A') }}</p>
                        </div>

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

        <!-- Main Content -->
        <main class="py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-xl font-semibold text-gray-800">Edit Publikasi: {{ $publication->title }}</h2>
                            <a href="{{ route('publication.index') }}" class="text-gray-600 hover:text-gray-900 flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                </svg>
                                Kembali
                            </a>
                        </div>
                        
                        

                        <!-- Success Message -->
                        @if(session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>{{ session('success') }}</span>
                            </div>
                        </div>
                        @endif

                        <!-- Error Message -->
                        @if($errors->any())
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="font-medium">Mohon periksa kesalahan berikut:</span>
                            </div>
                            <ul class="mt-2 list-disc list-inside text-sm">
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('publication.update', $publication->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1 gap-6">
                                <div>
                                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Publikasi</label>
                                    <input type="text" name="title" id="title" value="{{ old('title', $publication->title) }}" 
                                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent transition duration-300" 
                                           placeholder="Masukkan judul publikasi" required>
                                </div>
                                <div x-data="{ authors: {{ json_encode(explode(',', $publication->author)) }} }" class="space-y-2">
                                    <label class="block text-sm font-medium text-gray-700">Penulis</label>

                                    <!-- Input Dinamis -->
                                    <template x-for="(author, index) in authors" :key="index">
                                        <div class="flex items-center space-x-2">
                                            <input :name="'author[]'" type="text" x-model="authors[index]"
                                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent transition duration-300"
                                                placeholder="Nama penulis" required>

                                            <button type="button" @click="authors.splice(index, 1)"
                                                    class="text-red-500 hover:text-red-700 focus:outline-none" x-show="authors.length > 1">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </template>

                                    <!-- Tombol tambah -->
                                    <button type="button" @click="authors.push('')"
                                        class="mt-1 text-sm text-purple-600 hover:text-purple-800 font-medium flex items-center space-x-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4v16m8-8H4" />
                                        </svg>
                                        <span>Tambah Penulis</span>
                                    </button>
                                    <p class="mt-1 text-sm text-gray-500">Klik tambah untuk menambahkan penulis baru</p>
                                </div>
                                <div>
                                    <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                                    <select name="category_id" id="category_id" 
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent transition duration-300" required>
                                        <option value="">Pilih Kategori</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ (old('category_id', $publication->category_id) == $category->id) ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
          <div>
    <label for="published_at" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Publikasi</label>
    <input type="date" name="published_at" id="published_at"
        value="{{ old('published_at', \Carbon\Carbon::parse($publication->published_at)->format('Y-m-d')) }}"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent transition duration-300" required>
</div>
 <div>
    <label for="isbn" class="block text-sm font-medium text-gray-700 mb-1">ISBN (jika ada)</label>
    <input type="text" name="isbn" id="isbn" 
        value="{{ old('isbn', $publication->isbn) }}"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent transition duration-300"
        placeholder="Masukkan ISBN (optional)">
</div>

<div>
    <label for="issn" class="block text-sm font-medium text-gray-700 mb-1">ISSN (jika ada)</label>
    <input type="text" name="issn" id="issn" 
        value="{{ old('issn', $publication->issn) }}"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent transition duration-300"
        placeholder="Masukkan ISSN (optional)">
</div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">File Saat Ini</label>
                                    <div class="current-file p-3 rounded-md mt-1">
                                        <div class="flex items-center">
                                            <svg class="h-8 w-8 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                            </svg>
                                            <div>
                                                <p class="text-sm font-medium text-gray-900">{{ basename($publication->file_path) }}</p>
                                                <p class="text-xs text-gray-500">Diunggah pada: {{ $publication->created_at->format('d M Y H:i') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Ubah File (PDF)</label>
                                    <div class="file-upload mt-1 flex justify-center px-6 pt-5 pb-6 border-2 rounded-lg">
                                        <div class="space-y-1 text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="file" class="relative cursor-pointer bg-white rounded-md font-medium text-purple-600 hover:text-purple-500 focus-within:outline-none">
                                                    <span>Upload file baru</span>
                                                    <input id="file" name="file" type="file" class="sr-only" accept=".pdf">
                                                </label>
                                                <p class="pl-1">atau drag and drop</p>
                                            </div>
                                            <p class="text-xs text-gray-500">PDF maksimal 20MB (biarkan kosong jika tidak ingin mengubah)</p>
                                        </div>
                                    </div>
                                    <div id="file-name" class="mt-2 text-sm text-gray-700"></div>
                                </div>
                                   <div>
<label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
<textarea name="description" id="description" rows="12"
    class="w-full border border-gray-300 rounded-lg"
    placeholder="Deskripsi isi publikasi">{{ old('description', $publication->description) }}</textarea>
<br>
                                <div class="flex justify-end">
                                    <button type="submit" class="bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white font-medium py-2 px-6 rounded-lg shadow-md transition-all duration-300 transform hover:-translate-y-1 flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path>
                                        </svg>
                                        Simpan Perubahan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

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
                        <div class="text-xs">
                            © 2025 IT Del Press. All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- CKEditor 5 CDN -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
</script>

    <script>
        // Show selected file name
        document.getElementById('file').addEventListener('change', function(e) {
            const fileName = document.getElementById('file-name');
            if (this.files.length > 0) {
                fileName.textContent = 'File terpilih: ' + this.files[0].name;
            } else {
                fileName.textContent = '';
            }
        });

        // Highlight file upload area when dragging over
        const fileUpload = document.querySelector('.file-upload');
        const fileInput = document.getElementById('file');

        fileUpload.addEventListener('dragover', (e) => {
            e.preventDefault();
            fileUpload.classList.add('border-purple-500', 'bg-purple-50');
        });

        fileUpload.addEventListener('dragleave', () => {
            fileUpload.classList.remove('border-purple-500', 'bg-purple-50');
        });

        fileUpload.addEventListener('drop', (e) => {
            e.preventDefault();
            fileUpload.classList.remove('border-purple-500', 'bg-purple-50');
            if (e.dataTransfer.files.length) {
                fileInput.files = e.dataTransfer.files;
                document.getElementById('file-name').textContent = 'File terpilih: ' + e.dataTransfer.files[0].name;
            }
        });

        // Reset form
        document.querySelector('button[type="reset"]').addEventListener('click', function() {
            document.getElementById('file-name').textContent = '';
        });
    </script>
</body>
</html>