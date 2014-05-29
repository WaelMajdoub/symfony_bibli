<?php
/*
Fichier de configuration de PHP Coding Standard Fixer
Instead of using command line options to customize the fixer,
you can save the configuration in a .php_cs file in the root directory of your project.
The file must return an instance of SymfonyCSConfigInterface,
which lets you configure the fixers, the files, and directories that need to be analyzed:
*/
$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->exclude('somefile')
    ->in(__DIR__)
;

return Symfony\CS\Config\Config::create()
    ->fixers(array('indentation', 'elseif'))
    ->finder($finder)
;