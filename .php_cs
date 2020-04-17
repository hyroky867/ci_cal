<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('app/Views')
    ->exclude('app/Database')
    ->name('*.php')
    ->notName('.php_cs')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)
    ->in(__DIR__);

return PhpCsFixer\Config::create()
    ->setFinder($finder)
    ->setRules([
        'strict_param' => true,
        'array_syntax' => [
            'syntax' => 'short',
        ],
    ])
    ->setFinder($finder);
