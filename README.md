# Laravel Dockerized Project

This project is a containerized Laravel application using PHP 8.2-fpm, Nginx, and MySQL.

## Requirements

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Quick Start

1. **Clone the repository:**
   ```bash
   git clone <your-repo-url>
   cd pendaftaran-donor
   ```

2. **Set up the environment:**
   ```bash
   cp .env.example pendaftaran-donor/.env
   # or
   cp .env.example .env
   ```

3. **Build and start the containers:**
   ```bash
   docker-compose up -d --build
   ```

4. **Install PHP dependencies:**
   ```bash
   docker-compose exec app composer install
   docker-compose exec app php artisan key:generate
   ```

5. **Build frontend assets:**
   ```bash
   docker-compose exec app npm install
   docker-compose exec app npm run build
   ```

6. **Run database migrations:**
   ```bash
   docker-compose exec app php artisan migrate
   ```

7. **Access the application:**
   The application will be available at [http://localhost:8000](http://localhost:8000).

## Project Structure

- `Dockerfile`: Application container definition.
- `docker-compose.yml`: Multi-container environment configuration.
- `nginx.conf`: Nginx server configuration.
- `belajarDocker/`: Main Laravel project directory.
