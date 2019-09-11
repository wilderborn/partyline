<?php

namespace Wilderborn\Partyline;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

/**
 * Class Facade
 * @method static void bind(Command $console)
 * @method static \Symfony\Component\Console\Output\OutputInterface getOutput()
 * @method static void info(string $string, int|string|null $verbosity = null)
 *
 * @see \Wilderborn\Partyline\Partyline
 */
class Facade extends IlluminateFacade
{
    protected static function getFacadeAccessor()
    {
        return 'partyline';
    }
}
