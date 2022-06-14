<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Project;

class BoardsController extends Controller {
    public function show(Project $project, Board $board) {
        return view('board', [
            'project' => $project,
            'board'   => $board,
        ]);
    }
}
