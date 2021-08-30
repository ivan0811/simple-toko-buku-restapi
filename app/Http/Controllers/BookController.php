<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\TypeBook;

class BookController extends Controller
{
    public function showType(){
        return response()->json(TypeBook::with('book')->get(), 200);        
    }
    
    public function showBook(){
        return response()->json(Book::with('typeBook')->get(), 200);        
    }

    public function detailType($id){        
        return response()->json(TypeBook::where('id', $id)->with('book')->get(), 200);  
    }

    public function detailBook($id){
        return response()->json(Book::where('id', $id)->with('typeBook')->get(), 200);  
    }

    public function searchBook(Request $req){
        return response()->json(Book::where('title', 'like', '%'.$req->q.'%')
        ->orWhere('author', 'like', '%'.$req->q.'%')
        ->orWhere('publisher', 'like', '%'.$req->q.'%')
        ->with('typeBook')->get(), 200);  
    }

    public function postType(Request $req){
        TypeBook::create([
            'name' => $req->name
        ]);

        return response()->json([
            'post' => true,
            'category' => TypeBook::orderByDesc('id')->first()
        ]);
    }

    public function updateType(Request $req, $id){
        $typeBook = TypeBook::findOrFail($id);
        $typeBook->name = $req->name;
        $typeBook->save();
        return response()->json([
            'update' => true,
            'category' => $typeBook
        ]);
    }

    public function destroyType($id){
        TypeBook::findOrFail($id)->delete();
        return response()->json([
            'delete' => true            
        ]);
    }

    public function postBook(Request $req){
        if(TypeBook::where('id', $req->type_id)->first() == []){
            return response()->json([
                'post' => false,
                'message' => 'type_id not found'
            ]);              
        }else{
            Book::create([
                'type_id' => $req->type_id,
                'title' => $req->title,
                'author' => $req->author,
                'publisher' => $req->publisher
            ]);
    
            return response()->json([
                'post' => true,
                'book' => Book::orderByDesc('id')->first()
            ]);              
        }                
    }

    public function updateBook(Request $req, $id){
        $Book = Book::findOrFail($id);
        $Book->type_id = $req->type_id;
        $Book->title = $req->title;
        $Book->author = $req->author;
        $Book->publisher = $req->publisher;        
        $Book->save();
        return response()->json([
            'update' => true,
            'category' => $Book
        ]);
    }

    public function destroyBook($id){
        Book::findOrFail($id)->delete();
        return response()->json([
            'delete' => true            
        ]);
    }
}
