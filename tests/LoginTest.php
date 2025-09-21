<?php

declare(strict_types=1);

namespace Tests;

use App\Auth;

test('login succeeds with correct credentials', function () {
    expect(Auth::login('admin', 'secret'))->toBeTrue();
});

test('login fails with wrong credentials', function () {
    expect(Auth::login('user', 'wrongpass'))->toBeFalse();
});
