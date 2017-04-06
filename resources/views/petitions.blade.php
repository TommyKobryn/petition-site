@extends('layouts.app')

@section('content')

<div class="container">


<h2 class="petitionstitle" id="titleelement">LIST OF ALL ACTIVE PETITIONS</h2>
</div>
<!-- ....................................... p-etitions content ............... -->


	<div class="tabs-content-wrapper" id="deltte">
	            <div class="container" id="firstpetition">
                @foreach ($petitions as $petition)
	                    <div class="petitions-list col-sm-12">
	                                    <div id="listElement" class="petition-item clearfix">
	                <div class="img-wrapper col-sm-4">
	                    <a href="/new-working-backend/public/petitions/{{$petition->id}}">
	                        <img src="../public/images/{{$petition->photo}}.jpg" alt="Save Hillview Street Dogs"/>
	                    </a>
	                </div>
	                <div class="petition-item-content col-sm-8">
	                    <a href="/new-working-backend/public/petitions/{{$petition->id}}" id="petitionTitle" class="title-tab">{{$petition->title}}</a>
	                    <div id="petitiondescription" class="description"></div>
												{{$petition->description}}
											<div class="button-vote text-right">
											<a href="/new-working-backend/public/petitions/{{$petition->id}}"	<button type="button" class="btn btn-danger">Submit Your Signature Now!</button></a>
											</div>
	                                    </div>

	            </div>
						</div>
            @endforeach
					</div>

				</div>


@endsection
