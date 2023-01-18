let form=document.getElementById("addin");
let plus=document.getElementById("plus");
let rv =document.getElementById("rv");
let save = document.getElementById('save');
let index=0

rv.onclick=function(){
  if(index>0){
    form.querySelectorAll('div')[index].remove()
     index--
  }
  
  console.log(index);
}

console.log(form);
plus.onclick=function(){
  index++
  let container=document.createElement("div");
  let input1= document.createElement("input");
  let input2= document.createElement("input");
  let input3= document.createElement("input");
  let input4= document.createElement("input");
  let input5= document.createElement("textarea");
  input1.setAttribute("type","text");
  input2.setAttribute("type","text");
  input3.setAttribute("type","text");
  input4.setAttribute("type","date");
  input1.setAttribute("class","form-control");
  input2.setAttribute("class","form-control");
  input3.setAttribute("class","form-control");
  input4.setAttribute("class","form-control");
  input5.setAttribute("class","form-control");
  input5.setAttribute("id",`recipient-lyrics_${index}`);
  input1.setAttribute("id",`recipient-titre_${index}`);
  input2.setAttribute("id",`recipient-artiste_${index}`);
  input3.setAttribute("id",`recipient-album_${index}`);
  input4.setAttribute("id",`recipient-date_${index}`);
  input5.setAttribute("placeholder","Lyrics");
  input1.setAttribute("placeholder","Titre");
  input2.setAttribute("placeholder","Artist");
  input3.setAttribute("placeholder","Album");
  input4.setAttribute("placeholder","Année de création");
  container.appendChild(input1)
  container.appendChild(input2)
  container.appendChild(input3)
  container.appendChild(input4)
  container.appendChild(input5)
  form.appendChild(container)
}
save.onclick = function() {
  console.log('messi')
  obj={};
  data=[];
  for (let i = 0; i <= index; i++) {
    obj["title"+i]=document.getElementById(`recipient-titre_${index}`).value;
    console.log(document.getElementById(`recipient-artiste_${index}`));
    obj["artist"+i]=document.getElementById(`recipient-artiste_${index}`).value;
    obj["Album"+i]=document.getElementById(`recipient-album_${index}`).value;
    obj["année"+i]=document.getElementById(`recipient-date_${index}`).value;
    obj["lyrics"+i]=document.getElementById(`recipient-lyrics_${index}`).value;  
    data.push(obj);
  }
  console.log(data);
}
// save.addEventListener('click', recupere());
