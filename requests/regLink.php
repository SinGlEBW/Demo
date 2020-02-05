<?php 
session_start();
 //header('Content-Type: application/json;');//удобен тем чтоб не использовать echo pre
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
// header('Access-Control-Allow-Headers: Content-Type');
// header('Access-Control-Allow-Credentials: true');

$host = $_SERVER['SERVER_ADDR'];
$db   = 'test_bd';
$user = 'root';
$pass = '';
$charset = 'utf8';

$connect = new PDO("mysql:host=$host; dbname=$db; charset=$charset;", $user, $pass);


$login = $_POST['logReg'];
$fullName = $_POST['fullNameReg'];
$email = $_POST['emailReg'];
$age = $_POST['ageReg'];
$avatar = $_FILES['avatar']['tmp_name'];
$gender = $_POST['gender'];
$passReg = $_POST['passReg'];
$password_confirm = $_POST['passConfirmReg'];

$loginLink = $_POST['logLink'];
$passLink = $_POST['passLink'];


/*
 Настройка для вывода информации с БД с помощью fetch(настройка).
 PDO::FETCH_NAMED - выводит информацию в виде ассоциативного массива. Если информация где то повторяется строка будет всё равно выведена
 PDO::FETCH_ASSOC - тоже самое только повторяющиеся строки не выводятся. На практике разницы не заметил
 */


if(isset($_POST['logReg'])){

###################
#   РЕГИСТРАЦИЯ   #
###################


/*####...1й этап...####>>>--Проверка на пустоту--<<<####*/

    $error_fields = [];

    if ($login === '') {
        $error_fields[] = 'login';
    }

    if ($fullName === '') {
        $error_fields[] = 'fullName';
    }

    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_fields[] = 'email';
    }

    if ($age === '') {
        $error_fields[] = 'age';
    }

    if ($avatar === '') {
        $error_fields[] = 'avatar';
    }

    if ($passReg === '') {
        $error_fields[] = 'passReg';
    }

    if ($password_confirm === '') {
        $error_fields[] = 'password_confirm';
    }

    if (!empty($error_fields)) {
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Проверьте правильность полей",
            "fields" => $error_fields
        ];

        echo json_encode($response);

        die();
    }

/*####...2й этап...####>>>--Проверка на совпадение логина в БД--<<<####*/

    $check_login = $connect -> prepare("SELECT * FROM `user` WHERE `login` = :login");
    $check_login->execute(['login' => $login]);

    if ($check_login->rowCount() > 0) {
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Такой логин уже существует",
            "fields" => ['login']
        ];

        echo json_encode($response);
        die();
    }

/*####...3й этап...####>>>--Загрузка изображения--<<<#### */

    $localPath = '../uploads/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($avatar, $localPath)) {
        $response = [
            "status" => false,
            "type" => 2,
            "message" => "Ошибка при загрузке аватарки",
        ];
        echo json_encode($response);
        die();
    }

/*####...4й этап...####>>>--Совпадение пароля. Последний этап регистрации--<<<####*/

    if ($passReg === $password_confirm) {
        
        $passReg = password_hash($passReg, PASSWORD_DEFAULT);
        
        $registration = $connect -> prepare ("INSERT INTO `user` (`id`, `full_name`, `login`, `email`, `password`, `avatar`, `age`, `date`) VALUES (NULL, :fullName, :login, :email, :passReg, :avatar, :age, :date)");
        $registration->execute([
                'fullName' => $fullName,
                'login' => $login, 
                'email' => $email, 
                'passReg' => $passReg, 
                'avatar' => $avatar, 
                'age' => $age,
                'date' => date("j.m.y")
                            ]);
        $response = [
            "status" => true,
            "message" => "Регистрация прошла успешно!",
        ];
        echo json_encode($response);


    } else {
        $response = [
            "status" => false,
            "message" => "Пароли не совпадают",
        ];
        echo json_encode($response);
    }
    
 }else if(isset($_POST['logLink'])){

###################
#   АВТОРИЗАЦИЯ   #
###################

    $error_fields = [];

/*---1й этап. Проверка на пустоту ввода--- */
    if ($login === '') {
        $error_fields[] = 'login';
    }

    if ($passLink === '') {
        $error_fields[] = 'passLink';
    }

    if (!empty($error_fields)) {
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Проверьте правильность полей",
            "fields" => $error_fields
        ];

        echo json_encode($response);

        die();
    }
   
//--Проверяю в БД существование пользователя по нику
    $check_user = $connect -> prepare("SELECT * FROM `user` WHERE `login` = :loginLink"); 
    $check_user -> execute([
                            ":loginLink" => $loginLink
                           ]);
    

    if ($check_user->rowCount() > 0) {

        $user = $check_user -> fetch(PDO::FETCH_ASSOC);
        
        if(password_verify($passLink, $user['password'])){//Проверяю пароль
            
            $_SESSION['user'] = [
                "id" => $user['id'],
                "full_name" => $user['full_name'],
                "avatar" => $user['avatar'],//сюда не tmp нужно подавать, а или картинку или путь к ней.
                "email" => $user['email']
            ];
            
              //наверно нужно перебрасывать на другую страницу
            $response = [
                "status" => true,
                "message" => "Регистрация прошла успешно!"
            ];
            
            echo json_encode($response);
            
        }else{
            $response = [
                "status" => false, 
                "message" => 'Не верный пароль'
            ];
    
            echo json_encode($response);

        }       

    } else {

        $response = [
            "status" => false,
            "message" => 'Не верный логин или пароль'
        ];

        echo json_encode($response);
    }

}

/*------>>>>---Выход---<<<<-------*/
if($_POST["exit"]){
    session_destroy();
    $response = [
        "status" => true,
        "message" => 'Выход выполнен'
    ];
    
    echo json_encode($response);
    
    die();
}
/*------>>>>---Проверка авторизации---<<<<-------*/
if($_POST["checkUser"]){
    if($_SESSION["user"]){
        $response = [
            "status" => true,
            "message" => 'Пользователь авторизирован'
            
        ];
        echo json_encode($response);
    }else{
        $response = [
            "status" => false,
            "message" => 'Пользователь не авторизирован'
        ];
        echo json_encode($response);
    }
}


/*
Создавая дополнительные страницы мы можем на них перемещаться вбивая вручную в поисковик. Можно создать страницу регистрации и страницу профиля,
после успеха регистрации будет перебрасывать на страницу профиля, но это не отменяет возможности без ввода логина и пароля переходить туда вручную.
Для этого нужно создавать условие в котором будет даваться доступ к определённой странице только тем кто прошёл авторизацию, регистрацию.
Но как это проверить? Для проверки служит сессия. Мало открыть сессию в неё нужно положить ещё данные. При открытии сессии на странице будет создан ключ 
PHPSESSID в котором будет указано зашифрованное значение. Шифр не означает что внутри шифра есть данные, там может быть и пустая строка. Это всего лиш маска 
для хранения данных. Через $_SESSION мы проверяем что там лежит, а ложим мы туда только после успеха.
Эти данные лежат на сервере. Браузер с помощью этого PHPSESSID достукивается до сервера и пытается получить интересующие нас значения.
Как это работает. Что бы не каждый переходил по ссылке вручную, нужно условие, которое будет проверять существует ли информация о этом клиенте в сессии.
Удаляя сессию где авторизирован человек, значение зашифрованное меняется что приводит к изменению этого значения на сервере, таким образом везде где стоит условие
о существовании в сессии каких то меток, не находят их и наше условие изменяется не пуская клиента на страницу профиля.
На ЗАМЕТКУ. Чтобы в cookie добавились нужна перезагрузка страницы
При авторизации на странице из разных браузеров сервер создаст разные сессии.

Какая стоит моя задача. 
1. Попробовать не переходить на страницу профиля, а произвести авторизацию без обновления и перехода страницы
   для этого нужно получить данные от cookie, но в них записываются данные только после перезагрузки.

Чем же нам JS может помочь в таком случае? Допустим мы дадим ответ с сервера в виде статуса True, после чего будем пробовать удалять блок регистрации,
авторизации далее создавать новый блок. 
Вот дальше не совсем ясно. Нам нужно получить данные клиента из сессии как это сделать не совсем понятно, ведь перезагрузки то не было.

При успешной регистрации ответ приходит положительный





*/
?>



