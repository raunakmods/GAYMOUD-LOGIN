<?PHP
$data = '';

$key = 'key';
$key = 'key';
$key = 'key';

if (!empty($_REQUEST) ) {
    if (!empty($_REQUEST[$key]) && !empty($_REQUEST[$key]) && !empty($_REQUEST[$key]) ) {
        if ($_REQUEST[$key] == 'GAYMOUD' && $_REQUEST[$key] == 'GAYMOUD' && $_REQUEST[$key] == 'GAYMOUD') {
            $data = '1|'.md5($_REQUEST[$key] . $_REQUEST[$key] . $_REQUEST[$key]) .'|key: ' . $_REQUEST[$key] . ' successfully logged in!';
        }else{
            $data = '0|'.md5(date('Y-m-d h:i:s').rand(1, 9999)).'|Incorrect keyname or keyword or key !!';
        }
    }else{
        $data = '0|'.md5(date('Y-m-d h:i:s').rand(1, 9999)).'|Fill in keyname and keyword and key !!';
    }
}

header('Content-Type: text/plain');
echo $data;