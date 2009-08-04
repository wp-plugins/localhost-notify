=== Localhost Notify ===

Contributors: netweblogic
Tags: Tags: localhost, developers, local
Requires at least: 2.7
Tested up to: 2.8.2
Stable tag: 1.0

Developer plugin for those working off local server wordpress copies. Adds "local |" to your title if wordpress is running off a local server.

== Description ==

This plugin is made for developers who work on local server copies of live wordpress installations, and want to know for sure if they're working on their local copy, not the live one!

Working on a local copy of wordpress which runs of a local server is quite convenient. Major advantages include faster loading times and the ability to quickly and easily make changes mitigating the risk of bringing down a live site.

If you redirect domains locally via your hosts file, a potential problem arises when switching back and forth between the local and live installation, because you may not be able to tell which website you're viewing. This plugin solves that by adding "local | " to page titles if wordpress is running off a local server. No more mixups!

Plugin is compatible with Wordpress, Wordpress MU (WPMU) , and BuddyPress.

If you find this plugin useful and would like to donate something, all we ask is you please add a link on your site to the plugin page on our blog or digg our plugin page [http://netweblogic.com/wordpress/plugins/localhost-notify/](http://netweblogic.com/wordpress/plugins/localhost-notify/) thanks!

''Points To Consider''

Some themes may not change if the title tag doesn't use the wp_title or bloginfo functions.

The plugin assumes your local server IP address is 127.0.0.1 . If different you can change the value in the plugin file.

== Installation ==

1. Upload this plugin to the `/wp-content/plugins/` (or `/wp-content/mu-plugins/` for WPMU) directory and unzip it, or simply upload the zip file within your wordpress installation.

2. Activate the plugin through the 'Plugins' menu in WordPress (If not in mu-plugins folder)

== Frequently Asked Questions ==

None yet!