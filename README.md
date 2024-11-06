# Technologies
* Backend: Laravel (PHP framework)
* Frontend: Blade templates, Tailwind css (styling and design)
* Database: MySQL
  
# Run migrations:
* php artisan migrate
* php artisan db:seed

# Main Features of the Project
* Task Creation: Users can add new tasks.
* Task Editing: Users can edit their tasks.
* Task Deletion: Users can delete their tasks.
* Status Update: Tasks can be marked as completed or not completed.
* User Restrictions: Users can only edit and delete their own tasks.

# Usage Guide
* Viewing and Managing Tasks: Users can view and manage their tasks after logging in.
* Status Update: Users can select the task's status as completed or not completed on the edit page.

# Issues and Solutions
* 403 Unauthorized Errors: If a user attempts to access a task that does not belong to them, the system will return a 403 Unauthorized error. This is a security feature.

# Test Credentials
To test the project, you can use the following sample credentials:
* Login: todo@gmail.com
* Password: test123

# Project Structure
The main directories and files of the project are as follows:
* app/Http/Controllers/TaskController.php - Controller for managing tasks.
* app/Models/Task.php - Task model and relationships.
* resources/views/admin/my-tasks/ - Blade templates.
* routes/web.php - Routes.
