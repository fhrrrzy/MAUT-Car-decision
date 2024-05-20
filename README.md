<img src="pixel-car.png" align="center">

# Car Decision Helper App
This project involves the development of a web application designed to assist users in making decisions when purchasing a second-hand car. The application employs the Multi-Attribute Utility Theory (MAUT) – a decision-making algorithm that evaluates multiple alternatives based on their attributes to provide the most beneficial choice.

The goal of this project is to simplify the process of buying a used vehicle by providing a comprehensive evaluation of various factors such as price, make, model, mileage, vehicle history, and safety ratings. The assessment is not just based on the user's personal preferences but also on objective data about each vehicle.

This tool aims to guide users towards making informed decisions, thereby reducing the risks and uncertainties associated with buying a second-hand car. It is designed as a class assignment, demonstrating how advanced decision-making algorithms can be applied to practical, real-world scenarios.


## Installation Guide
- clone the repository `git clone git@github.com:fhrrrzy/MAUT-Car-decision.git`
- get into directory `cd MAUT-Car-decision`
- install dependencies `composer install`
- configure database connection in `.env` take example from `.env.example`
- run the migration and seeder `php artisan migrate:fresh --seed`
- run the app `php artisan serve`   

> Detault login for admin cms is admin/p!@#$%ssword

## Tech Stack
- Laravel
- Bootstrap
- Javascript

## Third party library
- datatables.js
- dropfiy.js