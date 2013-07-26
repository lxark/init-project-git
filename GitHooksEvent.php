<?php

namespace Lxark;

use Composer\Script\Event;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\SplFileInfo;

/**
 * These are events to install hooks
 * 
 * @author Alix Chaysinh <alix.chaysinh@iac.fr>
 * @since  2013-07-25
 */
class GitHooksEvent
{
    /**
     * @param Event $event
     */
    public static function installHooks(Event $event)
    {
        // Get installation path
        $composer = $event->getComposer();
        $im = $composer->getInstallationManager();
        $localHooksPath = $im->getInstallationPath().'/.git/hooks';

        // Get hooks files
        $finder = new Finder();
        $hooks = $finder->files()->in(__DIR__.'/hooks');

        // Symbolic links to git hooks repertory
        $fs = new Filesystem();
        foreach ($hooks as $hook) {
            /* @var SplFileInfo $hook */
            $fs->symlink($hook->getRealPath(), $localHooksPath .'/'.$hook->getFilename());
        }
    }
}