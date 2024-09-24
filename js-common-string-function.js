// Most commonly used JavaScript String Methods

const stringMethods = {
    charAt: 'Returns the character at a specific index in the string.',
    charCodeAt: 'Returns the Unicode code of the character at a specific index in the string.',
    concat: 'Combines two or more strings into one new string.',
    includes: 'Checks if a string contains another string and returns `true` or `false`.',
    indexOf: 'Returns the index of the first occurrence of a specified value in the string.',
    lastIndexOf: 'Returns the index of the last occurrence of a specified value in the string.',
    match: 'Matches a string against a regular expression and returns the matches.',
    replace: 'Replaces a specified value or regular expression in the string with another value.',
    search: 'Searches the string for a match against a regular expression and returns the position of the first match.',
    slice: 'Extracts a part of the string and returns it as a new string without modifying the original string.',
    split: 'Splits the string into an array of substrings based on a specified separator.',
    substring: 'Returns a part of the string between two specified indices.',
    toLowerCase: 'Converts the entire string to lowercase letters.',
    toUpperCase: 'Converts the entire string to uppercase letters.',
    trim: 'Removes whitespace from both ends of the string.',
    startsWith: 'Checks if the string starts with a specified value and returns `true` or `false`.',
    endsWith: 'Checks if the string ends with a specified value and returns `true` or `false`.',
    padStart: 'Pads the beginning of the string with another string until it reaches a given length.',
    padEnd: 'Pads the end of the string with another string until it reaches a given length.',
    repeat: 'Repeats the string a specified number of times and returns the result as a new string.'
};
  
// Example usage of string methods
console.log("\nString Method Examples:");
const str = "Hello, World!";

console.log(str.charAt(7)); // Output: "W"

console.log(str.charCodeAt(7)); // Output: 87

console.log(str.concat(" How are you?")); // Output: "Hello, World! How are you?"

console.log(str.includes("World")); // Output: true

console.log(str.indexOf("o")); // Output: 4

console.log(str.lastIndexOf("o")); // Output: 8

console.log(str.match(/o/g)); // Output: ["o", "o"]

console.log(str.replace("World", "Universe")); // Output: "Hello, Universe!"

console.log(str.search("World")); // Output: 7

console.log(str.slice(7, 12)); // Output: "World"

console.log(str.split(", ")); // Output: ["Hello", "World!"]

console.log(str.substring(7, 12)); // Output: "World"

console.log(str.toLowerCase()); // Output: "hello, world!"

console.log(str.toUpperCase()); // Output: "HELLO, WORLD!"

console.log(str.trim()); // Output: "Hello, World!" (There is no extra whitespace to trim in this example)

console.log(str.startsWith("Hello")); // Output: true

console.log(str.endsWith("!")); // Output: true

console.log("123".padStart(5, "0")); // Output: "00123"

console.log("123".padEnd(5, "0")); // Output: "12300"

console.log("abc".repeat(3)); // Output: "abcabcabc"
  