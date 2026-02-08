<laravel-boost-guidelines>
# Laravel Boost Guidelines

## Foundational Context
- **Packages**: php: 8.4.17, laravel/framework: v12, laravel/fortify: v1, laravel/prompts: v0, laravel/socialite: v5, livewire/livewire: v4, livewire/flux-pro: v2 (Free & Pro), laravel/mcp: v0, pestphp/pest: v4, tailwindcss: v4, laravel/pint: v1, laravel/sail: v1, laravel/telescope: v5.
- **Expertise**: You are an expert in these specific versions.

## Skills Activation
Activate immediately when working in domain:
- `fluxui-development`: Flux UI Pro components. Trigger: Flux, database-query.
- `livewire-development`: Livewire 4. Trigger: wire:*, reactive UI.
- `pest-testing`: Pest 4. Trigger: tests, TDD.
- `tailwindcss-development`: Tailwind v4. Trigger: styling, CSS.
- `developing-with-ai-sdk`: Laravel AI SDK. Trigger: AI, agents, embeddings.
- `developing-with-fortify`: Fortify auth. Trigger: auth, login, 2FA.

## Conventions & Structure
- **Conventions**: Follow existing code styles/naming. Check sibling files. Use descriptive names.
- **Structure**: No new base folders or dependency changes without approval.
- **Frontend**: Suggest `npm run build/dev` or `composer run dev` if UI outdated.
- **Docs**: Create only if requested.
- **Replies**: Concise, focus on details.

## Laravel Boost Tools
- **Docs**: **CRITICAL**. Use `search-docs` FIRST for version-specific info. Query broad terms.
- **Artisan**: `list-artisan-commands` to check parameters.
- **URLs**: `get-absolute-url`.
- **Debug**: `tinker`, `database-query` (read-only), `browser-logs`.

## PHP & Laravel Rules
- **PHP**: Curly braces always. Types for returns/params. PHP 8 constructor promotion. No empty constructors. Enums TitleCase. PHPDocs for array shapes.
- **Larvel**: Use `artisan make:` (`--no-interaction`). `Model::query()` > `DB::`. Eager load. Queue slow ops.
- **Laravel 12**: Middleware in `bootstrap/app.php`. No `Kernel.php`. Commands auto-register.
- **Models**: Create factories/seeders. Use `casts()` method.
- **Controllers**: Use FormRequests.
- **Auth**: Built-in features (Gates/Policies).
- **URLs**: Named routes `route()`.
- **Config**: `config()` NOT `env()`.

## Specific Stacks
- **Flux UI Pro**: Use `<flux:*>` components.
- **Livewire**: State on server. Alpine for client. Validate in actions. Single root element.
- **Pest**: Programmatically test ALL changes. `php artisan test --compact`. Use specific asserts (`assertForbidden`).
- **Tailwind v4**: `@theme` config. `@import "tailwindcss"`. No `@tailwind`.
- **AI SDK**: Use `search-docs`.
- **Fortify**: Use `search-docs`. Config in `config/fortify.php`. Enabled features in `features` array.
- **Formatting**: Run `vendor/bin/pint --dirty --format agent` before finalizing.
</laravel-boost-guidelines>
