<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Beats;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    // Formularz do dodawania komentarza
    public function create($id)
    {
        $beat = Beats::findOrFail($id);
        return view('comments.create', compact('beat'));
    }

    // // Przechwytywanie i zapisanie komentarza w bazie
    // public function store(Request $request, $beatId)
    // {
    //     $request->validate([
    //         'comment' => 'required|string|max:255',  // Walidacja komentarza
    //     ]);

    //     // Tworzenie komentarza
    //     $comment = new Comment();
    //     $comment->user_id = Auth::id();  // Powiązanie komentarza z użytkownikiem
    //     $comment->beat_id = $beatId;
    //     $comment->comment = $request->input('comment');
    //     $comment->save();

    //     return redirect()->route('beats.show', ['beatId' => $beatId])->with('success', 'Komentarz dodany!');
    // }
        // Zapisanie komentarza
        public function store(Request $request, $id)
        {
            $request->validate([
                'comment' => 'required|string|max:1000',
            ]);
    
            $beat = Beats::findOrFail($id); // Znajdź beat, do którego dodajemy komentarz
    
            // Stwórz i zapisz komentarz
            $comment = new Comment();
            $comment->user_id = Auth::id(); // Użyj ID aktualnie zalogowanego użytkownika
            $comment->beat_id = $id;
            $comment->comment = $request->comment;
            $comment->save();
    
            // Przekierowanie na stronę bitu z komunikatem sukcesu
            return redirect()->route('dashboard', $id)->with('success', 'Komentarz dodany pomyślnie!');
        }

    // Widok komentarzy - tylko dla adminów
    public function index($id)
    {
        $beat = Beats::findOrFail($id); // Znajdź beat na podstawie ID
        $comments = $beat->comments;    // Pobierz komentarze związane z beatem
    
        return view('comments.index', compact('beat', 'comments'));
    }
}
