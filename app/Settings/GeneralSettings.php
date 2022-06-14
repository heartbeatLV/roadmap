<?php

declare(strict_types = 1);

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings {
    public bool $board_centered;
    public bool $create_default_boards;
    public bool $show_projects_sidebar_without_boards;
    public array $default_boards;
    public bool $allow_general_creation_of_item;
    public array $dashboard_items;
    public array $send_notifications_to;
    public string|null $welcome_text;
    public string|null $password;
    public bool $enable_item_age;
    public bool $select_board_when_creating_item;
    public bool $select_project_when_creating_item;
    public bool $board_required_when_creating_item;
    public bool $project_required_when_creating_item;
    public bool $block_robots;

    public static function group() : string {
        return 'general';
    }

    public static function encrypted() : array {
        return [
            'password',
        ];
    }
}
