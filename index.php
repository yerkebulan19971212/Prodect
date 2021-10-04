<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ProDec</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
   include 'layout/header.php';
   include 'layout/main.php';
   include 'layout/process.php';
   include 'layout/services.php';
   include 'layout/tools.php';
   include 'layout/portfolio.php';
   include 'layout/contact.php';
    include 'layout/footer.php';

     if(!empty($_POST)){
         $to = "yerkebulan19971212@gmail.com"; // this is your Email address
         $from = $_POST['email']; // this is the sender's Email address
         $name = $_POST['name'];
         $number = $_POST['number'];
         $subject = "Order";

         $message = $name . " \n" . $number ."\n".$from;

         $headers = "From:" . $from;

         mail($to,$subject,$message);
         // echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
         // You can also use header('Location: thank_you.php'); to redirect to another page.
     }
     ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function closeFunction() {
      var element = document.getElementById("nav-body");
      element.classList.remove("active");
    }
    function openFunction(){
        var element = document.getElementById("nav-body");
      element.classList.add("active");
    }
    $( "#mobile1").click(function() {
        $( ".mobile2-tech" ).removeClass( "active" );
        $( ".mobile1-tech" ).addClass( "active" );
    });
    $( "#mobile2").click(function() {
        $( ".mobile1-tech" ).removeClass( "active" );
        $( ".mobile2-tech" ).addClass( "active" );
    });
    let i = 0;
    let cur_num = 1;
    for(i=1; i<6; i++ ){
        let id = '#btn' + i;
        let num = i;
        $( id ).click(function() {
            let cl = '.section' + num;
            let btncl = '.btn' + num;
            if (cur_num) {
                console.log(cur_num);
            }


            if (cur_num>num) {
                $('.btn').removeClass('button');
                $('.btn').addClass('right');
            }else{
                $('.btn').addClass('button');
            }
            $('.btn').removeClass('active');
            $(btncl).addClass('active');
            $('.section').removeClass('active');
            $(cl).addClass('active');
            cur_num = num;
        });
    }
    $(function() {
        $('a[href*=\\#]:not([href=\\#])').on('click', function() {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
            console.log("DDDDDDDDDDDDDDDd")
        });
    });
</script>
</body>
</html>
