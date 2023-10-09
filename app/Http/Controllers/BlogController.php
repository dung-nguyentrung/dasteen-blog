<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * return blog detail page
     *
     * @return View
     */
    public function detail(): View
    {
        return view('blog.detail');
    }
}
