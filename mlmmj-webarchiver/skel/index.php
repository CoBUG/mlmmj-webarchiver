<?php
  $baselistdir = getcwd();
  $mlist = substr(strrchr ($baselistdir, "/"), 1);
  $mlistdir = opendir($baselistdir);
  while($file = readdir($mlistdir)) {
    if(is_dir($baselistdir . "/" . $file) && $file != "." && $file != ".." && $file != "images" && $file != "style") {
      $navlists.= " | <a href=\"$file\">$file list</a>";
      $bodylists.= "<h2><a href=\"$file\">$file</a></h2> ";
    }
  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>
 <title>CoBUG Mailing Lists</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" media="screen" href="style/screen.css">
</head>
<body>
<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../" class="navbar-brand">CoBUG Mailing List</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse">
      <ul class="nav navbar-nav">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="https://cobug.org">CoBUG Home</a></li>
        <li><a href="http://slides.cobug.org">Slides</a></li>
      </ul>
    </nav>
  </div>
</header>
<div class="col-md-9" role="main">
  <div id="topnav">
   <a href="/">home</a>
<?php echo $navlists; ?>
  </div>
 </div>
 <div id="mailinglists">
  <div id="main">
   <h1>Mailing Lists</h1>
<?php echo $bodylists; ?>
  </div>
 </div>
</div>
</body>
</html>
