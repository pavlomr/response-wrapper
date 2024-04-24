<?php

$finder = Symfony\Component\Finder\Finder
    ::create()
    ->in(
        [
            __DIR__ . '/src',
        ]
    )
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)
;

return (new PhpCsFixer\Config)
    ->setCacheFile(__DIR__ . '/var/php_cs.cache')
    ->setRules(
        [
            '@PSR12'                                 => true,
            'array_syntax'                           => ['syntax' => 'short'],
            'ordered_imports'                        => ['sort_algorithm' => 'alpha'],
            'no_unused_imports'                      => true,
            //'not_operator_with_successor_space'      => false,
            'trailing_comma_in_multiline'            => true,
            'phpdoc_scalar'                          => true,
            'unary_operator_spaces'                  => true,
            'new_with_parentheses'                   => true,
            'blank_line_before_statement'            => [
                'statements' => ['break', 'continue', 'declare', 'return', 'throw', 'try'],
            ],
            'phpdoc_single_line_var_spacing'         => true,
            'phpdoc_var_without_name'                => true,
            'class_attributes_separation'            => [
                'elements' => [
                    'method' => 'one',
                ],
            ],
            'method_argument_space'                  => [
                'on_multiline'                     => 'ensure_fully_multiline',
                'keep_multiple_spaces_after_comma' => true,
            ],
            // TODO: enable once the github action uses the 3.1.0 release of php-cs-fixer
            // 'types_spaces' => [
            //     'space' => 'none',
            // ],
            'single_trait_insert_per_statement'      => false,
            'is_null'                                => true,
            'binary_operator_spaces'                 => [
                'default'   => 'align_single_space',
                'operators' =>
                    [
                        '='   => 'align',
                        '=>'  => 'align',
                        '===' => 'align_single_space_minimal',
                    ],
            ],
            'no_whitespace_in_blank_line'            => true,
            'multiline_whitespace_before_semicolons' => [
                'strategy' => 'new_line_for_chained_calls',
            ],
            'no_space_around_double_colon'           => false,
            'function_declaration'                   => [
                'closure_fn_spacing'       => 'none',
                'closure_function_spacing' => 'none',
            ],
            'class_definition'                       => [
                'space_before_parenthesis' => false,
            ],
        ]
    )
    ->setFinder($finder)
;