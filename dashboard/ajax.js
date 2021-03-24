$(document).ready(function () {
  //---------- upload apartment --------//
  $("#aptmentUpl").click(function () {
    var suite = $("#suite").val();
    var uapty = $("#apt").val();
    var waterty = $("#water").val();
    var pwrsrc = $("#power").val();
    var state = $("#loc").val();
    var ultel = $("#tel").val();
    var apmail = $("#email").val();
    var price = $("#price").val();
    var loc = $("#twn").val();
    var desc = $("#desc").val();
    var aptact = $("#acct").val();
    var aptbnk = $("#bank").val();
    var toi = $("#toi").val();

    if (price == null || price == "") {
      $("#msg").html("Kindly input the apartment price");
    } else {
      if (loc == null || loc == "") {
        $("#msg").html("Please input apartment location");
      } else {
        if (desc == null || desc == "") {
          $("#msg").html("Tell more about your apartment");
        } else {
          $("#msg").html("Loading... Please wait");
          $.ajax({
            type: "post",
            url: "../functions/init.php",
            data: {
              suite: suite,
              uapty: uapty,
              waterty: waterty,
              pwrsrc: pwrsrc,
              state: state,
              ultel: ultel,
              apmail: apmail,
              price: price,
              loc: loc,
              desc: desc,
              aptact: aptact,
              aptbnk: aptbnk,
              toi: toi,
            },
            success: function (data) {
              $("#msg").html(data);
            },
          });
        }
      }
    }

    $("#ModalCenter").modal();
  });

  //---------- apartment image upload --------//
  $("#aprtUpl").click(function () {
    var fd = new FormData();
    var files = $("#file").prop("files")[0];
    fd.append("file", files);

    if (files == null || files == "") {
      $("#msg").html("Apartment Image cannot be empty");
    } else {
      $.ajax({
        type: "post",
        url: "../functions/init.php",
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
          $("#msg").html(data);
        },
      });
    }
    $("#ModalCenter").modal();
  });

  //------------ edit apartment -------------//
  $("#edtaptmentUpl").click(function () {
    var edsuite = $("#suite").val();
    var eduapty = $("#apt").val();
    var edwaterty = $("#water").val();
    var edpwrsrc = $("#power").val();
    var edstate = $("#loc").val();
    var edultel = $("#tel").val();
    var edapmail = $("#email").val();
    var edprice = $("#price").val();
    var edloc = $("#twn").val();
    var eddesc = $("#desc").val();
    var edaptact = $("#acct").val();
    var edaptbnk = $("#bank").val();
    var edtoi = $("#toi").val();

    if (edprice == null || edprice == "") {
      $("#msg").html("Kindly input the apartment price");
    } else {
      if (edloc == null || edloc == "") {
        $("#msg").html("Please input apartment location");
      } else {
        if (eddesc == null || eddesc == "") {
          $("#msg").html("Tell more about your apartment");
        } else {
          $("#msg").html("Loading... Please wait");
          $.ajax({
            type: "post",
            url: "../functions/init.php",
            data: {
              edsuite: edsuite,
              eduapty: eduapty,
              edwaterty: edwaterty,
              edpwrsrc: edpwrsrc,
              edstate: edstate,
              edultel: edultel,
              edapmail: edapmail,
              edprice: edprice,
              edloc: edloc,
              eddesc: eddesc,
              edaptact: edaptact,
              edaptbnk: edaptbnk,
              edtoi: edtoi,
            },
            success: function (data) {
              $("#msg").html(data);
            },
          });
        }
      }
    }

    $("#ModalCenter").modal();
  });

  //---------- apartment image upload --------//
  $("#edaprtUpl").click(function () {
    var fd = new FormData();
    var files = $("#file").prop("files")[0];
    fd.append("file", files);

    if (files == null || files == "") {
      $("#msg").html("Apartment Image cannot be empty");
    } else {
      $.ajax({
        type: "post",
        url: "../functions/init.php",
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
          $("#msg").html(data);
        },
      });
    }
    $("#ModalCenter").modal();
  });

  //------------ ads upload -------------//
  $("#adsUpl").click(function () {
    var adsid = $("#adsid").val();
    var tagl = $("#tagl").val();
    var dura = $("#dura").val();
    var targ = $("#loc").val();
    var link = $("#link").val();
    var descp = $("#descp").val();

    if (tagl == null || tagl == "") {
      $("#msg").html("Ads Tagline can`t be empty");
    } else {
      if (descp == null || descp == "") {
        $("#msg").html("Kindly tell us more about your ads");
      } else {
        $("#msg").html("Loading... Please wait");

        $.ajax({
          type: "post",
          url: "../functions/init.php",
          data: {
            adsid: adsid,
            tagl: tagl,
            dura: dura,
            targ: targ,
            link: link,
            descp: descp,
          },
          success: function (data) {
            $("#msg").html(data);
          },
        });
      }
    }
    $("#ModalCenter").modal();
  });

  //---------- ads image upload --------//
  $("#adsfileUpl").click(function () {
    var fd = new FormData();
    var files = $("#adsfile").prop("files")[0];
    fd.append("fle", files);

    if (files == null || files == "") {
      $("#msg").html("Ads Image cannot be empty");
    } else {
      $.ajax({
        type: "post",
        url: "../functions/init.php",
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
          $("#msg").html(data);
        },
      });
    }
    $("#ModalCenter").modal();
  });

  //--------- edit ads ----------//
  $("#edadsUpl").click(function () {
    var edadsid = $("#edadsid").val();
    var edtagl = $("#edtagl").val();
    var eddura = $("#dura").val();
    var edtarg = $("#loc").val();
    var edlink = $("#edlink").val();
    var eddescp = $("#eddescp").val();

    if (edtagl == null || edtagl == "") {
      $("#msg").html("Ads Tagline can`t be empty");
    } else {
      if (eddescp == null || eddescp == "") {
        $("#msg").html("Kindly tell us more about your ads");
      } else {
        $("#msg").html("Loading... Please wait");

        $.ajax({
          type: "post",
          url: "../functions/init.php",
          data: {
            edadsid: edadsid,
            edtagl: edtagl,
            eddura: eddura,
            edtarg: edtarg,
            edlink: edlink,
            eddescp: eddescp,
          },
          success: function (data) {
            $("#msg").html(data);
          },
        });
      }
    }
    $("#ModalCenter").modal();
  });




  //verify apartment functions

  //love apartment
  $("#lovebtn").click(function () {

    var love = $("#lover").text();
    var lvpr = $("#lvpr").text();

    $.ajax({
      type: "post",
      url: "../functions/init.php",
      data: {love:love,lvpr:lvpr},
      success: function (data) {
        $("#msg").html(data);
      },
      });
  });
});
