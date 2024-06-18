<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class RelationController extends Controller
{
    public function getBooksByAuthor($authordID){
        $author = Author::findOrFail($authordID);

        $books = $author->books;
        // dd($books);
        return view('author.allbooks', compact('author', 'books'));
    }
}
