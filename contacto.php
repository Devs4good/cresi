<?php
namespace Cresi;
require dirname( __FILE__ ) . '/bootstrap.php';
?>
<!DOCTYPE html>
<style>
  .header{
    background-color: #336699;
    width: 100%;
  }

  #formd{
    background:linear-gradient(#66ccff, #9966ff, #ff99cc);
    height: 100%;
  }
  .form{
    height: 100%;
    padding: 30px;
  }

  .label{
    font-size: 30px;
    font-weight: bold;
    color: #fff;
    margin-top: 30px;
    margin-bottom: 30px;
  }

  .input{
    background-color: #000;
  }

  .btn-confirmar{
    background-color: #fff;
    margin: 50px;
    color: #9932cc;
    text-align: center;
  }
  .con{
    font-weight: bold;
    margin: 0;
    padding: 0;
  }
</style>

<html>
  <head>
    <meta charset="utf-8">
    <title>Contacto</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="header">
      <span class="header-logo">
        <img src="img/logo2.png" alt="" width="90" height="90">
      </span>
    </div>
    <div class="form form-group" id="formd">
      <div class="container">
        <?php if ( ! empty( $_SESSION['contact_message'] ) ) :
          echo $_SESSION['contact_message'];
          unset( $_SESSION['contact_message'] );
        endif; ?>
        <form action="process-contact.php" class="form-group" method="POST">
          <label for="" class="label">NOMBRE</label>
          <input type="text" name="name" class="form-control input">
          <br>
          <label for="" class="label">EMAIL</label>
          <input type="email" name="email" class="form-control input">
          <br>
          <label for="" class="label">ASUNTO</label>
          <input type="text" name="subject" class="form-control input">
          <br>
          <label for="" class="label">MENSAJE</label>
          <textarea name="message" class="form-control input"></textarea>
          <br>
          <center><button type="submit" class="btn btn-lg btn-confirmar"><p class="con">ENVIAR</p></button></center>
        </form>
      </div>

    </div>
    </form>

</body>
</html>
