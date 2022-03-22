<?php

$link = mysqli_connect("localhost", "root", "", "chequered-zone");

if ($link == false) {
  echo "Error connecting to server " . mysqli_connect_error($link);
}