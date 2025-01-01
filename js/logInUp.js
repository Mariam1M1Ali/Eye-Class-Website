var count = 0
var count2 = 0

// check that the all cahrs is only letters
function checkIt(evt) 
{
    var charCode = evt.keyCode
        if (charCode < 48 || charCode > 57) 
        {
            return true
        }
        else 
        {
            if (count == 3) 
            {
                alert("Enter only Letters")
            }
            count++
            return false
        }
}
    
// check that the input is only numbers
function checkIt2(evt) 
{
    var charCode = evt.keyCode
        if (charCode >= 48 && charCode <= 57) 
        {
            return true
        }
        else {
            if (count2 == 3) 
            {
                alert("Enter only Numbers")
            }
            count2++
            return false
        }
}
    