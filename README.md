# reptilehaus-regen-wp-images-overnight


DESCRIPTION: You may already use a Wordpress Thumbnail Regeneration Plugin.. 
But what if you could just run that monotonous task every night. 
This script uses the exact same function as EVERY one of those plugins except you use a Linux cronjob to execute it whenever you want, 
all you have to do is configure the cronjobs.

Usage: 

Create the cronjob on your server, maybe to test make it run every 1 minute, then change it to the following, for example,
which runs every night at 130am

sudo crontab -e

30 1 * * * /usr/bin/php -q  /servers/full/direct/path/to/your/website-root/wp-content/themes/theme-name/whatever-you-named-this-script.php


Then add the provided PHP script to your themes directory, be sure to change the line pointing to wp-blog-header.php to have the absolute
path to that file in your websites root, this is very important as it allows us to use the Wordpress specific functions without having to 
add the header.php or footer.php file (as they pull in all that stuff)

Also in this file change the line INTERVAL 3 DAY to whatever you wish - It will regerenate all images that have been uploaded within the last 3 days.



Blog post here: https://www.reptilehaus.io/#/blog/wordpress-regenerate-thumbnails-cronjob

Twitter: https://twitter.com/REPTILE_HAUS