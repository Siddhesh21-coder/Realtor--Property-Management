const dropArea = document.querySelector(".drag-area"),
dragText = dropArea.querySelector("header"),
button = dropArea.querySelector("button"),
input = dropArea.querySelector("input");
let file;

button.onclick = ()=> {
    input.click();
    
}

input.addEventListener("change",function(){
    file = this.files[0];
    showFile();
});
dropArea.addEventListener("dragover", (event)=> {
    event.preventDefault();
   // console.log("File is over DragArea") 
    dropArea.classList.add("active");
    dragText.textContent = "Release to Upload File";
});

dropArea.addEventListener("dragleave", ()=> {
   // console.log("File is outside DragArea")   
    dropArea.classList.remove("active"); 
    dragText.textContent = "Drag & Drop to Upload File";  
});

dropArea.addEventListener("drop", (event)=> {
    event.preventDefault();
  //  console.log("File is dropped on DragArea")   
    //dropArea.classList.remove("active");   
    file = event.dataTransfer.files[0];
    showFile();
});    
    function showFile(){
        let fileType = file.type;
        console.log(file);
    
        let vaildExtension = ["image/jpeg","image/jpg","image/png","image/jiff","application/pdf"];
        if(vaildExtension.includes(fileType)){
           // console.log("This is an Image File");
           let fileReader = new FileReader();
           fileReader.onload = ()=>{
             let fileURL = fileReader.result; 
            
             let imgTag = `<img src="${fileURL}" alt="">`; 
             dropArea.innerHTML = imgTag;
           }
           fileReader.readAsDataURL(file);
        }
        else{
            alert("This is not an Image File!");
            dropArea.classList.remove("active");
        }
    }
