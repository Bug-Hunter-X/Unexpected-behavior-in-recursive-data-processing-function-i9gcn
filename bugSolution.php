```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } else if (is_numeric($value)) {
      if ($value > 100) {
        $data[$key] = $value / 2;
      } else if ($value === 0) {
          //Handle division by zero
          $data[$key] = 0; //Or throw an exception
      }
    } else if (is_string($value)) {
      if (strlen($value) > 10) {
        $data[$key] = substr($value, 0, 10);
      }
    } else {
      // Handle unexpected data types
      error_log("Unexpected data type encountered: " . gettype($value));
    }
  }
  return $data;
}

$data = ['a' => 10, 'b' => [1000, 'verylongstring'], 'c' => 'short', 'd' => 0, 'e' => true];
$processedData = processData($data);
print_r($processedData);
```