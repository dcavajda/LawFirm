<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "head.php" ?>
</head>
  <body>
    <div class="grid-container">

        <form action="dodaj.php" method="post">

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
                        <input type="text" name="firstname">
                        </label>
                    </div>
                    <div class="large-6 cell">
                        <label>lastname
                        <input type="text" name="lastname">
                        </label>
                    </div>

                    <div class="large-6 cell">
                        <label>OIB
                        <input type="number" name="OIB" step="0.01">
                        </label>
                    </div>
                    <div class="large-6 cell">
                        <label>IBAN
                        <input type="number" name="IBAN" step="0.01">
                        </label>
                    </div>

                    <div class="large-12 cell">
                        <input type="submit" value="Dodaj" 
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
