# piMPF
![alt text](https://github.com/handtrixx/piMPF/blob/master/components/help/piMPF_logo_small.png)

Raspberry Pi Multi Picture Frame

You have an old Tablet/iPad you do not have a use for anymore? Or are you thinking about investing money to buy a digital picture frame? If so,
this project can be from interest for you. piMPF is a client/server based WebApp that allows you to view your favorite pictures as a fullscreen slideshow on any device that provides a Web Browser, e.g. your Tablet, iPad, Laptop or anything comparable. Anyhting you need beside is a small Webserver like a Raspberry Pi
or similar.

Demo

## Features
- Configurable Slideshow that shows pictures in fullscreen and optionally time and/or date
- Upload/Downlad of pictures
- Multi-Device access: Upload pictures once, access them on all connected devices
- Fully Re

## Installation

### Install required packages

Raspbian, Debian, Ubuntu, etc. :

```
sudo apt-get install nginx php-fpm php-gd git unzip
```

### Configure nginx and php for file uploads

nginx

```
sudo sed -i 's/sendfile on;/sendfile on;\nclient_max_body_size 20MB;/' /etc/nginx/nginx.conf
```

php

```
fastcgi_param PHP_VALUE "upload_max_filesize=20M \n post_max_size=20M"; /etc/nginx/sites-available/default
```

### Restart nginx and php


### By Git
Enter into target directory and give command command:

```
cd /var/www/html
git clone https://github.com/handtrixx/piMPF.git
```

A subdirectory "piMPF" will be created.

## Usage

Open Browser on your device and go to url

```
http://YOURDEVICENAMEORIP/pimpf
```

## Contribute
### Fork Source Code

```

git init
```

```
git remote add origin https://github.com/handtrixx/piMPF.git
```

```
git pull origin master
```


### Upload Changes

```
git add .
```

```
git commit -m "my Changes"
```

```
git push -u origin master
```