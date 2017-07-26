# Bacom-Server-Line

Set interval check server with ubuntu 16.04

ubuntu@ubuntu:~$ sudo crontab -e
# select nano editor
Choose 1-4 [2]: 2

* * * * * /bin/sh /home/ubuntu/notify.sh > /dev/null 2>&1

write file [Ctrl+o]
exit file  [Ctrl+x]

Change account line api interface with nano editor
ubuntu@ubuntu:~$ nano /var/www/html/Line-Service-Bacom/php/php_config.cfg

#line Application
$channelSecret = 'Your Channel Secret';
$access_token  = 'Your Access Token';

write file [Ctrl+o]
exit file  [Ctrl+x]


