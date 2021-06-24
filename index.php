<!DOCTYPE html>
<html lang="en">

<head>
    <title>Justin Lombardo Health and Fitness</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cp.css">
</head>

<body>
    <header>
        <h1>Health and Fitness</h1>
    </header>
    <nav>
        <?php require("nav.php") ?>
    </nav>
    <main>
        <?php
            switch ($_GET['q']){
                case "Workouts":
                    require("workout.php");
                    break;
                case "Nutrition":
                    include("nutrition.php");
                    break;
                case "Contact":
                    include("contact.php");
                    break;
                default:
                    require("indexbody.php");
                    break;
            }
        ?>
    </main>
    <footer>
        <?php require("footer.php") ?>
    </footer>
</body>

</html>