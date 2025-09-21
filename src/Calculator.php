<?php

declare(strict_types=1);

namespace App;

final class Calculator {
  
  public static function sum(int $a, int $b): int
  {
      return $a + $b;
  }
}
