# Laravel Weather API 🌦️

A Laravel-based API project that provides weather data by country and city
using a public weather API.

## Tech Stack
- Laravel 11
- REST API
- External Weather API
- GitHub Actions (CI)
- Docker (planned)

## Features
- Get weather by city
- Clean API response
- Service-based architecture
- Production-ready Git workflow

## Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
