// Most commonly used JavaScript Array Methods
   
  const arrayMethods = {
    push: 'Adds one or more elements to the end of the array and returns the new length of the array.',
    pop: 'Removes the last element from the array and returns it.',
    shift: 'Removes the first element from the array and returns it, shifting all remaining elements down.',
    unshift: 'Adds one or more elements to the beginning of the array and returns the new length.',
    slice: 'Returns a shallow copy of a portion of the array without modifying the original array.',
    splice: 'Adds or removes elements in the array at a specified index, modifying the original array.',
    concat: 'Combines two or more arrays into one new array without changing the original arrays.',
    forEach: 'Calls a function once for each element in the array, without returning a new array.',
    map: 'Creates a new array by calling a function on every element of the original array.',
    filter: 'Creates a new array with elements that pass a test provided by a function.',
    reduce: 'Reduces the array to a single value by executing a function on each element (from left to right).',
    find: 'Returns the first element that matches a condition specified in a function.',
    findIndex: 'Returns the index of the first element that matches a condition specified in a function.',
    includes: 'Checks if a specific value is present in the array and returns `true` or `false`.',
    indexOf: 'Returns the first index at which a specific element can be found in the array.',
    join: 'Joins all elements of the array into a single string with a specified separator.',
    sort: 'Sorts the elements of the array in place based on a compare function or default sorting.',
    some: 'Checks if at least one element in the array passes a test provided by a function.',
    every: 'Checks if all elements in the array pass a test provided by a function.',
    flat: 'Flattens nested arrays into a single array up to a specified depth.'
  };

  
  // Example usage of array methods
  console.log("Array Method Examples:");
  const numbers = [1, 2, 3, 4, 5];
  
  console.log(numbers.push(6)); // Output: 6 (New length)
  console.log(numbers); // Output: [1, 2, 3, 4, 5, 6]
  
  console.log(numbers.pop()); // Output: 6 (Last element)
  console.log(numbers); // Output: [1, 2, 3, 4, 5]
  
  console.log(numbers.shift()); // Output: 1 (First element)
  console.log(numbers); // Output: [2, 3, 4, 5]
  
  console.log(numbers.unshift(1)); // Output: 5 (New length)
  console.log(numbers); // Output: [1, 2, 3, 4, 5]
  
  console.log(numbers.slice(1, 3)); // Output: [2, 3]
  
  console.log(numbers.splice(2, 1, 10)); // Output: [3] (Removed element)
  console.log(numbers); // Output: [1, 2, 10, 4, 5]
  
  const moreNumbers = [6, 7, 8];
  console.log(numbers.concat(moreNumbers)); // Output: [1, 2, 10, 4, 5, 6, 7, 8]
  
  numbers.forEach(n => console.log(n * 2)); // Output: 2 4 20 8 10
  
  console.log(numbers.map(n => n * 2)); // Output: [2, 4, 20, 8, 10]
  
  console.log(numbers.filter(n => n % 2 === 0)); // Output: [2, 10, 4]
  
  console.log(numbers.reduce((acc, curr) => acc + curr, 0)); // Output: 22
  
  console.log(numbers.find(n => n > 3)); // Output: 10
  
  console.log(numbers.findIndex(n => n > 3)); // Output: 2
  
  console.log(numbers.includes(10)); // Output: true
  
  console.log(numbers.indexOf(4)); // Output: 3
  
  console.log(numbers.join(", ")); // Output: "1, 2, 10, 4, 5"
  
  console.log(numbers.sort((a, b) => b - a)); // Output: [10, 5, 4, 2, 1]
  
  console.log(numbers.some(n => n > 4)); // Output: true
  
  console.log(numbers.every(n => n > 0)); // Output: true
  
  const nestedArray = [1, [2, [3, 4]], 5];
  console.log(nestedArray.flat(2)); // Output: [1, 2, 3, 4, 5]
  