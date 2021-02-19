@extends("app")

{{-- this for each goes straight from the model to the view --}}
    {{-- loop over all of the owner --}}
    {{-- each owner object goes into $owner--}}
{{-- @section("content")
    @foreach (App\Models\Owner::all() as $owner)
      
        <a href="/owners/{{ $owner->id }}">

            <h5>{{ $owner->fullName() }}</h5> 
        </a>
    @endforeach
@endsection --}}
{{-- <h5>{{ $owner->fullName() }}</h5>  <--- this outputs the owner title --}}


{{-- this for each goes to the controller and then to the view--}}
@foreach ($bananas as $owner) {{-- owners should be plural as it is coming from the controller --}}
    <a href="/owners/{{ $owner->id }}">

        {{-- output the owner title --}}
        <h3>{{ $owner->fullName() }}</h3>
    </a>
@endforeach

@section("page_title")
            <h1>Welcome to Bristol Vets</h1>
@endsection