<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Meno</th>
                <th>Email</th>
                <th>Telefónne číslo</th>
                <th>Popis</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kontakty as $kontakt)
                <tr>
                    <td>{{ $kontakt->meno }}</td>
                    <td>{{ $kontakt->email }}</td>
                    <td>{{ $kontakt->telefone_cislo }}</td>
                    <td>{{ $kontakt->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('create_kontakt') }}">Pridať kontakt</a>
</body>
</html>

{{-- Article::where('published_at', true)->get(); 
cca to sql
SELECT * FROM articles WHERE is_published = 1;

Article::where('published_at', true)->get();
SELECT * FROM articles WHERE is_published = 1;

Article::has(user.profile)->verified()->latest()->get()
Article:: mode Article(trieda reprezentujuca clanky)

has('user.profile'), filtruje len clansky, ktory maju vztah relationshop k pouzivatelovi user. a tento pouzivatel ma profil, 
inymi slovami vybera len clanky, kde autom ma vyplneny profil.

verified() filtruje len oeverene clanky
latest()zoradi vysledky od najnovcsiu po najstarsi podla strpla create_at

get() vykona query  a vrati koleckiu vysledok

-Kazdy eloquent model napr. Article, zoppoveda jednej tabulke v databaze
-vztahy medzi tabulkami napr. user.profile sa definuju ako metody v modeli.

-namiesto pisania ciseho SQL pracujes s modelmi(triedami)
php artisan make:model Article -mcr

-metody ako has(), where(), latest(), get() su query builder, ktory generuje SQL za teba,

Article::where('published_at', true)->get() je to iste ako SELECT * FROM articles WHERE is_published = 1;
VYHODY ORM
-pracujes v objektami, nie SQL - citalenjsi kod
-Automaticke vztahy (hasOne, belongsTo, manyToMany)
-query builder mozes retazit podmienkamy where()->orderBy()->limit()

Article::has('user.profile');
v modeli Article
public function user() {
    return $this->belongsTo(User::class);
}
v modeli User
public function profile() {
    return $this->hasOne(Profile::class)
}

-Ak chces kontrolovat len user (bez profile) staci has('user')
-Ak chces nacitat vztah pre dalsie pouzitie, mozes pouzit with('user.profile') toto nerobi filtering, len "eager" loading
-takze bodka(user.profile) je skratka na kontrolu vnorenych vztahov v dotaze

Ano, has() je vstavana metoda v laravel eloqunt ORM, ktory sluzi na filtrovanie modelov za zaklade existenciu vztahu(relationshop)

Co robi has()
-Kontroluje, ci model ma priradeny vztah(napr. ci clanok ma autora).
-moze byt pouzita na vnorene vztahy (cez bodku. napr user.profile)
- SQL sa to preklada EXISTS

Ziskanie clankov ktora maju autora(user)
Article::has('user')->get();

has() nie je staticka metoda, je to metoda queary builderu, ktora sa pouziva na dynamicke zostovanie dotazov v Laravel Eloqeunt

Atricle::all() staticka metoda, ale has() where() with() volanu k Existujucej instanncii

Staticke metody v Eloquente 
Article::all(); // staticka metoda
Article::find(1); // staticka metoda
Article::where(...)->get(); // query builder (nie staticke); -

ked vrati builder, vrati objekt. 
Article::           // Začína query (vráti Builder)
   ->has(...)      // Metóda na filtrovanie vzťahov
   ->verified()    // Vlastná scope metóda (ak existuje)
   ->latest()      // Metóda na zoradenie
   ->get();        // Metóda na vykonanie dotazu

   // Eloquent (práca s modelom)
$users = User::where('active', 1)->orderBy('name')->get();

// Query Builder (práca s DB facade)
$users = DB::table('users')->where('active', 1)->orderBy('name')->get(); --}}
