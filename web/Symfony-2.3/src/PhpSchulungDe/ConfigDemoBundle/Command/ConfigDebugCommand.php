<?php
namespace PhpSchulungDe\ConfigDemoBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class ConfigDebugCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('config:debug')
            ->setDescription('Debug Config')
            ->addArgument('config.part', InputArgument::OPTIONAL, 'Which part of the config do you want to debug?')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        switch ($input->getArgument('config.part')) {
            case 'listeners':
                /** @var  $listeners array */
                $listeners = $this->getContainer()->get('event_dispatcher')->getListeners();
                print_r (array_keys($listeners));

                $output->writeln('foo');
                break;
            default:
                $output->writeln('This config part has not yet been implemented.');
        }
    }
}