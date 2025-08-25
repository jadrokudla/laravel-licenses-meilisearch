<b> Abstrakt: </b><br>
Užívateľ vyplní formulár, ktorý sa uloží do databázy licencií. Projekt obsahuje dve funkcie: zoradenie parkovania DESC (zostupne) a zoradenie podľa veku ASC (vzostupne). Pomocou týchto funkcií si používateľ vie vyfiltrovať a zobraziť príslušné údaje.
V projekte je tiež implementovaný Meilisearch, ktorý slúži ako vyhľadávač. Ďalej je k dispozícii advanced search (pokročilé vyhľadávanie), kde si používateľ pomocou šablóny a kritérií sám vyfiltruje potrebné údaje z databázy.
Nakoniec je súčasťou ukážka využitia Artisan konzoly na filtrovanie dát z databázy pomocou query buildera.</br><br>

- 🔍 search
- 📊 groups analysis 
- 🎯 Advanced filtering by multiple criteria
  
<h2>📸 license Interface</h2>
<img src="screenshots/licenses_index.png" alt="Licenses Index Page" width="800">

<h2>📸 create new record in database</h2>
<img src="screenshots/licenses_create.png" alt="License Creation Form" width="800">

 <h2>📸 search by query "bas" => basic</h2>
<img src="screenshots/licenses_search_by_meilisearch.png" alt="Meilisearch Search Functionality" width="800">

 <h2>📸 advanced search by criteria</h2>
<img src="screenshots/licenses_search_advanced.png" alt="Advanced License Search" width="800">

<h2>📸 age group filtering by function</h2>
<img src="screenshots/licenses_sorted_by_age.png" alt="Licenses Sorted by Age Groups" width="800">

<h2>📸 parking license filtering by function</h2>
<img src="screenshots/licenses_sorted_by_parking.png" alt="Parking License Management" width="800">

<h2>📸 artisan tinker - database queries by criteria</h2>
<img src="screenshots/licenses_artisan_tinker.png" alt="Artisan Tinker Database Operations" width="800">

###  Filtering
```php
//  filtering with query builder
DB::table('licenses')
    ->where('theory_test', '>', 50)
    ->orderBy('theory_test', 'desc')
    ->get();
```
 


