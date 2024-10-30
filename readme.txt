=== Plugin Name ===
Contributors: Zaglov, imbaa
Tags: trade fair, widget
Requires at least: 5.0.0
Tested up to: 6.0.0
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This Plug-In displays responsive Messe Widgets from messeninfo.de on your WordPress site.

== Description ==

This Plugin provides a functionality to display current trade fairs from messeninfo.de, tradefairdates.com, foiresinfo.fr and feriasinfo.es.

Please not that this plugin is relying completelly on the services of messeninfo.de, tradefairdates.com, foiresinfo.fr and feriasinfo.es.
This plugin will pull image files and html from our servers and load it inside your page. No external JavaScript or CSS will beloaded though.
The plugin works completelly without javascript. You can find the CSS for the plugin within the /css folder where you can also find a custom.css file.

Please do not forget to make a backup of your custom css when updating!

Please note that the Plug-In needs file_get_contents() to be able to pull Content from external urls.

**How to use**

Install Plug-In and use Messeninfo.de Shortcode Generator to create the desired shortcode

- German: http://www.messeninfo.de/webmaster-tools.html
- English: http://www.tradefairdates.com/webmaster-tools.html
- French: http://www.foiresinfo.fr/webmaster-tools.html
- Spanish: http://www.feriasinfo.es/webmaster-tools.html

Example, Tradefairs in Berlin:
[tradefair_widget mo=59 style=tiles]

== Installation ==

Activate the plugin and you are ready to go. Use the shortcode generator on

- German: http://www.messeninfo.de/webmaster-tools.html
- English: http://www.tradefairdates.com/webmaster-tools.html
- French: http://www.foiresinfo.fr/webmaster-tools.html
- Spanish: http://www.feriasinfo.es/webmaster-tools.html