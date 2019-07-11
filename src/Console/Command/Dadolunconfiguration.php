<?php

namespace DadolunHook\App\Console\Command;

use DadolunHook\App\Runner\Dadolunconfigurator;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use DadolunHook\App\Console\Command\Base as CaptainHookBase;

/**
 * Class Dadolunconfiguration
 * @package DadolunHook\App\Console\Command
 */
class Dadolunconfiguration extends CaptainHookBase
{
    /**
     * Configure the command.
     */
    protected function configure()
    {
        $this->setName('dadolunconfigure')
            ->setDescription('Configure your custom hooks')
            ->setHelp('This command creates or updates your captainhook configuration')
            ->addOption('extend', 'e', InputOption::VALUE_NONE, 'Extend existing configuration file')
            ->addOption('force', 'f', InputOption::VALUE_NONE, 'Overwrite existing configuration file')
            ->addOption('advanced', 'a', InputOption::VALUE_NONE, 'More options, but more to type')
            ->addOption(
                'configuration',
                'c',
                InputOption::VALUE_OPTIONAL,
                'Path to your json configuration',
                './captainhook.json'
            );
    }

    /**
     * Execute the command.
     *
     * @param  \Symfony\Component\Console\Input\InputInterface   $input
     * @param  \Symfony\Component\Console\Output\OutputInterface $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io     = $this->getIO($input, $output);
        $config = $this->getConfig($input->getOption('configuration'));

        $configurator = new Dadolunconfigurator($io, $config);
        $configurator->force($input->getOption('force'))
            ->extend($input->getOption('extend'))
            ->advanced($input->getOption('advanced'))
            ->run();
    }
}
