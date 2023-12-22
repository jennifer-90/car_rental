
<!-- Pour afficher les détails d'une voiture spécifique -->

<!-- menu -->

@include('menu')

<h1>{{ $car->title }}</h1>
<img src="{{ asset($car->image) }}" alt="{{ $car->title }}" style="max-width: 300px; max-height: 200px">
<p>{{ $car->content }}</p>

<!-- Ajouter des formulaires pour poser des questions et louer -->
