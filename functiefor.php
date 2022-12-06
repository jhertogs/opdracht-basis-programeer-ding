<?php 

function func() {
    echo "+ Deze code is in func uitgevoerd.\n";
}

echo "- Deze code is voor de for-lus uitgevoerd.\n";

for ($teller=1;$teller<=3;$teller++) {
echo"= Deze code is in de for-lus.\n";
echo"Maar deze voor de func() uitgevoerd\n";
func();
echo"= Deze code is in de for-lus.\n";
echo"Maar deze voor de func() uitgevoerd\n";
}

echo "- Deze code is na de for-lus uitgevoerd.\n";

?>