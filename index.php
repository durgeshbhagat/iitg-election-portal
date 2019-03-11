<!DOCTYPE HTML>
<html>
   <?php include('head.php'); ?>
   <body>
         <!-- header -->
         <div class="header_bg">
            <div class="container">
            
               <div class="header">
                  <div class="logo">
                     <a href="?gym_election=home"><img src="images/election_logo.jpg" alt=""/></a>
                  </div>
                  <nav class="navbar navbar-default">
                     <!-- Brand and toggle get grouped for better mobile display -->
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                     </div>
                     <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                           <li class="<?php echo ($_GET["gym_election"] == "home" ? "act" : "")?>"><a href="?gym_election=home">Home</a></li>
                           <li class="<?php echo ($_GET["gym_election"] == "criterion" ? "act" : "")?>"><a href="?gym_election=criterion">Criterion</a></li>
                           <li class="<?php echo ($_GET["gym_election"] == "election_rules" ? "act" : "")?>"><a href="?gym_election=election_rules">Rules</a></li>
                           <li class="<?php echo ($_GET["gym_election"] == "schedule" ? "act" : "")?>"><a href="?gym_election=schedule">Schedule</a></li>
                           <li class="<?php echo ($_GET["gym_election"] == "contestants" ? "act" : "")?>"><a href="?gym_election=contestants">Contestants</a></li>
                           <li class="<?php echo ($_GET["gym_election"] == "election_commission" ? "act" : "")?>"><a href="?gym_election=election_commission">Team</a></li>
                        </ul>
                     </div>
                     <!-- /.navbar-collapse -->
                  </nav>
               </div>
            </div>
         </div>
         <div class="header_bottom">
         </div>
         <!-- //end-header -->
         <?php
			if ( isset ( $_GET["gym_election"] ) )
			{
				if ( file_exists ('pages/'.$_GET["gym_election"].'.php') )
				{
					echo file_get_contents('pages/'.$_GET["gym_election"].'.php');
				}
				else
				{
					echo file_get_contents('pages/404.php');
				}
			}
			else
			{
				echo file_get_contents('pages/home.php');
			}
		?>
         <!-- footer -->
         <div class="footer">
            <div class="container">
               <div class="footer-copy">
                  <p>&copy SWC, IIT Guwahati | All rights reserved</p>
               </div>
            </div>
         </div>
         <!-- //footer -->
         <!-- scroll_top_btn -->
         <script type="text/javascript" src="js/move-top.js"></script>
         <script type="text/javascript" src="js/easing.js"></script>
         <script type="text/javascript">
            $(document).ready(function() {

            	var defaults = {
             			containerID: 'toTop', // fading element id
            		containerHoverID: 'toTopHover', // fading element hover id
            		scrollSpeed: 1200,
            		easingType: 'linear'
            		};


            	$().UItoTop({ easingType: 'easeOutQuart' });

            });
         </script>
         <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
         <!--end scroll_top_btn -->
         <!-- for bootstrap working -->
         <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
         <!-- //for bootstrap working -->
   </body>
</html>
<!-- onclick="window.open('http://www.test.com','new_window');" -->
