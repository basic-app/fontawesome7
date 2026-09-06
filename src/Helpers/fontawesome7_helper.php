<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
use CodeIgniter\View\View;

if (!function_exists('register_fontawesome7'))
{
    function register_fontawesome7(array $params = [], ?View $renderer = null) : void
    {
        helper(['styles', 'render_view']);

        add_style(render_view('BasicApp\Fontawesome7\styles', $params), true, $renderer);
    }
}