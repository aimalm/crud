
var updateBtn = document.getElementById("updateBtn");
console.log(updateBtn);
updateBtn.addEventListener("click", function(){
    updateBtn.classList.add("hide"); 

})

var edit = document.querySelectorAll("#edit a");
console.log(edit);
edit.addEventListener("click", function(){
    edit.forEach(function(){
        document.getElementById("edit_container")
    edit.classList.remove("hide"); 
    })

})

