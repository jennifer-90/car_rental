
<!-- Pour modifier les détails d'une voiture spécifique -->

<!-- menu -->

@include('menu')

<!-- Modification des caractéristiques d'une voiture -->

<form action="{{ route('car.update', ['car' => $car->id]) }}" method="post" enctype="multipart/form-data">

    <h1>Modification de l'article</h1>

    @csrf

    <input type="hidden" value="{{ $car->id }}">

    <label for="title">Title:</label><br>
    <input type="text" name="title" id="title" required value="{{$car->title}}"><br><br>

    <label for="content">Content:</label><br>
    <textarea name="content" id="content" cols="30" rows="10" required value="{{$car->content}}"></textarea><br><br>

    <label for="image">Image:</label><br>
    <input type="file" name="image" id="image" value="{{$car->image}}"><br><br>

    <button type="submit">Create car</button>
</form>
