@extends("app")  {{-- this extends the view of the parent app.blade.php --}}

@section("content")
                {{-- output the owner details --}}
            <h2>{{ $singleOwner->fullName() }}</h2>
            <p>{{ $singleOwner->address_1 }}</p>
            <p>{{ $singleOwner->address_2 }}</p>
            <p>{{ $singleOwner->town }}</p>
            <p>{{ $singleOwner->postcode }}</p>
            <p>{{ $singleOwner->email }}</p>
@endsection

