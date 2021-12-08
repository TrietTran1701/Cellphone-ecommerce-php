
# Cellphone ecommerce PHP
## 📑 Overview
Creating ecommerce website for phone-selling using PHP, HTML, CSS, JS and more

### Interface of the website:

![alt](https://github.com/TrietTran1701/Cellphone-ecommerce-php/blob/main/web_img/img1.png)

![alt](https://github.com/TrietTran1701/Cellphone-ecommerce-php/blob/main/web_img/img2.png)


## 🔎 Project details

### Project Structure
#### Frontend part contains:
+ Index page
+ Product details page
+ Cart page
+ Checkout page ( users fill in form to pay the bill )
+ Contact page
#### Admin part contains:
+ Manage user account
+ Manage products category
+ Manage all products
+ Manage orders
+ Manage users’ feedback


#### Developing Process
*Homepage:*

I apply HTML5 & CSS3 to make the website have a good-looking and user-friendly appearance. For the responsive design, I use css grid and bootstrap 4. In addition, by using Javascript, some effects of the website ( like scrolling or hovering ) can become smooth.


*Search bar:*

Applying ajax live-search technique, I can allow customers to input the name of a product into the search field. I query the database and display the product if it exists. Clicking on the product’s name also takes users to its details page

*Product details page:*

This page displays the detailed description of the product, and shows the price. Users can increase or decrease the number of products they want to buy ( a jquery function will handle this part whenever a button is clicked ) and add products into cart.

*Cart page and checkout page:*

The main purpose of the cart page is to summarize the products added to the cart in the _SESSION[‘cart’]. Users can also decide which products to remove, or increase the number of products they want to buy


*Login and sign up form:*

Customers who don’t have an account can sign up, their email address and password after registration will be stored in the database, and the password will be hashed using MD5 for security purposes.

*Dashboard page overview*

The left-hand side of the page will show different categories for different purposes. When an admin ( or shop owner ) makes changes to any of these categories, it will also affect the database.
