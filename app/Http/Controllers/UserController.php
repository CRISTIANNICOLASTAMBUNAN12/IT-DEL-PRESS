<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Support\Facades\Response;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Tampilkan daftar publikasi untuk pengguna.
     */
   public function index()
{
    // Ambil publikasi terbaru beserta kategorinya
    $publications = Publication::with('category')
                        ->latest()
                        ->paginate(10);

    // Ambil semua kategori + jumlah publikasi per kategori
    $categories = Category::withCount('publications')->get();

    // Ambil pengumuman yang sudah dipublish
    $announcements = Announcement::where('status', 'published')
                        ->orderBy('date', 'desc')
                        ->get();

    return view('user.welcome', compact('publications','categories','announcements'));
}


    /**
     * Tampilkan detail publikasi tertentu.
     */
public function showPublication($id)
{
    $publication = Publication::findOrFail($id);

    // Dapatkan path storage-nya
    $fileUrl = asset('storage/' . str_replace('public/', '', $publication->file_path));

    return view('user.publications.show', compact('publication', 'fileUrl'));
}


    /**
     * Tampilkan semua kategori.
     */
    public function categories()
    {
        $categories = Category::withCount('publications')->get();

        return view('user.categories.index', compact('categories'));
    }

    /**
     * Tampilkan semua publikasi berdasarkan kategori tertentu.
     */
    public function publicationsByCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $publications = $category->publications()->latest()->paginate(10);

        return view('user.categories.show', compact('category', 'publications'));
    }
    public function preview($id)
    {
    $publication = Publication::with('category')->findOrFail($id);

    return view('user.detail', compact('publication'));
    }



}
