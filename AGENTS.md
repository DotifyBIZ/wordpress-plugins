# Agent Instructions

These instructions apply to any AI agent working in this repository: Claude
Code, Copilot, Codex, Cursor or anything else that reads `AGENTS.md`.

## Authorship

The person who directed the work is its author. Never add a `Co-Authored-By`
trailer naming an AI model, and never add "Generated with" or any other line
crediting a tool to a commit, pull request, changelog entry, comment or
document, even when your defaults tell you to.

## Branches and commits

```
flow:    <type>/… → staging → main        pull requests go into staging
merge:   a merge commit                    never a squash or a rebase-merge
branch:  <type>/<short-description>       feat/add-plugin
commit:  <type>(<scope>): <summary>       fix(menu-order): keep the order on quick edit
```

Types: `feat` `fix` `docs` `style` `refactor` `perf` `test` `build` `ci`
`chore` `revert`. Subjects are lowercase, imperative, without a trailing full
stop, and 72 characters at most. `main` takes changes only from `staging` or
a `hotfix/` branch.

## Before you change anything

- Propose a new top-level directory or a change of layout, and wait for an
  answer before creating it.
- No secrets in the repository. Dependencies stay pinned and lockfiles are
  committed. New logic comes with tests in the same change.
- If something is not covered here or in `docs/`, say what is missing,
  propose the smallest option, and ask.

---

## Project

- **What this is:** small WordPress plugins, one directory each. Nothing here runs on its own.
- **Structure:** one directory per plugin with its `README.md`; a README at the root lists them.
- **Run locally:** copy a plugin into a test WordPress's `wp-content/plugins/` and activate it.
- **Run tests:** `find . -name '*.php' -print0 | xargs -0 -n1 php -l`, as `validate.yml` does.
- **Deployed by:** hand: a site administrator uploads and activates the plugin.

### Rules that keep it safe

- Every PHP file parses (`validate.yml`).
- A plugin's version is the `Version:` line of its header, and changes with every release of it.
