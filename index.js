
    var num = 1; 
    function slider(){ 
     var img = document.getElementById('slide');
     img.src = 'pic'+ num + ".jpg";
     console.log(img.src);     
    if (num < 4) 
        num++;
    else 
        num = 1;
    setTimeout(slider, 1500);   
    }
slider();