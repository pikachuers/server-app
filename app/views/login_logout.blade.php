@section('loggedout')
	<button id="btn-masuk-home" class="btn btn-default hidden-xs" data-toggle="modal" data-target=".bs-modal-sm">Masuk</button>
@append

@section('loggedin')
	<a href="{{ URL::to('logout') }}" id="btn-masuk-home" class="btn btn-primary hidden-xs" >Keluar</a>
@append