<?php

namespace Wilderborn\Partyline;

use Illuminate\Console\Command;

class Partyline
{
    /**
     * @var Command|NullConsole
     */
    private $console;

    /**
     * Set the console command instance
     *
     * @param Command $console
     * @return void
     */
    public function bind(Command $console)
    {
        $this->console = $console;
    }

    /**
     * Pass any method calls onto the console instance
     *
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        $console = $this->console ?: new NullConsole;

        return call_user_func_array([$console, $name], $arguments);
    }
}
