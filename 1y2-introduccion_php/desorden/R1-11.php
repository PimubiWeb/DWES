<?php

print("<table border = solid>");
print("<tr><td>tabla x1</td><td>tabla x2</td><td>tabla x3</td><td>tabla x4</td><td>tabla x5</td><td>tabla x6</td><td>tabla x7</td><td>tabla x8</td><td>tabla x9</td><td>tabla x10</td></tr>");

for($i = 0 ; $i <= 10 ; $i++){
    print("<tr>");
    print('<td>' . $i . '</td>');
    print('<td>' . $i*2 . '</td>');
    print('<td>' . $i*3 . '</td>');
    print('<td>' . $i*4 . '</td>');
    print('<td>' . $i*5 . '</td>');
    print('<td>' . $i*6 . '</td>');
    print('<td>' . $i*7 . '</td>');
    print('<td>' . $i*8 . '</td>');
    print('<td>' . $i*9 . '</td>');
    print('<td>' . $i*10 . '</td>');
    print("</tr>");
}
print("</table>");

?>