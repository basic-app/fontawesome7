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
    protected string $view = __DIR__ . '/../../cells/fontawesome7-icon.php';

    public $icon;
}
