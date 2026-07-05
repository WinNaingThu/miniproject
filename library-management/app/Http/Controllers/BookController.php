<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->paginate(5);
        return view('books.index', compact('books'));
    }

    public function create()
{
    // Database ထဲက Categories အားလုံးကို ဆွဲထုတ်လိုက်ခြင်း
    $categories = Category::all();
    
    // ရလာတဲ့ ဒေတာတွေကို compact('categories') သုံးပြီး view ဆီသို့ ပို့ပေးခြင်း
    return view('books.create', compact('categories'));
}

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'category_id' => 'required|exists:categories,id'
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Book Added Successfully');
    }

    public function edit(Book $book)
    {
        $categories = Category::all();
        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'category_id' => 'required|exists:categories,id'
        ]);

        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('books.index')->with('success', 'Book Updated Successfully');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book Deleted Successfully');
    }
}