<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:50',
            'author' => 'required|max:50',
            'publish' => 'required|max:50',
            'publish_year' => 'integer',
            'publish_month' => 'integer',
            'isbn' => '',
            'book_size' => 'max:10',
            'purchase_date' => '',
            'status' => 'required|max:5',
            'disposal_date' => '',
            'disposal_type' => 'max:6',
        ]);

        //$validated['user_id'] = auth()->id();
        
        $book = Book::create($validated);

        $request->session()->flash('message', '保存しました');
        return redirect()->route('book.index');
    }

    /*public function index()
    {
        $books=Book::orderBy('publish_year', 'desc')->orderBy('publish_month', 'desc')->paginate(10);
        return view('book.index', compact('books'));
    }*/
    
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Book::query();

        if(!empty($keyword)) {
            $query->where('title', 'LIKE', "%{$keyword}%")
                ->orWhere('author', 'LIKE', "%{$keyword}%")
                ->orWhere('publish', 'LIKE', "%{$keyword}%")
                ->orWhere('isbn', '=', "{$keyword}");
        }

        $books = $query->orderBy('publish_year', 'desc')->orderBy('publish_month', 'desc')->paginate(10);

        return view('book.index', compact('books', 'keyword'));
    }
    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('book.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|max:50',
            'author' => 'required|max:50',
            'publish' => 'required|max:50',
            'publish_year' => 'integer',
            'publish_month' => 'integer',
            'isbn' => '',
            'book_size' => 'max:10',
            'purchase_date' => '',
            'status' => 'required|max:5',
            'disposal_date' => '',
            'disposal_type' => 'max:6',
        ]);

        
        $book->update($validated);

        $request->session()->flash('message', '更新しました');
        return redirect()->route('book.index');
    }

    public function destroy(Request $request, Book $book)
    {
        $book->delete();
        $request->session()->flash('message', '削除しました');
        return redirect()->route('book.index');
    }

    
};
