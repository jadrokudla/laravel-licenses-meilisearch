<b> Abstrakt: </b><br>
Užívateľ si vyplní formulár, ktorý sa uloží do databázy licencií. V projekte sú dve funkcie, funkcia parkovania DESC(zostupne) a zoradenie poďla veku ASC(vzostupne). Pomocou týchto funkcií si uživaťeľ, vie vyfiltrovať a zobraziť príslušne údaje. V tomto projekte je tiež implementovaný meilisearch, ktorý slúži ako vyhľadavač. Takisto je tu aj advanced search, uživaťel si pomocou šablony a kritérií, sám vyfiltruje potrebné údaje z databázy. Nakoniec je ukážka, pomocou artisan konzoly, ako sa cez query builder filtrujú dáta z databázy.</br><br>

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
 


