# Vue.js + Laravel SPA: Simple Boilerplate

A very simple starter project with Laravel and Vue.js as a Single Page Application (SPA).

The goal is to start a new SPA project quickly with routes and components structure already in place.

__What's included:__

- Laravel 7 default project
- Vue.js boilerplate with Components: App, Navbar, Footer, Sidebar
- Three menu items using Vue Router: Homepage (dynamic data from API), About and Contact (both static texts) 
- One Laravel model Product with Migrations+Seeds, one API call to get all products, using API Resource


Front-end theme is a very simple Shop Homepage, taken from [Start Bootstrap](https://startbootstrap.com/templates/shop-homepage/).

![Laravel Vue.js SPA](https://laraveldaily.com/wp-content/uploads/2020/08/Screen-Shot-2020-08-25-at-1.16.09-PM.png)


- - - - -

## How to use

- Clone the repository with `git clone`
- Copy `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate --seed` (it has some seeded data for your testing)
- Run `npm install`
- Run `npm run dev`
- That's it: launch the main URL. 


## License

Basically, feel free to use and re-use any way you want.

---

## More from our LaravelDaily Team

- Check out our adminpanel generator [QuickAdminPanel](https://quickadminpanel.com)
- Subscribe to my [YouTube channel Laravel Business](https://www.youtube.com/channel/UCTuplgOBi6tJIlesIboymGA)
- Enroll in my [Laravel Online Courses](https://laraveldaily.teachable.com/)
