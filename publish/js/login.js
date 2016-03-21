function SignUp(){
    var NName = document.getElementById("Newname").value;
    var Naccount = document.getElementById("Newaccount").value;    
    var Npassword = document.getElementById("Newpassword").value;
    
    if (Naccount.search(/^[\w-]+(\.[\w-]+)*@gm+(\.nfu.edu.tw)+$/)==-1) {
        alert("Email 資料錯誤？請重新輸入！");
        return;        
    }
    Accountmassage(NName,Naccount,Npassword);
}

function SignIn(){
    var account = document.getElementById("account").value;    
    var password = document.getElementById("password").value;
    comparemassage(account,password);
    
}

function Accountmassage(name,email,password) {
        var URL = "pages/creat";
         
        var account =
        {
            "name" : name,
            "email" : email,
            "password" : password,

        };
        console.log(account);
         
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

function comparemassage(email,password) {
        var URL = "pages/login";
         
        var account =
        {
            "email" : email,
            "password" : password,

        };
        console.log(account);
         
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