# README #

This is a Database Migrator using [Phinx](http://docs.phinx.org/en/latest/) and to fake the data using [Faker](https://github.com/fzaninotto/Faker).

### Steps to Set up Database Migrator and Seeder ###

* Clone the repository first to your computer
* composer install (make sure your computer already got installed with php and [composer](https://getcomposer.org/))
* Copy phinx.yml.example to phinx.yml
* Set the environment on phinx.yml based on needed

### How do I get run the Database Migrator and Seeder? ###

* php vendor/bin/phinx create migrationName -> to create the migration
* php vendor/bin/phinx migrate -> to run the migration
* php vendor/bin/phinx migrate -e testing -> to run the migration based on environment
* php vendor/bin/phinx seed:create TableSeeder -> to create a seeder based on table
* php vendor/bin/phinx seed:run -> run all created seeder on seeder folder
* php vendor/bin/phinx seed:run -s TableSeeder -> to run the specific seeder

### Contribution guidelines ###

* Writing migration
* Writing seeder
* git checkout -b branch-name
* git commit -am "commit message"
* git push origin branch-name
* Create pull request
* Wait for the pull request being reviewed and approved

### Who do I talk to? ###

* Repo owner or admin
* Other community or team contact
