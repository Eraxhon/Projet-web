include('reservation.php')


<p> Le nombre de places est de <?php echo $_POST['places'] ?>

 La destination choisie est <?php echo $_POST['destination'] ?>

 <?php echo isset($_POST['annulation']) ?>  /// montre juste si la case a été cochée ou pas

 !</p>