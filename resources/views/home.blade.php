@extends('layouts.app')

@section('content')
<div id="loginn" class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <a href="/new-working-backend/public/petitions">Click here to see petitions</a>
            </div>
        </div>
    </div>
</div>


<br />
<meta name="csrf-token" content="{{ csrf_token() }}" />

<div class="row">
    <div class="col-md-10 col-md-offset-1">

      <h2>Add Petition</h2>
      <form method="POST" action="petitions">
        <div class="form-group">

           <input type="text" name ="title" class="form-control" id="firstname" placeholder="Enter your title" required>
           <textarea placeholder="Enter your description" name ="description" class="form-control" required> </textarea>
           <input type="text" name ="photo" class="form-control" id="lastname" placeholder="Enter your photo" required>
           <input type="hidden" name="_token" value="{{ csrf_token() }}">

        </div>

        <!--<div class="form-group">
          <label for="lastname">Lastname</label>
          <input type="text" class="form-control" id="lastname" placeholder="Enter your lastname">
        </div>-->

        <button type="submit" class="btn btn-default">Add Petition</button>
      </form>

</div>
</div>
@endsection
