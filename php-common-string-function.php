<?php

$commonStringFunctions = [
    'strlen' => 'Get string length',
    'strpos' => 'Find the position of the first occurrence of a substring in a string',
    'strrpos' => 'Find the position of the last occurrence of a substring in a string',
    'substr' => 'Return part of a string',
    'str_replace' => 'Replace all occurrences of the search string with the replacement string',
    'strtolower' => 'Make a string lowercase',
    'strtoupper' => 'Make a string uppercase',
    'ucfirst' => 'Make a string\'s first character uppercase',
    'ucwords' => 'Uppercase the first character of each word in a string',
    'trim' => 'Strip whitespace (or other characters) from the beginning and end of a string',
    'ltrim' => 'Strip whitespace (or other characters) from the beginning of a string',
    'rtrim' => 'Strip whitespace (or other characters) from the end of a string',
    'explode' => 'Split a string by a string',
    'implode' => 'Join array elements with a string',
    'str_split' => 'Convert a string to an array',
    'strrev' => 'Reverse a string',
    'str_repeat' => 'Repeat a string',
    'str_pad' => 'Pad a string to a certain length with another string',
    'strcmp' => 'Binary safe string comparison',
    'strcasecmp' => 'Binary safe case-insensitive string comparison',
    'substr_count' => 'Count the number of substring occurrences',
    'str_contains' => 'Determine if a string contains a given substring',
    'str_starts_with' => 'Check if a string starts with a given substring',
    'str_ends_with' => 'Check if a string ends with a given substring',
    'htmlspecialchars' => 'Convert special characters to HTML entities',
    'strip_tags' => 'Strip HTML and PHP tags from a string',
];

// Examples for each function
echo "Examples for each function:\n\n";

// strlen
$str = "Hello, World!";
echo "Original string: $str\n";
echo "strlen: " . strlen($str) . "\n\n";

// strpos
echo "strpos: " . strpos($str, "World") . "\n\n";

// strrpos
echo "strrpos: " . strrpos($str, "o") . "\n\n";

// substr
echo "substr: " . substr($str, 7, 5) . "\n\n";

// str_replace
echo "str_replace: " . str_replace("World", "PHP", $str) . "\n\n";

// strtolower
echo "strtolower: " . strtolower($str) . "\n\n";

// strtoupper
echo "strtoupper: " . strtoupper($str) . "\n\n";

// ucfirst
$str2 = "hello, world!";
echo "Original string: $str2\n";
echo "ucfirst: " . ucfirst($str2) . "\n\n";

// ucwords
echo "ucwords: " . ucwords($str2) . "\n\n";

// trim
$str3 = "  Hello, World!  ";
echo "Original string: '$str3'\n";
echo "trim: '" . trim($str3) . "'\n\n";

// ltrim
echo "ltrim: '" . ltrim($str3) . "'\n\n";

// rtrim
echo "rtrim: '" . rtrim($str3) . "'\n\n";

// explode
$str4 = "apple,banana,cherry";
echo "Original string: $str4\n";
$fruits = explode(",", $str4);
echo "explode: " . print_r($fruits, true) . "\n\n";

// implode
echo "implode: " . implode(" - ", $fruits) . "\n\n";

// str_split
$str5 = "Hello";
echo "Original string: $str5\n";
$chars = str_split($str5);
echo "str_split: " . print_r($chars, true) . "\n\n";

// strrev
echo "strrev: " . strrev($str5) . "\n\n";

// str_repeat
echo "str_repeat: " . str_repeat("Hip ", 3) . "Hooray!\n\n";

// str_pad
$str6 = "Hello";
echo "Original string: $str6\n";
echo "str_pad: '" . str_pad($str6, 10, "-", STR_PAD_BOTH) . "'\n\n";

// strcmp
$str7 = "Hello";
$str8 = "hello";
echo "strcmp: " . strcmp($str7, $str8) . "\n\n";

// strcasecmp
echo "strcasecmp: " . strcasecmp($str7, $str8) . "\n\n";

// substr_count
$str9 = "The quick brown fox jumps over the lazy dog";
echo "Original string: $str9\n";
echo "substr_count: " . substr_count($str9, "the") . "\n\n";

// str_contains (PHP 8.0+)
echo "str_contains: " . (str_contains($str9, "fox") ? "true" : "false") . "\n\n";

// str_starts_with (PHP 8.0+)
echo "str_starts_with: " . (str_starts_with($str9, "The") ? "true" : "false") . "\n\n";

// str_ends_with (PHP 8.0+)
echo "str_ends_with: " . (str_ends_with($str9, "dog") ? "true" : "false") . "\n\n";

// htmlspecialchars
$str10 = "<p>This is a paragraph & it contains special characters.</p>";
echo "Original string: $str10\n";
echo "htmlspecialchars: " . htmlspecialchars($str10) . "\n\n";

// strip_tags
echo "strip_tags: " . strip_tags($str10) . "\n\n";

?>


This code creates an array of common PHP string functions with their descriptions, similar to the array functions example. It then provides examples for each function, demonstrating how they work with various input strings.

The examples cover a wide range of string manipulation tasks, including:

1. Getting string length
2. Finding substrings
3. Extracting parts of strings
4. Replacing substrings
5. Changing case (lowercase, uppercase, capitalization)
6. Trimming whitespace
7. Splitting and joining strings
8. Reversing and repeating strings
9. Padding strings
10. Comparing strings
11. Counting substrings
12. Checking string contents
13. Handling HTML special characters and tags

These examples should provide a comprehensive overview of the most commonly used PHP string functions and how to use them effectively.