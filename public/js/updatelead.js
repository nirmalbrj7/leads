jQuery(document).ready(function(){
  
 $("#lead_update").submit(function(e){
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
    }

  },
  submitHandler: function(form){
         form.submit();
       }
  });
});

   


    
    });