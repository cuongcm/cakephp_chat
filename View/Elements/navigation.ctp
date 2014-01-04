    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $this->webroot.'home/index'; ?>">Chat Home</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo $this->webroot.'users/index'; ?>">Your Panel</a></li>
<?php 
  if( $this->Session->check('Auth.User') )
    echo  '<li><a href='.$this->webroot.'users/logout'.'>Logout</a></li>';
  else 
    echo  '<li><a href='.$this->webroot.'users/register'.'>Register</a></li>';
?>
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>