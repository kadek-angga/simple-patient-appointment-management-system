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
3. Dashboard Page
   ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/55369d77-424a-4c80-b6fa-c7e12c1182d4)
4. Patients Page
   ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/a697ef75-ccb6-4044-a243-b1a09f3f0f4a)
   ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/b21ceae9-b274-4fd6-97f2-70cfe7a62d02)
   ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/cc9f8fd5-78d2-4452-bc48-ae28339f7d17)
5. Patient Detail Page
   ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/2ddafcdd-37c9-4695-9ddf-48b8443e3756)
6. Patient Edit Page
   ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/e444f47e-578c-4477-9981-1b8c166564d6)
   ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/6ecabb8b-c556-4c0d-8e30-b252faf3eaf1)
7. Doctors Page
   ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/11dcdfbb-eb12-453b-8afc-6aab1e91bdd7)
   ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/8cdb9e8e-b2d1-47da-9909-3315ad319557)
   ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/c3e9252a-55ce-4908-9639-2f101b6bb583)
8. Doctor Detail Page
   ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/197e509c-9e7f-42b2-b00e-3f5f70e6620d)
9. Doctor Edit Page
   ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/6066ba97-8623-4518-bae5-f9ee0c87c3d4)
   ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/963872a9-d790-4e64-b610-8e254622dd57)
10. Appointments Page
    ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/35bfdef2-8df6-4694-b54f-17201aa8dc45)
11. Appointment Detail Page
    ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/98bd7912-5ca3-499d-8572-e3bf6246ba61)
12. Appointment Edit Page
    ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/b4ece0c9-e0fe-42eb-8e3f-3b14cd3bd6ff)
    ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/0f704971-5e23-43e9-b94d-ba4df32bc40b)
13. Making Appointment from patient detail Page
    ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/a7aab064-2fc0-43a8-a48b-2e4578fc6154)
    ![image](https://github.com/kadek-angga/simple-patient-appointment-management-system/assets/132994058/2861a9e0-0a37-4ddb-8e1f-0d27364911e3)




















