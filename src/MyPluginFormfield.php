<?php

namespace My\Plugin;

use Voyager\Admin\Classes\Formfield;

class MyPluginFormfield extends Formfield
{
    public function type(): string
    {
        return 'my-plugin';
    }

    public function name(): string
    {
        return 'MyPlugin';
    }

    public function browse(mixed $input): mixed
    {
        // Manipulate incoming browse data
        return $input;
    }

    public function getComponentName(): string {
        return 'my-plugin-formfield';
    }

    public function getBuilderComponentName(): string {
        return 'my-plugin-builder';
    }
}