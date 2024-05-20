# WebWarriors
# Web Warriors To-Do List

![Web Warriors](https://img.shields.io/badge/WebWarriors-ToDoList-blueviolet)

A simple, user-friendly To-Do List web application built with HTML, CSS, PHP, and MySQL. This application allows users to create, view, complete, and delete tasks, as well as manage removed tasks and view completed tasks. It also includes user authentication features.

## Table of Contents

- [Features](#features)
- [Screenshots](#screenshots)
- [Installation](#installation)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Technologies Used](#technologies-used)
- [Contributing](#contributing)
- [License](#license)

## Features

- User Authentication (Sign Up, Sign In, Sign Out)
- Create, View, Complete, and Delete Tasks
- View Completed Tasks
- Manage Removed Tasks (Recover or Permanently Delete)
- Responsive Design

## Screenshots

![Sign Up](path/to/signup_screenshot.png)
![Sign In](path/to/signin_screenshot.png)
![To-Do List](path/to/todolist_screenshot.png)
![Completed Tasks](path/to/completed_tasks_screenshot.png)
![Removed Tasks](path/to/removed_tasks_screenshot.png)

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/your-username/web-warriors-todo-list.git
    ```
2. Navigate to the project directory:
    ```bash
    cd web-warriors-todo-list
    ```
3. Set up your local server using XAMPP or any other PHP server and ensure MySQL is running.

4. Import the `database.sql` file to set up the database:
    - Open phpMyAdmin.
    - Create a new database named `todo_list`.
    - Import the `database.sql` file located in the root of the project.

5. Update the database configuration in `php/db.php`:
    ```php
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "todo_list";
    $port = 3306; // Ensure this matches the configured port

    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    ```

6. Open your browser and navigate to `http://localhost/web-warriors-todo-list`.

## Usage

1. Sign Up for a new account or Sign In with existing credentials.
2. Add new tasks using the input field and the "Add Task" button.
3. Mark tasks as completed or remove them from the list.
4. View completed tasks by clicking the "Completed" button in the navbar.
5. Manage removed tasks by clicking the "Removed" button in the navbar. You can recover or permanently delete tasks.
6. Sign out using the "Sign Out" button in the navbar.

## File Structure

web-warriors-todo-list/
├── css/
│ └── style.css
├── php/
│ ├── add_task.php
│ ├── complete_task.php
│ ├── db.php
│ ├── delete_task.php
│ ├── recover_task.php
│ ├── remove_task.php
│ ├── sign_in.php
│ ├── sign_out.php
│ └── sign_up.php
├── index.php
├── sign_in.php
├── sign_up.php
├── completed_tasks.php
├── removed_tasks.php
└── database.sql

## Technologies Used

- **Frontend**: HTML5, CSS3, Tailwind CSS
- **Backend**: PHP
- **Database**: MySQL
- **Development Environment**: XAMPP

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch:
    ```bash
    git checkout -b feature-branch
    ```
3. Make your changes and commit them:
    ```bash
    git commit -m 'Add some feature'
    ```
4. Push to the branch:
    ```bash
    git push origin feature-branch
    ```
5. Open a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

Enjoy coding! 🚀
