<div class="large-4 cell">
    <div class="<?php echo $i===1 ? "warning ": ($i===2 ? "success " : "alert ") ; ?>callout">
        <h1><?php echo $red->firstname; ?></h1>
        <h1><?php echo $red->lastname; ?></h1>
        <h1><?php echo $red->OIB; ?></h1>
        <h1><?php echo $red->IBAN; ?></h1>
        <div class="grid-x grid-padding-x">
            <div class="large-6 cell">
                <a href="promjena.php?lawyer_id=<?php echo $red->lawyer_id; ?>">
                    <i class="fas fa-edit fa-2x" style="color: green;"></i>
                </a>
            </div>
            <div class="large-6 cell">
                <a onclick="return confirm('Jeste li sigurni');" 
                href="brisanje.php?lawyer_id= <?php echo $red->lawyer_id;?>">
                    <i class="fas fa-trash fa-2x" style="color: red;"></i>
                </a>
                
            </div>
        </div>     
    </div>
</div>