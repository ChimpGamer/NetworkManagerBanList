<p align="center"><img src="https://imgur.com/wUhBSGv.png" width="400" alt="NetworkManager Logo"></p>

![home](https://i.imgur.com/nsN6ZhH.png)

## Screenshots
These are some screenshots of the web interface in both light and dark mode.

### Light theme
[Home page](https://i.imgur.com/nsN6ZhH.png) |
[Bans page](https://i.imgur.com/RIL7KE4.png) |
[Mutes page](https://i.imgur.com/3HUMX4U.png) |
[Kicks page](https://i.imgur.com/2fWEQOG.png) |
[Warns page](https://i.imgur.com/7S9ELVz.png) |
[Player page](https://i.imgur.com/ppolBMf.png) |

### Dark theme
[Home page](https://i.imgur.com/Yz0k2EX.png) |
[Bans page](https://i.imgur.com/DKsTPHy.png) |
[Mutes page](https://i.imgur.com/Fg0BU39.png) |
[Kicks page](https://i.imgur.com/iLfRTCW.png) |
[Warns page](https://i.imgur.com/ISqvyEf.png) |
[Player page](https://i.imgur.com/9o6ch8V.png) |

## Requirements
1. PHP 8.1, 8.2 or 8.3
2. Nginx, Apache or some other web server software that supports php. Nginx is the favorite here!
3. Composer
4. Git

## Installation
1. Open the terminal to your web server.
2. Execute ``cd /var/www/``
3. Execute ``git clone https://github.com/ChimpGamer/NetworkManagerBanList.git bans`` to clone the repository.
4. Enter the directory by executing ``cd bans``
5. Run the ``composer install --optimize-autoloader --no-dev``
6. Make sure to set the owner of the bans folder to www-data:www-data by executing ``sudo chown -R www-data:www-data /var/www/bans``
7. Rename ``.env.example`` to ``.env`` by executing ``mv .env.example .env``.
8. Configure the settings in the .env file.
9. Execute ``php artisan key:generate``
10. Configure your webserver to direct all requests to the ban list application. See [Webserver configuration](https://networkmanager.gitbook.io/wiki/networkmanager-webinterface/banlist#webserver-configuration) for examples.
11. You should now be able to browse to bans.example.com (The Server name in your webserver configuration)

## Optimizations
To improve performance there are a few things you can do. Caching! Cache the config, routes and views. You can do this by running these commands:
```shell
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Updating

First enter the folder that contains the web files. Then run the following commands to update:
```shell
php artisan down
git pull
composer install --no-dev
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan up
```
After that it should be running just fine again.
