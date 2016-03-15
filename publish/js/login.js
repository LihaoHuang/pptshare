function SignUp(){
    var NName = document.getElementById("Newname").value;
    var Naccount = document.getElementById("Newaccount").value;    
    var Npassword = document.getElementById("Newpassword").value;
    
    if (Naccount.search(/^[\w-]+(\.[\w-]+)*@gm+(\.nfu.edu.tw)+$/)==-1) {
        alert("Email 資料錯誤？請重新輸入！");
        return;        
    }
}

function SignIn(){
    var account = document.getElementById("account").value;    
    var password = document.getElementById("password").value;
    
}