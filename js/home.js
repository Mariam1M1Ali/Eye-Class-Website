var hide = document.getElementById('hide')

// show more information
document.getElementById("btn").addEventListener("click", function() {
    var audio = document.getElementById("myAudio");
    audio.play();
    hide.style.display = "block"
    alert("More Information Added")
});