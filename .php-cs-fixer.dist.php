<?php

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . '/app',
        __DIR__ . '/config',
        __DIR__ . '/database/factories',
        __DIR__ . '/database/seeds',
        __DIR__ . '/database/migrations',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ])
    ->exclude([
        __DIR__ . '/bootstrap',
    ]);

$config = new PhpCsFixer\Config();

return $config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PhpCsFixer:risky' => true,
        'blank_line_after_opening_tag' => true,
        'array_syntax' => false,
        'binary_operator_spaces' => true,
        'blank_line_after_namespace' => true,
        'linebreak_after_opening_tag' => false,
        'declare_strict_types' => false,
        'cast_spaces' => true,
        'class_keyword_remove' => false,
        'compact_nullable_typehint' => true,
        'concat_space' => true,
        'elseif' => true,
        'phpdoc_types_order' => [
            'null_adjustment' => 'always_last',
            'sort_algorithm' => 'none',
        ],
        'no_superfluous_phpdoc_tags' => false,
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => true,
            'import_functions' => true,
        ],
        'php_unit_test_case_static_method_calls' => [
            'call_type' => 'this'
        ],
        'phpdoc_align' => [
            'align' => 'left',
        ],
        'no_whitespace_before_comma_in_array' => true,
        'no_leading_namespace_whitespace' => true,
        'no_whitespace_in_blank_line' => true,
        'no_empty_statement' => true,
        'no_unused_imports' => true,
        'no_trailing_whitespace'=> true,
        'not_operator_with_successor_space' => true,
    ])
    ->setFinder($finder);