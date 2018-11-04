<!DOCTYPE html>
<html>
<head>
	<title>ddmbox</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu
{
    top: 0;
    left: 100%;
    margin-top: -1px;
}
</style>
</head>

<body>
<form method="POST">
<div class="container" >
<h2>Multi-Level Dropdowns</h2>
                                            
  <div class="dropdown" >
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" >Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu" >
      <li><a tabindex="-1" href="#" >HTML</a></li>
      <li><a tabindex="-1" href="#">CSS</a></li>
      <li class="dropdown-submenu" >
        <a class="test" tabindex="-1" href="#" >New dropdown<span class="caret"></span></a>
        <ul class="dropdown-menu" >
          <li><input type="checkbox" value="2nd level dropdown" ="2nd" name="level[]"/> 2nd level dropdown</li>
          <li><input type="checkbox" value="3rd level dropdown" name="level[]"/> 3rd level dropdown</li>
          <li class="dropdown-submenu">
            </ul>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <br/>
<input type="submit" name="submit" value="Submit" />
	
</div>
</form>
</body>


<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

</body>
</html>



<?php

if(isset($_POST['submit']))
{
    if (!empty($_POST['level']))
    {
        foreach ($_POST['level'] as $level)
        {
            echo '<p>'.$level.'</p>';
        }
    }else
    {
        echo "Pleas check one.";
    }
}

?>
