<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\Fontawesome7\Cells;

use CodeIgniter\View\Cells\Cell;

class FaIcon extends Cell
{
    protected string $view = __DIR__ . '/../../cells/fa-icon.php';

    public $icon;
}
