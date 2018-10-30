<?php

include_once('config.php');

$sql = "select * from angajati";

$result = $conn->query($sql);

?>

<table border=1 width=100%>
    <tr>
        <th>ID</th>
        <th>Nume</th>
        <th>Prenume</th>
        <th>Telefon</th>
        <th>Data Nasterii</th>
        <th>Email</th>
        <th>CNP</th>
        <th>Varsta</th>
        <th>Casatorit</th>
    </tr>
<?php

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc() ) {

        $id = $row['id'];
        $nume = $row['nume'];
        $prenume = $row['prenume'];
        $telefon = $row['telefon'];
        $datan = $row['datan'];
        $email = $row['email'];
        $cnp = $row['cnp'];
        $varsta = $row['varsta'];
        $casatorit = $row['casatorit'];

        echo '<tr>';

        echo "<td>$id</td>";
        echo "<td>$nume</td>";
        echo "<td>$prenume</td>";
        echo "<td>$telefon</td>";
        echo "<td>$datan</td>";
        echo "<td>$email</td>";
        echo "<td>$cnp</td>";
        echo "<td>$varsta</td>";
        echo "<td>";
        echo ($casatorit)?"Da":"Nu";
        echo "</td>";

        echo '</tr>';
        
    }
} else {
    echo 'Nu exista angajati in BD!';
}

?>
</table>

<br><br><br><br>

<form action="index.php" method="POST">
<table>
    <tr>
        <td>Nume</td>
        <td><input name="nume" type="text"></td>
    </tr>
    <tr>
        <td>Prenume</td>
        <td><input name="prenume" type="text"></td>
    </tr>
    <tr>
        <td>Telefon</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>Data nasterii</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>CNP</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>Varsta</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>Casatorit</td>
        <td><input type="text"></td>
    </tr>   
     <tr>
        <td></td>
        <td><input type="submit" value="Insereaza"></td>
    </tr> 
</table>
</form>