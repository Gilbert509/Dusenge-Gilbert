# Use an official PHP image from Docker Hub
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the local PHP files to the working directory in the container
COPY . /var/www/html/

# Expose port 80 (default for Apache) and 8085 (to map it externally)
EXPOSE 80
EXPOSE 8085

# Enable Apache mod_rewrite for URLs
RUN a2enmod rewrite

# Set the server to listen on port 8085
CMD ["apache2-foreground"]

