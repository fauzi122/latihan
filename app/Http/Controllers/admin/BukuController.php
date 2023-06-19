<?php

namespace App\Http\Controllers\admin;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.buku.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|numeric',
        ]);

        Book::create($request->all());

        Alert::success('success','Book Create successfully');
        return redirect()->route('books');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book, $id)
    {
        return view('admin.buku.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book,$id)
    {
        $book = book::findOrFail($id);
        return view('admin.buku.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|numeric',
        ]);

        $book->update($request->all());

        Alert::success('success','Book Update successfully');
        return redirect()->route('books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        Alert::success('success','Book Destroy successfully');
        return redirect()->route('books');
    }
}
