<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Category;

class DashboardController extends Controller
{
  public function index()
{
    // Total publikasi (untuk info jumlah total)
    $totalPublications = Publication::count();

    // Ambil 5 publikasi terbaru
    $publications = Publication::latest()->take(5)->get();

    // Ambil semua kategori dan jumlah publikasinya
    $categories = Category::withCount('publications')->latest()->get();

    return view('admin.dashboard', compact('publications', 'categories', 'totalPublications'));
}

}
