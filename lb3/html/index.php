<?php

//phpinfo();

$link = mysqli_connect('mysql', 'root', 'root');
if (!$link) {
    die('������ ����������: ' . mysqli_error());
}
echo '������� �����������';
mysqli_close($link);