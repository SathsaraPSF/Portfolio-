document.getElementById("button").addEventListener("click", displayComment);

function displayComment(){
    var name = document.getElementById("name").value;
    var comment = document.getElementById("text-area").value
    var email = document.getElementById("email").value
     
   
    if(name == ""){
        alert("Please enter your name");
    }else if(email ==""){
        alert("Plase enter your email")
    }else if(comment == ""){
        alert("Enter your comment");
    }else{

        alert("Thank you for your comment");

        var comment = document.getElementById("text-area").value =" "
        var email = document.getElementById("email").value =" "
        var name = document.getElementById("name").value = " "
        
}

    

  
}
