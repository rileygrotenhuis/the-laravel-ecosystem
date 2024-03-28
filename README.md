# The Laravel Ecosystem

This is the demo application that I used for my talk on "The Laravel Ecosystem" at the Springfield Devs meetup on March 6, 2024. The talk discussed the Laravel framework and its surrounding ecosystem with highly suppored packages that can be used to build modern web applications.

### Listen to the talk!

[![The Laravel Ecosystem](https://secure.meetupstatic.com/photos/event/6/2/a/a/600_519265258.webp?w=750)](https://www.youtube.com/watch?v=kHjGp0Xtinw&t=1s)

### Read the blog post!

Feel free to follow along [blog post](https://dev.to/rileygrotenhuis/the-laravel-ecosystem-1jbj) I wrote about the Laravel Ecosystem to create your own demo application.

## Prerequisites

Before you can run this application, ensure you have the following software installed on your system:

1. **PHP**: This application requires the latest version of Php to run. You can download and install PHP from the [official website](https://www.php.net/downloads.php). Ensure you have the latest version of PHP by running the following command:

    ```bash
    php --version
    ```

2. **Composer**: Composer is used to manage and install dependencies for PHP. You can download and install Composer from the [official website](https://getcomposer.org/download/). Ensure you have the latest version of Composer by running the following command:

    ```bash
    composer --version
    ```

3. **Docker**: This application is containerized by utilizing Docker. You can follow the instructions provided by the Docker team to install it on your machine on their [official documentation](https://docs.docker.com/get-docker/). Ensure you have the latest version of Docker by running the following command:

    ```bash
    docker --version
    ```

4. **Docker Compose**: Docker Compose is a tool used in tandem with Docker for defining and running multi-container Docker applications. You can follow the instructions provided by the Docker team to install it on your machine on their [official documentation](https://docs.docker.com/compose/install/). Ensure you have the latest version of Docker by running the following command:

    ```bash
    docker-compose --version
    ```

## Installation

To get started with this application, follow these steps:

1. **Navigate to the Project Directory**: Change your working directory to the newly cloned repository:

    ```bash
    cd the-laravel-ecosystem
    ```

2. **Copy Environment Variables**: This application uses environment variables for configuration. Copy the contents from the `.env.example` file into a `.env` file.

    ```bash
    cp .env.example .env
    ```

3. **Install Dependencies**: Now you need to install the project dependencies using Composer. Run the following command:

    ```bash
    composer install
    ```

4. **Generate Encryption Key**: To generate an encryption key that the Laravel application uses for authentication and authorization, run the following command:

    ```bash
    php artisan key:generate
    ```

5. **Start the Application**: Once the dependencies are installed, you can start the application by running:

    ```bash
    ./vendor/bin/sail up -d
    ```

6. **Run Migrations**: To run the database migrations for this application, run the following command:

    ```bash
    ./vendor/bin/sail artisan migrate
    ```
   
7. **Run Vue Frontend**: To run the Vue frontend, navigate to the `frontend` directory and run the following commands:

    ```bash
    npm install
    npm run serve
    ```
