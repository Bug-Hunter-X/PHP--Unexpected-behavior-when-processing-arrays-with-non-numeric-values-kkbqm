```php
function processArray(array $arr): array {
  if (empty($arr)) {
    return [];
  }
  $result = [];
  foreach ($arr as $key => $value) {
    if (is_array($value)) {
      $result[$key] = processArray($value);
    } elseif (is_numeric($value)) {
      $result[$key] = $value + 1;
    } else {
      // Handle non-numeric values appropriately
      $result[$key] = "Non-numeric value"; // Or any other suitable action
    }
  }
  return $result;
}

$myArray = [1, 2, [3, 4, [5,6]], 7, 8, "string"];
$processedArray = processArray($myArray);
print_r($processedArray);
```