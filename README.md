# GAP PHP & React Challenge
Git repository for the GAP challenge, in a variation of MVC

## PLEASE READ THE FOLLOWING

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

#### Laravel

In order yo run the project you will need to make sure your machine meets the following requirements

```
* PHP >= 7.1.3
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* Ctype PHP Extension
* JSON PHP Extension
```

#### Node

You will need to make sure that Node.js is installed on your machine:

```
node -v
```

### Installing dependencies (PHP & JS)

First you have to run composer install for any dependency that is used in the PHP enviroment
(Note that .env is include in this repo because it is needed for you to correctly run the enviroments)

```
composer install
```

Then you have to run npm install && npm run dev in order to install the javascript dependencies

```
npm install && npm run dev
```

End with an example of getting some data out of the system or using it for a little demo

### Running the project

Now you had every dependency installed, you can now run the project

```
php artisan serve
```

Then you have to run npm install && npm run dev in order to install the javascript dependencies

## Running the tests

Explain how to run the automated tests for this system

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Not necessary for this challenge

## Built With

* [Laravel](https://laravel.com/) - The web server framework used (*v5.6*)
* [ReactJS](https://reactjs.org/) - The web frontend framework used (*v16.2.0*)
* [Git](https://git-scm.com/) - Dependency Management

## Author

* **Alejandro Bermúdez Holguín** - *For:* - [GAP](https://www.growthaccelerationpartners.com/)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
