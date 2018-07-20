
## Mortehan App

This app aims to be a "swiss pocket knife" for our buddy-travel to Mortehan.

### Features

- See next Group Travel dates
- See who participates
- Create two-people group for cooking and cleaning
- See, day by day, which group is designated for cooking, cleaning, who's there, who's not
- Establish a common grocery list
- See who is driving, from where and when
- See how every participant arrives, at what time, and if they need a drive
- Receive notification 1 month / week / day before the event starts
- Receive notification in the morning when it's your day to clean up
- Receive notification in the morning when it's your day to cook
- The admins can set the dates of a future travel
- Anyone can register, but the admin has to invite you into the event
- blog for everyone

## How to Install

The project is based on Laravel and VueJS. It's powered by Progressive Web App technology for the mobile part.

1. Clone this repository
1. Execute `composer install`
1. Execute `cp .env.example .env`
1. Execute `php artisan key:generate`
1. Create a databse, edit the .env file and run `php artisan migrate`
1. Run `yarn` or `npm install`

Run the project and make your local server points to the `public/` folder
