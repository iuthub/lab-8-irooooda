# Labs 7 and 8

## Student Details

- Student ID: `U1610080`
- Student Name: `Iroda Ulmasboeva`
- Section Number: `001`

## Tasks
Finish following tasks in this project:

- [ ] Create `Post` model and list its instances in corresponding templates: `\resources\views\blog\index.blade.php` and `\resources\views\admin\index.blade.php`
- [ ] Show post contents in corresponding template: `\resources\views\blog\post.blade.php`
- [ ] Implement #Create Post# function in corresponding template: `\resources\views\admin\create.blade.php`
- [ ] Implement #Edit Post# function in corresponding templates: `\resources\views\admin\index.blade.php` and `\resources\views\admin\edit.blade.php`
- [ ] Implement #Delete Post# function in corresponding template: `\resources\views\admin\index.blade.php`
- [ ] Create `Like` model and implement #Like a Post# function which shows how many times the post has been liked in templates: `\resources\views\blog\index.blade.php` and `\resources\views\blog\post.blade.php`.
- [ ] Create `Tag` model and implement #Tag a Post# function which assigns/unassigns given post to selected list of tags in templates: `\resources\views\blog\index.blade.php` and `\resources\views\blog\post.blade.php`.

## Usage
Simply clone this repo and run `composer install` to install all the required dependencies. Make sure to rename the `.env.example` file to `.env` and also run `php artisan key:generate` to generate an application key for this Laravel app.

# Reference
This repository is forked from the starting source code of the "PHP Development with Laravel - Working with Models & Data" course on Pluralsight by Max Schwazmueller [@mschwarzmueller](https://github.com/mschwarzmueller/pluralsight-laravel-getting-started).

