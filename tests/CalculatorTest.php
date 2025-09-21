<?php

namespace Tests;

use App\Calculator;

test('sum', function() {
    expect(Calculator::sum(4, 4))->toBe(8);
});
