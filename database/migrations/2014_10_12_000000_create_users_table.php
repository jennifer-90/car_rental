<?php

/*--------------------------------------------------*/
//app/Http/Controllers/UserController
//app/Models/User.php
//database/migrations/...create_users_table.php
/*--------------------------------------------------*/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   /*--

   Laravel utilise ces 2 méthodes lors de l'exécution des COMMANDES: "migrate" et "migrate:rollback".

   => php artisan migrate - Exécute la méthode "up" de chaque migration qui n'a pas encore été exécutée dans la
   base de données.

    => php artisan migrate:rollback - Exécute la méthode down de chaque migration dans l'ordre inverse dans
   lequel elles ont été exécutées lors de la migration initiale.
   Cela permet de revenir en arrière et d'annuler les modifications apportées à la base de données.

   --*/

    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
