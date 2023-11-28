<?php

    echo "Nama {$_POST['nama']} <br>";
    echo "NPM {$_POST['npm']} <br>";

    $pil = $_POST["pilihan"];

    switch ($pil) {
        case "1":
          echo "Pilihan anda adalah: HTML";
          break;
        case "2":
          echo "Pilihan anda adalah: CSS";
          break;
        case "3":
          echo "Pilihan anda adalah: Javascript";
          break;
        default:
          echo "Pilihan anda adalah: bukan ketiganya";
      }

?>