<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Features
> Frontend:
 - Navbar
   - Search
    - Route post and categories
- Detail Post
- Recent posts and Popular posts
- Paginatio 

> Backend
- Dashboard
   - Route View Website
   - Categories
        - view all, create and edit.
   - Posts
        - view all, create and edit.
   - Settings
   - Login/Logout
   
# How to run the App
1. Either fork or download the app and open the folder in the cli
2. Install all dependencies using the `composer i` command
3. Run `cp .env.example .env` next Run `php artisan key:generate`
4. Enter the correction of your database name in the `.env` file, etc.
5. Run the command `php artisan migrate`
6. Run the command `php artisan db:seed`
7. Run the command `php artisan serve`
8. Go to http://localhost:8000/
9. Go to http://localhost:8000/admin/login and fill in the fields with `admin`

# What the app looks like
![alt_text](https://github.com/davitlabadze/blog/blob/master/app%20screen/frontend.png)
![alt_text](https://github.com/davitlabadze/blog/blob/master/app%20screen/detail.png)
![alt_text](https://github.com/davitlabadze/blog/blob/master/app%20screen/backend.png)

