$(document).ready(function(){
    $.ajax('https://openexchangerates.org/api/latest.json?app_id=02414aaf5421406ea372f1815b282d95&base=USD', {
        type: 'GET' ,
    }).done(function(res){
        $("#conv").html(res.rates["INR"]);
        $("#reverse").html((1/(res.rates["INR"])).toFixed(4));
    })
});
