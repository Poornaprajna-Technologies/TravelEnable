/*function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#form").validate({
                rules: {
                    destination: "required",
                    travelling: "required",
                    /*date :"required"*/
                    /*No_of_Nights:"required",
                    remark:"required",
                    adults:"required",
                    activity:"required",
                    purpose:"required"
                    
                },
                messages: {
                    destination: "Please enter your destination field",
                    travelling: "Please enter your travelling from field",
                    date: "Please enter your date  field",
                    No_of_Nights: "Please enter your no of nights field",
                    remark: "Please enter your remarks field",
                    adults: "Please enter your adults field",
                    activity: "Please enter your activity field",
                    purpose: "Please enter your purpose field"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

}(jQuery, window, document);/*---------holiday-----------*/



/*(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#form-visa").validate({
                rules: {
                   name: "required",
                   email: "required",
                   mobile:"required",
                   size:"required"
                    
                },
                messages: {
                    name: "Please enter your name field",
                    email: "Please enter your email field",
                       mobile: "Please enter your mobilefield",
                       size:"Please enter the field"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);/*----------visa-----------*/



/*(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#form-passport").validate({
                rules: {
                   name: "required",
                   email: "required",
                   mobile:"required",
                   size:"required"
                    
                },
                messages: {
                    name: "Please enter your name field",
                    email: "Please enter your email field",
                       mobile: "Please enter your mobilefield",
                       size:"Please enter the field"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);/*---------passport-------------*/



/*(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#form-flights").validate({
                rules: {
                   start_city: "required",
                  destination: "required",
                   preferred_airlines:"required"
                    
                },
                messages: {
                    start_city: "Please enter your start_city field",
                    destination: "Please enter your destination field",
                       preferred_airlines: "Please enter your preferred_airlines field"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);/*------------flights----------*/


/*(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#form-hotels").validate({
                rules: {
                   city: "required",
                  nights: "required",
                   tentative:"required",
                   adults:"required",
                   children:"required" 
                },
                messages: {
                    city: "Please enter your city field",
                    nights: "Please enter your no of nights field",
                    tentative: "Please enter your tentative budget field",
                    adults: "Please enter your no of adults field",
                    children: "Please enter your no of children field"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);/*------------hotels------------*/


/*(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#form-travel").validate({
                rules: {
                    guest: "required"
                     
                },
                messages: {
                    guest: "Please enter your no of guest field"
                    
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);/*---