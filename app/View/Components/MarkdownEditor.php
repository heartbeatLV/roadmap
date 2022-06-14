<?php

declare(strict_types = 1);

namespace App\View\Components;

use Filament\Forms\Components\MarkdownEditor as BaseMarkdownEditor;

class MarkdownEditor extends BaseMarkdownEditor {
    protected string $view = 'components.markdown-editor';
}
