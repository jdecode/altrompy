---
name: pest-testing
description: Tests applications using Pest 4 PHP framework.
---

# Pest 4
Testing framework.

## Documentation
Use `search-docs`.

## Usage
- **Create**: `php artisan make:test --pest Name`.
- **Locations**: `tests/Feature`, `tests/Unit`, `tests/Browser`.
- **Run**: `php artisan test --compact`. Filter: `--filter=testName`.
- **Browser**: Support for browser usage, snapshots, etc.

## Syntax
`it('does something', function () { expect(true)->toBeTrue(); });`
