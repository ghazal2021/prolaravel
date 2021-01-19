
$('#sidebar').on('hide.bs.collapse', function (e){
if( e.target == this){
    $('#main-content').removeClass('col-md-10');
}
})
$('#sidebar').on('show.bs.collapse', function (e){
    if(e.target ==this){
    $('#main-content').addClass('col-md-10');
}
})





var ch1 = $('#Chart1');
var Chart1 = new Chart (ch1, {
    type: 'line',
    data:{
labels:[ 'one','two','three','four','five','six','seven'],
datasets:[{
    data:[12000,11900,12700,14000,13500,15000,14500],
backgroundColor:'#6bccdb',
borderColor:'white',
pointBackgroundColor:'blue',
    }]
},
options:{
scales:{
    yAxes:[{
        display:false
    }],
     xAxes:[{
        display:false
    }]
},
legend:{
  display:false   
},
layout:{
    padding:{
        left:5,
        right:5,
        top:5,
        bottom:10,
    }
}
}
});

var ch2 = $('#Chart2');
var Chart2 = new Chart (ch2, {
    type: 'bar',
    data:{
labels:[ 'one','two','three','four','five','six','seven'],
datasets:[{
    data:[12000,11900,12700,14000,13500,15000,14500],
backgroundColor:'#4bcb68',
borderColor:'white',
pointBackgroundColor:'0c8f29',
    }]
},
options:{
scales:{
    yAxes:[{
        display:false
    }],
     xAxes:[{
        display:false
    }]
},
legend:{
  display:false   
},
layout:{
    padding:{
        left:5,
        right:5,
        top:5,
        bottom:10,
    }
}
}
});



var ch3 = $('#Chart3');
var Chart3 = new Chart (ch3, {
    type: 'doughnut',
    data:{
labels:[ 'one','two','three','four','five','six','seven'],
datasets:[{
    data:[12000,11900,12700,14000,13500,15000,14500],
backgroundColor:'#fedd84',
borderColor:'white',
pointBackgroundColor:'0c8f29',
    }]
},
options:{
scales:{
    yAxes:[{
        display:false
    }],
     xAxes:[{
        display:false
    }]
},
legend:{
  display:false   
},
layout:{
    padding:{
        left:5,
        right:5,
        top:5,
        bottom:10,
    }
}
}
});




var ch4 = $('#Chart4');
var Chart4 = new Chart (ch4, {
    type: 'line',
    data:{
labels:[ 'one','two','three','four','five','six','seven'],
datasets:[{
    data:[20000,30000,40000,35000,40000,40000,60000],
backgroundColor:'#e67c86',
borderColor:'white',
pointBackgroundColor:'white',
    }]
},
options:{
scales:{
    yAxes:[{
        display:false
    }],
     xAxes:[{
        display:false
    }]
},
legend:{
  display:false   
},
layout:{
    padding:{
        left:5,
        right:5,
        top:5,
        bottom:10,
    }
}
}
});
