# Read Me

## Installation instructions

To install this project on your local machine, please follow:

* run composer update to get latest vendor options
* In the .env file there is database username and password settings (note this should never be included in git but for testing purpose this has been included)
* In command line/terminal cd into the root directory and run $ php artisan migrate
* This will build up the database with the correct table (note there is an sql file in the root directory for an example)
* chmod -R 777 the storage directory
* run this command php artisan storage:link (this is used to get the results.txt file) this creates a sym link to the storage directory in your public folder.

## How it works

I have created a little backend, you can use:

* URL: http://project-name/create to add to the database and then this will create a txt file which contains the data in a json file.
* This file is then being used in the ResultController and pulls 4 results and when you scroll down it will load the next 4 results

Hope this is what you were looking for!