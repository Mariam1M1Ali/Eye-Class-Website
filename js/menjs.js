var hide = document.getElementsByClassName("hide")

// show all cards
function showAll() 
{
    for (let i = 0; i < hide.length; i++) {
        hide[i].style.display = "block"
    }
}

// chage color for imgs
function changeColor (oldimg, newimg) 
{
    var x = document.getElementById(oldimg)
    x.src = `css/imgs/men/remove/${newimg}`;
}

// make sound
document.getElementById("showSound").addEventListener("click", function() {
    var audio = document.getElementById("show");
    audio.play();
});
