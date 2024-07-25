<html>
    <head>
        <table>Table</table>
    </head>
    <body>
        <table>
            <tr>
                <td>S.N.</td>
                <td>Name</td>
                <td>Email</td>
            </tr>

            <tr>
                <td>1</td>
                <td>Ali</td>
                <td>Ali@latest</td>
            </tr>

            <tr>
                <td>2</td>
                <td>Ahmad</td>
                <td>Ahmad@latest</td>
            </tr>
        </table>

        <?php
        $users=[
            [1,"Ali","Ali@latest.com"],
            [2,"Ahmad","Faisal@latest.com"],
            [3,"Faisal","Faisal@latest.com"],
            [4,"Rehman","Rehman@latest.com"],
        ];
        echo "<table border=1>";
        for($i=0;$i<count($users);$i++){
            echo "<tr>";
            for($j=0;$j<count($users[$i]);$j++){
                echo "<td>";
                echo $users[$i][$j];
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>