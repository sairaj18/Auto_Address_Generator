
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus Contact2 ]*/
    $('.input2').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
            
  
    
    /*==================================================================
    [ Validate ]*/
    var pincode = $('.validate-input input[name="pincode"]');
    var city = $('.validate-input input[name="city"]');
    var state=$('.validate-input input[name="state"]');
    var country = $('.validate-input input[name="country"]');
    var place = $('.validate-input input[name="place"]');
    var street = $('.validate-input textarea[name="street"]');


    $('.validate-form').on('submit',function(){
        var check = true;

        if($(pincode).val().trim().match(/^[0-9]{5,6}$/) == null){
            showValidate(pincode);
            check=false;
        }

        if($(city).val().trim() == '') {
            showValidate(city);
            check=false;
        }

        if($(state).val().trim() == '')
        {
            showValidate(state);
            check=false;
        }

        if($(country).val().trim() == ''){
            showValidate(country);
            check=false;
        }
        
        if($(place).val().trim() == '')
        {
            showValidate(place);
            check=false;
        }

        if($(street).val().trim() == ''){
            showValidate(street);
            check=false;
        }

        return check;
    });


    $('.validate-form .input2').each(function(){
        $(this).focus(function(){
           hideValidate(this);
       });
    });

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);