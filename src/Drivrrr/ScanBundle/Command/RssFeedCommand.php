<?php
namespace Drivrrr\ScanBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Drivrrr\ScanBundle\Controller\HomeController;

class RssFeedCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('scantasy:rssfeed')
            ->setDescription('Send notifications on change')
            //->addArgument('name', InputArgument::OPTIONAL, 'Who do you want to greet?')
            //->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //update newest feed

        //run new feed

        $message = \Swift_Message::newInstance()
            ->setSubject('Notification Email')
            ->setFrom('test.mail.sloth@gmail.com')
            ->setTo('vietnamknight2005@gmail.com')
            ->setBody('New file has been added to your dropbox scantasy folder');
        $this->getContainer()->get('mailer')->send($message);
        $output->writeln("Successful");
    }
}