<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\Fontawesome7\Publishers;

use BasicApp\Publisher\Publisher;

class Fontawesome7 extends Publisher
{
    protected $customRestrictions = '*';

    /**
     * Tell Publisher where to create destination directory.
     */
    protected $createDestination = true;

    /**
     * FCPATH is always the default destination,
     * but we may want them to go in a sub-folder
     * to keep things organized.
     *
     * @var string
     */
    protected $destination = FCPATH . 'assets/fontawesome7';

    /**
     * Use the "publish" method to indicate that this
     * class is ready to be discovered and automated.
     */
    public function publish(): bool
    {
        return $this->wipe()
            ->addUri('https://use.fontawesome.com/releases/v7.3.1/fontawesome-free-7.3.1-web.zip')
            ->extractZip('fontawesome-free-7.3.1-web.zip')
            ->removeScratchFile('fontawesome-free-7.3.1-web.zip')
            ->setSource($this->getScratch() . 'fontawesome-free-7.3.1-web')
            ->addPaths([
                'css',
                'webfonts'
            ])
            ->merge(true);
    }
}