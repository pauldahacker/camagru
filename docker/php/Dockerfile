# Use fpm (FastCGI Process Manager) mode of latest PHP on a tiny Linux (Alpine)
FROM php:8.5-fpm-alpine

# Set the working directory inside the container
WORKDIR /var/www/html

# Install extensions Camagru needs
RUN apk add --no-cache postgresql-dev \
	&& docker-php-ext-install pdo_pgsql

# Copy local 'app' folder into the container
COPY ./app .

# PHP-FPM runs on port 9000 by default
EXPOSE 9000