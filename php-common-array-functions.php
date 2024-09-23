<?php

$commonArrayFunctions = [
    'array_push' => 'Push one or more elements onto the end of array',
    'array_pop' => 'Pop the element off the end of array',
    'array_shift' => 'Shift an element off the beginning of array',
    'array_unshift' => 'Prepend one or more elements to the beginning of an array',
    'count' => 'Count all elements in an array',
    'sizeof' => 'Alias of count()',
    'array_slice' => 'Extract a slice of the array',
    'array_splice' => 'Remove a portion of the array and replace it with something else',
    'array_merge' => 'Merge one or more arrays',
    'array_combine' => 'Creates an array by using one array for keys and another for its values',
    'array_key_exists' => 'Checks if the given key or index exists in the array',
    'in_array' => 'Checks if a value exists in an array',
    'array_search' => 'Searches the array for a given value and returns the first corresponding key if successful',
    'array_filter' => 'Filters elements of an array using a callback function',
    'array_map' => 'Applies the callback to the elements of the given arrays',
    'array_reduce' => 'Iteratively reduce the array to a single value using a callback function',
    'array_walk' => 'Apply a user function to every member of an array',
    'array_flip' => 'Exchanges all keys with their associated values in an array',
    'array_reverse' => 'Return an array with elements in reverse order',
    'sort' => 'Sort an array',
    'rsort' => 'Sort an array in reverse order',
    'asort' => 'Sort an array and maintain index association',
    'arsort' => 'Sort an array in reverse order and maintain index association',
    'ksort' => 'Sort an array by key',
    'krsort' => 'Sort an array by key in reverse order',
    'array_unique' => 'Removes duplicate values from an array',
    'array_intersect' => 'Computes the intersection of arrays',
    'array_diff' => 'Computes the difference of arrays',
    'array_sum' => 'Calculate the sum of values in an array',
    'array_chunk' => 'Split an array into chunks',
];

// Example usage:
foreach ($commonArrayFunctions as $function => $description) {
    echo "$function: $description\n";
}

?>
