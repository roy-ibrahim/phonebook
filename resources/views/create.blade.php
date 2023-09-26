<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new contact</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <form method="POST" action="{{route('save')}}" enctype="multipart/form-data">
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
            <label>add image to your contact</label>
            <input type="file" name="image"/>
            <button type="submit">Save contact</button>
        </div>
    </form>
        {{-- <div>
            <form>
                <div class="form-group">
                    <label for="country">Country</label>
                    <select class="form-control" id="country-dropdown">
                        <option value="">Select Country</option>
                        @foreach ($countries as $country) 
                        <option value="{{$country->id}}">
                        {{$country->name}}
                        </option>
                        @endforeach
                    </select>
                </div>
            <div class="form-group">
                <label for="state">State</label>
                <select class="form-control" id="state-dropdown">
                </select>
            </div>                        
            <div class="form-group">
                <label for="city">City</label>
                <select class="form-control" id="city-dropdown">
                </select>
            </div>
            </form>
            <button type="submit">Save contact</button>
        </div> --}}
    
    {{-- <script>
        $(document).ready(function () {
            $('#country-dd').on('change', function () {
                var idCountry = this.value;
                $("#state-dd").html('');
                $.ajax({
                    url: "{{url('api/fetch-states')}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#state-dd').html('<option value="">Select State</option>');
                        $.each(result.states, function (key, value) {
                            $("#state-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#city-dd').html('<option value="">Select City</option>');
                    }
                });
            });
            $('#state-dd').on('change', function () {
                var idState = this.value;
                $("#city-dd").html('');
                $.ajax({
                    url: "{{url('api/fetch-cities')}}",
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#city-dd').html('<option value="">Select City</option>');
                        $.each(res.cities, function (key, value) {
                            $("#city-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script> --}}
</body>
</html>