function appendToDisplay(value){
    if(document.getElementById("input").value.length==0&& document.getElementById("display").value.length==0 && "/-+*^√".includes(value)){
        document.getElementById("input").value= "ERROR";
        return;
    }
    else if(document.getElementById("input").value==""&& "/-+*^√".includes(value)){
        document.getElementById("input").value=document.getElementById("display").value + ' ' + value + " ";
        document.getElementById("display").value="";
        return;
    }
        if(value=="="){
            document.getElementById("display").value=eval(document.getElementById("input").value);
            document.getElementById("input").value="";
        }
        else if(value=="+" || value=="-" || value=='*'||value=="/"){
            document.getElementById("input").value+= ' ' + value + " ";
        }
        else if(value =="^"){
            document.getElementById("input").value+="**";
        }
        else if(value == "√"){
            document.getElementById("input").value+="**0.5";
        }
        else if(value=="C"){
            document.getElementById("input").value="";
            document.getElementById("display").value="";
        }
        else{
            document.getElementById("input").value+= value;
        }
}
function convertToNumber(value){
    appendToDisplay(value);
}
document.body.addEventListener('keydown', (event) => {
var key = event.key; 

if((key >= '0' && key <= '9') || key == '+' || key == '-' || key == '*' || key == '/' || key == '^' || key == '=' ||key == 'Enter' || key == 'c' || key == 'C'){
    if(key == 'Enter'){
        appendToDisplay('=');
    }
    else if(key == 'c' || key == 'C'){
        appendToDisplay('C');
    }   
    else{
        appendToDisplay(key);
    }
}
});