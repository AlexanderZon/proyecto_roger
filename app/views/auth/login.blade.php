@extends('layouts.login')

@section('content')

<div class="row">

	<div class="col-md-6">
		
	    <div class="container row">

	      <div id="login">

	        <form action="" method="post">


	          <fieldset class="clearfix">

	        	@if(isset($msg_error))
					<div class="alert alert-danger" role="alert">{{ $msg_error }}</div>
	        	@endif
	            <p><span class="fontawesome-user"></span><input type="text" name="username" value="Usuario" onBlur="if(this.value == '') this.value = 'Usuario'" onFocus="if(this.value == 'Usuario') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Usuario" -->
	            <p><span class="fontawesome-lock"></span><input type="password" name="password" value="Contraseña" onBlur="if(this.value == '') this.value = 'Contraseña'" onFocus="if(this.value == 'Contraseña') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Contraseña" -->
	            <p><input type="submit" value="Entrar"></p>

	          </fieldset>

	        </form>

	        <!-- <p>Not a member? <a href="#">Sign up now</a><span class="fontawesome-arrow-right"></span></p> -->

	      </div> <!-- end login -->

	    </div>
		
	</div>

	<div class="col-md-6">
		
	    <img src="/images/escudo.jpg" class="col-md-12"/>
		
	</div>
	
	
</div>


@stop