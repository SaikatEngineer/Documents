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
    'array_multisort' => 'Sort multiple or multi-dimensional arrays',
    'array_rand' => 'Pick one or more random keys out of an array',
    'array_replace' => 'Replaces elements from passed arrays into the first array',
    'array_walk_recursive' => 'Apply a user function recursively to every member of an array',
    'array_keys' => 'Return all the keys or a subset of the keys of an array',
];

// Examples for each function
echo "Examples for each function:\n\n"; // Examples for each function:

// array_push
$fruits = ['apple', 'banana'];
echo "Original array: " . implode(', ', $fruits) . "\n"; // Original array: apple, banana
array_push($fruits, 'orange', 'grape');
echo "array_push: " . implode(', ', $fruits) . "\n\n"; // array_push: apple, banana, orange, grape

// array_pop
$lastFruit = array_pop($fruits);
echo "Original array: " . implode(', ', $fruits) . "\n"; // Original array: apple, banana, orange
echo "array_pop: Removed $lastFruit, remaining: " . implode(', ', $fruits) . "\n\n"; // array_pop: Removed grape, remaining: apple, banana, orange

// array_shift
$firstFruit = array_shift($fruits);
echo "Original array: " . implode(', ', $fruits) . "\n"; // Original array: banana, orange
echo "array_shift: Removed $firstFruit, remaining: " . implode(', ', $fruits) . "\n\n"; // array_shift: Removed apple, remaining: banana, orange

// array_unshift
echo "Original array: " . implode(', ', $fruits) . "\n"; // Original array: banana, orange
array_unshift($fruits, 'kiwi', 'mango');
echo "array_unshift: " . implode(', ', $fruits) . "\n\n"; // array_unshift: kiwi, mango, banana, orange

// count and sizeof
echo "Original array: " . implode(', ', $fruits) . "\n"; // Original array: kiwi, mango, banana, orange
echo "count: " . count($fruits) . "\n"; // count: 4
echo "sizeof: " . sizeof($fruits) . "\n\n"; // sizeof: 4

// array_slice
$slice = array_slice($fruits, 1, 2);
echo "Original array: " . implode(', ', $fruits) . "\n"; // Original array: kiwi, mango, banana, orange
echo "array_slice: " . implode(', ', $slice) . "\n\n"; // array_slice: mango, banana

// array_splice
echo "Original array: " . implode(', ', $fruits) . "\n"; // Original array: kiwi, mango, banana, orange
array_splice($fruits, 1, 1, ['peach', 'plum']);
echo "array_splice: " . implode(', ', $fruits) . "\n\n"; // array_splice: kiwi, peach, plum, banana, orange

// array_merge
$moreFruits = ['cherry', 'blackberry'];
echo "Original arrays: [" . implode(', ', $fruits) . "] + [" . implode(', ', $moreFruits) . "]\n"; // Original arrays: [kiwi, peach, plum, banana, orange] + [cherry, blackberry]
$allFruits = array_merge($fruits, $moreFruits);
echo "array_merge: " . implode(', ', $allFruits) . "\n\n"; // array_merge: kiwi, peach, plum, banana, orange, cherry, blackberry

// array_combine
$keys = ['a', 'b', 'c'];
$values = [1, 2, 3];
echo "Original arrays: keys [" . implode(', ', $keys) . "] + values [" . implode(', ', $values) . "]\n"; // Original arrays: keys [a, b, c] + values [1, 2, 3]
$combined = array_combine($keys, $values);
echo "array_combine: " . json_encode($combined) . "\n\n"; // array_combine: {"a":1,"b":2,"c":3}

// array_key_exists
echo "Original array: " . json_encode($combined) . "\n"; // Original array: {"a":1,"b":2,"c":3}
echo "array_key_exists: " . (array_key_exists('b', $combined) ? 'true' : 'false') . "\n\n"; // array_key_exists: true

// in_array
echo "Original array: " . implode(', ', $allFruits) . "\n"; // Original array: kiwi, peach, plum, banana, orange, cherry, blackberry
echo "in_array: " . (in_array('cherry', $allFruits) ? 'true' : 'false') . "\n\n"; // in_array: true

// array_search
echo "Original array: " . implode(', ', $allFruits) . "\n"; // Original array: kiwi, peach, plum, banana, orange, cherry, blackberry
echo "array_search: " . array_search('cherry', $allFruits) . "\n\n"; // array_search: 5

// array_filter
$numbers = [1, 2, 3, 4, 5, 6];
echo "Original array: " . implode(', ', $numbers) . "\n"; // Original array: 1, 2, 3, 4, 5, 6
$evenNumbers = array_filter($numbers, fn($n) => $n % 2 == 0);
echo "array_filter: " . implode(', ', $evenNumbers) . "\n\n"; // array_filter: 2, 4, 6

// array_map
echo "Original array: " . implode(', ', $numbers) . "\n"; // Original array: 1, 2, 3, 4, 5, 6
$squared = array_map(fn($n) => $n * $n, $numbers);
echo "array_map: " . implode(', ', $squared) . "\n\n"; // array_map: 1, 4, 9, 16, 25, 36

// array_reduce
echo "Original array: " . implode(', ', $numbers) . "\n"; // Original array: 1, 2, 3, 4, 5, 6
$sum = array_reduce($numbers, fn($carry, $n) => $carry + $n, 0);
echo "array_reduce: $sum\n\n"; // array_reduce: 21

// array_walk
echo "Original array: " . json_encode($combined) . "\n"; // Original array: {"a":1,"b":2,"c":3}
array_walk($combined, function(&$value, $key) { $value *= 2; });
echo "array_walk: " . json_encode($combined) . "\n\n"; // array_walk: {"a":2,"b":4,"c":6}

// array_flip
echo "Original array: " . json_encode($keys) . "\n"; // Original array: ["a","b","c"]
$flipped = array_flip($keys);
echo "array_flip: " . json_encode($flipped) . "\n\n"; // array_flip: {"a":0,"b":1,"c":2}

// array_reverse
echo "Original array: " . implode(', ', $allFruits) . "\n"; // Original array: kiwi, peach, plum, banana, orange, cherry, blackberry
$reversed = array_reverse($allFruits);
echo "array_reverse: " . implode(', ', $reversed) . "\n\n"; // array_reverse: blackberry, cherry, orange, banana, plum, peach, kiwi

// sort
echo "Original array: " . implode(', ', $allFruits) . "\n"; // Original array: kiwi, peach, plum, banana, orange, cherry, blackberry
sort($allFruits);
echo "sort: " . implode(', ', $allFruits) . "\n\n"; // sort: banana, blackberry, cherry, kiwi, orange, peach, plum

// rsort
echo "Original array: " . implode(', ', $allFruits) . "\n"; // Original array: banana, blackberry, cherry, kiwi, orange, peach, plum
rsort($allFruits);
echo "rsort: " . implode(', ', $allFruits) . "\n\n"; // rsort: plum, peach, orange, kiwi, cherry, blackberry, banana

// asort
$scores = ['John' => 85, 'Alice' => 92, 'Bob' => 78];
echo "Original array: " . json_encode($scores) . "\n"; // Original array: {"John":85,"Alice":92,"Bob":78}
asort($scores);
echo "asort: " . json_encode($scores) . "\n\n"; // asort: {"Bob":78,"John":85,"Alice":92}

// arsort
arsort($scores);
echo "arsort: " . json_encode($scores) . "\n\n"; // arsort: {"Alice":92,"John":85,"Bob":78}

// ksort
ksort($scores);
echo "ksort: " . json_encode($scores) . "\n\n"; // ksort: {"Alice":92,"Bob":78,"John":85}

// krsort
krsort($scores);
echo "krsort: " . json_encode($scores) . "\n\n"; // krsort: {"John":85,"Bob":78,"Alice":92}

// array_unique
$withDuplicates = [1, 2, 2, 3, 4, 4, 5];
echo "Original array: " . implode(', ', $withDuplicates) . "\n"; // Original array: 1, 2, 2, 3, 4, 4, 5
$unique = array_unique($withDuplicates);
echo "array_unique: " . implode(', ', $unique) . "\n\n"; // array_unique: 1, 2, 3, 4, 5

// array_intersect
$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];
echo "Original arrays: [" . implode(', ', $array1) . "] & [" . implode(', ', $array2) . "]\n"; // Original arrays: [1, 2, 3, 4, 5] & [3, 4, 5, 6, 7]
$intersection = array_intersect($array1, $array2);
echo "array_intersect: " . implode(', ', $intersection) . "\n\n"; // array_intersect: 3, 4, 5

// array_diff
echo "Original arrays: [" . implode(', ', $array1) . "] - [" . implode(', ', $array2) . "]\n"; // Original arrays: [1, 2, 3, 4, 5] - [3, 4, 5, 6, 7]
$difference = array_diff($array1, $array2);
echo "array_diff: " . implode(', ', $difference) . "\n\n"; // array_diff: 1, 2

// array_sum
echo "Original array: " . implode(', ', $array1) . "\n"; // Original array: 1, 2, 3, 4, 5
$sum = array_sum($array1);
echo "array_sum: $sum\n\n"; // array_sum: 15

// array_chunk
echo "Original array: " . implode(', ', $numbers) . "\n"; // Original array: 1, 2, 3, 4, 5, 6
$chunks = array_chunk($numbers, 2);
echo "array_chunk: " . json_encode($chunks) . "\n\n"; // array_chunk: [[1,2],[3,4],[5,6]]


// array_multisort
$array1 = [3, 2, 5, 6];
$array2 = ['a', 'b', 'c', 'd'];
echo "Original arrays: [" . implode(', ', $array1) . "] & [" . implode(', ', $array2) . "]\n"; // Original arrays: [3, 2, 5, 6] & [a, b, c, d]
array_multisort($array1, $array2);
echo "array_multisort: [" . implode(', ', $array1) . "] & [" . implode(', ', $array2) . "]\n\n"; // array_multisort: [2, 3, 5, 6] & [b, a, c, d]

// array_rand
$randomKeys = array_rand($allFruits, 2);
echo "Original array: " . implode(', ', $allFruits) . "\n"; // Original array: kiwi, peach, plum, banana, orange, cherry, blackberry
echo "array_rand: " . implode(', ', array_intersect_key($allFruits, array_flip($randomKeys))) . "\n\n"; // array_rand: (random 2 fruits)

// array_replace
$array1 = ['a', 'b', 'c'];
$array2 = [1, 2];
echo "Original arrays: [" . implode(', ', $array1) . "] & [" . implode(', ', $array2) . "]\n"; // Original arrays: [a, b, c] & [1, 2]
$replaced = array_replace($array1, $array2);
echo "array_replace: " . implode(', ', $replaced) . "\n\n"; // array_replace: 1, 2, c

// array_walk_recursive
$multiArray = [
    'a' => 1,
    'b' => ['c' => 2, 'd' => 3],
];
echo "Original array: " . json_encode($multiArray) . "\n"; // Original array: {"a":1,"b":{"c":2,"d":3}}
array_walk_recursive($multiArray, function(&$value, $key) { $value *= 2; });
echo "array_walk_recursive: " . json_encode($multiArray) . "\n\n"; // array_walk_recursive: {"a":2,"b":{"c":4,"d":6}}

// array_keys
$assocArray = ['a' => 1, 'b' => 2, 'c' => 3];
echo "Original array: " . json_encode($assocArray) . "\n"; // Original array: {"a":1,"b":2,"c":3}
$keys = array_keys($assocArray);
echo "array_keys: " . implode(', ', $keys) . "\n\n"; // array_keys: a, b, c

?>
