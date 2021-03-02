<?php

class AllFunc
{
    // private $host = 'localhost',
    //         $db_name = 'todo_list',
    //         $user = 'safuh',
    //         $password = 'mahouka602',
    //         $connection;

    // public function __construct()
    // {
    //     try {
    //         $this->connection = new PDO("mysql:host=$this->host;dbname=$this->db_name;", $this->user, $this->password);
    //         // echo "Successful";
    //     } catch (PDOException $e) {
    //         echo "Getting error at: " . $e->getLine() . $e->getMessage();
    //     }
    // }

    // public function showAll($query)
    // {
    //     try {
    //         $stmt = $this->connection->prepare($query);
    //         $stmt->execute();
    //         while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //             $rows[] = $row;
    //         }
    //         return $rows;
    //     } catch (PDOException $e) {
    //         echo "Getting error at: " . $e->getLine() . $e->getMessage();
    //     }
    // }

    // public function add($data) 
    // {
    //     $nama_kegiatan = htmlspecialchars($data['nama_kegiatan']);
    //     $waktu = htmlspecialchars($data['waktu']);
    //     $cek = htmlspecialchars($data['cek']);
    //     $gambar = $this->upload();

    //     if(!$gambar) {
    //         return false;
    //     }

    //     try {
    //         $query = "INSERT INTO todo (nama_kegiatan, waktu, cek, gambar) VALUES ('$nama_kegiatan', '$waktu', '$cek', '$gambar')";
    //         $stmt = $this->connection->prepare($query);
    //         $stmt->execute();
    //         // echo "SUCCESSFUL";
    //     } catch (PDOException $e) {
    //         echo "Getting error at: " . $e->getLine() . $e->getMessage();
    //     }
    //     return $stmt->rowCount();
    // }

    // public function upload() 
    // {
    //     $fileName = $_FILES['gambar']['name'];
    //     $tmpName = $_FILES['gambar']['tmp_name'];
    //     $error = $_FILES['gambar']['error'];
    //     $size = $_FILES['gambar']['size'];

    //     if ($error === 4) {
    //         echo "
    //             <script>
    //                 alert('Pilih filenya coy');
    //             </script>
    //         ";
    //         return false;
    //     }

    //     if ($size > 3000000) {
    //         echo "
    //             <script>
    //                 alert('Filenya kegedean ');
    //             </script>
    //         ";
    //         return false;
    //     }

    //     $ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
    //     $ekstensiGambar = explode('.', $fileName);
    //     $ekstensiGambar = strtolower(end($ekstensiGambar)); 

    //     if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    //         echo "
    //             <script>
    //                 alert('Pilih gambar aja ');
    //             </script>
    //         ";
    //         return false;
    //     }
        
    //     move_uploaded_file($tmpName, "images/" . $fileName);
    //     return $fileName;

    // }

    // public function edit($data) 
    // {
    //     $id = $data['id'];
    //     $nama_kegiatan = htmlspecialchars($data['nama_kegiatan']);
    //     $waktu = htmlspecialchars($data['waktu']);
    //     $cek = htmlspecialchars($data['cek']);
    //     try {
    //         $query = "UPDATE todo SET nama_kegiatan = '$nama_kegiatan', waktu = '$waktu', cek = '$cek' WHERE id = '$id'";
    //         $stmt = $this->connection->prepare($query);
    //         $stmt->execute();
    //         // echo "SUCCESSFUL";
    //     } catch (PDOException $e) {
    //         echo "Getting error at: " . $e->getLine() . $e->getMessage();
    //     }
    //     return $stmt->rowCount();
    // }

    // public function hapus($id) 
    // {   
    //     $query = "DELETE FROM todo WHERE id = '$id'";
    //     $stmt = $this->connection->prepare($query);
    //     $stmt->execute();

    //     return $stmt->rowCount();
    // }

    // public function login($username, $password) 
    // {
        
    //     $query = "SELECT * FROM user WHERE username = '$username'";
    //     $stmt = $this->connection->prepare($query);
    //     $stmt->execute();
    //     $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
    //     $pass = password_verify($password, $result['password']);
    //     if (!$result) {
    //         echo "
    //             <script>
    //                 alert('Akun dengan username tersebut tidak ada!');
    //             </script>
    //         ";
    //     } elseif ($password != $pass) {
    //         echo "
    //             <script>
    //                 alert('Password yang anda masukkan salah!');
    //             </script>
    //         ";
    //     } else {
    //         $_SESSION['status'] = 'Logged_in';
    //         $_SESSION['username'] = $username;
    //         header('Location: beranda.php');
    //     }
        
    // }

    // public function register($username, $password) 
    // {
    //     $pass = password_hash($password, PASSWORD_DEFAULT);

    //     $query = "SELECT * FROM user WHERE username = '$username'";
    //     $stmt = $this->connection->prepare($query);
    //     $stmt->execute();
    //     $result = $stmt->fetch(PDO::FETCH_ASSOC);

    //     if($username == $result['username']) 
    //     {
    //         echo "
    //             <script>
    //                 alert('Akun dengan username tersebut sudah ada');
    //             </script>
    //         ";
    //     } else 
    //     {
    //         $regist = "INSERT INTO user (username, password) VALUES ('$username', '$pass')";
    //         $stmt_2 = $this->connection->prepare($regist);
    //         $stmt_2->execute();

    //         return $stmt_2->rowCount();
    //     }


    // }
}

$call = new AllFunc();
// $call->showAll("SELECT * FROM todo");
// $call->register('safuh', '43121');