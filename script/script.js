$(document).ready(function() {
    $('#table').DataTable();
});
let form = document.getElementById("addin");
let plus = document.getElementById("plus");
let rv = document.getElementById("rv");
let save = document.getElementById('save');
let add =document.querySelector(".btnadd");
// let upd = document.getElementById('upd');
let upd = document.querySelectorAll(".update");
//let inputs = document.querySelectorAll('input').value;
let send = document.querySelector("#send")
let index = 0;
let data = [];


rv.onclick = function() {
        if (index > 0) {
            form.querySelectorAll('div')[index].remove()
            index--
        }

        // console.log(index);
    }
    //console.log(upd);

// console.log(form);
plus.onclick = function() {
    index++
    let container = document.createElement("div");
    let input1 = document.createElement("input");
    let input2 = document.createElement("input");
    let input3 = document.createElement("input");
    let input4 = document.createElement("input");
    let input5 = document.createElement("textarea");
    input1.setAttribute("type", "text");
    input2.setAttribute("type", "text");
    input3.setAttribute("type", "text");
    input4.setAttribute("type", "date");
    input1.setAttribute("class", "form-control");
    input2.setAttribute("class", "form-control");
    input3.setAttribute("class", "form-control");
    input4.setAttribute("class", "form-control");
    input5.setAttribute("class", "form-control");
    input5.setAttribute("id", `recipient-lyrics_${index}`);
    input1.setAttribute("id", `recipient-titre_${index}`);
    input2.setAttribute("id", `recipient-artiste_${index}`);
    input3.setAttribute("id", `recipient-album_${index}`);
    input4.setAttribute("id", `recipient-date_${index}`);
    input5.setAttribute("placeholder", "Lyrics");
    input1.setAttribute("placeholder", "Titre");
    input2.setAttribute("placeholder", "Artist");
    input3.setAttribute("placeholder", "Album");
    input4.setAttribute("placeholder", "Année de création");
    container.appendChild(input1)
    container.appendChild(input2)
    container.appendChild(input3)
    container.appendChild(input4)
    container.appendChild(input5)
    form.appendChild(container)
}
save.onclick = function() {
     
    for (let i = 0; i <= index; i++) {
        if(document.querySelector(`#recipient-titre_${i}`).value== '' && document.querySelector(`#recipient-artiste_${i}`).value=="" && document.querySelector(`#recipient-album_${i}`).value=="" && document.querySelector(`#recipient-date_${i}`).value=="" && document.querySelector(`#recipient-lyrics_${i}`).value==""){
            document.querySelector("#aleart").innerHTML=`s'il vous plaît remplies tous les inputs`
        }else{
        let obj = {};
        obj["title" + i] = document.querySelector(`#recipient-titre_${i}`).value;
        obj["artist" + i] = document.querySelector(`#recipient-artiste_${i}`).value;
        obj["Album" + i] = document.querySelector(`#recipient-album_${i}`).value;
        obj["annee" + i] = document.querySelector(`#recipient-date_${i}`).value;
        obj["lyrics" + i] = document.querySelector(`#recipient-lyrics_${i}`).value;
        data.push(obj);
    }}

    if (data.length > 0) {
        //console.log("hello");
        let d = JSON.stringify(data);
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "/admin/E-Lyrics.org/controllers/add.php?q=" + d, false);
        xhr.send();
    }
    location.reload();
    clearTasks();
}

for (let i = 0; i < upd.length; i++) {
    // const element = array[i];
    let dataup = [];
    upd[i].addEventListener('click', function() {
        save.style.display="none";
        plus.style.display="none";
        rv.style.display="none";
        send.style.display="block";
        
        let td = this.parentElement.parentElement.parentElement;
        //console.log(td);
        //console.log(td.children);
        for (let i = 0; i < td.children.length - 1; i++) {
            // console.log(td.children[i].innerHTML);
            dataup.push(td.children[i].innerHTML);
        }
        console.log(dataup);
        document.querySelector("#hid").value = dataup[0];
        document.querySelector("#recipient-titre_0").value = dataup[1];
        document.querySelector("#recipient-artiste_0").value = dataup[2];
        document.querySelector("#recipient-album_0").value = dataup[3];
        document.querySelector("#recipient-date_0").value = dataup[4];
        document.querySelector("#recipient-lyrics_0").value = dataup[5];
    })
}

send.onclick = function() {
    let table = [];

    table[0] = document.querySelector("#hid").value;
    table[1] = document.querySelector("#recipient-titre_0").value;
    table[2] = document.querySelector("#recipient-artiste_0").value;
    table[3] = document.querySelector("#recipient-album_0").value;
    table[4] = document.querySelector("#recipient-date_0").value;
    table[5] = document.querySelector("#recipient-lyrics_0").value;
        //console.log(table);
    tbl = JSON.stringify(table);
    xhr = new XMLHttpRequest();
    xhr.open("GET", "http://localhost/admin/E-Lyrics.org/controllers/update.php?t=" + tbl, false);
    xhr.send();
    location.reload();
}
add.onclick=function(){
  send.style.display="none";
  save.style.display="block";
  plus.style.display="block";
  rv.style.display="block";
}
function clearTasks() {
    let inputs = document.querySelectorAll('input')
    let tex = document.querySelector('textarea')
    inputs.forEach(input => {
        input.value = '';
    });
    tex.value = '';
}