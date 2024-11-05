<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<h1>Create a workout tracker</h1>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}<li>
    @endforeach
    <ul>
        @endif
        <div>  
<form method="post" action="{{ route('workout.update', ['workout' => $workout->id]) }}">

    @csrf
    @method('put')
<div>
<label>Name</label>
<input type="text" name="name" placeholder="Name" value="{{$workout->name}}"/>

</div>
<div>
<label>durasi</label>
<input type="text" name="durasi" placeholder="durasi" value="{{$workout->durasi}}" /> 
</div>
<div>
<label>intensitas</label>
<input type="text" name="intensitas" placeholder="intensitas" value="{{$workout->intensitas}}" />
</div>
<div>
<label>Description</label>
<input type="text" name="description" placeholder="Description" value="{{$workout->description}}" />
</div>
<div>
<input type= "submit" value="Update" />
</div>
</form>
</body>
</html>