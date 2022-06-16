<?php
// interface must be public
interface Iface
{
    public function sawari();
}
class Gadi implements Iface
{
    function sawari()
    {
        echo "Mero sawari Ghoda.";
    }
}
$obj1 = new Gadi();
$obj1->sawari();
?>