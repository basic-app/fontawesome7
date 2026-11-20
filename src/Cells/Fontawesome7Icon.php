<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\Fontawesome7\Cells;

use CodeIgniter\View\Cells\Cell;

class Fontawesome7Icon extends Cell
{
    protected string $view = __DIR__ . '/../../resources/Views/fontawesome7-icon.php';

    public ?string $icon = null;
}
