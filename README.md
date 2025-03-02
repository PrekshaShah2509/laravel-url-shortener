# 🚀 Laravel URL Shortener

A simple URL shortener built with Laravel 12. This project allows users to shorten long URLs into shareable links and tracks the number of clicks.

## 🎯 Features
- ✅ Shorten long URLs into tiny, shareable links
- ✅ Redirect shortened URLs to the original URL
- ✅ Track the number of times a short link is accessed
- ✅ Simple, clean UI with TailwindCSS
- ✅ Laravel's built-in validation and Eloquent ORM

## 🛠 Tech Stack
- **Backend:** Laravel 12
- **Database:** MySQL
- **Frontend:** Blade + TailwindCSS

## 🚀 Installation & Setup

### 1️⃣ Clone the Repository
```sh
git clone https://github.com/yourusername/laravel-url-shortener.git
cd laravel-url-shortener
```

### 2️⃣ Install Dependencies
```sh
composer install
```

### 3️⃣ Set Up Environment Variables
Copy the `.env.example` file to `.env`:
```sh
cp .env.example .env
```

Then update your database credentials in `.env`:
```
DB_CONNECTION=mysql
DB_DATABASE=url_shortener
DB_USERNAME=root
DB_PASSWORD=yourpassword
```

### 4️⃣ Generate Application Key
```sh
php artisan key:generate
```

### 5️⃣ Run Database Migrations
```sh
php artisan migrate
```

### 6️⃣ Start the Development Server
```sh
php artisan serve
```

Now, visit `http://127.0.0.1:8000` in your browser! 🎉

## 📜 Usage
1. Enter a long URL in the input field
2. Click "Shorten" to generate a short link
3. Copy the short URL and share it
4. Click tracking is automatically recorded

## 📊 Database Structure
The application uses a simple database structure:
- `short_urls` table: Stores original URLs, their shortened codes, and click counts.
- `clicks` table: Records click events with timestamps and optional user data

## 🧪 Testing
Run the test suite with:
```sh
php artisan test
```

## 🔒 Security
- URLs are validated to prevent malicious links.
- (Optional) Rate limiting can be added using Laravel’s `throttle` middleware.
- No sensitive data is stored in the database.

## 🤝 Contributing
Contributions are welcome! Please feel free to submit a Pull Request.

## 📝 License
This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).