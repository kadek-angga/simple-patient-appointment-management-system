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
   `
    php artisan serve
    `
   
11. Open another terminal and compile assets:
    `
    npm run dev
    `
    or
    `
    npm run build
    `

12. Open your browser and go to http://localhost:8000.

## Usage

Open your browser and go to http://localhost:8000.
Patients and healthcare providers can log in with their credentials.
Patients can schedule appointments, and healthcare providers can manage appointments via the dashboard.

1. Landing Page/Welcome Page
   ![Screenshot 2024-02-21 171017](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/27e3e1c7-7f58-4694-8921-09a2aaafd53f)
2. Register & Login Page
   ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/32f39d4b-5ec1-4e2c-bc75-e7cd245d653e)
   ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/2386fd8f-71b4-4186-b183-f956047147da)



