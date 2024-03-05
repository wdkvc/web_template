<!-- Web Template Project - Chapter 4 --> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Template</title>
</head>
<body>
    <?php include("inc_header.html"); ?>

    <div style="width: 20%; text-align: center; float: left;">
        <?php include("inc_buttonnav.html"); ?>
    </div>

    <?php 
        if(isset($_GET["content"])) {
            // now check WHICH button was actually clicked
            switch($_GET["content"]) {
                case "About Me":
                    include("inc_about.html");
                    break;
                case "Contact Us":
                    include("inc_contact.html");
                    break;
                default:
                include("inc_home.html");
                break;
            }// end of switch
        } else {
            // we're here because NO button was clicked
            include("inc_home.html");
        } // end of IF/ELSE 
    ?>
    <hr/>
    <?php include("inc_footer.php"); ?>
</body>
</html>