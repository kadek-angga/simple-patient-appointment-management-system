# Patient Appointment Management System

This is a simple Patient Appointment Management System built with Laravel, Vue.js, Inertia.js, Tailwind CSS, and MySQL.

## Installation

### Prerequisites

Before you begin, ensure you have the following installed on your local machine:

-   [PHP](https://www.php.net/manual/en/install.php)
-   [Composer](https://getcomposer.org/download/)
-   [Node.js](https://nodejs.org/en/download/)
-   [NPM](https://www.npmjs.com/get-npm)
-   [MySQL](https://dev.mysql.com/downloads/)

### Steps

1. Clone the repository:

    ```bash
    git clone https://github.com/your-username/patient-appointment-management.git
    ```

2. Navigate to the project directory:

    ```bash
    cd patient-appointment-management
    ```

3. Install PHP dependencies:

    ```bash
    composer install
    ```

4. Install NPM dependencies:

    ```bash
    cp .env.example .env

    ```

5. Copy the .env.example file:

    ```bash
    cp .env.example .env
    ```

6. Configure your .env file with your database connection details:

    ```
    DB_CONNECTION=mysql
    DB_HOST=your_database_host
    DB_PORT=your_database_port
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

7. Generate the application key:

    ```bash
    php artisan key:generate
    ```

8. Run database migrations:

    ```bash
    php artisan migrate
    ```

9. Start the development server:
   `bash
    php artisan serve
    `
   The application should now be running on http://localhost:8000.

10. Open another terminal and compile assets:
    `bash
    npm run dev
    `
    or
    `bash
    npm run build
    `

11. Open your browser and go to http://localhost:8000.

## Usage

Open your browser and go to http://localhost:8000.
Patients and healthcare providers can log in with their credentials.
Patients can schedule appointments, and healthcare providers can manage appointments via the dashboard.
