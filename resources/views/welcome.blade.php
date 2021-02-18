@extends("app")

@section("page_title")
            <h1>Welcome to Bristol Vets</h1>
@endsection



@section("content")
    {{-- loop over all of the owner --}}
    {{-- each owner object goes into $owner--}}
    @foreach (App\Models\Owners::all() as $owner)
      
        <a href="/owners/{{ $owner->id }}">

          {{-- output the owner title --}}
            <h5>{{ $owner->fullName() }}</h5>
        </a>
    @endforeach
@endsection


@foreach ($owner as $owner)
    <a href="/owners/{{ $owner->id }}">

        {{-- output the owner title --}}
        <h5>{{ $owner->fullName() }}</h5>
    </a>
@endforeach