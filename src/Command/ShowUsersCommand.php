<?php
namespace Hong\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

use Hong\Service\Printer;
use Hong\Entity\Student;
use Hong\Entity\Banker;
use Hong\Entity\User;

class ShowUsersCommand extends Command
{
    // private Printer $printer;

    public function __construct(
        private Printer $printer,
    ){
        parent::__construct();
    }

    // public function __construct(){
    //     $this->printer = new Printer();
    //     parent::__construct();
    // }

    // 05 Implementing the configure method
    protected function configure()
    {
        $this
            // 06 defining the command name
            ->setName('show-users')
            // 07 defining the description of the command
            ->setDescription('Prints user list')
            // 08 defining the help (shown with -h option)
            ->setHelp('This command prints user list');
        
        // $this->addArgument('username', InputArgument::REQUIRED, 'The username of the user.');
    }

    // 09 implementing the execute method
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // 10 using the Output for writing something
        // $output->writeln("Hello, " . get_current_user() . "!");
        // $output->writeln("It's " . date("l"));

        // retrieve the argument value using getArgument()
        // $output->writeln("Hello, " . $input->getArgument('username'));

        $this->printer->add(new Student('Anna', 33, 'anna@yahoo.de', 'Uni Muen'));
        $this->printer->add(new Banker('Mueller', 44, 'mueller@yahoo.de', 'SSK Muenchen'));
        $this->printer->add(new User("Danny", "danny@gmail.com", "123danny"));

        $this->printer->printAllOnConsole();

        // 11 returning the success status
        return Command::SUCCESS;
    }
}
