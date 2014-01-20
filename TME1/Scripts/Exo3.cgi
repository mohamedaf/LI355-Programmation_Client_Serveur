#! /bin/sh
cat << EOF
Content-Type: text/html; charset=utf-8

<!DOCTYPE html PUBLIC
"-//W3C//DTD XHTML Basic 1.1//EN"
"http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">

<html>

<head>
<meta http-equiv='Content-Type' content="text/html charset=utf-8" />
<title> TD1 Exo2 </title>
</head> 

<body>
EOF

echo "je suis le script <strong>"
echo $SCRIPT_NAME
echo "</strong> sevi par <strong>"
echo $SERVER_NAME
echo "</strong> pour <strong>"
echo $HTTP_USER_AGENT

echo "</strong> </body> </html>"
