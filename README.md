# CRUD Application with Inertia.js

This repository contains a simple CRUD (Create, Read, Update, Delete) application built with Inertia.js. It demonstrates how to create a basic web application using the Inertia.js framework.

## Table of Contents
- [About](#about)
- [Features](#features)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## About

The CRUD Application with Inertia.js is a web application that showcases the usage of Inertia.js, a modern approach to building server-driven single-page apps (SPA). In this project, you can perform basic CRUD operations on a set of data.

## Features

- Create new records
- Read existing records
- Update existing records
- Delete records

## Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Before you begin, ensure you have met the following requirements:

- [Node.js](https://nodejs.org/) installed
- [Composer](https://getcomposer.org/) installed
- Familiarity with [Laravel](https://laravel.com/) is a plus, as this project is based on it.

### Installation

1. Clone the repository:

   ```shell
   git clone https://github.com/adas0mahdi/crude-application-inertia.git

#Change into the project directory:
cd crude-application-inertia
Install PHP dependencies using Composer:
composer install
Install JavaScript dependencies using npm (or yarn):
npm install

Copy the .env.example file to .env and configure your database settings.

#Generate the application key:
php artisan key:generate
Run the migrations and seed the database:
php artisan migrate --seed

Start the development server:
php artisan serve

Visit http://localhost:8000 in your web browser to access the application.

##Usage
Explain how to use the application, including any user instructions or guidelines.

Contributing
If you'd like to contribute to this project, please follow these guidelines:

##Fork the repository.
Create a new branch for your feature or bug fix.
Make your changes and commit them with clear, descriptive commit messages.
Push your changes to your fork.
Submit a pull request to the main repository.
License
This project is licensed under the MIT License.
