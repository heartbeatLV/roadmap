<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

class MyController extends Controller {
    public function __invoke() {
        return view('my');
    }
}
