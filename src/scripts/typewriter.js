var i = 0;
var k = 0;
var txt = [
    "develop...?",
    "create...?",
    "design...?"
];
var speedWrite = 70;
var speedDelete = 60;

function typeWriter() {
    if(i < txt[k].length) {
        document.getElementById("type").innerHTML += txt[k].charAt(i);
        i++;
        setTimeout(typeWriter, speedWrite);
    }
    else {
        delay(2000).then(() => {
            i = txt[k].length;
            typeDeleter();
        });    
    }
}

function typeDeleter() {
    if(i > 0) {
        document.getElementById("type").innerHTML = 
            (document.getElementById("type").innerText).slice(0, (document.getElementById("type").innerText).length - 1);
        i--;
        setTimeout(typeDeleter, speedDelete);
    }
    else{
        delay(1000).then(() => {
            k = (k+1)%3;
            typeWriter();
        });                                    
    }
}

function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}