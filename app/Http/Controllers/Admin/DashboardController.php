<?php

namespace App\Http\Controllers\Admin;

use App\Model\Comment;
use App\Model\Contact;
use App\Model\Post;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        $comment = Comment::all();
        $contact = Contact::all();
        $post = Post::all();
        $user = User::all();
        $user1 = User::where('role', 9)->get();
        $user2 = User::where('role', 1)->orWhere('role', 2)->get();
        return view('admin.home_dashboard', compact('comment', 'contact', 'post', 'user', 'user1', 'user2'));
    }

    public function index_contact()
    {
        return view('admin.home_dashboard');
    }
}
