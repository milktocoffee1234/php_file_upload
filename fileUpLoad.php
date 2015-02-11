<html>
<head>
	<meta charset="utf-8">
	<title>FILEUPTEST</title>
</head>
<body>


<?php

require_once "/HTTP/Request2.php";

// 認証設定
$subDomain = "projects123";
$loginName = "milktocoffee1234@gmail.com";
$password = "saikou1234";
$boundary = "---------------------".substr(md5(rand(0,32000)), 0, 10);
echo $boundary;
// アプリID
$appId = 16;
 
// リクエストヘッダ
 $header = array(
    "Host: " . $subDomain . ".cybozu.com:443",
    "Content-Type: multipart/form-data;". $boundary,
    $boundary,
    "Content-Disposition: form-data; name="."file;". "filename= " . "C:\Users\masaki\Desktop\PHPFILE\file\Test.java",
    "Content-Type: text/plain",
    $boundary,
    "X-Cybozu-Authorization: " . base64_encode($loginName . ':' . $password)
);

print_r($header);

/*$uploaddir = 'C:/Users/masaki/Desktop/PHPFILE/file/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "できました.\n";
} else {
    echo "えらーだぞ!.\n";
}

print_r($_FILES);*/

$post_filename = "./file/Test.java";
$post_url = "C:\Users\masaki\Desktop\PHPFILE\file";

try {
    // リクエスト作成
/*    $request = new HTTP_Request2();
    $request->setHeader($header);
    $request->setUrl("https://" . $subDomain . ".cybozu.com/k/v1/file.json");
    $request->setMethod(HTTP_Request2::METHOD_POST);
	$responce = $request->send()->getBody();



    $request->setConfig(array(
      'ssl_verify_host' => false,
      'ssl_verify_peer' => false
    ));
 
    // レスポンス取得
    $response = $request->send();
*/
 
// HTTP_Request2のエラーを表示
} catch (HTTP_Request2_Exception $e) {
	echo "HTTPのエラー";
    die($e->getMessage());
// それ以外のエラーを表示
} catch (Exception $e) {
		echo "それ以外";

    die($e->getMessage());
}
 
// エラー時
/*if ($response->getStatus() != "200") {
  echo sprintf("status: %s\n", $response->getStatus());
  echo sprintf("cybozu error: %s\n", $response->getHeader('x-cybozu-error'));
  echo sprintf("body: \n%s\n", $response->getBody());
  die;
}
*/




print "</pre>";

?>


</body>
</html>