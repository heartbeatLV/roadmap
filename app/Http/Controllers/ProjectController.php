<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller {
    public function show($id) {
        $project = Project::query()->where('slug', $id)->firstOrFail();

        return view('project', [
            'project' => $project,
            'boards'  => $project->boards()
                ->visible()
                ->with(['items' => static function ($query) {
                    return $query
                        ->orderBy('pinned', 'desc')
                        ->popular() // TODO: This needs to be fixed to respect the sorting setting from the board itself (sort_items_by)
                        ->withCount('votes');
                }])
                ->get(),
        ]);
    }
}
