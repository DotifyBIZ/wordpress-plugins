# Development

- Each plugin is one folder with a PHP file and a `README.md`.
- Run locally: copy the plugin into a test WordPress's `wp-content/plugins/` and activate it.
- Test: every PHP file must parse. Run `find . -name '*.php' -print0 | xargs -0 -n1 php -l`,
  the same check as the `validate.yml` workflow.
- Release: raise the `Version:` line in the plugin header with every change to that plugin.
  Work flows from a feature branch to `staging` to `main`, merged with merge commits.
