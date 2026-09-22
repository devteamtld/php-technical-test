# Part A — Project tracker (1 hour, no AI)

## Rules

- **1 hour.**
- **No AI assistant** (no Copilot, ChatGPT, Claude, etc.) — this part is meant to show your own Symfony/PHP fluency.
- If you run out of time, stop and write a short note in your submission about what's missing and how you would have finished it.

## What's already there

The project is a standard Symfony 7.4 skeleton (`webapp` recipe: Doctrine, Twig, Forms, Validator) configured with SQLite so there's no database server to install. The database itself (`var/data_dev.db`) is committed with a `Category` table already created and seeded (`Backend`, `Frontend`, `Infrastructure`, `Documentation`) — `composer install` is enough to get going, no database command needed for what's already there. A `base.html.twig` layout (Bootstrap 5.3 via CDN) is ready to extend — don't rebuild styling from scratch, just extend it.

## What to build

A small tracker for software projects your team owns, under `/projects`:

1. A `Project` entity:
   - `name` (string, required)
   - `description` (text, optional)
   - `status` (one of `active`, `maintenance`, `archived`)
   - `category` (a `Category`, required — reuse the existing entity, e.g. `Backend`, `Frontend`)
   - `repository` (string, required — the project's GitHub repo, in `owner/repo` format, e.g. `facebook/react`). It's not used anywhere in this part; it's there for Part B.
2. Run `php bin/console doctrine:schema:update --force` to create the `project` table from your entity — the `category` table is already there, you're adding your own on top of it.
3. A `ProjectType` form for creating/editing a project.
4. A `ProjectController` with the standard CRUD routes:
   - `GET /projects` — list
   - `GET /projects/{id}` — show
   - `GET|POST /projects/new` — create
   - `GET|POST /projects/{id}/edit` — edit
   - `POST /projects/{id}/delete` — delete (with CSRF protection)
5. Twig templates for each of the above, extending `base.html.twig`.
6. **The list page shows only `active` projects by default**, with a way to also see everything, including `maintenance`/`archived` (a query parameter or a toggle — your call on the UX, just make the intent obvious).
7. At least one automated test (functional or unit — your choice) covering some of the above.

## What we're looking at

Correct use of Doctrine (entity, relation), Symfony forms and validation, clean and thin controllers, template reuse, and whether the code reads like something we'd be comfortable merging.

## Submitting

Commit as you go rather than as one big commit at the end — we're also looking at how you work, not just the final diff.
