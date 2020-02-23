
$(document).ready(function(){
	  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

$('.submit_form').click(function(){
	
var name = $('#name').val();


$.ajax({
	
	url: '/register',
	type: 'POST',
	data: {
		fullname: name,
	},

	success:function(value){
		console.log(value);
	},

	error:function(){

	}

});

});
});
 

<input type = "text" class="name" name="fullname">
<button type ="button" class="submit_form">

