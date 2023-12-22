

<!-- menu -->

@include('menu')

<!-- formu -->

<form action="{{ route('car.store') }}" method="post" enctype="multipart/form-data">

    <h1>Creation of a car article</h1>

    @csrf

    <label for="title">Title:</label><br>
    <input type="text" name="title" id="title" required><br><br>

    <!-- FAIRE : input hidden id foreign key -->

    <label for="content">Content:</label><br>
    <textarea name="content" id="content" cols="30" rows="10" required></textarea><br><br>

    <label for="image">Image:</label><br>
    <input type="file" name="image" id="image"><br><br>

    <button type="submit">Create car</button>
</form>
