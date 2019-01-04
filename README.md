# piMPF
Raspberry Pi Multi Picture Frame

![alt text](https://github.com/handtrixx/piMPF/blob/master/components/help/piMPF_logo_small.png)

You have an old Tablet/iPad you do not have a use for anymore? Or are you thinking about investing money to buy a digital picture frame? If so,
this project can be from interest for you. piMPF is a client/server based WebApp that allows you to view your favorite pictures as a fullscreen slideshow on any device that provides a Web Browser, e.g. your Tablet, iPad, Laptop or anything comparable. Anyhting you need beside is a small Webserver like a Raspberry Pi
or similar.

[Link to Demo](http://pimpf.niklas-stephan.de/pimpf)
(in the demo file upload and and deletion are disabled)

## Features
- Configurable Slideshow that shows pictures in fullscreen and optionally time and/or date
- Upload/Downlad of single or multiple pictures
- Multi-Device access: Upload pictures once, access them on all connected devices and device types
- SAVES THE PLANET BY REDUCING WASTE

## Installation
I assume that you have a Linux server instance in place. If so go through following instructions.

### Install required packages
First we need to install the standard software pimpf is based on.

For Raspbian, Debian, Ubuntu and comparable, please execute:

```bash
sudo apt-get install nginx php-fpm php-gd php-bcmath git unzip
```

### Configure NGINX and PHP
A tiny bit configuration of the standard software is sincerely required, otherwise we will not be able to upload pictures larger than 1 MB.
Also we need to configure NGINX to use the PHP features we installed before.

#### PHP
For PHP just two parameters in the configuration file have to be changed.

First we need to figure out which "php.ini" file we have to modify:

```bash
cd /etc/php; ls -al
```

If there is only one version listed e.g. 7.0 , good for you. If you find multiple versions as subfolders here, execute "php -v" to see which is the version you need to enter the subfolder of.

Edit the "php.ini" file in subdirectory "fpm" of it, e.g.:

```bash
sudo vi /etc/php/7.0/fpm/php.ini
```

Search an replace and save values of parameters "post_max_size" to "20M" (MB) and "upload_max_filesize" to "20M" as well.

```bash
post_max_size=20M
upload_max_filesize=20M
```
To make changes effective restart PHP by command:

```bash
sudo service php7.0-fpm restart
```

#### NGINX
To make nginx capable to upload pictures up to 20 MB, please execute:

```bash
sudo sed -i 's/sendfile on;/sendfile on;\nclient_max_body_size 20M;/' /etc/nginx/nginx.conf
```

This will add the line "client_max_body_size 20MB;" to file "/etc/nginx/nginx.conf".

Now we join NGINX with PHP by editing file "/etc/nginx/sites-available/default" by opening the file with an editor, e.g. vi :

```bash
sudo vi /etc/nginx/sites-available/default
```

We delete the content of the default configuration and replace it by: 

```bash
server {
        listen 80 default_server;
        listen [::]:80 default_server;
        root /var/www/html;
        index index.html index.htm index.nginx-debian.html;
        server_name _;
        location / {
                try_files $uri $uri/ =404;
        }
        location ~ \.php$ {
                include snippets/fastcgi-php.conf;
                fastcgi_pass unix:/var/run/php/php7.0-fpm.sock;
        }
}
```

> Be careful to set correct diretory for parameter "fastcgi_pass", actually it has to be the same you figured out during PHP configuration.

Finally we restart our nginx service by:

```bash
sudo service nginx restart
```

> If you consider to install piMPF on a public webserver, at least enable Basic Authentication to ensure a little bit of security.

### Install piMPF

Enter into target directory, "var/www/html" and give command to download the newest version of piMPF:

```bash
cd /var/www/html
sudo git clone https://github.com/handtrixx/piMPF.git
```

A subdirectory "piMPF" will be created, but thats a little uncomfortable to open in the browser so we rename it by:

```bash
sudo mv /var/www/html/piMPF /var/www/html/pimpf
```

Change the owner of this directory and all subdirectories to the standard webserver user:

```bash
sudo chown -R www-data: /var/www/html/pimpf/
```

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