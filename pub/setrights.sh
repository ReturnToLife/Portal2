#!/bin/sh

sudo setfacl -R -m u:www-data:rwx -m u:$USER:rwx app/cache app/logs
sudo setfacl -dR -m u:www-data:rwx -m u:$USER:rwx app/cache app/logs
