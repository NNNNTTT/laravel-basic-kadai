<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HelloController extends Controller {
    public function index() {
        $name = '侍 太郎';
        $languages = ['HTML', 'CSS', 'JavaScript', 'PHP'];

        // 変数$nameをindex.blade.phpファイルに渡す
        return view('index', compact('name', 'languages'));
    }
}
