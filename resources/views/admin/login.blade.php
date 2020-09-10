@extends('admin.master')
@section('content')
<div class="wrapper fadeInDown"> 
  <div id="formContent">
    <!-- Tabs Titles -->
	@error('error')
 	<div class="alert alert-danger" role="alert">
	 {{ $message }}
	</div>
	@enderror
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="./assets/icons/man.svg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="post" action="/admin/login">
    	@csrf
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
@endsection
