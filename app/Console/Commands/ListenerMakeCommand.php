<?php

namespace Inspirer\Console\Commands;

class ListenerMakeCommand extends \Illuminate\Foundation\Console\ListenerMakeCommand
{
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Framework\Kernel\Listeners';
    }

}
