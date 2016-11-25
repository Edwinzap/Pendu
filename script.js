$(document).ready(function(){
    $("#letters").keypress(function(e){
        var key = e.which;
        if (key == 13) {
            $('#my_form').submit();
            return false;
        }
    });
});
