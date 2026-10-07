# Part B — GitHub commits (1 hour, no AI)

## Rules

- **1 hour.**
- **No AI assistant** (no Copilot, ChatGPT, Claude, etc.) — this part is meant to show your own backend reasoning in PHP/Symfony. Official documentation (Symfony, PHP, GitHub API) is fine.
- **Briefly comment non-obvious decisions in your code** (why, not what) — e.g. how you handle week boundaries, pagination or API errors.
- If you run out of time, stop and write a short note in your submission about what's missing and how you would have finished it.

## What to build

This part builds on your Part A code: every `Project` has a `repository` field (`owner/repo`, e.g. `facebook/react`). Expose how active development is on a project through its commit activity.

Using the [GitHub REST API — commits](https://docs.github.com/en/rest/commits/commits), fetch commits made on the default branch of that repository between two dates, and return them grouped by calendar week.

- Route: `GET /projects/{id}/commits`, where `{id}` is an existing `Project`. Read the repository to query from that project's `repository` field.
- Two optional query parameters, `since` and `until` (`YYYY-MM-DD`). Default to 4 weeks ago and today when not given. Invalid values should produce a `400`, not a stack trace.
- Example: `http://localhost:8000/projects/1/commits?since=2024-01-01&until=2024-02-01`
- No GitHub authentication required for public repos (rate limits may apply).
- Add a link to this endpoint from the project's show page (`/projects/{id}`).

## What the response should contain

A **JSON** response with, for each week in range: the ISO week (year + week number), the commit count, and the list of commits (sha, message, author, date, URL on GitHub). Weeks with no commits should still appear with a count of `0`.

An HTML page rendering the same data (extending `base.html.twig`) is a nice-to-have, not required — only do it if you have time left.

## Instructions

- Use Symfony HttpClient (already installed).
- **Decouple the GitHub-fetching/grouping logic from the controller** — put it in a service that only deals with `owner`, `repo`, `since`, `until`, so it's testable independently of both the HTTP layer and Doctrine. The controller's job is just: load the `Project`, read its `repository`, split it into owner/repo, call the service, return the response.
- GitHub paginates results (max 100 per page). Handle it, or explain in a comment what you'd do.
- Handle GitHub errors (unknown repository, rate limit) with a sensible response rather than a 500.
- **Write at least one unit test for the service using `MockHttpClient`** — no real network calls in tests.
- **If your Part A `Project`/`repository` field isn't working**, don't let that block this part: create a project row directly (e.g. `php bin/console doctrine:query:sql "INSERT INTO project (...) VALUES (...)"`, or a quick fixture) and carry on. Note in your submission that you did this.

## What we're looking at

How you structure the service (responsibilities, value objects vs arrays, dependency injection), correctness of the date/week logic, error handling, test quality, and whether you understood the Part A code you're building on. Be ready to walk us through your choices.

## Submitting

Same repo as Part A. Commit as you go.
