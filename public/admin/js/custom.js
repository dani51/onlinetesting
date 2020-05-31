
$(document).ready(function () {
    var x=0;
$(".add-more-option").on("click",function(e){
    x++;
    e.preventDefault();
    if(x<4){
        var htm=$(".add-more").html();
        $(".append-more").append(htm);
    }else{
        alert("you can only add 4 options on a question!");
    }

});
});
