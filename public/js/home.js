


$("#menu-toggle").click(function(e) {
    // e.preventDefault();
    $("#wrapper").toggleClass("active");
});

/*Scroll Spy*/
$('body').scrollspy({ target: '#spy', offset:80});

/*Smooth link animation*/
// $('a[href*=#]:not([href=#])').click(function() {
//     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
//
//         var target = $(this.hash);
//         target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//         if (target.length) {
//             $('html,body').animate({
//                 scrollTop: target.offset().top
//             }, 1000);
//             return false;
//         }
//     }
// });
clickOn('have_alphabet','have_alphabet');
clickOn('license_type','manual_show');
function clickOn(name,id) {
    $("[name='"+name+"']").click(function(e) {
        // if(this.value=='manual' || this.checked && name !='license_type'){
        if(this.value=='automatic' || this.checked && name !='license_type'){

            $('#'+id).show();
        }else {
            $('#'+id).hide();
        }
    });
}

$('.date-picker').datepicker().on('changeDate', function(ev) {
    ajaxCall($('#start_date').val(),$('#end_date').val());
});
$('#days').bind('change', function(ev) {
    var days=$(this).val();
    var end_date=new Date();
    var start_date=new Date();
    start_date.setDate(end_date.getDate()-days);
    // alert(dateFormatYYYYmmdd(end_date));
    var d1=dateFormatYYYYmmdd(start_date);
    var d2=dateFormatYYYYmmdd(end_date);
    // alert(d1);
    ajaxCall(d1,d2);
});
function dateFormatYYYYmmdd(today) {
    var dd = today.getDate();
    var mm = today.getMonth()+1;
    var yyyy = today.getFullYear();
    if(dd<10)
    {
        dd='0'+dd;
    }
    if(mm<10)
    {
        mm='0'+mm;
    }
    return yyyy+'-'+mm+'-'+dd;

}
function ajaxCall(start_date,end_date) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    if(start_date && end_date){
        $.post("/"+base_location+"/reports",
            {
                start_date: start_date,
                end_date: end_date
            },
            function(val1){
                $("#response").html(val1);
            });
    }
}
