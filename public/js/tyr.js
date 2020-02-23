$(document).ready(function(){
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $.('#submit_form').on('click', function(){

    var name = $('#name').val();
    var address = $('#address').val();
    var number = $('#number').val();

    $.ajax({

      url:'/submit',
      type:'POST',
      data :{
        name = name,
        address = address,
        number = number,
      },
      success:function(){
        console.log('success');
      }
      error:function(){
        
      }

    });


  });
});