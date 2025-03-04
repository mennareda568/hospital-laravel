#Smart Hospital (Hospital Management System) 
"For a detailed view of the project, visit the screenshot folder"

This is a hospital management system written in php(Laravel) with translation using mcamara/laravel-localization


This has the following features:

1_"Appointments Managment": 

*Book,view and delete appointments.

2_"Patients Managment": 

*Manage patients information,medical history.

3_"Doctor Managment": 

*Manage doctors profiles and their schedules.

4_"User Roles and Permissions":

*Define roles and permissions for different types of users such as admin,doctor and patient.

5_"Additional Features" : 

*Doctor can generate pdf for patient's prescriptions.



Installation Guide: 

1_composer install

2_composer update

3_composer require barryvdh/laravel-dompdf (to generate the prescription pdf)

4_Open PHPMyAdmin (http://localhost/phpmyadmin)

  *Create a database with name hospital

5_Upload .env and connect it with database

6_php artisan migrate 

7_php artisan serve 

==============================
