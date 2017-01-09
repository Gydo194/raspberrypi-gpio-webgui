# raspberrypi-gpio-webgui
Web GUI for controlling RPI GPIO pins.

This is a web GUI for using the Raspberry Pi's GPIO pins.
It depends on apache2 and PHP.

Currently there's only support for digital OUT mode, but I'll try to add support for multiple modes ASAP.

# New in version 3.0:
rewrite to use CSV database for pin status instead of constantly reloading iframes.
CPU usage is drastically reduced both client- and server-side.

# Installing:

Make sure you've got apache2 and PHP installed first.
On most Raspberry Pi distros they're installed by default.

Copy the monitor directory to your web server's root.

Default on debian (and so raspbian, kali etc.) is /var/www/html.




# See the magic

For a preview, go to https://gydo194.github.io/monitor

For more information, see the project page: https://gydo194.github.io/raspigpiogui

