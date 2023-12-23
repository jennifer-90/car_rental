<!-- Pour afficher les détails d'une voiture spécifique -->

<!-- menu -->

@include('menu')

<!-- Affiche les caractéristiques d'une voiture -->

<h1>{{ $car->title }}</h1>
<img src="{{ asset($car->image) }}" alt="{{ $car->title }}" style="max-width: 300px; max-height: 200px">
<p>{{ $car->content }}</p>

<!-- Ajouter des formulaires pour poser des questions et louer -->


<!-- modifier l'article -->

<form method="POST" action="{{ route('car.update', ['car' => $car->id]) }}" style="display:inline;">
    @csrf
    @method('POST') <!-- Utilisez la méthode POST pour la mise à jour -->
    <button type="submit">Modifier</button>
</form>


<!-- Supprimer l'article -->

<form method="POST" action="{{ route('car.destroy', ['car' => $car->id]) }}" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
