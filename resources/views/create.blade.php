<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new contact</title>
</head>

<style>
body {
    background-color: black;
    color: white;
    text-align: center;
}

label, input, button {
    margin-top: 10px;
}


</style>
<body>
    <form method="POST" action="{{route('save')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" id="name"></input>
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" id="email"></input>
        </div>
        <div>
            <label>Phone Number</label>
            <input type="text" name="phoneNumber" id="phoneNumber"></input>
        </div>
        <div>
            <button type="submit">Save contact</button>
        </div>

    </form>
</body>
</html>