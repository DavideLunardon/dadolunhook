<?php

namespace DadolunHook\App\Console\Application;

use CaptainHook\App\Console\Application;
use DadolunHook\App\Console\Command as Cmd;
use CaptainHook\App\Console\Application\Setup as CaptainHookSetup;

/**
 * Class DadolunSetup
 * @package DadolunHook\App\Console\Application
 */
class DadolunSetup extends CaptainHookSetup
{
    /**
     * Initializes all the CaptainHook commands.
     *
     * @return \Symfony\Component\Console\Command\Command[]
     */
    protected function getDefaultCommands()
    {
        $commands = parent::getDefaultCommands();
        array_push(
            $commands,
            new Cmd\DadolunConfiguration()
        );
        return $commands;
    }
}
