ltfu.pw
=======

The official [lethemfind.us](http://lethemfind.us/community/) URL Shortener

License
-------
Original by briancray [briancray/PHP-URL-Shortener](https://github.com/briancray/PHP-URL-Shortener), tweaked by Miku and 1nsignia.

Licensed under [GNU GPL 2.0](http://www.gnu.org/licenses/gpl-2.0.html)

Benefits
--------
* Can shorten over 42 billion unique URLs in 6 or less characters (it can do more than 12,000,000 in only 4!)
* Fast: uses very little server resources
* Can be used as an API too
* Options:
    * Turn clickthru tracking on and off
    * Limit usage to 1 IP address for personal use and to prevent spamming from others
    * Check if the URL is real (doesn’t respond with a 404) before shortening
    * Use a cache to minimize database use
    * Change characters for shortlinks
* Only uses alphanumeric characters by default, so all browsers can interpret the URL
* Secure: several data filters in place to prevent SQL injection hacks
* Uses 301 redirects for SEO and analytics yumminess

Installation
------------
* Copy or checkout the files to / on your server
* Update the database info in config.php
* Run the SQL included in shortenedurls.sql
* If you want to use the caching option, create a directory named cache with permissions 777
