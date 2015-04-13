<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script type="text/javascript"src="{{ asset('/js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript"src="{{ asset('/js/main.js') }}"></script>

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <style>
        .error{
            color:red;
        }
    </style>
    <script type="text/javascript">
/**
  * Basic jQuery Validation Form Demo Code
  * Copyright Sam Deering 2012
  * Licence: http://www.jquery4u.com/license/
  */
(function($,W,D)
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
                   /* date:"required",*/
                    No_of_Nights:"required",
                    remark:"required",
                    adults:"required",
                    activity:"required",
                    purpose:"required"
                    
                },
                messages: {
                    destination: "Please enter your destination field",
                    travelling: "Please enter your travelling from field",
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


 $("#form").submit(function(e)
                {
                    var postData = $(this).serializeArray();
                    var formURL = $(this).attr("action");

                    $.ajax(
                    {
                        url : formURL,
                        type: "POST",
                        data : postData,
                        success:function(data)
                        {
                            console.log(data);
                        //data: return data from server
                        },
                        error: function(data)
                        {
                            console.log(data.responseJSON);
                        //in the responseJSON you get the form validation back.
                        }
                    });
                    e.preventDefault(); //STOP default action
                    e.unbind(); //unbind. to stop multiple form submit.
                });
    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
</script>


<script>
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
var form = $( "#form" );
form.validate();
$( "Submit" ).click(function() {
  alert( "Valid: " + form.valid() );
});
</script>
<script type="text/javascript">
/**
  * Basic jQuery Validation Form Demo Code
  * Copyright Sam Deering 2012
  * Licence: http://www.jquery4u.com/license/
  */
(function($,W,D)
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
                   mobile:"required"
                  
                    
                },
                messages: {
                    name: "Please enter your name field",
                    email: "Please enter your email field",
                       mobile: "Please enter your mobilefield"
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

})(jQuery, window, document);
</script>

<script type="text/javascript">
/**
  * Basic jQuery Validation Form Demo Code
  * Copyright Sam Deering 2012
  * Licence: http://www.jquery4u.com/license/
  */
(function($,W,D)
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

})(jQuery, window, document);
</script>

<script type="text/javascript">
/**
  * Basic jQuery Validation Form Demo Code
  * Copyright Sam Deering 2012
  * Licence: http://www.jquery4u.com/license/
  */
(function($,W,D)
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
                    start_city: "Please enter  start_city field",
                    destination: "Please enter destination field",
                       preferred_airlines: "Please enter preferred_airlines field"
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

})(jQuery, window, document);
</script>


<script type="text/javascript">
/**
  * Basic jQuery Validation Form Demo Code
  * Copyright Sam Deering 2012
  * Licence: http://www.jquery4u.com/license/
  */
(function($,W,D)
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
                   children:"required",

                },
                messages: {
                    city: "Please enter city field",
                    nights: "Please enter  no of nights field",
                    tentative: "Please enter  tentative budget field",
                    adults: "Please enter no of adults field",
                    children: "Please enter no of children field"
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

})(jQuery, window, document);
</script>

    <script type="text/javascript">
/**
  * Basic jQuery Validation Form Demo Code
  * Copyright Sam Deering 2012
  * Licence: http://www.jquery4u.com/license/
  */
(function($,W,D)
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

})(jQuery, window, document);
</script>



</head>
<body onload="myFunction()">

<script>
function myFunction() {
       var today = new Date().toISOString().split("T")[0];
       document.getElementById("datepicker").setAttribute("min", today); 
}
</script>




    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Travel Enable</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('Leisure') }}">Leisure Tourism</a></li>
                    <li><a href="{{ url('Leisure') }}">Medical Tourism</a></li>
                    <li><a href="{{ url('Leisure') }}">Accomadation</a></li>
                </ul>
            </div>
        </div>
    </nav>

<!--Tabs-->
<div role="tabpanel">

            <!-- Nav tabs -->
    <div class="container">
        <div class="col-lg-12">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#holidays" aria-controls="home" role="tab" data-toggle="tab"><span>HOLIDAYS</span></a></li>
                <li role="presentation"><a href="#visa" aria-controls="profile" role="tab" data-toggle="tab"><span>VISA</span></a></li>
                <li role="presentation"><a href="#passport" aria-controls="messages" role="tab" data-toggle="tab"><span>PASSPORT</span></a></li>
                <li role="presentation"><a href="#flights" aria-controls="settings" role="tab" data-toggle="tab"><span>FLIGHTS</span></a></li>
                <li role="presentation"><a href="#hotels" aria-controls="settings" role="tab" data-toggle="tab"><span>HOTELS</span></a></li>
                <li role="presentation"><a href="#offers" aria-controls="settings" role="tab" data-toggle="tab"><span>OFFERS</span></a></li>
                <li role="presentation"><a href="#travel" aria-controls="settings" role="tab" data-toggle="tab"><span>TRAVEL INSURANCES</span></a></li>
            </ul>
        </div>
    </div>

    <!--Holiday-->

    <div class="tab-content">

        <div role="tabpanel" class="tab-pane active" id="holidays">
            <h3 style="text-align:center;margin-top:50px;">PAYAANA VOYAGE HOLIDAY</h3>
            <div class="col-lg-12 tab1_content">
                <div class="container">
                    <div id="holi">
                        <!--@if ($errors->has())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br>        
                                @endforeach
                            </div>
                        @endif-->
                        {!! Form::open(['url' => 'Leisure','method'=>'POST','id'=>'form'] ) !!}
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <div class="col-lg-3 desti">
                                        {!! Form::label('name','Enter Destination:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('destination',null, ['class' => 'formcontrol', 'required']) !!}  
                                        <!--<input type="text" name="destination" value="{{ Input::old('destination') }} " >-->
                                        <!--@if($errors->has('destination')) <p style="color:red;width:186%;"> {{ $errors->first('destination') }} </p> @endif-->
                                    </div>
                                </div><br><br><br>

                                <div class="form-group">
                                    <div class="col-lg-3">
                                        {!! Form::label('name','Travelling From:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('travelling',null, ['class' => 'formcontrol',]) !!}
                                        
                                    </div>
                                </div><br><br><br>

                                <div class="form-group">
                                    <div class="col-lg-3">
                                        {!! Form::label('name','Starting Date:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::input('date','date', null, ['class' => 'formcontrol ', 'id'=> 'date'] ) !!}
                                       
                                    </div>
                                </div><br><br><br>

                                <div class="form-group">
                                    <div class="col-lg-3">
                                        {!! Form::label('name','No. of Nights:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('No_of_Nights',null, ['class' => 'formcontrol',]) !!}
                                        @if($errors->has('No_of_Nights')) <p style="color:red;width:186%"> {{ $errors->first('No_of_Nights') }} </p> @endif
                                    </div>
                                </div><br><br><br><br>

                                <div class="form-group">
                                    <div class="col-lg-3">          
                                        {!! Form::label('name','Remark:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('remark',null, ['class' => 'formcontrol',]) !!}
                                        @if($errors->has('remark')) <p style="color:red;width:186%"> {{ $errors->first('remark') }} </p> @endif
                                    </div>
                                </div><br><br>
                            </div>

                            <div class="col-lg-6">
                            
                                <div class="form-group">
                                    <div class="col-lg-3">
                                        {!! Form::label('name','Adults:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('adults',null, ['class' => 'formcontrol',]) !!}
                                    </div>
                                </div><br><br><br>

                                <div class="form-group">
                                    <div class="col-lg-3">
                                        {!! Form::label('name','Kids:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('kids',null, ['class' => 'formcontrol',]) !!}
                                    </div>
                                </div><br><br><br>

                                <div class="form-group">
                                    <div class="col-lg-3">
                                        {!! Form::label('name','Activity:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('activity',null, ['class' => 'formcontrol',]) !!}
                                    </div>
                                </div><br><br><br>

                                <div class="form-group">
                                    <div class="col-lg-3">
                                        {!! Form::label('name','Purpose:') !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::text('purpose',null, ['class' => 'formcontrol',]) !!}
                                    </div>
                                </div><br><br>
                            </div> 
                        
                            <div class="col-lg-12">
                                <div class="form-group" style="padding-left:32%;">
                                    {!! Form::submit('Submit',['class' => 'btn btn-primary formcontrol',]) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>


        </div>



<!--Visa-->
        <div role="tabpanel" class="tab-pane" id="visa">
            <h3 style="text-align:center;margin-top:50px;">VISA QUERY</h3>
            <div class="col-lg-12 tab2_content">
                <div class="container">
                    {!! Form::open(['url' => 'Leisure','method'=>'POST','id'=>'form-visa'] ) !!}
                        <div class="col-lg-6">

                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('name','Name:') !!}
                                </div>
                                <div class="col-lg-1">
                                    <div class="visase" style="width:150%;">
                                        {!!Form::select('size', array('L' => 'Mr','M' => 'Ms', 'S' => 'Mrs')); !!}
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-left:8%;">
                                    {!! Form::text('name',null, ['class' => 'formcontrol',]) !!}
                                </div>
                            </div><br><br><br>

                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('name','Email:') !!}
                                </div>
                                <div class="col-md-6">
                                    
                                        {!! Form::text('email', '', array('placeholder' => 'example@gmail.com','class'=>'formcontrol'));!!}
                                  
                                </div>
                            </div><br><br><br>

                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('name','Mobile No:') !!}
                                </div>
                                <div  class="col-md-6">
                                    
                                        {!! Form::text('mobile', '', array('placeholder' => '+91','class'=>'formcontrol'));!!}
                               
                                </div><br><br><br>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('name','Product:') !!}
                                </div>
                                <div class="col-lg-3">
                                    <div class="visase">
                                        {!!Form::select('product', array('L' => 'Business','M' => 'Travel', 'S' => 'Others')); !!}
                                    </div>
                                </div>
                            </div><br><br><br>

                            <div class="form-group">   
                                <div class="col-lg-3">
                                    {!! Form::label('name','Country:') !!}
                                </div>
                                <div class="col-lg-3">
                                    <div class="visase">
                                        {!!Form::select('country', array('L' => 'AAAAA','M' => 'BBBBB','H' => 'DDDDD', 'S' => 'CCCCC')); !!}
                                    </div>
                                </div><br><br>
                            </div>
                        </div>    

                        <div class="col-lg-3">
                            <div class="form-group" style="margin-left:3%;margin-top: 35%;">
                                {!! Form::submit('Submit',['class' => 'btn btn-primary formcontrol',]) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
              
<!--PASSPORT-->

        <div role="tabpanel" class="tab-pane" id="passport">
            <h3 style="text-align:center;margin-top:50px;">PASSPORT</h3>
            <div style="margin-top:2%" class="container">
                <div class="col-lg-12">
                     {!! Form::open(['url' => 'Leisure','method'=>'POST','id'=>'form-passport'] ) !!}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('name','Name:') !!}
                                </div>
                                <div class="col-lg-1">
                                    <div class="visase" style="width:163%;">
                                        {!!Form::select('size', array('L' => 'Mr','M' => 'Ms', 'S' => 'Mrs')); !!}
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-left:8%;">
                                    {!! Form::text('name',null, ['class' => 'formcontrol',]) !!}
                                </div>
                            </div><br><br><br>
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('name','Email:') !!}
                                </div>
                                <div class="col-md-6">
                                    
                                        {!! Form::text('email', '', array('placeholder' => 'example@gmail.com','class'=>'formcontrol'));!!}
                                    
                                </div>
                            </div><br><br><br>
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('name','Mobile No:') !!}
                                </div>
                                <div class="col-md-6">
                                    
                                        {!! Form::text('mobile', '', array('placeholder' => '+91','class'=>'formcontrol'));!!}
                                </div>
                            </div><br><br><br>
                            <div class="form-group">        
                                <div class="col-lg-3">
                                    {!! Form::label('name','Product:') !!}
                                </div>
                                <div class="col-lg-3">
                                    <div class="visase">
                                        {!!Form::select('size', array('L' => 'Fresh','M' => 'Renewal')); !!}
                                    </div>
                                </div>
                            </div><br><br><br>
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('name','Country:') !!}
                                    </div>
                                <div class="col-lg-3">
                                    <div class="visase">
                                        {!!Form::select('size', array('L' => 'AAAAA','M' => 'BBBBB','H' => 'DDDDD', 'S' => 'CCCCC')); !!}
                                    </div>
                                </div>
                            </div><br><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-3">
                                <div class="passport">
                                    <h4>Our Services</h4>
                                    <p>Online Application</p>
                                    <p>Consultation on Documents Required</p>
                                    <p>Obtaining Appointment for Submission</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group" style="padding-left:32%;margin-top: 1%;">
                                {!! Form::submit('Submit',['class' => 'btn btn-primary formcontrol',]) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
                

<!--FLIGHTS-->
        <div role="tabpanel" class="tab-pane" id="flights">
            <h3 style="text-align:center;margin-top:50px;">FLIGHTS</h3>
            <div class="container">
                <div class="col-lg-12">
                    {!! Form::open(['url' => 'Leisure','method'=>'POST','id'=>'form-flights'] ) !!}
                        <div class="form-group">
                            <div class="col-lg-3">
                                {!! Form::label('name','One Way') !!}
                                {!! Form::radio('name', 'value', true); !!}            
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-3">
                                {!! Form::label('name','Round Trip') !!}
                                {!! Form::radio('name', 'value', true); !!}            
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-3">
                                {!! Form::label('name','Multi City') !!}
                                {!! Form::radio('name', 'value', true); !!}            
                            </div><br><br><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('name','Start City:') !!}
                                </div>
                                <div class="col-md-6">
                                    
                                        {!! Form::text('start_city',null, ['class' => 'formcontrol',]) !!}
                                   
                                </div>
                            </div><br><br><br>
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('name','Destination:') !!}
                                </div>
                                <div class="col-md-6">
                                    <!--edit-->
                                        {!! Form::text('destination',null, ['class' => 'formcontrol',]) !!}
                                   
                                </div>
                            </div><br><br><br>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="col-lg-4">
                                    <div class="visasel">
                                        {!! Form::label('name','Adult') !!}
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        {!!Form::select('size', array('L' => '1-5','M' => '5-10','S' => '10-20', 'S' => '20-50')); !!}            
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">       
                                <div class="col-lg-4">
                                    <div class="visasel" style="margin-top:-5%;">
                                        {!! Form::label('name','Children') !!}
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        {!!Form::select('size', array('L' => '1-5','M' => '5-10','S' => '10-20', 'S' => '20-50')); !!}           
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-4">
                                    <div class="visasel" style="margin-top:-5%;">
                                        {!! Form::label('name','Infants') !!}
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        {!!Form::select('size', array('L' => '1-5','M' => '5-10','S' => '10-20', 'S' => '20-50')); !!}            
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="col-lg-3">
                                     {!! Form::label('name','Preferred Airlines:') !!}
                                </div>
                                <div class="col-md-6">
                                    
                                        {!! Form::text('preferred_airlines',null, ['class' => 'formcontrol',]) !!}
                                    
                                </div>
                            </div><br><br><br>
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('name','Travel Class') !!}
                                </div>
                                <div class="col-lg-3"> 
                                   
                                        {!!Form::select('size', array('L' => 'Economy','M' => 'First','S' => 'Business')); !!}            
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group" style="padding-left:32%;margin-top:3%;">
                                {!! Form::submit('Submit',['class' => 'btn btn-primary formcontrol',]) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div><br><br><br>
            </div>
        </div>

<!--Hotels-->
        
        <div role="tabpanel" class="tab-pane" id="hotels">
            <h3 style="text-align:center;margin-top:50px;">HOTELS</h3>
            <div class="container">
                <div class="col-lg-12">
                    {!! Form::open(['url' => 'Leisure','method'=>'POST','id'=>'form-hotels'] ) !!}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('name','Category') !!}
                                </div>
                                <div class="col-lg-3"> 
                                    <div class="flighteco">
                                        {!!Form::select('size', array('L' => '1','M' => '2','S' => '3')); !!}            
                                    </div>
                                </div>
                            </div><br><br><br>
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('name','Room Type') !!}
                                </div>
                                <div class="col-lg-3"> 
                                    <div class="flighteco">
                                        {!!Form::select('size', array('L' => 'Single','M' => 'Twin','S' => 'Double')); !!}            
                                    </div>
                                </div>
                            </div><br><br><br>
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('name','Room Category') !!}
                                </div>
                                <div class="col-lg-3"> 
                                    <div class="flighteco">
                                        {!!Form::select('size', array('L' => 'Standard','M' => ' Superior','A' => 'Deluxe','B' => 'Suite','C' => 'Service Apts','D' => 'Studio')); !!}            
                                    </div>
                                </div>
                            </div><br><br><br>
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('name','City:') !!}
                                </div>
                                <div class="col-md-6">
                                 
                                        {!! Form::text('city',null, ['class' => 'formcontrol',]) !!}
                                   
                                </div>
                            </div><br><br><br>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('name','No. of Nights:') !!}
                                </div>
                                <div class="col-md-6">
                                    
                                        {!! Form::text('nights',null, ['class' => 'formcontrol',]) !!}
                                
                                </div>
                            </div><br><br><br>
                            <div class="form-group">    
                                <div class="col-lg-3">
                                    {!! Form::label('name','Tentative Budget:') !!}
                                </div>
                                <div class="col-md-6">
                                    
                                        {!! Form::text('tentative',null, ['class' => 'formcontrol',]) !!}
                                  
                                </div>
                            </div><br><br><br>
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('name','No. of adults:') !!}
                                </div>
                                <div class="col-md-6">
                                    
                                        {!! Form::text('adults',null, ['class' => 'formcontrol',]) !!}
                                    
                                </div>
                            </div><br><br><br>
                            <div class="form-group">
                                <div class="col-lg-3">
                                    {!! Form::label('name','No. of children:') !!}
                                </div>

                                <div class="col-md-6">
                                    <div class="flightair">
                                        {!! Form::text('children',null,  ['class' => 'formcontrol nochil']) !!}                            
                                        <table style="display:none;" id="nochiltable" name="table-entry">                                            
                                            <tr>
                                                <th>No.</th>
                                                <th>Name</th>
                                                <th>Age</th>                                                 
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div><br><br><br>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group" style="padding-left:32%;">
                                {!! Form::submit('Submit',['class' => 'btn btn-primary formcontrol',]) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
<!--OFFERS-->

        <div role="tabpanel" class="tab-pane" id="offers">
            <h3 style="text-align:center;margin-top:50px;">OFFERS</h3>
            <div class="container">
                <h3 style="text-align:center;">No Offer</h3>
            </div>
        </div>

 <!--TRAVEL-->

        <div role="tabpanel" class="tab-pane" id="travel">
            <h3 style="text-align:center;margin-top:50px;">TRAVEL INSURANCE</h3>
            <div class="container">
                {!! Form::open(['url' => 'Leisure','method'=>'POST','id'=>'form-travel'] ) !!}
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="col-lg-3">
                                {!! Form::label('name','No. of guest:') !!}
                            </div>
                            <div class="col-md-6">
                                <div class="flightair">
                                    {!! Form::text('guest',null,  ['class' => 'formcontrol nochilguest']) !!}                            
                                </div>
                            </div><br><br><br>
                            <div class="col-lg-3">
                                <div class="flightair">
                                    <table style="width:300%; display:none;" id="noguesttable" required>                                           
                                        <tr style="border:1px solid black;">
                                            <th style="border:1px solid black;" >No.</th>
                                            <th style="border:1px solid black;">Name</th>
                                            <th style="border:1px solid black;">Age Group</th>
                                            <th style="border:1px solid black;">Travel Duration</th>
                                            <th style="border:1px solid black;">Country of visit</th>                                                 
                                        </tr>
                                    </table>
                                </div>
                            </div><br>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group" style="padding-left:32%;">
                            {!! Form::submit('Submit',['class' => 'btn btn-primary formcontrol',]) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
<!--last tab div-->
    </div>
</div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript">
    
    $(document).ready(function(){
        $(".nochil").keyup(function(){
            var value=$(this).val();
               if(value!=""){
                 $("#nochiltable").show();
                  if($.isNumeric(value)){
                       $("#nochiltable").show();
                        var html;
                        for (var i = 0; i < value; i++) {
                            var sno=i+1;
                          html +='<tr><td>'+sno+'</td><td><input type="text" name="name['+i+']" required></td><td><input type="text" name="age['+i+']" required></td></tr>'; 
                        };
                      $("#nochiltable ").append(html);
                  }else{
                    alert("Invalid Value"); 
                  }
               }else{
                 // $("#nochiltable").html('');
                  $("#nochiltable").hide();
               }
        });
    });
</script>
<!--GUEST-->

<script type="text/javascript">
    
    $(document).ready(function(){
        $(".nochilguest").keyup(function(){
            var value=$(this).val();
                if(value!=""){
                    $("#noguesttable").show();
                    if($.isNumeric(value)){
                        $("#noguesttable").show();
                        var html;
                        for (var i = 0; i < value; i++) {
                            var sno=i+1;
                            html+='<tr><td>'+sno+'</td><td><input type="text" name="name['+i+']" required></td><td><input type="text" name="age['+i+']" required></td><td><input type="text" name="travel-duration['+i+']" required></td> <td><input type="text" name="country['+i+']" required></td></tr>';
                        };
                        
                        $("#noguesttable ").append(html);

                     }

                    else{
                        alert("Invalid Value");
                    }
                }else{
                    $("#noguesttable").hide();
                }
            });
        
        });
</script>

    <!-- Scripts -->
        <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>


