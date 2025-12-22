# Georus 🇷🇺

Laravel package with Russian regions and cities (CSV, migrations, seeders).

## Requirements
- PHP ^8.1
- Laravel ^10|^11

## Installation

```bash
composer require zaynasheff/georus
```

## Package Structure

The package contains:

Database migrations
CSV data files
Database seeders

## Publish all files

```bash
php artisan vendor:publish --provider="Zaynasheff\Georus\GeorusServiceProvider"
```

## Publish only migrations

```bash
php artisan vendor:publish --tag=georus-migrations
```

## Publish only seeders

```bash
php artisan vendor:publish --tag=georus-seeders
```

## Publish CSV data files

```bash
php artisan vendor:publish --tag=georus-data
```

## Running Migrations
After publishing migrations, run:

```bash
php artisan migrate
```

## Running Seeders
After publishing seeders, run:

```bash
php artisan db:seed --class=GeorusSeeder
```


