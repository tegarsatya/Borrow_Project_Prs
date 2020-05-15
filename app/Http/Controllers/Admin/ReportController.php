<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function topBook()
    {
        $books = Book::withCount('borrowed')
                ->orderBy('borrowed_count', 'desc')
                ->paginate(10);

        return view('admin.report.top-book', [
            'books' => $books,
        ]);
    }

    public function topUser()
    {
        $users = User::withCount('borrow')
                ->orderBy('borrow_count', 'desc')
                ->paginate(10);

        return view('admin.report.top-user', [
            'users' => $users,
        ]);
    }
}
