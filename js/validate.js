$(document).ready(function(){

	$("#booking").validate({

		rules:{

			fname:{
				required:true
			},
			lname:{
				required:true
			},
			phone:{
				required:true,
				number:true
			},
			email:{
				required:true,
				email:true
			},
			checkIn:{
				required:true,
				date:true
			},
			checkOut:{
				required:true,
				date:true
			}
			
		},
		messages:{

			fname:{
				required: "Please enter your first name !"
			},
			lname:{
				required: "Please enter your last name !"
			},
			phone:{
				required: "Please enter your phone number !"
			},
			email:{
				required: "Please enter your email !"
			},
			checkIn:{
				required: "Please specify your check-in date !"
			},
			checkOut:{
				required: "Please specify your check-out date !"
			}

		}

	});

});