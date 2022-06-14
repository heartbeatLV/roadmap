<?php

declare(strict_types = 1);

namespace App\Exceptions;

use Exception;

class SsoException extends Exception {
    public function render($request) {
        return redirect()->route('login')->withErrors([
            $this->getMessage(),
        ]);
    }
}
