<?php
class view {
function __construct() {}

function show($users) {

echo "<table class='imagetable' align='center' border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Phone</th>
</tr>";
for ($row = 0; $row < 3; $row++)
{
    
    echo "<tr>";
    foreach($users[$row] as $key => $value)
    {
    echo "<td>" . $value . "</td>";
      
    }
    echo "</tr>";
       
}
    echo "</table>";
}
}
?>