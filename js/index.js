const menuBar=document.querySelector(".menu");
const burger=document.querySelector("span");
const mainContent=document.querySelector(".mainContent");
burger.addEventListener("click",menu);
function menu(){
menuBar.classList.toggle("menuDisplay");
}
mainContent.addEventListener("load",()=>{
    const data=[];
    let url="";
    try{
    fetch(url).then((elem)=>{
let dataVal=elem.json();
return dataVal;
    }).then((data)=>{
      console.log(data);
    });
}catch(err){
console.log("error in the fetching of data");
}

 data.forEach((elem,index)=>{
    let imgBlock=document.createElement("div");
    imgBlock.innerHTML="";
    mainContent.appendChild(imgBlock);
 });
});















