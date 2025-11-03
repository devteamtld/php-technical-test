# TLD Interview Test
## Introduction

You have 2 hours to create a small php Symfony or Laravel app parsing data from the GitHub API.
You're free to use any solution to run & serve the app (the Symfony/Laravel PHP web server, Docker + nginx/apache, ...).

### Example public repository

You can test your implementation using a valid public GitHub repository such as:
```bash
facebook/react
```

Other examples:
```bash
symfony/symfony
laravel/laravel
```


You should be able to fetch commits from these without authentication (rate limits may apply).

### Example request (curl)

After running your application locally, you should be able to perform a request such as:
```bash
curl "http://localhost:8000/facebook/react?since=2024-01-01&until=2024-02-01"
```

Or, if you expose the server on another port:
```bash
curl "http://localhost:8080/facebook/react?since=2024-01-01&until=2024-02-01"
```

The response should be JSON grouped by calendar week.

## 🚀 Goals

Create a new Symfony or Laravel application.

Using this documentation: https://docs.github.com/en/rest/commits/commits
, retrieve commits made on the main/master branch between two dates from the GitHub API on a given repository.

Create a controller action matching this pattern /{user}/{repository} which processes the data from the GitHub API to count and list commits for each calendar week.

Two optional query parameters should be accepted and processed by this route: since and until. Their default values should be 4 weeks ago and today.

The response must be valid JSON. Here is an example structure:
```jsonc
[
{
    "week": 24,
    "count": 10,
    "commits": [
    // add here the 10 commit objects retrieved from GitHub for week 24
    ]
},
{
    "week": 25,
    "count": 9,
    "commits": [
    // add here the 9 commit objects retrieved from GitHub
    ]
}
]
```

Write functional and/or unit tests.

## Instructions

You can use Guzzle, Symfony HttpClient, Laravel HTTP Client, or any third-party library you might know to perform HTTP requests to GitHub.

Build your code so that it is easily testable (for example by decoupling the logical part querying GitHub from the controller code).

Your code must be versioned using git: provide a zip archive containing the .git folder or give the URL of a GitHub repository.

You're free to use any Symfony version or any recent Laravel version.

If you don't have enough time to do every required task, document what you would have done to complete the missing parts.

If you want, I can add optional stretch goals (rate-limit handling, pagination, grouping by day, caching, etc.) in an extra section as well.git
git branch -M main
git push -uf origin main
```

## Integrate with your tools

- [ ] [Set up project integrations](http://gitlab.alvest.fr/anthony.fachaux/php-technical-test/-/settings/integrations)

## Collaborate with your team

- [ ] [Invite team members and collaborators](https://docs.gitlab.com/ee/user/project/members/)
- [ ] [Create a new merge request](https://docs.gitlab.com/ee/user/project/merge_requests/creating_merge_requests.html)
- [ ] [Automatically close issues from merge requests](https://docs.gitlab.com/ee/user/project/issues/managing_issues.html#closing-issues-automatically)
- [ ] [Enable merge request approvals](https://docs.gitlab.com/ee/user/project/merge_requests/approvals/)
- [ ] [Set auto-merge](https://docs.gitlab.com/user/project/merge_requests/auto_merge/)

## Test and Deploy

Use the built-in continuous integration in GitLab.

- [ ] [Get started with GitLab CI/CD](https://docs.gitlab.com/ee/ci/quick_start/)
- [ ] [Analyze your code for known vulnerabilities with Static Application Security Testing (SAST)](https://docs.gitlab.com/ee/user/application_security/sast/)
- [ ] [Deploy to Kubernetes, Amazon EC2, or Amazon ECS using Auto Deploy](https://docs.gitlab.com/ee/topics/autodevops/requirements.html)
- [ ] [Use pull-based deployments for improved Kubernetes management](https://docs.gitlab.com/ee/user/clusters/agent/)
- [ ] [Set up protected environments](https://docs.gitlab.com/ee/ci/environments/protected_environments.html)

***

# Editing this README

When you're ready to make this README your own, just edit this file and use the handy template below (or feel free to structure it however you want - this is just a starting point!). Thanks to [makeareadme.com](https://www.makeareadme.com/) for this template.

## Suggestions for a good README

Every project is different, so consider which of these sections apply to yours. The sections used in the template are suggestions for most open source projects. Also keep in mind that while a README can be too long and detailed, too long is better than too short. If you think your README is too long, consider utilizing another form of documentation rather than cutting out information.

## Name
Choose a self-explaining name for your project.

## Description
Let people know what your project can do specifically. Provide context and add a link to any reference visitors might be unfamiliar with. A list of Features or a Background subsection can also be added here. If there are alternatives to your project, this is a good place to list differentiating factors.

## Badges
On some READMEs, you may see small images that convey metadata, such as whether or not all the tests are passing for the project. You can use Shields to add some to your README. Many services also have instructions for adding a badge.

## Visuals
Depending on what you are making, it can be a good idea to include screenshots or even a video (you'll frequently see GIFs rather than actual videos). Tools like ttygif can help, but check out Asciinema for a more sophisticated method.

## Installation
Within a particular ecosystem, there may be a common way of installing things, such as using Yarn, NuGet, or Homebrew. However, consider the possibility that whoever is reading your README is a novice and would like more guidance. Listing specific steps helps remove ambiguity and gets people to using your project as quickly as possible. If it only runs in a specific context like a particular programming language version or operating system or has dependencies that have to be installed manually, also add a Requirements subsection.

## Usage
Use examples liberally, and show the expected output if you can. It's helpful to have inline the smallest example of usage that you can demonstrate, while providing links to more sophisticated examples if they are too long to reasonably include in the README.

## Support
Tell people where they can go to for help. It can be any combination of an issue tracker, a chat room, an email address, etc.

## Roadmap
If you have ideas for releases in the future, it is a good idea to list them in the README.

## Contributing
State if you are open to contributions and what your requirements are for accepting them.

For people who want to make changes to your project, it's helpful to have some documentation on how to get started. Perhaps there is a script that they should run or some environment variables that they need to set. Make these steps explicit. These instructions could also be useful to your future self.

You can also document commands to lint the code or run tests. These steps help to ensure high code quality and reduce the likelihood that the changes inadvertently break something. Having instructions for running tests is especially helpful if it requires external setup, such as starting a Selenium server for testing in a browser.

## Authors and acknowledgment
Show your appreciation to those who have contributed to the project.

## License
For open source projects, say how it is licensed.

## Project status
If you have run out of energy or time for your project, put a note at the top of the README saying that development has slowed down or stopped completely. Someone may choose to fork your project or volunteer to step in as a maintainer or owner, allowing your project to keep going. You can also make an explicit request for maintainers.
