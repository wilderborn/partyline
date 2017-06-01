# Partyline

This package allows you to output to the console from outside of command class.

For example, you might have a feature that does the same thing from a command and through the web.
Until now, you may have found yourself duplicating code just to be able to output to the console in various places.

With Partyline, you can use output commands within your logic. If it's being run inside the console, you'll see it. Otherwise, nothing will happen.

## Usage

In your console command's `handle` method, bind the command into Partyline:

``` php
public function handle()
{
    Partyline::bind($this);
}
```

Then in your regular classes, you may call any public `Illuminate\Console\Command` methods on the `Partyline` facade, just like you would inside the command class.

``` php
Partyline::info('foo');
// Equivalent to $this->info('foo') within your command.
```

## Installation

This package can be installed through Composer.

```
composer require wilderborn/partyline
```

For Laravel 5.4 and below, register the service provider and facade:

``` php
// config/app.php
'providers' => [
    ...
    Wilderborn\Partyline\ServiceProvider::class,
    ...
],

'aliases' => [
    ...
    'Partyline' => Wilderborn\Partyline\Facade::class,
    ...
]
```

For Laravel 5.5+, this package will be [automatically discovered](https://medium.com/@taylorotwell/package-auto-discovery-in-laravel-5-5-ea9e3ab20518).

## Tips

If you have many commands classes, you may find it tedious to bind into Partyline every time. You may consider an abstract command class and bind inside the `run` method.

``` php
class YourCommand extends AbstractCommand
{
    public function handle()
    {
        //
    }
}
```

``` php
class AbstractCommand extends Command
{
    /**
     * Run the console command.
     *
     * @param  \Symfony\Component\Console\Input\InputInterface  $input
     * @param  \Symfony\Component\Console\Output\OutputInterface  $output
     * @return int
     */
    public function run(InputInterface $input, OutputInterface $output)
    {
        Partyline::bind($this);

        return parent::run($input, $output);
    }
}
```
