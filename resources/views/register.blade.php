@extends('app')

@section('content')

	<div class="col-lg-8 col-lg-offset-2">
    <form action="/register" method="post">

  <input type="hidden" name="_token" value="{{csrf_token()}}">

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div>

@endsection()