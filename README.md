<b> Abstrakt: </b><br>
Užívateľ vyplní formulár, ktorý sa uloží do databázy licencií. Projekt obsahuje dve funkcie: zoradenie parkovania DESC (zostupne) a zoradenie podľa veku ASC (vzostupne). Pomocou týchto funkcií si používateľ vie vyfiltrovať a zobraziť príslušné údaje.
V projekte je tiež implementovaný Meilisearch, ktorý slúži ako vyhľadávač. Ďalej je k dispozícii advanced search (pokročilé vyhľadávanie), kde si používateľ pomocou šablóny a kritérií sám vyfiltruje potrebné údaje z databázy.
Nakoniec je súčasťou ukážka využitia Artisan konzoly na filtrovanie dát z databázy pomocou query buildera.</br><br>

- 🔍 search
- 📊 groups analysis 
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
 


