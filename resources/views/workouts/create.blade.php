<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
    <h1>Create a workout-tracker</h1>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}<li>
        @endforeach
        <ul>
            @endif
            <div>
    <form method="post" action="{{route('workout.store')}}">
        @csrf
        @method('post')
    <div>
    <label>Name</label>
    <input type="text" name="name" placeholder="Name" />
    </div>
    <div>
    <label>durasi jam</label>
    <input type="text" name="durasi" placeholder="durasi" />
    </div>
    <div>
    <label>intensitas</label>
    <input type="text" name="intensitas" placeholder="intensitas" />
    </div>
    <div>
    <label>Description</label>
    <input type="text" name="description" placeholder="Description" />
    </div>
    <div>
    <input type="submit" value="Save a New workout list" />
    </div>
    </form>
    </body>
    </html>