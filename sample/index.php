<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>

  <body>
    <h1>This is my first PHP page!</h1>
    <form method="get">
      <input type="text" name="Name" />
      <input type="text" name="Last name" />
      <br/>
      <p>
        My name is <?php echo $_GET ?> <?php echo $_GET["Last Name"] ?> <br/>
        But also my name is <?= $_GET['name'] ?>
      </p>
      
      <input type='submit'/>
    </form>
  </body>
</html>
