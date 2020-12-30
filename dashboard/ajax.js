$(document).ready(function() 
{

	//---------- upload apartment --------//
	$("#aptmentUpl").click(function() 
	{

		var suite    = $("#suite").val();
        var uapty    = $("#apt").val();
        var waterty  = $("#water").val();
        var pwrsrc   = $("#power").val();
        var state    = $("#loc").val();
        var ultel    = $("#tel").val();
        var apmail   = $("#email").val();
        var price    = $("#price").val();
        var loc      = $("#twn").val();
        var desc     = $("#desc").val();
        var aptact   = $("#acct").val();
        var aptbnk   = $("#bank").val();

        if (price == null || price == "") {

         $('#msg').html("Kindly input the apartment price");
        } else {

        if (loc == null || loc == "") {

        $('#msg').html("Please input apartment location");
        } else {

        if (desc == null || desc == "") {

        $('#msg').html("Tell more about your apartment");
        } else {

        $('#msg').html("Loading... Please wait");   
        $.ajax
    (
    {
        type        :  'post',
        url         :  '../functions/init.php',
        data        :  {suite:suite,uapty:uapty,waterty:waterty,pwrsrc:pwrsrc,state:state,ultel:ultel,apmail:apmail,price:price,loc:loc,desc:desc,aptact:aptact,aptbnk:aptbnk},
        success     :  function(data)
        {
            $('#msg').html(data);
        }
    }
        )
        }
        }
        }	
	
		$("#ModalCenter").modal();
	})


    //---------- apartment image upload --------//
    $("#aprtUpl").click(function() 
    {
        var fd     = new FormData();
        var files  = $('#file').prop('files')[0]; 
        fd.append('file', files);


        if (files == null || files == "") {

             $('#msg').html("Apartment Image cannot be empty");

        } else {
 



     $.ajax
    (
    {
        type        :  'post',
        url         :  '../functions/init.php',
        data        :  fd,
        contentType : false, 
        processData : false, 
        success     :  function(data)
        {
            $('#msg').html(data);
        }
    }
        )
}
$("#ModalCenter").modal();

    })


//------------ edit apartment -------------//
    $("#edtaptmentUpl").click(function() 
    {

        var edsuite    = $("#suite").val();
        var eduapty    = $("#apt").val();
        var edwaterty  = $("#water").val();
        var edpwrsrc   = $("#power").val();
        var edstate    = $("#loc").val();
        var edultel    = $("#tel").val();
        var edapmail   = $("#email").val();
        var edprice    = $("#price").val();
        var edloc      = $("#twn").val();
        var eddesc     = $("#desc").val();
        var edaptact   = $("#acct").val();
        var edaptbnk   = $("#bank").val();

        if (edprice == null || edprice == "") {

         $('#msg').html("Kindly input the apartment price");
        } else {

        if (edloc == null || edloc == "") {

        $('#msg').html("Please input apartment location");
        } else {

        if (eddesc == null || eddesc == "") {

        $('#msg').html("Tell more about your apartment");
        } else {

        $('#msg').html("Loading... Please wait");   
        $.ajax
    (
    {
        type        :  'post',
        url         :  '../functions/init.php',
        data        :  {edsuite:edsuite,eduapty:eduapty,edwaterty:edwaterty,edpwrsrc:edpwrsrc,edstate:edstate,edultel:edultel,edapmail:edapmail,edprice:edprice,edloc:edloc,eddesc:eddesc,edaptact:edaptact,edaptbnk:edaptbnk},
        success     :  function(data)
        {
            $('#msg').html(data);
        }
    }
        )
        }
        }
        }   
    
        $("#ModalCenter").modal();
    })


    //---------- apartment image upload --------//
    $("#edaprtUpl").click(function() 
    {
        var fd     = new FormData();
        var files  = $('#file').prop('files')[0]; 
        fd.append('file', files);


        if (files == null || files == "") {

             $('#msg').html("Apartment Image cannot be empty");

        } else {
 



     $.ajax
    (
    {
        type        :  'post',
        url         :  '../functions/init.php',
        data        :  fd,
        contentType : false, 
        processData : false, 
        success     :  function(data)
        {
            $('#msg').html(data);
        }
    }
        )
}
$("#ModalCenter").modal();

    })
})	