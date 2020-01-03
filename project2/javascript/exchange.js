"use strict";
let conversionTable;
let output;
let base;
let conversion;
let amount;
window.onload = getData;

function getData(){
    base = document.querySelector("#base");
    conversion = document.querySelector("#conversion");
    amount = document.querySelector("#amount");
    output = document.querySelector("#output");
    let submit = document.querySelector("#submit");

    submit.addEventListener("click", updateValue);


    let xhr = new XMLHttpRequest();
    let url = "https://api.exchangeratesapi.io/latest/?base=USD";

    xhr.open("GET", url);
 
    xhr.send(null);
    xhr.onload = dataLoaded;
    xhr.onerror = dataError;
}

function dataLoaded(e){
    let xhr = e.target;

    let response = JSON.parse(xhr.responseText);

    conversionTable = response.rates;

    for (let key in conversionTable){
        let option = document.createElement("option");
        option.value = key;
        option.innerHTML = key;
        let value = option.cloneNode(true);
        base.appendChild(option);
        conversion.appendChild(value);
    }

    console.log("test");
}

function dataError(){
    console.log("An error occurred");
}

function updateValue(){
    console.log(amount.value);
    let num = parseInt(amount.value);
    console.log(num);
    let exchangeRate = conversionTable[base.value] / conversionTable[conversion.value];
    console.log(exchangeRate);

    if(num){
        let value = num * exchangeRate;
        console.log(value);
        output.innerHTML = value.toFixed(2);
    }
}