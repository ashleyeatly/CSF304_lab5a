<x-layout title="people_details">
    <h1>Admin View</h1>
    <form method="GET"
          action="{{route('people.index')}}">
        @csrf
        <button type="submit" class="btn btn-primary">Back</button>
    </form>

    <table id="person-table" class="table table-striped" style="width:100%">
        <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
        </tr>
        </thead>
        <tbody>
        @foreach(App\Models\Person::all() as $person)

        <tr>
            <td>
                <form method="GET"
                      action="{{route('people.show',['person'=>$person])}}">
                    @csrf
                    @method('GET')
                    <button type="submit" class="btn-primary">Edit</button>
                </form>
            </td>
            <td>{{ $person->id }}</td>
            <td>{{ $person->title }}</td>
            <td>{{ $person->first_name }}</td>
            <td>{{ $person->surname }}</td>
            <td>{{ $person->address }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @push('scripts')
    <script>
        $(document).ready( function () {
            $('#person-table').DataTable();
        } );
    </script>
    @endpush
</x-layout>

