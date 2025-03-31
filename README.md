eMart - Backend Setup (Laravel)
📝 Introduction
The Backend of the eMart eCommerce platform is built with Laravel. It handles business logic, database interactions, and API communication. The backend provides essential features like user management, product management, order tracking, and more.

🌟 Features
Admin Dashboard: View total registered users, track user registrations, manage categories, subcategories, products, and deals.

Product Management: Admins can add, update, or delete products.

Coupon Management: Admins can create discount coupons for products.

Authentication: User and admin authentication using Laravel Sanctum.

Database Management: Admin can manage all records such as products, users, categories, and orders.

⚙️ Installation
📥 Prerequisites
Laravel 11 (Backend Framework)

Composer (PHP Dependency Manager)

MySQL (Database)

💻 Steps to Install
# Clone the Backend Repository:

bash
Copy
git clone https://github.com/kamalkant24/emart-backend.git
# Navigate to the Project Directory:

bash
Copy
cd emart-backend
# Set Up Environment Variables:

Copy the example .env file:

bash
Copy
cp .env.example .env
# Generate Laravel Application Key:

bash
Copy
php artisan key:generate
# Configure the Database in .env:

Update your database credentials in the .env file.

# Run Database Migrations:

bash
Copy
php artisan migrate
# Start the Backend Server:

bash
Copy
php artisan serve
Your backend will be available at: http://localhost:8000

📌 Technologies Used
Laravel 11

MySQL (Database)

Laravel Sanctum (Authentication)

Stripe (Payment Gateway)

