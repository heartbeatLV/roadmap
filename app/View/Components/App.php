<?php

declare(strict_types = 1);

namespace App\View\Components;

use App\Models\Project;
use App\Services\Tailwind;
use App\Settings\GeneralSettings;
use Closure;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class App extends Component {
    public Collection $projects;
    public string $brandColors;
    public bool $blockRobots = false;

    public function __construct(public array $breadcrumbs = []) {
        $this->projects = Project::query()
            ->when(app(GeneralSettings::class)->show_projects_sidebar_without_boards === false, static fn ($query) => $query->has('boards'))
            ->orderBy('title')
            ->get();

        $this->blockRobots = app(GeneralSettings::class)->block_robots;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Closure|\Illuminate\Contracts\View\View|string
     */
    public function render() {
        $tw = new Tailwind('brand', app(\App\Settings\ColorSettings::class)->primary);

        $this->brandColors = $tw->getCssFormat();

        return view('components.app');
    }
}
