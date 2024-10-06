# LaraGigs

## Table of Contents

-   [About the Project](#about-the-project)
-   [Installation](#installation)

## About the Project

LaraGigs is a website where you can list or find your job listings.

![alt text](https://github.com/mertbag96/laragigs/blob/main/public/images/project-ss.JPG)

## Installation

To get a local copy up and running, follow these simple steps:

### Prerequisites

Make sure you have the following installed on your computer:

-   PHP 8.1 or higher
-   Composer
-   Node.js and npm
-   MySQL

### Steps

1. **Clone the repository**

    ```sh
    git clone https://github.com/mertbag96/laragigs.git
    ```

2. **Navigate to the project directory**

    ```sh
    cd laragigs
    ```

3. **Install PHP dependencies**

    ```sh
    composer install
    ```

4. **Install Node.js dependencies**

    ```sh
    npm install
    ```

5. **Compile assets**
    ```sh
    npm run dev
    ```
6. **Copy the `.env.example` file to `.env`**

    ```sh
    cp .env.example .env
    ```

7. **Generate an application key**

    ```sh
    php artisan key:generate
    ```

8. **Configure your database settings in the `.env` file**

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

9. **Run database migrations**

    ```sh
    php artisan migrate
    ```

10. **Start the development server**
    ```sh
    php artisan serve
    ```

Your application should now be running on [http://localhost:8000](http://localhost:8000).
