<nav class="navbar navbar-default navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/Schoolproject Senne">School Project</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/Schoolproject Senne">Home <span class="sr-only">(current)</span></a></li>
         <!--    <li><a href="conversation.html">Conversation</a></li>
            <li><a href="https://github.com/RobbeVanHemelryck">Github Robbe </a></li>
            <li><a href="https://github.com/TristanBomans">Github Tristan </a></li>  -->		
          </ul>

           <?php if(isset($_SESSION['user'])) {?>
		  <ul class="nav navbar-nav" style="float:right; margin-right: 50px;">            
			<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
	          <ul class="dropdown-menu" style="">
	            <li><a href="controllers/requestController.php?logout">Logout</a></li>
	            <li><a href="profile.php">Settings</a></li>
	          </ul>
	        </li>
          </ul>
          <?php }?>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
</nav> 