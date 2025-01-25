function foo(a, b) {
  if ($a === 0 || $b === 0) {
    throw new 
    DivisionByZeroError("Division by zero error.");
  }
  return $a / $b;
}