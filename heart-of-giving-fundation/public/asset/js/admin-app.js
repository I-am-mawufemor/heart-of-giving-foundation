const body=document.querySelector("body"),
modeToggle=body.querySelector(".mode-toggle");
sidebar=body.querySelector("nav");

let getMode=localStorage.getItem("mode");

if(getMode && getMode==="dark") {
    body.classList.toggle("dark");
}

let getStatus=localStorage.getItem("status");

if(getStatus && getStatus==="close") {
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click", ()=> {
        body.classList.toggle("dark");

        if(body.classList.contains("dark")) {
            localStorage.setItem("mode", "dark");
        }

        else {
            localStorage.setItem("mode", "light");
        }
    });


/* document.getElementById('check').addEventListener('change', function() {
    const sidebar = document.querySelector('.sidebar');
    if (this.checked) {
        sidebar.classList.add('collapsed');
    } else {
        sidebar.classList.remove('collapsed');
    }
});*/
