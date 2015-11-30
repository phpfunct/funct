<?php

call_user_func(function () {
    static $functions = [
        'CodeBlocks\\Invoke\\invoke_if',
        'CodeBlocks\\Invoke\\invoke_if_isset',
        'CodeBlocks\\Invoke\\invoke_if_not_empty',

        'CodeBlocks\\not_empty',
        'CodeBlocks\\not_null',
        'CodeBlocks\\null',
        'CodeBlocks\\false',
        'CodeBlocks\\true',
        'CodeBlocks\\not_in_array',
        'CodeBlocks\\array_key_not_exists',

        'CodeBlocks\\temp_file',

        'CodeBlocks\\first_value',
        'CodeBlocks\\first_value_not_empty',

        'CodeBlocks\\Collection\\collection_first',
        'CodeBlocks\\Collection\\collection_last',
        'CodeBlocks\\Collection\\collection_first_n',
        'CodeBlocks\\Collection\\collection_last_n',
        'CodeBlocks\\Collection\\collection_for_every',
        'CodeBlocks\\Collection\\collection_merge',
        'CodeBlocks\\Collection\\collection_get',
        'CodeBlocks\\Collection\\collection_initial',
        'CodeBlocks\\Collection\\collection_rest',
        'CodeBlocks\\Collection\\collection_tail',
        'CodeBlocks\\Collection\\collection_compact',
        'CodeBlocks\\Collection\\collection_flatten',
        'CodeBlocks\\Collection\\collection_flatten_all',
        'CodeBlocks\\Collection\\collection_without',
        'CodeBlocks\\Collection\\collection_union',
        'CodeBlocks\\Collection\\collection_intersection',
        'CodeBlocks\\Collection\\collection_zip',
        'CodeBlocks\\Collection\\collection_unzip',
        'CodeBlocks\\Collection\\collection_last_index_of',
        'CodeBlocks\\Collection\\collection_where',
        'CodeBlocks\\Collection\\collection_find_where',
        'CodeBlocks\\Collection\\collection_reject',
        'CodeBlocks\\Collection\\collection_every',
        'CodeBlocks\\Collection\\collection_some',
        'CodeBlocks\\Collection\\collection_invoke',
        'CodeBlocks\\Collection\\collection_pluck',
        'CodeBlocks\\Collection\\collection_max',
        'CodeBlocks\\Collection\\collection_min',
        'CodeBlocks\\Collection\\collection_sort_by',
        'CodeBlocks\\Collection\\collection_group_by',
        'CodeBlocks\\Collection\\collection_count_by',
        'CodeBlocks\\Collection\\collection_partition',
        'CodeBlocks\\Collection\\collection_pairs',

        'CodeBlocks\\Objects\\objects_to_array',

        'CodeBlocks\\String\\string_camelize',
        'CodeBlocks\\String\\string_lower_case_first',
        'CodeBlocks\\String\\string_upper_case_first',
        'CodeBlocks\\String\\string_is_lower',
        'CodeBlocks\\String\\string_is_upper',
        'CodeBlocks\\String\\string_between',
        'CodeBlocks\\String\\string_chomp_left',
        'CodeBlocks\\String\\string_chomp_right',
        'CodeBlocks\\String\\string_collapse_whitespace',
        'CodeBlocks\\String\\string_contains',
        'CodeBlocks\\String\\string_count',
        'CodeBlocks\\String\\string_ends_with',
        'CodeBlocks\\String\\string_include',
        'CodeBlocks\\String\\string_is_alpha_numeric',
        'CodeBlocks\\String\\string_is_alpha',
        'CodeBlocks\\String\\string_is_numeric',
        'CodeBlocks\\String\\string_latinize',
        'CodeBlocks\\String\\string_pad_left',
        'CodeBlocks\\String\\string_pad_right',
        'CodeBlocks\\String\\string_repeat',
        'CodeBlocks\\String\\string_starts_with',
        'CodeBlocks\\String\\string_times',
        'CodeBlocks\\String\\string_truncate',
    ];

    static $basePath = __DIR__;

    foreach ($functions as $function) {
        if (function_exists('Funct\\' . $function)) {
            continue;
        }

        $functionParts = explode('\\', $function);
        $functionName  = array_pop($functionParts);

        $path = $basePath . DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, $functionParts) .
                DIRECTORY_SEPARATOR . implode(
                    '',
                    array_map(
                        'ucfirst',
                        explode('_', $functionName)
                    )
                ) . '.php';

        require_once $path;
    }
});
