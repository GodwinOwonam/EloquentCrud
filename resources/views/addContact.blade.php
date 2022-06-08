<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a Phone</title>
</head>
<body>
    <form action="{{route('contacts.add')}}" method="post">
        @csrf
        <input type="text" placeholder="name" name="name" required>
        <input type="text" placeholder="phone number" name="phone" required>
        <input type="text" placeholder="address" name="address">
        <button>Add</button>
    </form>

    <table style="border: solid 3px #333; border-radius: .3rem; margin-top: 2rem">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            {{-- <th colspan="2">Actions</th> --}}
        </thead>
        <tbody>
            @if(isset($contacts))

                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->phone}}</td>
                        <td>{{$contact->address}}</td>
                    </tr>

                @endforeach


            @endif

        </tbody>
    </table>
</body>
</html>
