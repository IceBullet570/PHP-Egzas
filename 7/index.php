/**
PAPILDOMAS
7. Parašykite programą, kuri sugeneruotų ornamentą: https://iili.io/H3J974e.png .
Ornamentas turi būti sugeneruotas naudojant HTML ir PHP. (2 balai)
 **/

<html>
<head>

</head>
<body>
    <table>
        <tbody>
            <?php for ($row =0; $row < 7; $row++) { ?>
            <tr>
                <?php for ($column = 0; $column < 7; $column++) { 
                    $displayColor = 'white';
                    if ((($column == 0 or $column == 6) and ($row > 5 or $row < 1)) or $row == $column and $column > -1 and $column < 7 or ($column == 2 and $row == 4) or ($column == 4 and $row == 2) or ($row == 1 and $column == 5) or ($row == 5 and $column == 1)) {
                        $displayColor = 'grey';
                    } ?>
                    <td style="width: 100px; height: 100px; background-color: <?= $displayColor; ?>; border: solid 1px #000000"></td>
                <?php } ?>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>