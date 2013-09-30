=== Preload Current Images ===
Contributors: MMDeveloper
Tags: image, images, preload, current, slide, slides, jquery
Requires at least: 3.0.1
Tested up to: 3.5.1
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Preload images on the current page to make them load faster.

== Description ==

Allows you to auto preload all images on the current page. This also include background images. This is perfect for slides where not all images are visible at once on the page. Typically not all images will load at the same time making it appear the slide is not working.

Please be aware that the page will initially load a little slower as it needs to load the images before running your js code. But having said that, if your code needs these images to load before hand, it will make it easier for your users to use your plugins or code.

So in summary, it makes your slides run smoother, forces all images to be loaded before use and makes the images load faster.

With this plugin you can use the preload_progress_bar shortcode:

[preload_progress_bar complete="jQuery('#content').show();progressbar.hide();progressbar.remove();" initial_text='Loading...'][/preload_progress_bar]

== Installation ==

1) Install WordPress 3.5.1 or higher

2) Download the following files:
http://downloads.wordpress.org/plugin/preload-current-images-1.2.zip

3) Login to WordPress admin, click on Plugins / Add New / Upload, then upload the zip file you just downloaded.

4) Activate the plugin.


== Upgrade Notice ==

= 1.2 =

* Added ability to add initial text to shortcode.

= 1.1 =

* Added ajax loader image to plugin image directory.

= 1.0 =

* First Draft

== Changelog ==

= 1.2 =

* Added ability to add initial text to shortcode.

= 1.1 =

* Added ajax loader image to plugin image directory.

= 1.0 =

* First Draft