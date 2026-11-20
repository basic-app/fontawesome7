<?php

declare(strict_types=1);

/**
 * @author Basic App Dev Team
 * @license MIT
 */

/** @var ?string $icon */

helper(['fontawesome7']);

register_fontawesome7();

?>
<i class="fa-classic fa-fw <?= $icon;?>"></i>