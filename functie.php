<?php 

function func() {
    echo "+ deze regel is in func() uitgevoerd.\n";
}

echo "--Deze regel is voor func() uitgevoerd.\n";

func();

echo "== Deze regel is tussen 2 func() uitgevoerd.\n";

func();

echo "-- Deze regel is na func() uitgevoerd.\n";
?>