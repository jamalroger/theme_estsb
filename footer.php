<!-- Footer -->
<?php
/**
 * @package WordPress
 * @subpackage estsb
 */
?> 
<style>
 .page-footer , .page-footer a {
   color:#fff;
 }
</style>
<!-- Footer -->
<footer style="padding:10px" class="page-footer font-small bg-primary">

    <!-- Footer Links -->
    <div class="container">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">Cik club Inforamtique et KnowElgde </h6>

          
          <p>
            <i class="fa fa-home mr-3"></i>
            club Inforamtique et KnowElgde est un club pour partage d'information entre les etudiants qui sont interessé par l'informatique
          </p> 

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Follows</h6>
   
          <p>
          <i class="fa fa-facebook" ></i> <a href="https://web.facebook.com/CIKnENS/">Facebook</a>
          </p>
          <p>
          <i class="fa fa-twitter"></i> <a href="#!">Twitter</a>
          </p>
          <p>
          <i class="fa fa-instagram"></i> <a href="#!">Instagram</a>
          </p>
			<p>
          <i class="fa fa-linkedin"></i> <a href="#!">Linkedin</a>
          </p>
          <p>
          <i class="fa fa-home"></i><a href="#!">About us</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3">
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <p>
            <i class="fa fa-home mr-3"></i> Khalil Jabran B.P 299-24000 El jadida Grand-Casablanca Maroc
          <p>
            <i class="fa fa-envelope mr-3"></i> Email: mail@devweb.team
          <p>
            <i class="fa fa-phone mr-3"></i>  06 75 51 59 06
          <p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->
     </footer>
    <!-- Copyright -->
    <div style="bottom:0;width:100%;padding: 15px 0px;background: #E8EDEA;text-align:center;border-top:1px solid #cccfff;font-family:animevncms;">
		<?php
	global $options;
		echo $option[0]['name'];
	?> 
		Powered by cik Students <br> EEns tetouan © 2018 - 2019 </div>
<!-- to top -->
<div> <a  id='top' href="#" class="gotopbtn"><i class="fa fa-toggle-up"> </i></a> </div>
<div>
<script>
   if (!(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20)){
    document.getElementById("top").style.display = "none";
   }
  window.onscroll = function() {scrollFunction()}
   function scrollFunction() {
  if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("top").style.display = "block";
  } else {
    document.getElementById("top").style.display = "none";
  }
}
   </script>
	
</div>
    <!-- Copyright -->
<!-- 
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/js/scriptmenu.js"></script>
		
</body>
</html>