let todo = [];
let jsonTodo = [];
document.addEventListener("DOMContentLoaded", function() {
    jsonTodo = localStorage.getItem("userData")??'[]';
    todo = JSON.parse(jsonTodo)??[];
    showElem();
    checkDateofTodo();
    saving();
});
function checkDateofTodo(){
    let today = new Date();
    todo.forEach((x,index) => {
        let i = x.lastIndexOf('</div>');
        let k = x.substring(i , i-10);
        let todoDateNo = new Date(k);
        if((today>todoDateNo)&&`<span style="color:red;font-style: italic;">expired</span>`!=x.substring(5,63) ){
            todo[index]= replaceAt(x,5,6 ,`<span style="color:red;font-style: italic;">expired</span>`);
        }
    });
    saving();
}
function upload(){
    let taskText = document.getElementById("taskDes");
    let taskDate = document.getElementById("datePicker");
    todo.push(`<div> ${taskText.value}</div> <div>${taskDate.value}</div><button onclick="delItem(${todo.length})" >delete</button>`);
    showElem();
    taskDate.value = "";
    taskText.value = "";
    checkDateofTodo();
    saving();

}
function showElem(){
    checkDateofTodo();
    const taskfile = document.getElementById("tasks");
    taskfile.innerHTML = "";
    todo.forEach((x)=>{
        taskfile.innerHTML += x;
    });
    saving();

}
function delItem(index){
    todo.splice(index,1);
    rearrangetodo(index);
    showElem();
    saving();
}
function rearrangetodo(index){
    for(let i=index ; i<todo.length ; i++){
        let str = todo[i];
        let left = str.indexOf("(");
        let right = str.indexOf(")\" >");
        let taskId = Number.parseInt(str.substring(left+1 , right));
        taskId--;
        taskId = taskId.toString();
        todo[i] = replaceAt(str, left+1, right, taskId);
    }
    saving();

}
function replaceAt(str , start1 ,start2, str2){
    let a ,b , c;
    b = str.substring(0,start1);
    c = str.substring(start2)
    a = "".concat(b,str2,c);
    return a;
}
window.addEventListener('beforeunload', function(event){saving();
});

function saving() {
    jsonTodo = JSON.stringify(todo);
    localStorage.setItem("userData", jsonTodo);
}
