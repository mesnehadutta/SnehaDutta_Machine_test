@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="first_name">First Name</label>
            <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="mobile_number">Mobile Number</label>
            <input id="mobile_number" type="text" class="form-control" name="mobile_number" value="{{ old('mobile_number') }}" required>
        </div>

        <div class="form-group">
            <label for="country">Country</label>
            <select id="country" class="form-control" name="country_id" required>
                <option value="">Select Country</option>
            </select>
        </div>

        <div class="form-group">
            <label for="state">State</label>
            <select id="state" class="form-control" name="state_id" required>
                <option value="">Select State</option>
            </select>
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <select id="city" class="form-control" name="city_id" required>
                <option value="">Select City</option>
            </select>
        </div>

        <div class="form-group">
            <label for="locality">Locality</label>
            <input id="locality" type="text" class="form-control" name="locality" value="{{ old('locality') }}" required>
        </div>

        <div class="form-group">
            <label for="pincode">Pincode</label>
            <input id="pincode" type="text" class="form-control" name="pincode" value="{{ old('pincode') }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>

        <div class="form-group">
            <label for="password-confirm">Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $.ajax({
        url: '{{ route('get.countries') }}',
        method: 'GET',
        success: function(countries) {
            $('#country').html('<option value="">Select Country</option>');
            $.each(countries, function(key, country) {
                $('#country').append('<option value="'+ country.id +'">'+ country.name +'</option>');
            });
        }
    });

    $('#country').change(function() {
        let countryId = $(this).val();
        $('#state').html('<option value="">Select State</option>'); // Reset state dropdown
        $('#city').html('<option value="">Select City</option>'); // Reset city dropdown
        if (countryId) {
            $.ajax({
                url: '{{ route('get.states') }}',
                method: 'GET',
                data: { country_id: countryId },
                success: function(states) {
                    $.each(states, function(key, state) {
                        $('#state').append('<option value="'+ state.id +'">'+ state.name +'</option>');
                    });
                }
            });
        }
    });

    $('#state').change(function() {
        let stateId = $(this).val();
        $('#city').html('<option value="">Select City</option>');
        if (stateId) {
            $.ajax({
                url: '{{ route('get.cities') }}',
                method: 'GET',
                data: { state_id: stateId },
                success: function(cities) {
                    $.each(cities, function(key, city) {
                        $('#city').append('<option value="'+ city.id +'">'+ city.name +'</option>');
                    });
                }
            });
        }
    });
});
</script>
@endsection
