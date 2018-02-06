
////////my account blade begin////////
$('.image_class').bind('change',function (e) {

    var input = this;
    var url = $(this).val();
    var id='#'+$(this).attr('id');
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
    {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(id+'_img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
    else
    {
        alert('Invalid image.');
        $(this).val('');
        $(id+'_img').attr('src', '/img/cam_icon2.png');
    }

});

$('.doccument').bind('change',function (e) {

    var input = this;
    var url = $(this).val();
    var id='#'+$(this).attr('id');
    var html=$(id+'_text').data('value');
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&&( (ext == "doc" || ext == "docx" || ext == "txt" || ext == "pdf") && $(this).hasClass( "certificate" ) || (ext == "xl" || ext == "csv" || ext == "xls" )))
    {
        $(id+'_text').parent().attr("title",input.files[0].name);
        $(id+'_text').html(" "+input.files[0].name.substring(0,20));
    }
    else
    {
        alert('Invalid doccument.');
        $(this).val('');
        $(id+'_text').parent().attr("title","");
        $(id+'_text').html(html);
    }

});
$('.other_doccument').bind('change',function (e) {

    var input = this;
    var url = $(this).val();
    var id='#'+$(this).attr('id');
    var html=$(id+'_text').data('value');
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0])
    {
        $(id+'_text').parent().attr("title",input.files[0].name);
        $(id+'_text').html(" "+input.files[0].name.substring(0,20));
    }
    else
    {
        alert('Invalid doccument.');
        $(id+'_text').parent().attr("title","");
        $(this).val('');
        $(id+'_text').html(html);
    }

});


function  formValidate(obj) {
    $('#'+obj).validate({
//specify the validation rules
        rules: {
            name: "required",
            phone:{
                required: true,
                number: true,
                maxlength:14
            },
            email: {
                required: true,
                email: true //email is required AND must be in the form of a valid email address
            }
        },

//specify validation error messages
        messages: {
            name: "Name field cannot be blank!",
            phone: {
                required: "Phone field cannot be blank!",
                number: "Phone field must be a valid phone number!",
                maxlength: "Phone field must not be more than 15 digits!"
            },
            email: "Please enter a valid email address"
        },

        submitHandler: function(form){
            form.submit();
        }

    });
    $('#'+obj).submit();
}
$('.js-example-basic-multiple').select2({placeholder: 'Select pet owner(s)'});
$('#pet_owners').on('select2:select', function (e) {
    var value=$(this).val().slice(',')[0];
    if(value==-1)
        $('.js-example-basic-multiple').val(value).trigger("change");
});
if($('#accept_transfer').val()=="no")
    $('#province_div').hide();
$('#accept_transfer').on('change', function (e) {
    var value=$(this).val();
    if(value=="yes"){
        $('#province_div').show();
    }else {
        $('#province_div').hide();
    }
});

$(document).ready(function() {
    $("tbody").on('keydown','input.number',function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            // let it happen, don't do anything
            if(($(this).val().indexOf('.') > -1) &&  e.keyCode==190 ){
                e.preventDefault();
            }
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105) || ($(this).val().split('.'))[0].length>2 && ! (e.keyCode==190) && !($(this).val().indexOf('.') > -1) ) {
            e.preventDefault();
        }
    });
    $("tbody").on('blur','input.number',function (e) {
        // alert('abc');
        var data=$(this).val();
        if(data){
            var arr = data.split('.');
            if(arr.length<2 ){
                $(this).val(data+'.00');
            }else if( arr[1].length<1){
                $(this).val(arr[0]+'.00');
            }
        }

    });
    $("#add_row").on("click", function() {
        // Dynamic Rows Code

        // Get max row id and set new id
        var newid = 0;
        $.each($("#tab_logic tr"), function() {
            if (parseInt($(this).data("id")) > newid) {
                newid = parseInt($(this).data("id"));
            }
        });
        newid++;
        var tr = $("<tr></tr>", {
            id: "addr"+newid,
            "data-id": newid
        });

        // loop through each td and create new elements with name of newid
        $.each($("#tab_logic tbody tr:nth(0) td"), function() {
            var cur_td = $(this);

            var children = cur_td.children();

            // add new td and element if it has a nane
            if ($(this).data("name") != undefined) {
                var td = $("<td></td>", {
                    "data-name": $(cur_td).data("name")
                });

                var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
                c.attr("name", $(cur_td).data("name") + newid);
                c.appendTo($(td));
                td.appendTo($(tr));
            } else {
                var td = $("<td></td>", {
                    'text': $('#tab_logic tr').length
                }).appendTo($(tr));
            }
        });


        // add delete button and td
        /*
         $("<td></td>").append(
         $("<button class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>")
         .click(function() {
         $(this).closest("tr").remove();
         })
         ).appendTo($(tr));
         */

        // add the new row
        $(tr).appendTo($('#tab_logic'));


        $(tr).find("td button.row-remove").on("click", function() {

            $(this).closest("tr").remove();
        });

        $('#tab_logic').on('click', "td button.row-remove", function() {
            var current = $(this).parents("tr");
            if(confirm('Are you sure want to delete this row.')){
                if(current.data('license')){
                    // alert(current.data('license'));
                    $.get("/license-price/"+current.data('license'), function(data, status){
                        // alert("Data: " + data + "\nStatus: " + status);
                    });
                }
                if(current.attr('id')){
// Parent
                    while(true){
                        var next = current.next();
                        if(next.length == 0 || next.attr('id')){
                            break;
                        }

                        next.remove();
                    }
                    current.remove();
                }else{
//child
                    current.remove();
                }
            }
            return;

        });

        $(tr).find('td button.row-addsub').on("click", function() {
            $( "tr" ).has( this ).after( '<tr><td></td><td><input type="text"/></td><td><input type="text"/></td><td>YOUR CODE HERE</td><td>YOUR CODE HERE</td><td>YOUR CODE HERE</td><td>YOUR CODE HERE</td><td>YOUR CODE HERE</td><td>YOUR CODE HERE</td><td><button class="btn btn-danger glyphicon glyphicon-remove row-remove"></button></td></tr>' );
        });
    });


    // Sortable Code
    var fixHelperModified = function(e, tr) {
        var $originals = tr.children();
        var $helper = tr.clone();

        $helper.children().each(function(index) {
            $(this).width($originals.eq(index).width())
        });

        return $helper;
    };

    // $(".table-sortable tbody").sortable({
    //     helper: fixHelperModified
    // }).disableSelection();
    //
    // $(".table-sortable thead").disableSelection();



    $("#add_row").trigger("click");
});



$('.user-delete').click(function (e) {
   if(confirm('Are you sure want to delete this user.')){
       var obj=$(this);
       $.get("/user-delete/"+$(this).data('id'), function(data, status){
            obj.parent().parent().remove();
           if(obj.parent().parent().parent().find("tr").length<3){
               $('#user').attr('style','display:block');
           }
           // alert("Data: " + data + "\nStatus: " + status);
       });
   }
});
var pet_type, application_type;
$('.application_type, .pet_type').on('change',function (e) {

    if($(this).hasClass('pet_type'))
        pet_type=$(this).val();
    else
        application_type=$(this).val();
    if(pet_type && application_type){
        $.get("/license-cost", {
            pet_type: pet_type,
            application_type: application_type
        }, function(data, status){

                $('.license_cost').val(data);

        });
    }


});
////////my account blade end////////