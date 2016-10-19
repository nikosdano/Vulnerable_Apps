#!/bin/bash
echo "Content-type: text/html"
echo ''
echo "<html><head><style>h1{text-align:center;}div{ background-color:gray; width:100%;} center{font-size:17px;}</style><title>H$
echo "<h1>Hello Fosscomm!</h1>"
echo "<br><center><h3>This is printed via bash!</h3></center>"
echo "<center>Some info about this machine. Current user: <b>$(whoami)</b></center>"
echo "<center>Hostname: <b>$(hostname)</b></center>"
echo "<center>Uptime: <b>$(uptime)</b></center>"

