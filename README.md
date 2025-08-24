# Laravel License Management System

A comprehensive web application built with **Laravel 12** for managing driver's licenses and contacts, featuring advanced search capabilities powered by **Meilisearch**.
## 🚀 Features

### License Management
- ✅ Complete CRUD operations for driver's licenses
- 🔍 **Instant search** with Meilisearch integration
- 📊 **Age group analysis** with custom sorting algorithms
- 🅿️ **Parking license filtering** and management
- 📈 **Theory test score tracking** and filtering
- 🎯 Advanced filtering by multiple criteria

### Contact Management
- 👥 Contact database with full CRUD functionality
- 📝 Form validation and error handling
- 🔒 Mass assignment protection
- 📋 Clean list views with responsive design

### Technical Highlights
- 🏗️ **MVC Architecture** following Laravel best practices
- 🔍 **Laravel Scout** integration for search functionality
- 🛡️ **Form validation** and security measures
- 📱 **Responsive design** with clean UI
- ⚡ **Query optimization** with proper indexing

## 🛠️ Tech Stack

- **Framework:** Laravel 12 (PHP 8.2+)
- **Database:** MySQL
- **Search Engine:** Meilisearch
- **Frontend:** Blade Templates, Vite, CSS
- **Development:** Composer, Artisan CLI

## 📸 Screenshots

### Homepage
![Homepage](screenshots/homepage.png)

### Contact Management
![Contacts List](screenshots/contacts-list.png)
![Create Contact Form](screenshots/create-contact-form.png)

### License Management
![Licenses List](screenshots/licenses-list.png)
![Create License Form](screenshots/create-license-form.png)

### Search & Filtering
![Search Functionality](screenshots/search-functionality.png)
![Age Group Analysis](screenshots/licenses-by-age-group.png)
![Parking Licenses](screenshots/licenses-by-parking.png)

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/jadrokudla/laravel-licenses-meilisearch.git
   cd laravel-licenses-meilisearch
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database setup**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

5. **Start Meilisearch**
   ```bash
   ./meilisearch.exe
   ```

6. **Import search data**
   ```bash
   php artisan scout:import "App\Models\License"
   ```

7. **Run the application**
   ```bash
   php artisan serve
   npm run dev
   ```

## 💡 Key Learning Outcomes

This project demonstrates proficiency in:

- **Laravel Framework:** Models, Controllers, Migrations, Eloquent ORM
- **Database Design:** Proper table relationships and indexing
- **Search Integration:** Meilisearch setup and Laravel Scout
- **Form Handling:** Validation, mass assignment protection
- **Query Optimization:** Efficient database queries and filtering
- **MVC Pattern:** Clean separation of concerns
- **Git Workflow:** Version control and repository management

## 🗂️ Project Structure

```
app/
├── Http/Controllers/
│   ├── KontaktyController.php    # Contact management
│   └── LicenseController.php     # License management & search
├── Models/
│   ├── Kontakt.php              # Contact model
│   ├── License.php              # License model with search
│   └── User.php                 # User authentication
database/
├── migrations/                  # Database schema
└── seeders/                    # Sample data
resources/
├── views/                      # Blade templates
└── css/app.css                 # Styling
routes/
└── web.php                     # Application routes
```

## 🎯 Advanced Features

### Custom Search Algorithm
```php
public function search(Request $request)
{
    $query = $request->input('query');
    $licenses = License::search($query)->get();
    return view('licenses', compact('licenses'));
}
```

### Age Group Analysis
```php
public function sortByAgeGroup()
{
    // Custom algorithm for age group categorization
    // with optimized database queries
}
```

### Theory Test Filtering
```php
// Advanced filtering with query builder
DB::table('licenses')
    ->where('theory_test', '>', 50)
    ->orderBy('theory_test', 'desc')
    ->get();
```

## 📈 Future Enhancements

- [ ] User authentication system
- [ ] API endpoints for mobile integration
- [ ] Advanced reporting dashboard
- [ ] Email notifications
- [ ] File upload functionality
- [ ] Multi-language support

## 🤝 Contributing

This is a portfolio project, but suggestions and feedback are welcome!

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
