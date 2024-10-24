<?php
$type = array(DateTimeInterface::ATOM, DateTimeInterface::ISO8601_EXPANDED, DateTimeInterface::RFC822, DateTimeInterface::RFC850, DateTimeInterface::RFC1036);


foreach ($type as $value) {
    $date = date($value);
    echo $date . PHP_EOL;
}