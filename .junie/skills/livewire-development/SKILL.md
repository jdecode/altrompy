---
name: livewire-development
description: Develops reactive Livewire 4 components.
---

# Livewire 4
Reactive components, no manual JS.

## Documentation
Use `search-docs` (version 4).

## Usage
- **Create**: `php artisan make:livewire Name`.
- **State**: Lives on server.
- **UI**: Alpine.js for client-side interactions.
- **Attributes**: `#[Layout]`, `#[Title]`, `#[Validate]`, `#[Url]`, `#[Computed]`, `#[On]`.
- **Lifecycle**: `mount()`, `boot()`, `updating()`, `updated()`.
- **Forms**: Form objects recommended for complex forms.

## Best Practices
- Single root element.
- `wire:key` in loops.
- `wire:loading` for states.
