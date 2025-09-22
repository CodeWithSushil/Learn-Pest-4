##  Pest 4

learn **Pest PHP** testing freamework letest version (v4.0.0).

[![Testing Pest-PHP](https://github.com/CodeWithSushil/Learn-Pest-4/actions/workflows/tests.yml/badge.svg?branch=master)](https://github.com/CodeWithSushil/Learn-Pest-4/actions/workflows/tests.yml)

---

###  Topics
- [x] Unit Testing
- [ ] Arch Testing
- [ ] Brower Testing (new v4.0.0)

### Examples:
> Unit Testing
> ```php
> <?php
>
> namespace Tests;
>
> use App\Calculator;
>
> test('sum', function() {
>    expect(Calculator::sum(4, 4))-> toBe(8);
> });
>
> ```
