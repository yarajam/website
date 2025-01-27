let allbutt=document.getElementsByTagName("button");
console.log(allbutt);
Array.from(allbutt).forEach(function(item){
    item.addEventListener('mouseover', function(){
        item.style.backgroundColor="#333"
    });
    item.addEventListener('mouseout', function(){
        item.style.backgroundColor="#4DA1A9"
    });
})
