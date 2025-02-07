```php
function calculateSum($a, $b) {
  if (!is_numeric($a) || !is_numeric($b)) {
    return "Invalid input: Both parameters must be numeric.";
  }
  return $a + $b;
}

$result = calculateSum(10, '20');
var_dump($result); // Output: int(30)

$result = calculateSum(10, 'abc');
var_dump($result); // Output: string(31) "Invalid input: Both parameters must be numeric."
```