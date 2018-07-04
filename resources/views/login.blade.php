
@extends('masterpage')
@section('content')
<div class="all">
<div class="w3-container w3-blue">
  <h2 style="text-align:center">Login</h2>  
</div>

<form method="post" action="login">
@csrf
  <p>
  <label>usename</label>
  <input class="w3-input" type="text" name="username"></p>
  <p>
  <label>pass</label>
  <input class="w3-input" type="password" name="pass"/></p>
  <button type="submit" name="submit" > Action </button>

</form>
</div>
@endsection