$(document).ready(function(){
	  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

$('#submit_form').on('click',function(){
	
var user_id = $('#user_id').val();
var name = $('#name').val();
var gender = $('#gender').val();
var address = $('#address').val();
var number = $('#number').val();


$.ajax({
	
	url: '/submit',
	type: 'POST',
	data: {
    user_id: user_id,
		name: name,
    gender: gender,
		address: address,
		number: number,
	},

	success:function(){
		console.log('success');

Swal.fire({
  position: 'top',
  type: 'success',
  title: 'added succesfully',
  showConfirmButton: false,
  timer: 1500
})
    setTimeout(function(){
           location.reload(); 
      }, 1500);
  },

  error:function(){

	}

});

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
$('.delete_form').click(function(e){
  e.preventDefault();
    var id = $(this).data('ids');

    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'delete it!'
}).then((result) => {
  if (result.value) {
    $.ajax({
  
  url: '/table/'+id,
  type: 'GET',
  success:function() {
    console.log('success');
Swal.fire({
  position: 'top-end',
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
    
  }
  })

});
 $('#department_change').on('change',function(){
    var selected = $(this).children("option:selected").val();


    if(selected == 'Business Development'){
      $('.label-sub').show();
      var html = '';
      html += '<select class="form-control" name="sub_department" required>';
      html += '<option value="">Select Sub Department</option>';
      html += '<option value="Marketing">Marketing</option>';
      html += '<option value="General Education">General Education</option>';
      html += '<option value="Maritime">Maritime</option>';
      html += '</select>';
    }else if(selected == 'IT Department'){
      $('.label-sub').show();
      var html = '';
      html += '<select class="form-control" name="sub_department" required>';
      html += '<option value="">Select submit Department</option>';
      html += '<option value="3D Modeler">3D Modeler</option>';
      html += '<option value="Web Development">Web Development</option>';
      html += '</select>';
    }
    $('#append').empty().append(html);
  });
});

