<?php

include_once('config.php');
$sql = "select * from angajati";
$result = $conn->query($sql);

if(isset($_POST['inserare'])) {
    
    $nume =         $_POST['nume'];
    $prenume =      $_POST['prenume'];
    $telefon =      $_POST['telefon'];
    $datan =        $_POST['datan'];
    $email =        $_POST['email'];
    $cnp =          $_POST['cnp'];
    $varsta =       $_POST['varsta'];
    $casatorit =    $_POST['casatorit'];

$sql = "insert into 
angajati (nume,prenume,telefon,datan,email,cnp,varsta,casatorit) 
values('$nume','$prenume','$telefon','$datan','$email','$cnp','$varsta','$casatorit')";

    if($conn->query($sql) === TRUE) {
        echo "Am introdus pe $nume";
    } else {
        echo "Eroare: " . $conn->error;
    }
}
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
        <th>DELETE</th>
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

        echo "<td>";

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
        <td><input name="telefon" type="text"></td>
    </tr>
    <tr>
        <td>Data nasterii</td>
        <td><input name="datan" type="text"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input name="email" type="text"></td>
    </tr>
    <tr>
        <td>CNP</td>
        <td><input name="cnp" type="text"></td>
    </tr>
    <tr>
        <td>Varsta</td>
        <td><input name="varsta" type="text"></td>
    </tr>
    <tr>
        <td>Casatorit</td>
        <td><input name="casatorit" type="text"></td>
    </tr>   
     <tr>
        <td></td>
        <td><input type="submit" name="inserare" value="Insereaza"></td>
    </tr> 
</table>
</form>