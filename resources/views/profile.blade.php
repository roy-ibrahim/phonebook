<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new contact</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <h1>Add a new profile</h1>
    <form method="POST" action={{route('save-profile')}}>
        @csrf
        @method('post')
        <div>
            <label>Choose User</label>
            <select name="contactid">
                @foreach ($contacts as $contact)
                <option value={{$contact->id}} name>{{$contact->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Profile Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" id="description">
        </div>
        <div>
            <label>Phone Number</label>
            <input type="text" name="phone" id="phone">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label>Address</label>
            <input type="text" name="address" id="address">
        </div>
        <div>
            <label>Language</label>
            <input type="text" name="language" id="language">
        </div>
        <div>
            <button type="submit">Save Contact</button>
        <div>
    </form>
</body>

</html>