#! /bin/bash

cat << EOF

Content-Type: text/html; charset= utf-8


<!DOCTYPE html PUBLIC
"-//W3C//DTD XHTML Basic 1.1//EN"
"http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">

<html>

<head>
<style  type="text/css">
td, th {
	border: 1px black solid;
}
</style>

    <meta http-equiv='Content-Type' content='text/html charset=utf-8' />
    <title> TD Exo5 </title>
</head>

<body>
EOF

echo "<table summary='Les nombres pairs'>"
echo "<caption> Table de 2 </caption>"
echo "<tr> <th> x </th>"

i=0
while [ $i -lt 10 ]
do
    echo "<td> $i </td>"
    
    i=$((i+1))

done

echo "</tr>"
echo "<tr> <th> 2x </th>"

i=0
while [ $i -lt 10 ]
do
echo "<td> $((i*2)) </td>"

i=$((i+1))

done

echo "</tr>"
echo "</table> </body> </html>"
