<laravel-boost-guidelines>
=== foundation ===
# Context
Stack: php:8.4.15, laravel/fortify:v1, laravel/framework:v12, laravel/nightwatch:v1, laravel/prompts:v0, livewire/flux:v2, livewire/flux-pro:v2, livewire/livewire:v4, laravel/mcp:v0, laravel/pint:v1, laravel/sail:v1, laravel/telescope:v5, pestphp/pest:v4, phpunit/phpunit:v12, tailwindcss:v4.

# Rules
- **Conventions**: Follow existing structure, naming, and components. Descriptive names (`isRegistered`, not `check`). Reuse components.
- **Verification**: No verification scripts if tests cover functionality.
- **Structure**: No new base folders or dependency changes without approval.
- **Frontend**: If UI unchanged, ask user to run build/dev.
- **Replies**: Concise, focus on important details.
- **Docs**: Create only if requested.

=== boost ===
- **Tools**: `list-artisan-commands` for params. `get-absolute-url` for links. `tinker` for PHP/debug. `database-query` for read-only SQL. `browser-logs` for frontend.
- **Search Docs (Critical)**: Use `search-docs` BEFORE coding. It uses installed versions.
    - Queries: Topic-based, multiple queries allowed. Don't include package names.
    - Usage: `['rate limiting', 'routing']`.

=== php ===
- **Syntax**: Curly braces always. PHP 8 constructor promotion. No empty constructors.
- **Types**: Explicit return types & param hints.
- **Comments**: PHPDoc > comments. Add array shapes.
- **Enums**: TitleCase keys.

=== tests ===
- **Enforcement**: Test every change. Run min tests.
- **Tool**: `php artisan test`. Filter with `--filter`.

=== laravel/core ===
- **Artisan**: Use `make:` commands (migrations, controllers, models, classes). `--no-interaction`.
- **DB**: Eloquent > Raw. Eager load (prevent N+1). `Model::query()`.
- **API**: Eloquent Resources.
- **Validation**: FormRequests (rules + messages).
- **Queues**: `ShouldQueue`.
- **Auth**: Built-in gates/policies/Sanctum.
- **URLs**: Named routes `route()`.
- **Config**: `config('key')` ONLY. No `env()`.
- **Tests**: Factories (check states). `make:test` (feature default).

=== laravel/v12 ===
- **Structure**: `bootstrap/app.php` (middleware/routes). `bootstrap/providers.php`. No `Console/Kernel`. Commands auto-register in `app/Console/Commands`.
- **DB**: Modify cols must include all attributes. Native eager load limit (`$query->limit(5)`).
- **Models**: `casts()` method > `$casts` property.

=== fluxui-pro/core ===
- **Flux UI**: Use Flux components (`<flux:button>`). Fallback to Blade. Checks docs.
- **Components**: accordion, autocomplete, avatar, badge, brand, breadcrumbs, button, calendar, callout, card, chart, checkbox, command, composer, context, date-picker, dropdown, editor, field, file-upload, heading, icon, input, kanban, modal, navbar, otp-input, pagination, pillbox, popover, profile, radio, select, separator, skeleton, slider, switch, table, tabs, text, textarea, time-picker, toast, tooltip.

=== livewire/core ===
- **Dev**: Server-side state. Single root element. `wire:loading`, `wire:dirty`, `wire:key` in loops.
- **Hooks**: `mount()`, `updatedProperty()`.
- **Tests**: `Livewire::test(Comp::class)->assertSet('prop', val)->call('method')->assertSee(val)`.

=== pint/core ===
- **Format**: Run `vendor/bin/pint --dirty` before finishing.

=== pest/core ===
- **General**: Use Pest (`make:test --pest`). `tests/Feature` & `tests/Unit`.
- **Run**: Filter tests. `assertForbidden`, `assertNotFound` etc.
- **Mocking**: `Pest\Laravel\mock`. Valid dataset use.

=== pest/v4 ===
- **Browser**: `tests/Browser/`. `visit()`, `click()`, `fill()`, `assertSee()`.
- **Features**: `Event::fake()`, `assertAuthenticated()`, `RefreshDatabase`.
- **Smoke**: `visit(['/a', '/b'])->assertNoJavascriptErrors()`.

=== tailwindcss/core ===
- **Usage**: Tailwind classes. Extract components.
- **Spacing**: `gap-*` > margin.
- **Dark Mode**: `dark:` prefix.

=== tailwindcss/v4 ===
- **Config**: CSS-first `@theme`. `@import "tailwindcss"`.
- **Deprecated**: No `*-opacity`. Use `bg-black/50`. No `flex-shrink`. Use `shrink`.

=== laravel/fortify ===
- **Setup**: Headless auth. `config/fortify.php` features array.
- **Routes**: `list-routes --only_vendor --action=Fortify`.
- **Views**: Disable in config if custom. Custom logic in `FortifyServiceProvider`.
- **Features**: Registration, EmailVerification, 2FA, UpdateProfile, UpdatePassword, ResetPassword.
  </laravel-boost-guidelines>
