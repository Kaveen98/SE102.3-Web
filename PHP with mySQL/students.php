<?php


$conn = mysqli_connect("localhost","root","","university3");


if(!$conn)
{
    die ("connection failed!");

}
    
$sql = "SELECT * from students";

$result = $conn->query($sql);

?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>email</th>
        </tr>
        
<?php
        if($result->num_rows > 0){
            
            while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row["id"] ?> </td>
                    <td><?php echo $row["name"] ?> </td>
                    <td><?php echo $row["email"] ?> </td>
                </tr>
            <?php }
        }
        else
            echo "no data";
            ?>
        
    </table>
