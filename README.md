# Tasks for Today Management System

IT0049 – Technical Summative Assessment 1. Built with CodeIgniter 4, PHP and MySQL.

## Pages
| Route | Description |
|---|---|
| `/` | Only tasks where `task_date` equals today |
| `/tasks` | Every task, ordered by date |
| `/profile` | The single demo user |
| `/about` | Static page about the developer |

## Requirements
PHP 8.1+ (extensions: intl, mbstring, mysqli), Composer, MySQL/MariaDB.

## Setup
1. `composer install`
2. Copy `env.example` to `.env` and adjust the database settings.
3. Create an empty database named `tasks_for_today`.
4. `php spark migrate`
5. `php spark db:seed DatabaseSeeder`
6. `php spark serve` and open http://localhost:8080

`database.sql` is included as an alternative to steps 4–5.

## Structure
- `app/Controllers` – Home, Tasks, Profile, About
- `app/Models` – TaskModel, UserModel
- `app/Views` – layout, welcome, tasks, profile, about
- `app/Database` – migrations and seeders
- `public/assets/css/style.css` – styles

## Live demo
<paste hosted link here>
