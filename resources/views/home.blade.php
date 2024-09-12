@extends('layouts.app')

@section('content')

<div class="container">
    <h1>City List</h1>
    <table class="table table-bordered" id="cities-table">
        <thead>
            <tr>
                <th>City</th>
                <th>State</th>
                <th>Country</th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#cities-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('cities.data') }}",
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data); 
                },
                error: function(xhr, error, thrown) {
                    console.error('Error:', error);
                }
            },
            columns: [
                { data: 'name', name: 'name' },          
                { data: 'state', name: 'state' },        
                { data: 'country', name: 'country' } 
            ]
        });
    });
</script>
@endsection
