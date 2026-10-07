# TLD PHP Technical Test

A Symfony 7.4 skeleton for a two-part technical test:

- **[PART_A.md](PART_A.md)** — Project tracker CRUD, 1 hour, **AI allowed** (chat log required in your submission).
- **[PART_B.md](PART_B.md)** — GitHub commit activity endpoint, 1 hour, **no AI**.

Part B builds directly on Part A (it exposes commit activity for a project you created) and is done without AI — do Part A first, and make sure you understand the code it produced.

## Requirements

- PHP 8.4 with the `pdo_sqlite` extension (no database server to install — the app uses SQLite, and the dev database is committed with `Category` data already in it).
- Composer.

## Getting started

```bash
composer install
symfony server:start
# or: php -S 127.0.0.1:8000 -t public
```

Then open `http://localhost:8000/`.

No database command is needed to get started — `var/data_dev.db` is committed as-is. If you want to reset it: delete `var/data_dev.db`, then `php bin/console doctrine:schema:update --force` and `php bin/console doctrine:fixtures:load --no-interaction`.

## Running the tests

```bash
php bin/phpunit
```

## Submitting

- A git repository (zip with the `.git` folder, or a link) with your commits for both parts.
- For Part A: your AI chat log(s), as described in `PART_A.md`.
- If you didn't finish something, a short note on what's missing and what you would have done — that's worth more to us than silence.
