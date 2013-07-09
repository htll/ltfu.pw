ltfu.pw
=======

The official [lethemfind.us](http://lethemfind.us/community/) URL Shortener

license
-------
Original by briancray [briancray/PHP-URL-Shortener](https://github.com/briancray/PHP-URL-Shortener), tweaked by Miku and 1nsignia
Licensed under [GNU GPL 2.0](http://www.gnu.org/licenses/gpl-2.0.html)

benefits
--------
* can shorten over 42 billion unique URLs in 6 or less characters (it can do more than 12,000,000 in only 4!)
* fast: uses very little server resources
* can be used as an API too
* Options:
    * turn clickthru tracking on and off
    * limit usage to 1 IP address for personal use and to prevent spamming from others
    * check if the URL is real (doesn’t respond with a 404) before shortening
    * use a cache to minimize database use
    * change characters for shortlinks
* only uses alphanumeric characters by default, so all browsers can interpret the URL
* secure: several data filters in place to prevent SQL injection hacks
* uses 301 redirects for SEO and analytics yumminess

installation
------------
* make sure your server meets the requirements:
    b) Apache
    c) PHP
    d) MySQL
    e) Access to run SQL queries for installation
* copy or checkout the files to / on your server
* update the database info in config.php
* run the SQL included in shortenedurls.sql
* if you want to use the caching option, create a directory named cache with permissions 777
