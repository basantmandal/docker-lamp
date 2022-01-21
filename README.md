![Logo](docs/lamp.png) 

###  Apache, PHP7.3, MySQL Docker Compose Project - Starter for building LAMP Web Apps using Docker

- Includes Apache, PHP7.3, MySQL5.7, PHPMyAdmin & Redis/OpCache
- PHP Extensions - curl, json, zip, mbstring, gettext, exif, imagick
- Includes Git2 & Composer2
- Includes 2 Virtual Host (http://www.wordpress.test & http://www.magento.test)
- Includes all PHP Extension for WordPress & Magento
- .env file is used for Environment Variables.
- Solved PHPMyAdmin Error - The phpMyAdmin configuration storage is not completely configured, some extended features have been deactivated.
- Fully Compatible with Magento2.3.6 & WordPress 5.8.3

### Prerequisites:

You must have Docker Installed in your System ! Docker version >= 20.10.x & Docker Compose version >= 1.25.x

### How to use this Docker Compose
`$ docker-compose build --no-cache`
`$ docker-compose up -d --remove-orphans`

#### Then you can check the status of the containers by running:
`$ docker ps`

![Logo](docs/docker_ps.png) 

#### Docker Bash:
`$ docker exec -it lampp-php7.3 bash`

![Logo](docs/docker_bash.png) 

### Url Links
1. [LocalHost (http://localhost)](http://localhost "Localhost")
2. [PHPMyAdmin (http://localhost:8080)](http://localhost:8080 "PHPMyAdmin")

### Virtual Host
1. [WordPress (http://www.wordpress.test)](http://www.wordpress.test "WordPress")
2. [Magento (http://www.magento.test)](http://www.magento.test "Magento")

### WordPress & Magento Test Screenshots

![Logo](docs/WordPress.png) 
![Logo](docs/WordPress2.png) 
![Logo](docs/Magento.png) 
![Logo](docs/Magento2.png) 
![Logo](docs/Magento3.png) 
![Logo](docs/Magento4.png) 
![Logo](docs/Magento5.png) 
![Logo](docs/Magento6.png) 

### Download Links for Magento & WordPress
1. [Download Magento 2.3.6 (https://magento.com/tech-resources/download)](https://magento.com/tech-resources/download "Download Magento 2.3.6")
![Logo](docs/MagentoDownload.png) 

2. [Download WordPress 5.8.3 (https://wordpress.org/download/releases/)](https://wordpress.org/download/releases "Download WordPress 5.8.3")
![Logo](docs/WordPressDownload.png) 




> This is a Non Production Docker Compose. This is just for Local Test Development