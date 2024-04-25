# PHP Link Shortener

PHP Link Shortener is a simple link shortening service built with Laravel. It allows users to shorten long URLs and provides a shorter link that redirects to the original URL.

## Table of Contents

1. [Setup & Installation](#setup--installation)
2. [Functionality](#functionality)
3. [Examples of usage](#examples-of-usage)

## Setup & Installation

To run the PHP Link Shortener locally, follow these steps:

### Prerequisites

- PHP (>= 7.4)
- Composer
- MySQL (or another suitable database)
- Git

### Installation Steps

1. Clone the repository:

   ```bash
   git clone https://github.com/brostyslav-it/laravel-url-shortener
   ```

2. Navigate to the project directory:

   ```bash
   cd laravel-url-shortener
   ```

3. Install PHP dependencies using Composer:

   ```bash
   composer install
   ```

4. Make a copy of the `.env.example` file and rename it to `.env`:

   ```bash
   cp .env.example .env
   ```

5. Generate an application key:

   ```bash
   php artisan key:generate
   ```

6. Configure your database connection in the `.env` file. Update the following variables with your database credentials:

   ```dotenv
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```

7. Run database migrations to create the necessary tables:

   ```bash
   php artisan migrate
   ```

8. Serve the application:

   ```bash
   php artisan serve
   ```

9. Access the application in your web browser at `http://localhost:8000`.

## Functionality

The PHP Link Shortener provides the following functionality:

- **URL Shortening**: Users can submit long URLs to be shortened via a web form or API endpoint. The input is validated to ensure it's a valid URL.
- **Short Code Generation**: Each URL is assigned a unique short code, generated using a custom algorithm to ensure uniqueness and minimize length. Laravel's `Str::random` method is used for generating short codes.
- **Redirection**: Shortened URLs redirect users to the original URL when accessed. Appropriate HTTP status codes (302 Found) are used for successful redirections, and handling of not-found cases (404 Not Found) is implemented.
- **Database Storage**: Original URLs and their corresponding short codes are saved in the MySQL database. Additionally, the number of times each shortened URL is accessed is tracked for analytics purposes.

## Examples of Usage

Here are some examples of how to use the PHP Link Shortener:

1. **Shortening a URL**:

   ![Shorten URL](./README-img/1.jpg)

   <pre>
   Shorten URL form and shortened URL's list
   </pre>

2. **Accessing a Shortened URL**:

   ![Access Shortened URL](./README-img/2.jpg)
 
   <pre>
   Clicking on short URL
   </pre>
    
   ![Access Shortened URL](./README-img/3.jpg)
 
   <pre>
   Redirect is successful
   </pre>
 
   ![Access Shortened URL](./README-img/4.jpg)
 
   <pre>
   Visits counter also updated
   </pre>

---
