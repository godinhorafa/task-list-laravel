# Simple Task List using Laravel, Blade, Tailwind CSS, and Alpine.js
This project implements a task list application using the Laravel framework along with Blade for templating, Tailwind CSS for styling, and Alpine.js for frontend interactivity. The database is configured with MySQL using Docker Compose.

## Key Features:
- Task Listing: Tasks are displayed in a list on the main interface.
- Task Editing: Each task can be edited directly from the list. Additionally, when editing a task, there is an option to delete it.
- Creating New Tasks: Functionality exists to create new tasks and add them to the existing list.

## Technologies Used:
- Laravel: Used as the primary backend framework, following the MVC pattern and facilitating the creation of RESTful APIs.
- Blade: Laravel's templating engine, enabling dynamic and reusable interfaces.
- Tailwind CSS: CSS framework used for styling, enabling rapid development and customizable components.
- Alpine.js: Minimalist JavaScript framework for frontend interactivity, adding declarative JavaScript functionalities.
- Docker Compose: Used for creating and managing Docker containers, including MySQL for persistent data storage.

## Project Structure:
The project follows Laravel's recommended folder structure and architecture, enhancing maintainability and scalability.

## Setup and Execution:
To run the project locally, ensure Docker and Docker Compose are installed. Clone the repository, configure the .env file with necessary environment variables, and run the containers using Docker Compose.

```bash
docker-compose up -d
```
Access the application via the browser at http://localhost.

/tasks
![image](https://github.com/godinhorafa/task-list-laravel/assets/63462531/f1f97dbf-75cf-4d60-b5a5-ec3733d5ffda)

/tasks/create
![image](https://github.com/godinhorafa/task-list-laravel/assets/63462531/3ec4c35c-aac7-46f3-9927-d71fb56024ef)

/tasks/{id_new_task}
![image](https://github.com/godinhorafa/task-list-laravel/assets/63462531/69c196c0-dd19-4016-bf59-3024947a01e2)

tasks/{id}/edit
![image](https://github.com/godinhorafa/task-list-laravel/assets/63462531/77282cc2-2603-41e4-bba9-da69235ecf06)

-------------------------------------

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
