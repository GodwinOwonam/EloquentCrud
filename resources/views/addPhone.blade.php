<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a Phone</title>
</head>
<body>
    {{-- <div>{{auth()->user()}}</div> --}}
    <form action="{{route('addPhone')}}" method="post">
        @csrf
        <input type="text" placeholder="number" name="number">
        <button>Submit</button>
    </form>
    <p>Already registered phone? <a href="{{URL::to('/user/my-phone')}}">View Phone</a></p>
</body>
</html>
