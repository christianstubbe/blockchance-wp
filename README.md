# blockchance-wp

This is the blockchance MVP v1 backend. It is a Docker based Wordpress application. The Docker image is copied from [this great Person](https://github.com/kassambara/wordpress-docker-compose) it includes:

- Nginx web server
- MariaDB/MySQL used for Wordpress database
- phpMyAdmin interface to connect to your MySQL database
- WP-Cli: Wordpress Command Line Interface
- Makefile directives for automatization.

# Installation

1. Install Docker
2. Restart
3. If you are on Windows: After restart, follow instructions on screen and install wsl_update.msi from Microsoft
4. Clone this repository
5. Run terminal in your local folder and enter: **docker-compose up -d --build** to build the container. This might take a few minutes on the first build, depending on your internet connection.
6. After a succesful build, test the application(s). (Read note below)
7. phpMyAdmin. http://localhost:8080 Username: root Password: password
8. Wordpress. http://localhost Username: wordpress Password: wordpress
9. Install Wordpress as per instructions on http://localhost. Choosen an easy admin password for your local enviroment.
10. In Wordpress navigate on the left side to Design -> Themes and activate the **Blockchance Academy** Theme

Note: Even after the container is running, you might need to wait a few minutes until Wordpress and phpMyAdmin is accessible. 






