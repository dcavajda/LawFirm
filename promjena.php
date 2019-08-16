<?php 
require_once "baza.php";

$izraz=$veza->prepare("select * from lawyer where lawyer_id=:lawyer_id");
$izraz->execute($_GET);
$lawyer = $izraz->fetch(PDO::FETCH_OBJ);

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "head.php" ?>
</head>
  <body>
    <div class="grid-container">

     
        <form action="promjeni.php" method="post">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">

                    <div class="large-12 cell">
                        <a href="lawfirm1.php"
                            class="alert button expanded">
                        Back
                        </a>                        
                    </div>

                    <div class="large-6 cell">
                        <label>firstname
                        <input type="text" name="firstname" 
                        value="<?php echo $lawyer->firstname; ?>">
                        </label>
                    </div>
                    <div class="large-6 cell">
                        <label>lastname
                        <input type="text" name="lastname"
                        value="<?php echo $lawyer->lastname; ?>">
                        </label>
                    </div>
                    <div class="large-6 cell">
                        <label>OIB
                        <input type="number" name="OIB"
                        value="<?php echo $lawyer->OIB; ?>">
                        </label>
                    </div>
                    <div class="large-6 cell">
                        <label>IBAN
                        <input type="number" name="IBAN"
                        value="<?php echo $lawyer->IBAN; ?>">
                        </label>
                    </div>
                    <div class="large-12 cell">
                        <input type="hidden" name="lawyer_id" value="<?php echo $lawyer->lawyer_id ?>" />
                        <input type="submit" value="change" 
                            class="success button expanded" />                        
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>

