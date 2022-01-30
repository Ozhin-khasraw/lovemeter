function doMafs()
{
    var d = Math.floor(Math.random() * (75 - 25 + 1)) + 25;
    while(d !=25 || d !=50 || d !=75 || d !=100)
    {
        d = Math.floor(Math.random() * (75 - 25 + 1)) + 25;
    }
    document.getElementsByClassName("cus").setAttribute("style","width:"+d);
    alert("done "+d);
}