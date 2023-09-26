<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Phonebook</title>
</head>

<style>
body {
    text-align: center;
}
</style>
<body>
    <h1>Welcome to the Phonebook</h1>
    <table border="2">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>image</th>
            <th>Delete</th>
        </tr>
        @foreach ($contacts as $contact)
            <tr>
                <th>{{$contact->name}}</th>
                <th>{{$contact->email}}</th>
                <th>{{$contact->phoneNumber}}</th>
                <th><image src="{{asset('storage/images/'.$contact->image)}}" height="50px"/></th>
                <th>
                    <form method="POST" action="{{route('delete', ['contact' => $contact])}}">
                        @csrf 
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </th>
            </tr>
        @endforeach
    </table>
    <a href={{ route('create') }}>Add a new contact</a>
    <div>
        <a href={{route('profile')}}>Add a new profile</a>
    </div>
</body>
</html>