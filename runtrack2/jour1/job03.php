<?php
// Variables de différent types
$booleanVar = true ;
$integarVar = 42 ;
$stringVar = "Hello !";
$floatVar = 3.14 ;

//Tableau HTLM
echo '<table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>bool</td>
                <td>booleanVar<td>
                <td>'. $booleanVar . '</td>
            </tr>
            <tr>
                <td>int</td>
                <td>integarVar</td>
                <td>' . $integarVar . '</td>
            </tr>
            <tr>
                <td>float</td>
                <td>' . $floatVar .'</td>
            </tr>
        </tbody>
    </table>';
?>
