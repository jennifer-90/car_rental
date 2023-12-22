<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RetroDrive</title>

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */

        @import url(https://fonts.bunny.net/css?family=aclonica:400);
        @import url(https://fonts.bunny.net/css?family=abel:400);
        @import url(https://fonts.bunny.net/css?family=akaya-kanadaka:400);

        h1 {
            font-family: 'Aclonica', sans-serif;
            text-align: center;
        }

        h2, p {
            font-family: 'Abel', sans-serif;
            text-align: center;
            margin: auto;
            width: 43rem;
        }

        .menu{
            font-family: 'Akaya Kanadaka', display;
            font-size: 2rem;
            text-align: right;
        }

    </style>
</head>


<body>
<div>

    <!-- menu -->

    @include('menu')

    <!-- page de garde -->

    <div>
        <h1>RetroDrive</h1>
        <div>
            <h2>Explorez le Charme Classique au Volant </h2>
            <p>
                Chez RetroDrive, nous vous invitons à vivre l'expérience de conduite ultime à travers les
                décennies. Plongez dans l'histoire de l'automobile avec notre impressionnante flopée de voitures de
                collection
                soigneusement entretenues, prêtes à être vos compagnons de route pour des moments inoubliables.
            </p><br>
        </div>
        <div>
            <h2>Des Icônes sur la Route</h2>
            <p>
                Parmi nos joyaux mécaniques, découvrez la majestueuse Chevrolet Impala, la puissante Chevrolet Chevelle,
                la
                nostalgique MG MGB, la mythique Porsche 911, et bien d'autres. Chacune de nos voitures incarne une
                époque,
                capturant l'essence du style, de la sophistication et de la performance.
            </p><br>
        </div>
        <div>
            <h2>Un Voyage dans le Temps, Sans Compromis</h2>
            <p>
                À RetroDrive, nous nous engageons à offrir bien plus qu'une simple location de voiture. Embrassez le
                luxe
                authentique, le rugissement des moteurs classiques et l'excitation de parcourir les routes au volant
                d'une
                véritable légende. Nos voitures sont méticuleusement entretenues, garantissant une expérience de
                conduite fluide
                et sans souci.
            </p><br>
        </div>
        <div>
            <h2>Réservez dès Aujourd'hui, Créez des Souvenirs Éternels</h2>
            <p>
                Naviguez à travers notre collection, choisissez
                votre modèle préféré et réservez votre escapade dans le temps dès maintenant. Que ce soit pour une
                journée
                spéciale, un événement marquant ou simplement pour s'offrir un moment de pure élégance, RetroDrive rend
                chaque
                trajet aussi mémorable que la voiture elle-même.
            </p><br>
        </div>
        <div>
            <h2>Ouvrez la Porte de l'Histoire Automobile</h2>
            <p>
                Rendez-vous chez RetroDrive - où chaque virage est une évasion dans le passé, chaque kilomètre une
                histoire à
                raconter. Vivez le rêve, conduisez la légende !

            </p><br>
        </div>
    </div>

</div>
</body>
</html>
