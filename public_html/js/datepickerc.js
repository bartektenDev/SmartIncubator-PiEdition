$(document).ready(function(){
    $("#startdate").datepicker();
});

$("#startdate").datepicker({
    onSelect: function(dateText, inst) {
        var date = $(this).val();
        var time = $('#time').val();
        $("#start").val(date + time.toString(' HH:mm').toString());
        console.log(date + time.toString(' HH:mm').toString());
    }
});
