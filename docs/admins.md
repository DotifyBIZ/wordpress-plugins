# Install and update (for administrators)

Plugins are deployed by hand. There are no settings and no environment variables.

## Install

1. Copy the plugin folder, for example `menu-order/`, to `wp-content/plugins/` on the site.
2. In the WordPress admin, open **Plugins** and activate *Enable Menu Order for Posts*.

## Update

Replace the plugin folder with the new one. The version is the `Version:` line in the
plugin header of `menu-order/menu-order.php`.

## Remove

Deactivate the plugin under **Plugins**. The plugin adds page attributes support to posts at
start-up (`add_post_type_support( 'post', 'page-attributes' )`) and stores nothing itself.
Order values already entered stay with the posts.
