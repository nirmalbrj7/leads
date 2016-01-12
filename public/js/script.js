jQuery(document).ready(function(){
	
 $("#manager_registration").submit(function(e){
    e.preventDefault();
    $(this).validate({

      rules: {
        firstname: {
      required:true,
      minlength: 3,
      maxlength: 25
    },
    lastname: {
      required:true
    },
    address: {
      required:true,
      minlength: 3,
      maxlength: 25
      
    },
    phone: {
      required:true,
      number:true,
      minlength: 8,
      maxlength: 10
    },
    email:{
      required:true,
       email:true
    },
    password:{
      required:true,
       minlength: 6
    },
    cpassword:{
      required:true,
       minlength: 6,
       equalTo:"#password"
    },
    image:{
      required:true
    }
      },
      submitHandler: function(form){
         form.submit();
}
    });




    if ($(this).valid()){
      var form_url=$(this).attr('action');
      var form_method= $(this).attr('method');
      var manager=$("#manager_registration").serialize();
jQuery.ajax({
  type:'form_method',
   url:'form_url',
    data :'manager'

});


    }


 });


 
 });  






