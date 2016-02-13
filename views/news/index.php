<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
 
  <div class="row">
 
      <?php
      foreach($newsList as $news){ ?>
<!--    news start  -->
    <div class="col-md-8 col-md-offset-2">
      <h1><?php echo $news['title']; ?></h1>
      <p><?php echo $news['short_content']; ?></p>
    </div>
      <?php } ?>
<!--    news end    -->
 
  </div>
</div>
     <!-- ШАБЛОН ДОБАВЛЕНИЯ НОВОСТИ  (ФОРМА ОТПРАВКИ)-->
 
<!--add news start-->
  <div class="row">
    <form method="POST" class="form-group" action="add">
      <div class="col-md-8 col-md-offset-2">
        <input type="text" class="form-control" name="title">
        <textarea name="post" id="" cols="30" rows="10" class="form-control"></textarea>
        <button class="btn btn-default form-control">Add news</button>
      </div>
    </form>
  </div>
<!--add news  end -->
    
    
</body>
</html>