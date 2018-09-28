<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Custom Authentication

Laravel provides a way of making default authentication with following artisan command,

`php artisan make:auth`

This generates a set of view files and authentication logic in your application however we need some custom user authentication where we can implement permission based page visits.

Here, we have implemented authentication for two type of user namely **admin** and **guest**

## User Roles

Here we use two roles admin and guest. these records are created with database seeder in roles table. RolesTableSeeder is used for this purpose.

## Admin User

Admin user is created automatically at the begining with the help of seeder UsersTableSeeder and all other users are created through registration process.

## Login

LoginController is used for this purpose and email and password are necessary to login. After successful login user is redirected to correspondig dashboard.

## Register

Guest Users can be added with registration method and following fields are required

- User Name
- Email
- Password
- Password Confirmation

After registration, user will be redirected to associated dashboard.

# Password Reset
