# Ownership

**Owner:** the team named in `catalog-info.yaml` (TR-ITOperations).

## Accountable for

The plugin code in this repository and its releases. Each site's administrator installs and
activates the plugins on that site.

## Dependencies

- Runs inside WordPress. No other services, databases or APIs.
- Nothing else in the catalog depends on it.

## Data

The plugins hold no data of their own. `menu-order` uses WordPress's existing post attributes.

## Recurring duties

None in the repository: no secrets, certificates or licences. Dependabot is configured in
`.github/dependabot.yml`.

## Lifecycle

Production. How a plugin is retired is not decided yet.
