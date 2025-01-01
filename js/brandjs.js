var mainImg = document.getElementsByClassName("mainImg")
var imgOne = document.getElementsByClassName("imgOne")
var imgTwo = document.getElementsByClassName("imgTwo")
var imgThree = document.getElementsByClassName("imgThree")


// replace first photo with main photo
function changeOne()
{
    var imgOneSrc = mainImg[0].src
    mainImg[0].src = imgOne[0].src
    imgOne[0].src = imgOneSrc
}

// replace second photo with main photo
function changeTwo()
{
    var imgOneSrc = mainImg[0].src
    mainImg[0].src = imgTwo[0].src
    imgTwo[0].src = imgOneSrc
}


// replace thied photo with main photo
function changeThree()
{
    var imgOneSrc = mainImg[0].src
    mainImg[0].src = imgThree[0].src
    imgThree[0].src = imgOneSrc
}



