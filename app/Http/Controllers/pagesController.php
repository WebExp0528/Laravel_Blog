<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index()
    {
        $title = 'My Girl';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);

    }
    public function about()
    {
        return view('pages.about');
    }
    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web design', 'Mobile app']
        );
        return view('pages.services')->with($data);
    }
}
