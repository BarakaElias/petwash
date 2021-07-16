

## About Petwash

Petwash is a pet grooming service. Customers submit their bookings online and take their pets to one of our stations.

When an order is marked as complete, an sms will be sent to the customer

## Note

1. Petwash website was created for the main purpose of showcasing how the beem checkout api functions. It shows how the api can be intergrated in a similar service webapp or e commerce site.

2. At time of submission, the callback url in the payment checkout route had not been updated to http://petwash.rf.gd/callback

## Description
This fits the challenge theme by showing the possiblity that a business can have an endpoint on the internet that can facilitate quick inquiry and transactions thus providing less interaction. Moreover, gives the customer more choices on how to pay for the service or product he requires.


## API used

1. PAYMENT CHECKOUT

2. SMS 

Method: Redirect

On the booking form the user is requested to give his phone number and is prompted that the provided phone number will be used to process the payment

## Framework
Laravel 8

## Depolyment notice

index.php and htaccess have been moved outside of the public folder so as to remove the /public from the localhost url so,

in a local environment use the url localhost/foldername Eg.localhost/petwash

## Database Table

Only has a single table

### Table name

orders

### Table columns

order_id  INT   NOT NULL

owner_name      VARCHAR   NOT NULL

pet      VARCHAR     NOT NULL

order_date       VARCHAR    NOT NULL

owner_email     VARCHAR NULL

owner_phone      VARCHAR     NOT NULL

owner_note      TEXT        NULL

owner_paid      VARCHAR     NOT NULL

transactionID       TEXT        NULL

referenceNumber     TEXT        NULL

### Controllers
BeemController - this handles the callback url

FulffilledController - this spins to action when the admin marks an order as completed, it then removes the order from the order list

listOrderController - to list all the orders

SubmitBookController - for submitting the form and handling payment

## How payment handling is done
The SubmitBookController contains the code that calls to the beem api. It first generates a reference number with the prefix 'BWP' then gets a uuid from a free api. It then gets the customers number from the form details then on a succesful api call, the customer is redirected to the beem checkout page.

The amount to be paid

- For dog: 20,000/-

- For small animals: 10,000/-

- This is set in SubmitBookController




### callback
When callback is received at http://petwash.rf.gd/callback it triggers BeemController to get the order with  the returned reference number and set the order to 'yes' meaning payment has been made.

## Website
- [Visit Petwash website](http://petwash.rf.gd/).

When typing the url manually, Please add / after .gd inorder to load the website otherwise it will direct to infinity free landing page Eg.http://petwash.rf.gd/


### Website Navigation
Home  - the homepage

Orders  - shows all the orders made

## Participants

Name: Baraka Elias Urio

Email: barakaurio@yahoo.com



## Purpose
For the beemathon challenge 2021
