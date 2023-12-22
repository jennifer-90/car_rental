<!-- Affiche la liste de toutes les voitures  -->

<!-- menu -->

@include('menu')

@if($cars->isEmpty())
    <p>Aucune voiture disponible pour le moment.</p>
@else
    @foreach($cars as $car)
        <a href="{{ route('car.show', ['car' => $car->id]) }}">
            <img src="{{ asset($car->image) }}" alt="{{ $car->title }}" style="max-width: 300px; max-height: 200px">
        </a>
    @endforeach
@endif

<br><a href="{{ route('car.create') }}"><button>Créer une nouvelle voiture</button></a>

