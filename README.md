# Winter Clothes E-Commerce Website

A PHP and MySQL-based e-commerce website project for a winter clothing store. It includes a storefront layout, product/category pages, reusable PHP header components, and a MySQL database for storing product categories, products, and banner information.

## Features

- Winter clothing e-commerce storefront
- Product/category navigation populated from the database
- Product and category data stored in MySQL
- Reusable PHP header and footer components
- Store pages for browsing products, cart, checkout, contact, blog, and related sections
- Static assets including CSS, JavaScript, images, fonts, and web fonts
- SQL database export included in `winterdb.sql`

> **Note:** Some pages are template/UI pages. The presence of cart, checkout, login, or tracking pages does not necessarily mean that complete order processing, authentication, or payment functionality is implemented.

## Tech Stack

- **Backend:** PHP
- **Database:** MySQL / MariaDB
- **Frontend:** HTML, CSS, JavaScript
- **CSS framework:** Bootstrap
- **Database access:** PHP MySQLi

## Project Structure

```text
Ecommerce-Winter-cloths/
├── admin/              # Admin-related files and configuration
├── css/                # Stylesheets
├── fonts/              # Font assets
├── img/                # Website images
├── js/                 # JavaScript files
├── sass/               # Sass source files
├── webfonts/           # Icon/web font assets
├── header.php          # Shared header and database-driven category menu
├── footer.php          # Shared footer
├── index.php           # Store homepage
├── category.php        # Category/product listing page
├── about.php           # About page
├── cart.html           # Cart page UI
├── checkout.html       # Checkout page UI
├── contact.html        # Contact page UI
├── login.html          # Login page UI
├── winterdb.sql        # Database schema and sample data
└── ...
```

## Requirements

Install one of the following local PHP environments:

- XAMPP (recommended for beginners)
- WAMP
- LAMP

You will need:

- Apache
- PHP
- MySQL or MariaDB
- A web browser

## Installation and Setup

1. **Clone the repository**

   ```bash
   git clone https://github.com/Zohaibcode740/Ecommerce-Winter-cloths.git
   ```

2. **Move the project into your web server directory**

   For XAMPP, copy the project folder to:

   ```text
   C:\xampp\htdocs\Ecommerce-Winter-cloths
   ```

   On Linux, the directory is commonly:

   ```text
   /var/www/html/Ecommerce-Winter-cloths
   ```

3. **Start Apache and MySQL** from your local server control panel.

4. **Create the database**

   Open phpMyAdmin, create a database named:

   ```text
   winterdb
   ```

5. **Import the database**

   Select the `winterdb` database in phpMyAdmin and import the repository's `winterdb.sql` file.

6. **Configure the database connection**

   Open `admin/config.php` and update the connection values to match your local MySQL setup:

   ```php
   <?php
   $con = mysqli_connect("localhost", "root", "", "winterdb");

   if (!$con) {
       die("Database connection failed: " . mysqli_connect_error());
   }
   ?>
   ```

   The values shown above match a common default XAMPP setup. Change the username and password if your MySQL configuration is different.

7. **Open the website**

   Visit:

   ```text
   http://localhost/Ecommerce-Winter-cloths/
   ```

## Database

The supplied `winterdb.sql` file creates the `winterdb` database tables:

| Table | Purpose |
| --- | --- |
| `tbl_banner` | Stores banner image paths |
| `tbl_categies` | Stores product categories |
| `tbl_products` | Stores product names, prices, descriptions, image paths, and category IDs |

The products table references the categories table through `p_cid`.

## Customization

- Add or update product categories in `tbl_categies`.
- Add products in `tbl_products` and make sure each product uses a valid category ID.
- Update banner image records in `tbl_banner`.
- Place uploaded product/banner images in the appropriate upload directory and store their relative paths in the database.
- Edit stylesheets in the `css/` directory to customize the appearance.

## Troubleshooting

- **Database connection error:** Check that MySQL is running and that the credentials in `admin/config.php` are correct.
- **Unknown database:** Create `winterdb` and import `winterdb.sql`.
- **Images not loading:** Check the image paths stored in the database and confirm that the referenced files exist.
- **PHP files downloading or displaying as text:** Run the project through Apache (for example, using the XAMPP `htdocs` directory), not by opening PHP files directly.

## Contributing

Contributions and suggestions are welcome. Fork the repository, create a feature branch, make your changes, and open a pull request.

## License

No license file is currently included in this repository. Unless a license is added, reuse and redistribution are not automatically permitted.

---

Built with PHP, MySQL, HTML, CSS, and JavaScript.
