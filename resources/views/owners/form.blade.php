@extends("app")

@section("content")
   <form class="form card" method="post">  {{-- connects with post in route --}}
        @csrf
        <h2 class="card-header">Create Owner</h2>

        <fieldset class="card-body">
            <div class="form-group">
                <label for="first_name">first name</label>
                <input 
                id="first_name" 
                name="first_name" 
                class="form-control" />
            </div>

            <div class="form-group">
                <label for="last_name">last name</label>
                <input 
                id="last_name" 
                name="last_name" 
                class="form-control" />
            </div>

            <div class="form-group">
                <label for="telephone">telephone</label>
                <input 
                id="telephone" 
                name="telephone" 
                class="form-control" />
            </div>

            <div class="form-group">
                <label for="email">email</label>
                <input 
                id="email" 
                name="email" 
                class="form-control" />
            </div>

            <div class="form-group">
                <label for="address_1">address 1</label>
                <input 
                id="address_1" 
                name="address_1" 
                class="form-control" />
            </div>

            <div class="form-group">
                <label for="address_2">address 2</label>
                <input 
                id="address_2" 
                name="address_2" 
                class="form-control" />
            </div>

            <div class="form-group">
                <label for="town">town</label>
                <input 
                id="town" 
                name="town" 
                lass="form-control" />
            </div>

             <div class="form-group">
                <label for="postcode">postcode</label>
                <input 
                id="postcode" 
                name="postcode" 
                class="form-control" />
            </div>

        </fieldset>

        <div class="card-footer text-right">
            <button class="btn btn-success">Create</button>
        </div>
    </form>
@endsection