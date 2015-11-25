<html>
 <?php
	@session_start();
	include('includes.php');
	$user = @$_SESSION['user'];
	
	if($user == null || $user == '')
	{
 ?>
 <script type='text/javascript' src='script/connexion.js'></script>
 <?php
	}
	else
	{
 ?>
 <?php include("header.php");?>
 <body>
 </body>
 <?php include("footer.php");?>
 <?php
	}
 ?>
  <!-- Connexion Modal-->
 <form method='post' action='userSession.php?session=start'>
  <div class="modal fade bs-example-modal-lg" id="ConnexionModal">
   <div class="modal-dialog modal-lg">
    <div class="modal-content">
	  <div class="modal-header">
	  <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
	   <h4 class="modal-title">Veuillez-vous connecter</h4>
	  </div>
	  <div class="modal-body">
	   <div class="row">
	    <div class="col-md-10 col-md-offset-1">
	     <input id="usernameId" class="form-control" type="text" name="username" value="" placeholder="Nom d'utilisateur" required/><br />
	     <input id="passwordId" class="form-control" type="password" name="password" value="" placeholder="Mot de passe" required/>
		</div>
	   </div>
	  </div>
	  <div class="modal-footer">
	   <button id="btnConnection" type="submit" class="btn btn-primary">Connexion</button>	   
	  </div>
	 </div>
    </div>
   </div>
  </form>
  <!--Connexion Modal End-->
</html>
