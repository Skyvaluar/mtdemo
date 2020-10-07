<?php

namespace App\Http\Controllers\PartialViewControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataTwoController extends Controller
{
    public function index()
    {
        // This is just dummy data. 
        // So not a proper collection, which is why it will be read as an array in the view, and not a collection.
        // View collection syntax: {{ $user->fname }}
        // View array syntax: {{ $user['fname'] }}
        $users = collect([
            ['fname' => 'Jane', 'lname' => 'Jensen', 'age' => 24, 'dream' => 'Plane', 'pet' => 'Bird'],
            ['fname' => 'Tom', 'lname' => 'Thomsen', 'age' => 50, 'dream' => 'Shoes', 'pet' => 'Dog'],
            ['fname' => 'Paul', 'lname' => 'Paulsen', 'age' => 75, 'dream' => 'Jacket', 'pet' => 'Cat'],
            ['fname' => 'Morten', 'lname' => 'Mortensen', 'age' => 33, 'dream' => 'Ice cream', 'pet' => 'Horse'],
        ]);

        return view('partials.data-tab-two', compact('users'));
    }
}
