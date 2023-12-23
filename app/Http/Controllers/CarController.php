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
use Illuminate\Support\Facades\Storage;
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

        //Validation des données du formulaire de création
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

        //Insertion de l'image
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

        //Sauvegarde de la voiture en db
        $car->save();


        //Redirection vers la page de détails de la voiture
        return redirect()->route('car.show', ['car' => $car->id])->with('success', 'Car created successfully');
    }

    public function show(Car $car) {
        //Affichage d'une voiture
        return view('cars.showCar', compact('car'));
    }


    public function edit(Car $car) {
        return view('car.updateCar', compact('car'));
    }

    /*-----------------------CHECK-------------------------*/

    public function update(UpdateCarRequest $request, Car $car) {

        //Règles de validation
        $rules = [
            'title'   => 'required|max:255',
            'content' => 'required',
        ];

        //Si il y'a une nouvelle mage
        if ($request->hasFile('image')) {
            $rules['image'] = 'image|mimes:jpeg,png,jpg,gif,svg|max:3072';
        }
        $this->validate($request, $rules);


        //Si on modifie l'image, on supprime l'ancienne
        if ($request->hasFile('image')) {
            //on supprime l'ancienne
            Storage::delete($car->image);
            $path_img = $request->image->store('car');
        }

        //On met à jour les infos:
        $car->update([
            'title'   => $request->input('title'),
            'content' => $request->input('content'),
            'image'   => isset($path_img) ? $path_img : $car->image
        ]);

        //redirection vers le car spécifique
        return redirect(route('car.show', ['car => $car->id'])->with('success', 'Car updated successfully'));
    }


    public function destroy(Car $car) {

        //On supprime l'image existante
        Storage::delete($car->image);

        $car->delete();

        return redirect(route('cars.index'))->with('sucess', 'car deleted successfully');

    }
}
