<?php

use Illuminate\Support\Str;

if (! function_exists('dsgClasses')) {
    /*
        Returns the classes from the config.
        Also, you can pass optional class props based on the config paths which can be used to add extra classes.
        Etc.: 'dsg.random.config_element' -> ['random_config_element' => 'mt-4 p-1']
    */
    function dsgClasses(string|array $configPaths, array $extraClasses = []): string
    {
        $classes = '';
        foreach ((array) $configPaths as $key => $configPath) {
            $extraClassKey = Str::of($configPath)
                ->replace('dsg.', '')
                ->replace('.', '_')
                ->replace('-', '_')
                ->value();

            $classes .= ($key === 0 ? '' : ' ');
            $classes .= config($configPath);
            $classes .= isset($extraClasses[$extraClassKey]) ? ' '.$extraClasses[$extraClassKey] : '';
        }

        return $classes;
    }
}

if (! function_exists('addToExtraClasses')) {
    /*
        Adds new classes to the extra class attributes
    */
    function addToExtraClasses(array $extraClasses, array $classes): array
    {
        foreach ($classes as $key => $classString) {
            if (isset($extraClasses[$key])) {
                $extraClasses[$key] .= ' '.$classString;
            } else {
                $extraClasses[$key] = $classString;
            }
        }

        return $extraClasses;
    }
}
