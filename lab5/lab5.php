<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-7" />
    <title>Calculator</title>
    </head>
    
    <body>

    <form method="get" action="lab5.php" enctype="multipart/form-data">
            <p>Welcometo my php Calculator!!</p>
            <input type="float" name="num1" placeholder="Αριθμος 1">
            <input type="float" name="num2" placeholder="Αριθμος 2">
            <select name="operator">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
            <option>None</option>
            </select>
            <br>
            <button type="submit" name="submit" value="submit">Calculate</button>

        </form>
         <?php

            if(isset($_GET['submit']))
            {
                $result1=$_GET['num1'];
                $result2=$_GET['num2'];
                $operator=$_GET['operator'];

                switch($operator)
                {
                    case "None":
                        echo "Πρεπει να διαλεξεις μια πραξη";
                    break;
                    case "+":
                        echo "Το αποτελεσμα ειναι:";
                        echo $result1 + $result2;
                        break;
                    case "-":
                        echo "Το αποτελεσμα ειναι:";
                    echo  $result1 - $result2;
                    break;
                    case "*":
                        echo "Το αποτελεσμα ειναι:";
                    echo  $result1 * $result2;
                    break;
                    case "/":
                        if($result2==0)
                        {
                            echo"o διαιρετης ειναι 0 οποτε δεν μπορει να πραγματοποιηθει η πραξη";
                        }
                        else
                        {
                            echo "Το αποτελεσμα ειναι:";
                            echo  $result1 / $result2;
                        }
                        break;

                }
            }
        ?>

  

    </body>


</html>