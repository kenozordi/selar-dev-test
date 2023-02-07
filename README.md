# SELAR DEV TEST

## Installation and Requirements

Please check the official laravel installation guide for server requirements and installation before you start. [Laravel Documentation](https://laravel.com/docs/7.x)

The FFMpeg library is used in the app for video conversions, download the library from this [link](https://ffmpeg.org/download.html) and paste the library executable in the root of your project.

**TL;DR command list**

```
git clone https://gitlab.com/kennyozordi/selar-dev-test.git
cd selar_dev_test
composer install
cp .env.example .env (set database connection and APP_URL in .env)
php artisan migrate
php artisan serve
php artisan queue:work
```

---

**Full command list**

1. Open the bash terminal

2. Clone the repository

```
git clone https://gitlab.com/kennyozordi/selar-dev-test.git
```

3. Switch your current working directory to the repo folder

```
cd selar_dev_test
```

4. Install all the dependencies using composer

```
composer install
```

5. Copy the example .env file and make the required configuration changes (such as DB connection) in the .env file

```
cp .env.example .env
```

> **Warning:** Setup Database connection.

6. Run the database migrations (**Set the database connection in .env before migrating**)

```
php artisan migrate
```

---

## Running the Project

Run the laravel development server

```
  php artisan serve
```

The default root url of the Project should be

```
  http://localhost:8000/
```

Run the queue worker

-   The video conversion runs in the background, you have to run the queue which will execute the conversion jobs.

```
  php artisan queue:work
```

---

## Documentation

Find the Postman api documentation with this [link](https://documenter.getpostman.com/view/9974498/2s935prPRH)
