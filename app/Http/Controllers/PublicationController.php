<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publications = Publication::withCount('category')->latest()->paginate();
        return view('admin.publication.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.publication.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|array|min:1',
        'author.*' => 'required|string|max:255',
        'file' => 'required|file|mimes:pdf|max:20480',
        'category_id' => 'required|exists:categories,id',
        'published_at' => 'required|date',
        'isbn' => 'nullable|string|max:50',
        'issn' => 'nullable|string|max:50',
        'description' => 'nullable|string',
    ]);

    $filePath = $request->file('file')->store('publications', 'public');

    Publication::create([
        'title' => $request->title,
        'author' => implode(', ', $request->author), // Gabungkan array penulis menjadi string
        'file_path' => $filePath,
        'category_id' => $request->category_id,
        'published_at' => $request->published_at,
        'isbn' => $request->isbn,
        'issn' => $request->issn,
        'description' => $request->description,
    ]);

    return redirect()->route('publication.index')->with('success', 'Publikasi berhasil ditambahkan.');
}


    /**
     * Display the specified resource.
     */
    public function show(Publication $publication)
    {
        return view('publications.show', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publication $publication)
    {
        $categories = Category::all();
        return view('admin.publication.edit', compact('publication', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
  public function update(Request $request, Publication $publication)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|array|min:1',
        'author.*' => 'required|string|max:255',
        'file' => 'nullable|file|mimes:pdf|max:20480',
        'category_id' => 'required|exists:categories,id',
        'published_at' => 'required|date',
        'isbn' => 'nullable|string|max:50',
        'issn' => 'nullable|string|max:50',
        'description' => 'nullable|string',
    ]);

    if ($request->hasFile('file')) {
        Storage::delete($publication->file_path);
        $filePath = $request->file('file')->store('publications', 'public');
    } else {
        $filePath = $publication->file_path;
    }

    $publication->update([
        'title' => $request->title,
        'author' => implode(', ', $request->author), // Gabungkan array penulis
        'file_path' => $filePath,
        'category_id' => $request->category_id,
        'published_at' => $request->published_at,
        'isbn' => $request->isbn,
        'issn' => $request->issn,
        'description' => $request->description,
    ]);

    return redirect()->route('publication.index')->with('success', 'Publikasi berhasil diperbarui.');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        Storage::delete($publication->file_path);
        $publication->delete();

        return redirect()->route('publication.index')->with('success', 'Publikasi berhasil dihapus.');
    }
}
