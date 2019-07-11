<?php

namespace DadolunHook\App\Console\Application;

use CaptainHook\App\Console\Application;
use CaptainHook\App\Console\Command as Cmd;

/**
 * Class Dadolunsetup
 * @package CaptainHook\App\Console\Application
 */
class Dadolunsetup extends Setup
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
            new Cmd\Dadolunconfiguration()
        );
        return $commands;
    }
}
