$(document).ready(function(){
  $("#button1").click(function(){
        $.ajax({url: "/sendmail1.php",
        	type:"POST",
        	data:"useremail="+$('input[name=useremail]').val(),
        	success: function(result){
        		var prov = JSON.parse(result)
        			console.log(prov);
        		if (prov.num!=1){	
  
        				$(".ermess").html(prov.text);
        				$(".error").css("box-shadow","2px 2px 2px red");
        			
        		}else{
        			   $("#email").fadeOut(400,function(){
          		   	   $("#mess").html(prov.text);

          		   	 	})
        		}

        	}
        		
    	})
	  })
     })

