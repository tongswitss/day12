<?php include_once 'head.php' ?>
<?php include_once 'jumbotron.php';?>
<?php include_once 'navigater.php';?>

<div class="container" style="margin-top:30px">
<html><head>
<script>
function validateForm()
{
var x=document.forms["myForm"]["fname"].value;
if (x==null || x=="")
  {  alert("First name must be filled out");
  return false;  }
}
</script>
</head>
<body>
<form name="myForm" action="demo_form.asp" onsubmit="return validateForm()" method="post">
First name: <input type="text" name="fname">
<input type="submit" value="Submit">
</form>
</body></html>

    
  <!-- </div> -->
</div>

<?php include_once 'footer.php' ?>

</body>
</html>
