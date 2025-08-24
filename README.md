# Laravel License Management System

### License Management
- 🔍  search with Meilisearch 
- 📊 groups analysis 
- 🅿️ **Parking license filtering** 
- 📈 **Theory test score tracking** and filtering
- 🎯 Advanced filtering by multiple criteria

## 🛠️ Tech Stack
- **Framework:** Laravel 12 (PHP 8.2+)
- **Database:** MySQL
- **Search Engine:** Meilisearch
- **Frontend:** Blade Templates, Vite, CSS
- **Development:** Composer, Artisan CLI

 📸 Screenshots

📸 License Interface
<img src="screenshots/licenses_index.png" alt="Licenses Index Page" width="800">

📸 Create new record
<img src="screenshots/licenses_create.png" alt="License Creation Form" width="800">

📸 Meilisearch 
<img src="screenshots/licenses_search_by_meilisearch.png" alt="Meilisearch Search Functionality" width="800">

📸 Advanced Search 
<img src="screenshots/licenses_search_advanced.png" alt="Advanced License Search" width="800">

📸 Age Group Analysis & Sorting
<img src="screenshots/licenses_sorted_by_age.png" alt="Licenses Sorted by Age Groups" width="800">

📸 Parking License Filtering
<img src="screenshots/licenses_sorted_by_parking.png" alt="Parking License Management" width="800">

📸 Laravel Artisan Tinker - Database Queries
<img src="screenshots/licenses_artisan_tinker.png" alt="Artisan Tinker Database Operations" width="800">



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



### Theory Test Filtering
```php
// Advanced filtering with query builder
DB::table('licenses')
    ->where('theory_test', '>', 50)
    ->orderBy('theory_test', 'desc')
    ->get();
```
 🤝 Contributing
 📄 License


