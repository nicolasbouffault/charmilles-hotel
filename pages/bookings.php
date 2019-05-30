<?php include('../includes/header.php'); ?>

<div class="main">
	<div class="container">
		<div class="row clearfix center">
			<div class="col-md-12">
				<h2 class="heading-pages">Bookings</h2>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-md-12">
				<form id="booking" role="form" method="post" action="">
					<div class="form-group">
						<label for="inputFirstName">First Name</label>
						<input type="text" name="fname" class="form-control" id="inputFirstName">
					</div>
					<div class="form-group">
						<label for="inputLastName">Last Name</label>
						<input type="text" name="lname" class="form-control" id="inputLastName">
					</div>
					<div class="form-group">
						<label for="inputPhone">Phone Number</label>
						<input type="text" name="phone" class="form-control" id="inputPhone">
					</div>
					<div class="form-group">
						<label for="inputEmail">Email</label>
						<input type="email" name="email" class="form-control" id="inputEmail">
					</div>
					<div class="form-group">
						<div class="col-md-6 col-sm-12 no-padding-left">
							<label for="inputDateIn">Check-In</label>
							<input type="text" name="checkIn" class="form-control" id="inputDateIn">
						</div>
						<div class="col-md-6 col-sm-12 no-padding-right">
							<label for="inputDateOut">Check-Out</label>
							<input type="text" name="checkOut" class="form-control" id="inputDateOut">
						</div>
					</div>
					<div class="form-group center">
						<input class="btn-book margin-top20" type="submit" value="Book">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include('../includes/footer.php'); ?>		