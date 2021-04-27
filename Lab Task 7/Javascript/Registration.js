var flag = 0;

function change(x) 
{
    var format = /[@,#,$,%]/;
    var format2 = /^\d{11}$/;
    var format3 = /\S+@\S+\.\S+/;
    var a = x.value;
    

    if(a=="")
    {
        if(x.name=="uname"){
            document.getElementById("unameErr").innerHTML = "Username is required";
            document.getElementById("unameErr").style.color = "red";
        }
        else if(x.name=="fname"){
            document.getElementById("fnameErr").innerHTML = "Name is required";
            document.getElementById("fnameErr").style.color = "red";
        }   
        else if(x.name=="email"){
            document.getElementById("emailErr").innerHTML = "Email is required";
            document.getElementById("emailErr").style.color = "red";
        }   
        else if(x.name=="phone"){
            document.getElementById("phoneErr").innerHTML = "phone no is requird";
            document.getElementById("phoneErr").style.color = "red";
        }                 
        else if(x.name=="address"){
            document.getElementById("addressErr").innerHTML = "Address is required";
            document.getElementById("addressErr").style.color = "red";
        }       
        else if(x.name=="pass"){
            document.getElementById("passErr").innerHTML = "Password is required";
            document.getElementById("passErr").style.color = "red";
        }       
        else if(x.name=="rpass" && !document.getElementById("pass").value==""){
            document.getElementById("rpassErr").innerHTML = "Retype the Password";
            document.getElementById("rpassErr").style.color = "red";
        }       
    }
    else if(!isNaN(a.charAt(0)) && x.name =="uname")
    {
        document.getElementById("unameErr").innerHTML = "First Letter must be an alphabetic character";
        document.getElementById("unameErr").style.color = "red";
    }
    else if(a!="" && x.name =="uname")
    {
        parse(a);        
    }
    else if((!format3.test(a)) && x.name =="email")
    {
        document.getElementById("emailErr").innerHTML = "Invalid email format";
        document.getElementById("emailErr").style.color = "red";
    }
    else if((!format2.test(a)) && x.name =="phone")
    {
        document.getElementById("phoneErr").innerHTML = "Invalid Phone Number";
        document.getElementById("phoneErr").style.color = "red";
    }
    else if((a.length < 8) && x.name=="pass")
    {
        document.getElementById("passErr").innerHTML = "Password must not be less than 8 charecters";
        document.getElementById("passErr").style.color = "red";
    }
    else if((!format.test(a)) && x.name=="pass")
    {
        document.getElementById("passErr").innerHTML = "Password must contain at least one of the special characters (@, #, $, %)";
        document.getElementById("passErr").style.color = "red";
    }
    else
    {
        if(x.name=="uname"){
            document.getElementById("unameErr").innerHTML = "\u2713";
            document.getElementById("unameErr").style.color = "green";
        }
        else if(x.name=="fname"){
            document.getElementById("fnameErr").innerHTML = "\u2713";
            document.getElementById("fnameErr").style.color = "green";
        }
        else if(x.name=="email"){
            document.getElementById("emailErr").innerHTML = "\u2713";
            document.getElementById("emailErr").style.color = "green";
        }
        else if(x.name=="phone"){
            document.getElementById("phoneErr").innerHTML = "\u2713";
            document.getElementById("phoneErr").style.color = "green";
        }
        else if(x.name=="address"){
            document.getElementById("addressErr").innerHTML = "\u2713";
            document.getElementById("addressErr").style.color = "green";
        }
        else if(x.name=="pass"){
            document.getElementById("passErr").innerHTML = "\u2713";
            document.getElementById("passErr").style.color = "green";
        }
        else if(x.name=="rpass"  && x.value==document.getElementById("pass").value ){
            document.getElementById("rpassErr").innerHTML = "\u2713";
            document.getElementById("rpassErr").style.color = "green";
        }

        else if(x.name=="rpass" && !document.getElementById("pass").value==""){
            document.getElementById("rpassErr").innerHTML = "Password & Retyped Password must be same";
            document.getElementById("rpassErr").style.color = "red";
        }
    }

    
    
}
function revert(x) 
{
    if(x.name=="uname")
        document.getElementById("unameErr").innerHTML = "";
        else if(x.name=="fname")
        document.getElementById("fnameErr").innerHTML = "";
    else if(x.name=="email")
        document.getElementById("emailErr").innerHTML = "";
    else if(x.name=="phone")
        document.getElementById("phoneErr").innerHTML = "";
    else if(x.name=="address")
        document.getElementById("addressErr").innerHTML = "";
    else if(x.name=="pass")
        document.getElementById("passErr").innerHTML = "";
    else if(x.name=="rpass")
        document.getElementById("rpassErr").innerHTML = "";
}

function parse(x)
{
    
    
    $(document).ready(function()
    {
        $.getJSON("../Json/Register.json", function(data)
        {
            for(var index = 0; index< data.length; index++)
            {
                if(data[index].uname == x)
                {
                    document.getElementById("unameErr").innerHTML = "Username Already Exist!";
                    document.getElementById("unameErr").style.color = "red";
                    break;
                }
                else
                {
                    document.getElementById("unameErr").innerHTML = "\u2713";
                    document.getElementById("unameErr").style.color = "green";
                }
            }

        });

    });


}