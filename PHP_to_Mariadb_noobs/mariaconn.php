 Welcome to Textmining for Covid-19
 
 <!-- PHP Script-->
 <?php
       $link =new  mysqli('localhost', 'root', '');
$result = mysqli_query($link,"SELECT `Author`,`title`,`PMID` FROM `tester`.`corona` ");
echo "<table border='1'>
    <tr>
        <td>Authors</td>
            <td>Title</td>
                <td>PMID</td>
      </tr>";
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['Author'] . "</td>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['PMID'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
       mysqli_close($link);
       ?>


