<?php

namespace Wilderborn\Partyline;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

/**
 * @method static void bind(\Illuminate\Console\Command $console)
 * @method static \Symfony\Component\Console\Output\OutputInterface getOutput()
 * @method static void line(string $string, string $style = null, int|string|null $verbosity = null)
 * @method static bool confirm(string $question, bool $default = false)
 * @method static mixed ask(string $question, string|null $default = null)
 * @method static mixed anticipate(string $question, array|callable $choices, string|null $default = null)
 * @method static mixed askWithCompletion(string $question, array|callable $choices, string|null $default = null)
 * @method static mixed secret(string $question, bool $fallback = true)
 * @method static string|array choice(string $question, array $choices, string|int|null $default = null, mixed|null $attempts = null, bool $multiple = false)
 * @method static void info(string $string, int|string|null $verbosity = null)
 * @method static void comment(string $string, int|string|null $verbosity = null)
 * @method static void question(string $string, int|string|null $verbosity = null)
 * @method static void error(string $string, int|string|null $verbosity = null)
 * @method static void warn(string $string, int|string|null $verbosity = null)
 * @method static void alert(string $string)
 * @method static void newLine(int $count = 1)
 * @method static void table(array $headers, \Illuminate\Contracts\Support\Arrayable|array $rows, \Symfony\Component\Console\Helper\TableStyle|string $tableStyle = 'default', array $columnStyles = [])
 *
 * @see \Wilderborn\Partyline\Partyline
 * @see \Illuminate\Console\Concerns\InteractsWithIO
 * @see \Illuminate\Console\Command
 */
class Facade extends IlluminateFacade
{
    protected static function getFacadeAccessor()
    {
        return 'partyline';
    }
}
