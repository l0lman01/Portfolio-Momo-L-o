<footer class="page-footer">
   <div class="container">
     <div class="row">
       <div class="col l6 s12">
         <h5>Mohamed KHARRAT - Léo PHAM-VU</h5>
         <p>Thanks for visiting our website. More projects below.</p>
       </div>
       <div class="col l4 offset-l2 s12">
         <h5>More</h5>
         <ul>
           <li><a href="castagne.php">La Castagne</a></li>
           <li><a href="forza.php">Froza Horizon 4</a></li>
           <li><a href="oie.php">Jeu de l'oie</a></li>
           <li><a href="contact.php">Contact Us</a></li>
           <li><a href="aboutUs.php">About Us</a></li>
         </ul>
       </div>
     </div>
   </div>
   <div class="footer-copyright">
     <div class="container">
     © 2021 Copyright ML.
     </div>
   </div>
 </footer>
 <script src="js/jquery.min.js" charset="utf-8"></script>
 <script src="js/materialize.min.js" charset="utf-8"></script>
 <script type="text/javascript">

 function sendContact(){
   $.ajax({
     url:"action/send_contact.php" ,
     type: "post",
     data: {
       first_name:$("#first_name").val(),
       last_name:$("#last_name").val(),
       email:$("#email").val(),
       message:$("#message").val(),
     },
     success: function(response){},
     error:function(jqXHR, textStatus, errorThrown){}
   });
 }
 function sendReview(page){
   if($("#name").val().length > 0 && $("#review").val().length > 0){
     $.ajax({
          url:"action/send_review.php" ,
          type: "post",
          data: {
            page:page,
            stars:$("#stars").val(),
            name:$("#name").val(),
            review:$("#review").val(),

          },
          success: function(response){
            $("#stars").val("Rate the Project");
            $("#name").val("");
            $("#review").val("");
            M.toast({html: 'Review Sent!'});
          },
          error:function(jqXHR, textStatus, errorThrown){}
        });}
      else{
        M.toast({html: 'Please Enter a Valid Review!'});
      }

 }
 offset = 0;
 $(window).scroll(function() {
   if ($(window).scrollTop() + $(window).height() >= $(document).height()-100){
        $.ajax({
               url:"action/show_review.php" ,
               type: "post",
               data: {
                 page:"<?php echo $page ?>",
                 offset:offset
               },
               success: function(response){
                 offset+=3
                 $("#reviews").append(response)
               },
               error:function(jqXHR, textStatus, errorThrown){}
             });
    }
});
dark = 0;
btnclr =  " deep-purple darken-3";
function ChangeMode(){
  if (dark==1) {
    dark=0;
    $('#anchorforza').replaceWith("<img id='anchorforza' src='img/forzalogo.png'>");
    $('#gc').replaceWith("<img id='gc' src='img/Logo GC.png' alt='' style='width:70%'>");
    $('#bgforza').replaceWith("<img id='bgforza' src='img/forzalogo2.png' alt=''>");
    $('#lamp').replaceWith("<img id='lamp' src='img/lamp.png' alt='' style='width:40%'>");
    document.getElementById("lightstyle").disabled=true;
    document.getElementById("darkstyle").disabled=false;
    btnclr=" deep-purple darken-3";
  }
  else{
    dark = 1;
    $('#anchorforza').replaceWith("<img id='anchorforza' src='img/forzalogowhite.png'>");
    $('#gc').replaceWith("<img id='gc' src='img/Logo GCwhite.png' alt='' style='width:70%'>");
    $('#bgforza').replaceWith("<img id='bgforza' src='img/forzalogo2white.png' alt=''>");
    $('#lamp').replaceWith("<img id='lamp' src='img/lampewhite.png' alt='' style='width:40%'>");
    document.getElementById("darkstyle").disabled=true;
    document.getElementById("lightstyle").disabled=false;
    btnclr= " light-green accent-3";
  }
     }

     $(document).ready(function(){
   $('.sidenav').sidenav();
   $('.dropdown-trigger').dropdown();
   $('.carousel').carousel();
   $('.carousel.carousel-slider').carousel({
 indicators: true
});
   $('.modal').modal();
   $('.tabs').tabs();
   $('select').formSelect();
   $('#textarea1').val('New Text');
   M.textareaAutoResize($('#textarea1'));
 });

 </script>
