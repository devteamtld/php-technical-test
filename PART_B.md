# Part B — GitHub commits (1 hour, AI allowed)

## Rules

- **1 hour.**
- **Use any AI assistant you're comfortable with** (Copilot, ChatGPT, Claude, Cursor, whatever's part of your normal workflow).
- **Export or copy your AI conversation(s)** and include them in your submission (e.g. as `AI_CHAT_LOG.md`, or an exported transcript file from your tool). We're interested in how you drove the tool, not just whether the endpoint works.
- If you run out of time, stop and write a short note in your submission about what's missing and how you would have finished it.

## What to build

This part builds on Part A: every `Project` has a `repository` field (`owner/repo`, e.g. `facebook/react`). Show how active development is on a project by displaying its commit activity.

Using the [GitHub REST API — commits](https://docs.github.com/en/rest/commits/commits), fetch commits made on the main/master branch of that repository between two dates, and display them grouped by calendar week.

- Route: `GET /projects/{id}/commits`, where `{id}` is an existing `Project`. Read the repository to query from that project's `repository` field.
- Two optional query parameters, `since` and `until`. Default to 4 weeks ago and today when not given.
- Example: `http://localhost:8000/projects/1/commits?since=2024-01-01&until=2024-02-01`
- No GitHub authentication required for public repos (rate limits may apply).
- Add a link to this page from the project's show page (`/projects/{id}`).

## What the page should show

Render an HTML page (extend `base.html.twig`, reuse the existing Bootstrap layout) with, for each week in range: the week number, the commit count, and the list of commits (message, author, date — link to the commit on GitHub if you like). A raw JSON response at the same or another route is a nice-to-have, not required.

## Instructions

- Use Symfony HttpClient (already installed) or any HTTP library you're comfortable with.
- **Decouple the GitHub-fetching/grouping logic from the controller** — put it in a service class that only deals with `owner`, `repo`, `since`, `until`, so it's testable independently of both the HTTP layer and Doctrine. The controller's job is just: load the `Project`, read its `repository`, split it into owner/repo, call the service.
- **If your Part A `Project`/`repository` field isn't working yet**, don't let that block this part: create a project row directly (e.g. `php bin/console doctrine:query:sql "INSERT INTO project (...) VALUES (...)"`, or a quick fixture) and carry on. Note in your submission that you did this.

## What we're looking at

This part is as much about your process as the result: how you prompted, what you checked or rejected from the AI's output, and whether you can explain and defend the code that ended up in the submission.

## Submitting

Same repo as Part A, plus your chat log file(s) for this part.
