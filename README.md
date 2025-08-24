# Laravel License Management System

### License Management
- ✅ CRUD operations for licenses
- 🔍  search with Meilisearch 
- 📊 groups analysis 
- 🅿️ **Parking license filtering** and management
- 📈 **Theory test score tracking** and filtering
- 🎯 Advanced filtering by multiple criteria

## 🛠️ Tech Stack
- **Framework:** Laravel 12 (PHP 8.2+)
- **Database:** MySQL
- **Search Engine:** Meilisearch
- **Frontend:** Blade Templates, Vite, CSS
- **Development:** Composer, Artisan CLI

## 📸 Screenshots

### License Management Interface
<img src="screenshots/licenses_index.png" alt="Licenses Index Page" width="800">

### Create New License Form
<img src="screenshots/licenses_create.png" alt="License Creation Form" width="800">

### Meilisearch Integration - Instant Search
<img src="screenshots/licenses_search_by_meilisearch.png" alt="Meilisearch Search Functionality" width="800">

### Advanced Search Features
<img src="screenshots/licenses_search_advanced.png" alt="Advanced License Search" width="800">

### Age Group Analysis & Sorting
<img src="screenshots/licenses_sorted_by_age.png" alt="Licenses Sorted by Age Groups" width="800">

### Parking License Filtering
<img src="screenshots/licenses_sorted_by_parking.png" alt="Parking License Management" width="800">

### Laravel Artisan Tinker - Database Queries
<img src="screenshots/licenses_artisan_tinker.png" alt="Artisan Tinker Database Operations" width="800">

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
