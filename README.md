
![GKN_logo](https://github.com/Abradave/boardGames_backend/blob/main/gkn_logo.png)

# GameKNights backend

## Társasjátékozásra időpontfoglalás projekt backendje

- A projekt egy vállalkozásnak készül, ahol játékmesterek tartanak társasjátékozós eseményeket. Sokan szeretnek új stratégiai társasjátékokat kipróbálni barátokkal/családdal, de nem feltétlenül akarják megvenni az adott társasjátékot, vagy megtanulni a stratégiai társasjátékok hosszú szabályzatát a játékhoz. A játékmester ismerteti a szabályokat a játékosokkal, és vezeti a játékot.

## Követelmények

- PHP 8.1
- Telepített ([composer](https://getcomposer.org/))
- Csomagok telepítéséhez 7zip vagy php.ini-ben engedélyezni a "zip" bővítményt
- Php exe útvonalának felvétele a PATH környezeti változóba (composer telepítésekor elvégezhető)

## Telepítés lépései

- Mappa létrehozása a projektnek
- A mappa megnyitása terminálban
- Git repo klónozása

```sh
git clone https://github.com/Abradave/boardGames_backend.git
```

- Elindítani a XAMPP Apache és MySQL szerverét
- PHP MyAdmin segítségével létrehozni egy board_game_project nevű utf8mb4_general_ci kódolású adatbázist
- Ezután a projekt mappájának megnyitása VS Codeban
- VS Codeban új terminál indítása
- Csomagok telepítése

```sh
composer install
```

- .env állomány létrehozása
  
```sh
cp .env.example .env
```

- App kulcs generálása
  
```sh
php artisan key:generate 
```

- Összes tábla törlése, migráció és seed futtatása

```sh
php artisan migrate:fresh --seed
```

- Vagy migrációk futtatása majd seedelés

```sh
php artisan migrate
php artisan db:seed
```

- Fejlesztői szerver futtatása (local)

```sh
php artisan serve
```

## Adatbázis leírása

- [Adatmodell][def]

[def]: https://github.com/Abradave/boardGames_backend/wiki/Adatmodell
