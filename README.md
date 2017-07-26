# Bacom-Server-Line

Set interval check server with

Linux ubuntu 4.4.0-83-generic #106-Ubuntu SMP Mon Jun 26 17:54:43 UTC 2017 x86_64 x86_64 x86_64 GNU/Linux
Distributor ID: Ubuntu
Description:    Ubuntu 16.04.1 LTS
Release:        16.04
Codename:       xenial

Server version: Apache/2.4.18 (Ubuntu)
Server built:   2017-06-26T11:58:04

PHP 7.0.18-0ubuntu0.16.04.1 (cli) ( NTS )
Copyright (c) 1997-2017 The PHP Group
Zend Engine v3.0.0, Copyright (c) 1998-2017 Zend Technologies
with Zend OPcache v7.0.18-0ubuntu0.16.04.1, Copyright (c) 1999-2017, by Zend Technologies

ubuntu@ubuntu:~$ sudo crontab -e
select nano editor
Choose 1-4 [2]: 2

\* \* \* \* \* /bin/sh /home/ubuntu/notify.sh > /dev/null 2>&1

write file [Ctrl+o]
exit file  [Ctrl+x]

# line Application
Change account line api interface with nano editor

ubuntu@ubuntu:~$ nano /var/www/html/Line-Service-Bacom/php/php_config.cfg


$channelSecret = 'Your Channel Secret';
$access_token  = 'Your Access Token';

write file [Ctrl+o]
exit file  [Ctrl+x]


