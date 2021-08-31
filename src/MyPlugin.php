<?php

namespace My\Plugin;

use Voyager\Admin\Classes\Formfield;
use Voyager\Admin\Contracts\Plugins\FormfieldPlugin;

class MyPlugin implements FormfieldPlugin
{
    public $name = 'MyPlugin';
    public $description = 'My formfield plugin for Voyager II';
    public $repository = 'my/plugin';
    public $website = 'https://github.com/my/plugin';

    public function provideJS(): string
    {
        return file_get_contents(realpath(dirname(__DIR__, 1).'/dist/myplugin.umd.js'));
    }

    public function getFormfield(): Formfield
    {
        return new MyPluginFormfield();
    }
}
