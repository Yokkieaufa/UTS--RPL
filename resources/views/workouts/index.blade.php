<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Workout Tracker</h1>
    <style>
        /* Styling untuk membuat judul berwarna merah */
        h1 {
            color: red;
            display: flex;
            align-items: center;
            font-size: 2em;
        }
        .icon {
            font-size: 1.5em;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>
        <span class="icon">🏋️‍♂️</span>
        Healty People
    </h1>
    <div>Catatan latihan</div>  
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>durasi jam</th>
                <th>intensitas</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</>
                <style>
                    th{
                        color: blue; 
                    }
                    </style>
    </tr>
    @foreach($workouts as $workout)
    <tr>
        <td>{{$workout->id}}</td>
        <td>{{$workout->name}}</td>
        <td>{{$workout->durasi}}</td>
        <td>{{$workout->intensitas}}</td>
        <td>{{$workout->description}}</td>
        <td>
       <a href="{{route('workout.edit',['workout'=>$workout])}}">edit</a>
    </td>
<td>
<form action="{{ route('workout.destroy', $workout->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

</td>
    @endforeach
    <table> 
        <td>
           
        <div>
</body>
</html>