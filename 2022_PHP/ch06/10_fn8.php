<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table tr td {
            border: 1px solid #000;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <?php
        $val = rand(2, 5);

        print "val = $val <br>";
        print_table($val);

        function print_table($val)
        {
            $num = 1;
            for ($i = 0; $i < $val; $i++) {
                print "<tr>";
                for ($z = 0; $z < $val; $z++) {
                    print "<td>";
                    print $num++;
                    print "</td>";
                }
                print "</tr>";
            }
        }
        ?>
    </table>
</body>

</html>