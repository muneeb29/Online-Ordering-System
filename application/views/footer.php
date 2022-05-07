<html>
<div class="scroll text-end mb-3 my-2">
		<button onclick="topFunction()"  class="btn btn-primary scroll-top" id="topButton">Go to top</button>
</div>

<script>
mybutton = document.getElementById("topButton");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } 
  
  else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0; 
}
</script>

  <footer class="bg-dark text-center text-lg-start text-white">
    <div class="container p-3">

	<div class="row text-center">
	<div class="col">
		<h2>Online Ordering System</h2>
	</div>
	</div>

      <div class="row">
        <div class="col-lg-3 mb-4">
          <h4 class="">Help</h4>
          <ul class="list-unstyled mb-3">
            <li>
              <a href="<?php echo base_url(); ?>index.php/privacy" class="text-white mx-2">Privacy Policy</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/terms" class="text-white mx-2">Terms & Conditions</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/returns" class="text-white mx-2">Returns Information</a>
            </li>
			<li>
              <a href="<?php echo base_url(); ?>index.php/delivery" class="text-white mx-2">Delivery Information</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3">
        </div>
        <div class="col-lg-3">
        </div>

        <div class="col-lg-3">
          <h4 class="">Quick Links</h4>
          <ul class="list-unstyled">
            <li>
              <a href="<?php echo base_url(); ?>index.php/Home" class="text-white mx-2">Home</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/Menu" class="text-white mx-2">Menu</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>index.php/Contact" class="text-white mx-2">Contact Us</a>
            </li>
			<li>
              <a href="<?php echo base_url(); ?>index.php/Login" class="text-white mx-2">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.3)">
      <p class="text-white">© 2022 Copyright - Online Ordering System</p>
    </div>
  </footer>

	</div>
</html>
