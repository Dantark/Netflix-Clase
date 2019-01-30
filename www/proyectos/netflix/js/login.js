window.onload=function(){
    if(document.getElementById("error").childNodes[0]==undefined){
        document.getElementById("alert").style.display = "none"; 
    }
   
}

function showMessage(message){
    alert(message);
}

