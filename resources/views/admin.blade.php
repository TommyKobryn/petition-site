Hello admin
<br />




@foreach($petitions as $key => $value)
     <ul>
         <li>{{ $value->id }}</li>
         <li>{{ $value->title }}</li>
         <li>{{ $value->description }}</li>

         <!-- we will also add show, edit, and delete buttons -->
         <li>

             <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
             <!-- we will add this later since its a little more complicated than the other two buttons -->
             {!! Form::open([
               'method' => 'delete',
               'route' => ['petitions.destroy', $value->id]
               ]) !!}

          {!!Form::submit('Delete', array('class' => 'btn btn-warning'))!!}
          {!!Form::close()!!}
             <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
             <a class="btn btn-small btn-success" href="{{ URL::to('petitions/' . $value->id) }}">Show this Petition first</a>

         </li>
     </ul>
@endforeach
