<script>
document.getElementById("contact").classList.add("active");
</script>

<div class="row" style="margin-top: 30px">
  <div class="col-xs-4">
    <strong style="margin-bottom: 10px; font-size: 50px; color: red">HELLO THERE!</strong>
  </div>
</div>

<div class="row" style="margin-bottom: 20px">
  <div class="col-xs-4">
    <strong>Please take a moment to let us know what brought you here - we'd love to hear more about you</strong>
  </div>
</div>

<div class="row">
  <div class="col-xs-4">
		<form role="form" id="myForm" action="admin/red-elephant/contact/submit" method="post" onsubmit="return alert('Thank you for taking your time to fill this form!');">
		  <div class="form-group">
		    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
		  </div>
		  <div class="form-group">
		    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
		  </div>
		  <div class="form-group">
		  	<textarea class="form-control" rows="5" id="address" name="address" placeholder="Address" required></textarea>
		  </div>
		  <button type="submit" class="btn btn-default pull-right">Submit</button>
		</form>
  </div>
  <div class="col-xs-1" style="min-height: 300px; border-right: solid 2px">
  </div>
	<div class="col-xs-6" style="margin-left: 15px">
		<strong>PT. REPRO KONSULTAN INDONESIA<br>Epicentrum Walk 6th FI, unit #B627<br>Jl. HR Rasuna Said | Jakarta 12940<br>Indonesia<br><br>p. +6221 299 121 43<br>f. +6221 299 121 42</strong>
  </div>
</div>