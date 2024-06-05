#!/bin/bash

wp core install \
--url='http://localhost:☓☓☓☓/wp' \
--title='sample' \
--admin_user='☓☓☓☓' \
--admin_password='☓☓☓☓' \
--admin_email='☓☓☓☓' \
--allow-root

wp language core install ja --activate --allow-root

wp option update timezone_string 'Asia/Tokyo' --allow-root
wp option update date_format 'Y年n月j日' --allow-root
wp option update time_format 'H:i' --allow-root

wp option update blogdescription '' --allow-root

wp plugin delete \
hello akismet \
--allow-root

wp plugin install \
  ☓☓☓☓ \
  --activate --allow-root

wp theme activate sample --allow-root

wp theme delete --all --allow-root

wp option update permalink_structure /%☓☓☓☓%/ --allow-root

wp option update posts_per_page 1 --allow-root

wp option update rss_use_excerpt 1 --allow-root

wp option update blog_public 0 --allow-root

wp option update default_pingback_flag 0 --allow-root

wp option update default_ping_status closed --allow-root

wp option update default_comment_status closed --allow-root

wp option update require_name_email 0 --allow-root

wp option update page_comments 0 --allow-root

wp option update close_comments_for_old_posts 0 --allow-root

wp option update show_comments_cookies_opt_in 0 --allow-root

wp option update thread_comments 0 --allow-root

wp option update comments_notify 0 --allow-root

wp option update moderation_notify 0 --allow-root

wp option update comment_moderation 1 --allow-root

wp post delete 1 2 3 --allow-root

wp core language update --allow-root
