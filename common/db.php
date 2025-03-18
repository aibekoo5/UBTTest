<?php 

  try{
    $pdo = new PDO("mysql:host=localhost; dbname=testing_db;", "root", "");
  }
  catch(PDOException $ex){
    echo $ex->getMessage();
  }

  function loginUser($email, $password){
    global $pdo;

    $queryObj = $pdo->prepare("select * from users where email = :uemail and password = :upass");
    $queryObj->execute([
      'uemail' => $email,
      'upass' => md5($password)
    ]);

    $user = $queryObj->fetch(PDO::FETCH_ASSOC);
    return $user;
  }

  function registerUser($name, $email, $password, $role='user', $avatar=null){
    global $pdo;

    $queryObj = $pdo->prepare("insert into users(name, email, password, role, avatar) values(:uname, :uemail, :upass, :urole, :uava)");
    
    try{
      $queryObj->execute([
        'uname' => $name,
        'uemail' => $email,
        'upass' => md5($password),
        'urole' => $role,
        'uava' => $avatar
      ]);
  
    }
    catch(PDOException $ex){
      return false;
    }
    return true;

  }

function editUser($new_username, $new_email, $ava_name, $user_id){
    global $pdo;

    if (!empty($ava_name)) {
      $query = $pdo->prepare("UPDATE users SET name = :uname, email = :uemail, avatar = :uava WHERE id = :uid");
      try{
        $query->execute( [
          'uname' => $new_username,
          'uemail' => $new_email,
          'uava' => $ava_name,
          'uid' => $user_id
        ]);
      }catch(PDOException $ex){
        return false;
      }
    }else{
      $query = $pdo->prepare("UPDATE users SET name = :uname, email = :uemail WHERE id = :uid");
      try{
        $query->execute( [
          'uname' => $new_username,
          'uemail' => $new_email,
          'uid' => $user_id
        ]);
      }catch(PDOException $ex){
        return false;
      }
    }
    $users = $pdo->prepare("SELECT * from users where id = :uid");
    $users->execute( [
      'uid' => $user_id
    ]);
    $user = $users->fetchAll(PDO::FETCH_ASSOC);

    return $user[0];
}

function changePass($lastPass, $newPass, $user_id){
    global $pdo;

    $query = $pdo->prepare("SELECT password FROM users WHERE id = :uid");
    $query->execute( [
      'uid' => $user_id
    ]);
    $uPass = $query->fetch(PDO::FETCH_ASSOC);

    if($uPass['password'] == md5($lastPass)){
      $query = "UPDATE users SET password = :upass";
      $params = [
          'upass' => md5($newPass),
          'uid' => $user_id
      ];

      $query .= " WHERE id = :uid";

      $queryObj = $pdo->prepare($query);
      
      try {
          $queryObj->execute($params);
      }
      catch(PDOException $ex){
          return false;
      }

      return true;
    }else{
      return false;
    }
}

?>