function uploadmassage(){
	var member = document.getElementById("member").value;

        var URL = "welcome/statistics";
         
        var upload =
        {
            "crew" : member,

        };
        console.log(upload);
         
        $.ajax(            
        {
            url:URL,
            cache: false,
            data:account,
            dataType:'text',
            type:"POST",            
             
                      
            success: function(response)       
            {

            },
             
            error:  function(xhr, ajaxOptions, thrownError)
            { 
            alert("error");
            alert(xhr.status); 
            alert(thrownError);  
            }
         
        });

}
