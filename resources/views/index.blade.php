<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .list-group-o{
        width: 300px;
        height: 200px;
        background-color: #1d68a7;
        border-radius: 20px;
        padding: 40px;
        list-style: none;
        margin: 10px;
    }
    .container{
        display: flex;
        justify-content: center;
        flex-direction: row;
        flex-wrap: wrap;
    }
</style>
<body>

<div class="container ">
    @foreach($books as $book)
    <ul class="list-group-o">
            <li class="list-group-item">{{$book->id}}</li>
            <li class="list-group-item">{{$book->title}}</li>
            <li class="list-group-item">{{$book->author}}</li>
            <li class="list-group-item">{{$book->created_at}}</li>
            <li class="list-group-item">{{$book->updated_at}}</li>
            <li class="list-group-item">
                <button class="btn btn-primary">ویرایش</button>
            </li>
    </ul>
    @endforeach

</div>

</body>
</html>
