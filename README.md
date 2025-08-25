 Abstrakt:
MVC project, Implementácia komplexného filtrovania a vyhľadávania.
Použité technológie a postupy:
Eloquent ORM pre databázové operácie, Laravel Scout integrovaný s Meilisearch pre okamžité full-textové vyhľadávanie, Tvorba RESTful API so štruktúrovanými JSON odpoveďami

 Absract:
Demonstrates development abilities suitable for license management, or any system requiring complex data filtering, search functionality, and MVC web application architecture.
Using Eloquent ORM for database operations, Laravel Scout integration with Meilisearch for instant full-text search capabilities, and RESTful API development returning structured JSON responses.
 

  
- 🔍  search with Meilisearch 
- 📊 groups analysis 
- 🅿️ **Parking license filtering** 
- 📈 **Theory test score tracking** and filtering
- 🎯 Advanced filtering by multiple criteria


<h1>📸 License Interface</h1>
<img src="screenshots/licenses_index.png" alt="Licenses Index Page" width="800">

<h1>📸 Create new record in database</h1>
<img src="screenshots/licenses_create.png" alt="License Creation Form" width="800">

 <h1>📸 Meilisearch by query "bas"</h1>
<img src="screenshots/licenses_search_by_meilisearch.png" alt="Meilisearch Search Functionality" width="800">

 <h1>📸 Advanced Search by criteria</h1>
<img src="screenshots/licenses_search_advanced.png" alt="Advanced License Search" width="800">

<h1>📸 Age Group Analysis, Sorting by function</h1>
<img src="screenshots/licenses_sorted_by_age.png" alt="Licenses Sorted by Age Groups" width="800">

<h1>📸 Parking License Filtering by function</h1>
<img src="screenshots/licenses_sorted_by_parking.png" alt="Parking License Management" width="800">

<h1>📸 Laravel Artisan Tinker - Database Queries by criteria</h1>
<img src="screenshots/licenses_artisan_tinker.png" alt="Artisan Tinker Database Operations" width="800">

###  Filtering
```php
//  filtering with query builder
DB::table('licenses')
    ->where('theory_test', '>', 50)
    ->orderBy('theory_test', 'desc')
    ->get();
```
 


