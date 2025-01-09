```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } else {
      //Process the value, potential issue here
      if (is_numeric($value) && $value > 100) {
          $data[$key] = $value / 2; 
      } else if (is_string($value) && strlen($value) > 10) {
          $data[$key] = substr($value, 0, 10);
      } 
    }
  }
  return $data;
}

$data = ['a' => 10, 'b' => [1000, 'verylongstring'], 'c' => 'short'];
$processedData = processData($data);
print_r($processedData);
```