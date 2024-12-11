```php
function processArray(array $arr): array {
  // Check if the array is empty
  if (empty($arr)) {
    return [];
  }

  // Initialize an empty array to store results
  $result = [];

  // Iterate over the array
  foreach ($arr as $key => $value) {
    // Check if the value is an array
    if (is_array($value)) {
      // Recursively process the sub-array
      $result[$key] = processArray($value);
    } else {
      // Process the value (example: add 1)
      $result[$key] = $value + 1;
    }
  }

  // Return the result
  return $result;
}

$myArray = [1, 2, [3, 4, [5,6]], 7, 8];
$processedArray = processArray($myArray);
print_r($processedArray); //This will give an error if a string or other non-numeric value is present.
```