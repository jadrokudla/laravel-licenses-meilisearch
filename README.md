# laravel licenses with meilisearch engine
- 🔍  search with Meilisearch 
- 📊 groups analysis 
- 🅿️ **Parking license filtering** 
- 📈 **Theory test score tracking** and filtering
- 🎯 Advanced filtering by multiple criteria

<h1>📸 License Interface</h1>
<img src="screenshots/licenses_index.png" alt="Licenses Index Page" width="800">

<h1>📸 Create new record</h1>
<img src="screenshots/licenses_create.png" alt="License Creation Form" width="800">

 <h1>📸 Meilisearch</h1>
<img src="screenshots/licenses_search_by_meilisearch.png" alt="Meilisearch Search Functionality" width="800">

 <h1>📸 Advanced Search</h1>
<img src="screenshots/licenses_search_advanced.png" alt="Advanced License Search" width="800">

<h1>📸 Age Group Analysis & Sorting</h1>
<img src="screenshots/licenses_sorted_by_age.png" alt="Licenses Sorted by Age Groups" width="800">

<h1>📸 Parking License Filtering</h1>
<img src="screenshots/licenses_sorted_by_parking.png" alt="Parking License Management" width="800">

<h1>📸 Laravel Artisan Tinker - Database Queries</h1>
<img src="screenshots/licenses_artisan_tinker.png" alt="Artisan Tinker Database Operations" width="800">

###  Filtering
```php
// Advanced filtering with query builder
DB::table('licenses')
    ->where('theory_test', '>', 50)
    ->orderBy('theory_test', 'desc')
    ->get();
```
 


