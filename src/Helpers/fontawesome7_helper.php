<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */
use CodeIgniter\View\View;

if (!function_exists('register_fontawesome7')) {
    function register_fontawesome7(array $params = [], ?View $renderer = null): void
    {
        helper(['styles', 'render_view']);

        add_style(render_view('BasicApp\Fontawesome7\styles', $params), true, $renderer);
    }
}

if (!function_exists('fontawesome7_icon')) {
    function fontawesome7_icon($icon): string
    {
        if (is_string($icon)) {
            $attributes = ['icon' => $icon];
        } else {
            $attributes = $icon;
        }

        return view_cell('Fontawesome7Icon', $attributes);
    }
}
