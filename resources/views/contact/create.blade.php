@extends('templaites.default', ['titre' => 'Contact'])

@section('contenu')

<div class="container">
  <div class="row">
   
    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
    	
    	<h2>Get In Touch</h2>
    	<p class="text-muted">If you having trouble with this service, please <a href="mailto:harem.dev@gmail.com">ask for help.</a> </p>

    	<form action="#" method="POST">
    		
    		<div class="form-group">
    			<label class="control-label" for="name">Name</label>
    			<input type="text" name="name" class="form-control" required="required" id="name">
    		</div>

    		<div class="form-group">
    			<label class="control-label" for="email">Email</label>
    			<input type="email" name="email" class="form-control" required="required" id="email">
    		</div>

    		<div class="form-group">
    			<label class="control-label sr-only" for="message">Message</label>
    			<textarea class="form-control" cols="10" rows="10" name="message" for="message" required="required"></textarea>
    		</div>

    		<div class="form-group">
    			 <button class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
    		</div>
    		


    	</form>

    </div>

  </div>	
</div>	

@stop