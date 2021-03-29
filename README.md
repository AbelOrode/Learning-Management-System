# Learning-Management-System
A laravel web application project presented in partial fulfillments of the requirements for the degree of Msc in Software Engineering, Athlone Institute of technology, Athlone, Ireland.


# Landing Page
![Homepage](https://user-images.githubusercontent.com/48480130/112780873-a4609880-9041-11eb-863b-68f43f2a0dd9.png)


# Dashboard - Server Side
![Dashboard](https://user-images.githubusercontent.com/48480130/112781003-edb0e800-9041-11eb-9542-bd3e955a9c85.png)


# E-Shop with PayPal API
![E-Book store](https://user-images.githubusercontent.com/48480130/112781140-2bae0c00-9042-11eb-8880-8e1e17280671.png)

![PayPal Service](https://user-images.githubusercontent.com/48480130/112781147-2d77cf80-9042-11eb-876b-e72e8afc448b.png)


# Contact
![Contact](https://user-images.githubusercontent.com/48480130/112781238-57c98d00-9042-11eb-94b8-df4bbc2a63fb.png)


# How to use
1. Open terminal (CLI) and run the command below:

 . git clone https://github.com/AbelOrode/Learning-Management-System.git
 . cd Learning-Management-System
 
2. Run composer install & npm to install all dependencies

 . compostall install
 . npm install && npm run dev
 
3. Create a database for the project by modifying .env file

 . set DB_DATABASE = "Your schema name";
 . set DB_USERNAME = "Enter your usename (usually assigned 'root')";
 . set DB_PASSWORD = "Enter your password";
 
4. Generate application key by running the command below via CLI
 . php aritsan key:generate
 
5. Execute the migration command
. PHP artisan migrate

6. Execute the command below to create a storage dirctory in the public directory
.php artisan make:storagelink

Note: To have access to all admin features in the dashboard, manaully add the value "Admin" to the usertype column in the user table to any registered user(s) in the system. This can be done easily using MySQL workbench.

