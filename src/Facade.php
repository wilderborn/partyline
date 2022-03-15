<?php

namespace Wilderborn\Partyline;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

/**
 * @method static void bind(\Illuminate\Console\Command $console)
 * @method static \Symfony\Component\Console\Output\OutputInterface getOutput()
 * @method static void line(string $string, string $style = null, int|string|null $verbosity = null)
 * @method static void info(string $string, int|string|null $verbosity = null)
 * @method static void comment(string $string, int|string|null $verbosity = null)
 * @method static void question(string $string, int|string|null $verbosity = null)
 * @method static void error(string $string, int|string|null $verbosity = null)
 * @method static void warn(string $string, int|string|null $verbosity = null)
 * @method static void alert(string $string)
 * @method static void table(array $headers, \Illuminate\Contracts\Support\Arrayable|array $rows, string $tableStyle = 'default', array $columnStyles = [])
 *
 * @see \Wilderborn\Partyline\Partyline
 * @see \Illuminate\Console\Command
 */
class Facade extends IlluminateFacade
{
    protected static function getFacadeAccessor()
    {
        return 'partyline';
    }
}
