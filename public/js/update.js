
$(document).ready(function(){
	  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

$('.update_form').click(function(){

var id = $(this).data('ids');
var name = $('#up_name'+id).val();
var gender = $('#up_gender'+id).val();
var address = $('#up_address'+id).val();
var number = $('#up_number'+id).val();

$.ajax({
	
	url: '/updatetable/'+ id,
	type: 'PUT',
	data: {
			'id' : id,
			up_name: name,
      up_gender: gender, 
			up_address: address,
			up_number: number
			},

		success:function() {
		console.log('success');
Swal.fire({
  position: 'top',
  type: 'success',
  title: 'saved',
  showConfirmButton: false,
  timer: 1500
})
    setTimeout(function(){
           location.reload(); 
      }, 1000);
  },

  error:function(){

	}

});

});
});
 

