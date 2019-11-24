"use strict";
window.onload = getData;

function getData(){
    let xhr = new XMLHttpRequest();
    let url = "https://api.exchangeratesapi.io/latest/?base=USD";

    
    xhr.open("GET", url);
 
    xhr.send(null);
    xhr.onload = dataLoaded;
    xhr.onerror = dataError;
}

function dataLoaded(e){
    let xhr = e.target;

    console.log(xhr.responseText);
    document.querySelector("#response").innerHTML = xhr.responseText;
}

function dataError(){
    console.log("An error occurred");
}