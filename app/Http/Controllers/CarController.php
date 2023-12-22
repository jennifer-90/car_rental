<?php

/*--------------------------------------------------*/
//app/Http/Controllers/CarController
//app/Models/Car.php
//database/migrations/...create_cars_table.php
/*--------------------------------------------------*/

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarController extends Controller
{

    public function index() //Affichage de toutes les voitures
    {
        $cars = Car::all();
        return view('cars.indexCars', compact('cars'));
    }

    public function create() {
        return view('cars.createCar');
    }

    public function store(StoreCarRequest $request) {

        /*-------- Validation données --------*/

        //Validation des données du formulaire de create
        $request->validate([
            'title'   => 'required|max:255',
            'content' => 'required',
            'image'   => 'image|mimes:jpeg,png,jpg,gif,svg|max:3072', //3mo
        ]);

        //Création d'une nouvelle instance du modele Car
        $car = new Car([
            'title'   => $request->input('title'),
            'content' => $request->input('content'),
            'slug'    => str::slug($request->input('title')) // Générer un slug à partir du titre
        ]);

        /*-------- Insertion image --------*/
        if ($request->hasFile('image')) {

            //On stock le fichier dans la variable image
            $image = $request->file('image');

            //non du fichier: date + nom original du fichier
            $imageName = time() . '_' . $image->getClientOriginalName();

            //déplace le fichier vers le repertoire public/img
            $image->move(public_path('img'), $imageName);

            //on affecte à image de l'instance car, le chemin absolu
            $car->image = 'img/' . $imageName;
        }

        /*-------- Sauvegarde car dans db --------*/
        $car->save();


        //Redirection vers la page de détails de la voiture
        return redirect()->route('car.show', ['car' => $car->id])->with('success', 'Car created successfully');
    }

    public function show(Car $car) {
        //Affichage d'une voiture
        return view('cars.showCar', compact('car'));
    }


    public function edit(Car $car) {
        //
    }


    public function update(UpdateCarRequest $request, Car $car) {

    }


    public function destroy(Car $car) {
        //
    }
}
