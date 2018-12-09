<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function getIndex() {
        return view('pages.welcome');
    }
    public function getAdmin() {
        return view('pages.admin.index');
    }
    public function getBlog() {
        return view('pages.blog');
    }
}