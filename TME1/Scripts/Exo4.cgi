#! /bin/sh
cat << EOF
Content-Type: text/html; charset=utf-8


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

<meta http-equiv='Content-Type' content="text/html charset=utf-8" />
<title> TD1 Exo4 </title>
</head> 

<body>
<table style="border:1px black solid;" summary="Table de quelques variables du serveur">
<caption> Table </caption>
<tr> <th> Nom </th> <th> Valeur </th> </tr>
EOF

echo "<tr> <td> SERVER_NAME </td> <td> $SERVER_NAME </td> </tr>"
echo "<tr> <td> SERVER_SOFTWARE </td> <td> $SERVER_SOFTWARE </td> </tr>"
echo "<tr> <td> SERVER_ADDR </td> <td> $SERVER_ADDR </td> </tr>"
echo "<tr> <td> REMOTE_PORT </td> <td> $REMOTE_PORT </td> </tr>"
echo "<tr> <td> REMOTE_ADDR </td> <td> $REMOTE_ADDR </td> </tr>"

echo "</table> </body> </html>"

