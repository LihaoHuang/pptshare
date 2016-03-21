var filename　= "";
function getfilename(){
    var str=document.getElementById("fileupload").value;
    document.write(str.split("") + "<br />");
    for(var i=12;i <　str.length;i++){
        filename += str[i];
    }
}

function uploadmassage(){
	var member = document.getElementById("member").value;

        var URL = "pages/file_upload";
         
        var upload =
        {
            "crew" : member,
            "filename": filename

        };
        console.log(upload);
         
        $.ajax(            
        {
            url:URL,
            cache: false,
            data:upload,
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
