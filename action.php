<?php
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$password = $_POST["password"];
$phoneNumber = $_POST["phoneNumber"];
$birthday = $_POST["birthday"];
$month = $_POST["month"];
$day = $_POST["day"];
$sex = $_POST["sex"];
$job = $_POST["job"];
$language = $_POST["language"];


$subject = 'Thank you for Sign up! Compadre';
$message = "$firstName さん
\n事前ご登録ありがとうございます。\n
ログインID：$email\n
パスワード：$password\n
となりますので大事に保管お願いいたします。\n
ローンチが出来次第メールにてお知らせさせていただきます。\n
私たちは狭い世界に生きてしまっている人々の世界を広げたくこのサービスを始めました。\n
新しいテクノロジーよりも国境や文化を超えた人間同士の交流がキッカケで解決できる世界の課題もあると信じています。\n私たちと一緒に世界をもっと広げていきましょう！
\n
\n
Mr.Ms $firstName 
\n
Thank you for pre-registration.
\n
Login ID:$email\n
password:$password\n
Please keep it carefully.\n
You will be notified by e-mail as soon as it is launched.\n
We started this service to expand the world of people living in a small world.\n
We believe that there are some global issues that can solve human interaction across borders and cultures more easily than with new technologies.
\n
Let's expand the world with us!\n";


mail(
$email, 
$subject, 
$message);

//2. DB接続します
try {
  $pdo = new PDO('mysql:dbname=greenlion62_bk;host=mysql1021.db.sakura.ne.jp;charset=utf8','greenlion62','keilucas18');
} catch (PDOException $e) {
  exit('error:'.$e->getMessage());
}

$sql ="INSERT INTO compadre_table(firstName,lastName,email,pass,phoneNumber,birthday,mon,da,sex,job_type,language,date)VALUES(:firstName,:lastName,:email,:password,:phoneNumber,:birthday,:month,:day,:sex,:job,:language,sysdate())";
//３．データ登録SQL作成
$stmt = $pdo->prepare($sql);
$stmt->bindValue('firstName', $firstName, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('lastName', $lastName, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('password', $password, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('phoneNumber', $phoneNumber, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('birthday', $birthday,PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('month', $month, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('day', $day, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('sex', $sex,PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('job', $job, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('language', $language, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("error:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: https://hotjapanse.com/LP/after.php");
    exit;

}
?>
