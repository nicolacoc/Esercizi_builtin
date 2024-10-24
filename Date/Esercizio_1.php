<?php
function copyright(string $name):string{
    return "Copyright ".date("Y")." &copy;".$name;
}

echo copyright("MYCOMPANY s.r.l..");

