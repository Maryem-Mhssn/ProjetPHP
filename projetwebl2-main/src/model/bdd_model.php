<?php 

include_once "book_model.php";
include_once "user_model.php";

class Database
{
    private $pdo;

    public function __construct()
    {
        $dbname = "books";
        $host = "127.0.0.1";
        $user = 'root';
        $password ='';
        
        try{
            $this->pdo = new PDO("mysql:host={$host};port=3306;dbname={$dbname}",$user,$password);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // FETCH_OBJ
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $exception) {
            $error = $exception;
            echo $error->getMessage();
        }

    }

    /*************************************
     * USERS
    *************************************/

    public function init_user_table()
    {
        $this->pdo->query(
            'CREATE TABLE if NOT EXISTS user_data(
                id SERIAL NOT NULL,
                username VARCHAR(50) NOT NULL,
                pwd VARCHAR(150) NOT NULL,
                first_name VARCHAR(100) NOT NULL,
                last_name VARCHAR(100) NOT NULL,
                email VARCHAR(255) NOT NULL
            )'
        );
    }

    public function get_users() 
    {
        $sql = $this->pdo->query(
            'SELECT * FROM user_data ORDER BY id DESC'
        )->fetchAll();

        $users = [];

        foreach($sql as $user)
        {
            $users[] = new User(
                $user['id'],
                $user['username'],
                $user['pwd'],
                $user['first_name'],
                $user['last_name'],
                $user['email']
            );
        }

        return $users;
    }

    public function user_exist(string $username, ?string $email) 
    {
        $sql = $this->pdo->prepare(
            'SELECT * from user_data WHERE username=:username OR email=:email'
        );
        $sql->bindParam(':username',$username, PDO::PARAM_STR);
        $sql->bindParam(':email',$email, PDO::PARAM_STR);
        $sql->execute();

        $res = $sql->fetchAll();

        $users = [];
        foreach($res as $user)
        {
            $users[] = new User(
                $user['id'],
                $user['username'],
                $user['pwd'],
                $user['first_name'],
                $user['last_name'],
                $user['email']
            );
        }
        var_dump($users);
        return $users;
    }


    public function new_user(
        string $username,
        string $pwd_hash,
        string $prenom,
        string $nom,
        string $email
    ){
        $stmt = $this->pdo->prepare(
            'INSERT INTO user_data (username, pwd, first_name, last_name, email) 
            VALUES (:username, :pwd, :prenom, :nom, :email)'
        );
        $stmt->bindValue('username', $username, PDO::PARAM_STR);
        $stmt->bindValue('pwd', $pwd_hash, PDO::PARAM_STR);
        $stmt->bindValue('prenom', $prenom, PDO::PARAM_STR);
        $stmt->bindValue('nom', $nom, PDO::PARAM_STR);
        $stmt->bindValue('email', $email, PDO::PARAM_STR);
        $stmt->execute();
    }


    public function login(
        string $username
    ){
        $sql = $this->pdo->prepare(
            'SELECT * from user_data WHERE username= :username'
        );
        $sql->bindParam(':username', $username, PDO::PARAM_STR);
        $sql->execute();

        $res = $sql->fetchAll(); 

        $users = [];
        foreach($res as $user)
        {
            $users[] = new User(
                $user['id'],
                $user['username'],
                $user['pwd'],
                $user['first_name'],
                $user['last_name'],
                $user['email']
            );
        }

        return $users;
    }


    /*************************************
     * BOOKS
    *************************************/

    public function init_book_table()
    {
        $this->pdo->query(
            'CREATE TABLE if NOT EXISTS book(
                id SERIAL NOT NULL,
                titre VARCHAR(100) NOT NULL,
                couverture VARCHAR(200) NOT NULL,
                auteur VARCHAR(100) NOT NULL,
                description VARCHAR(4000) NOT NULL,
                theme VARCHAR(50) NOT NULL,
                langue_original VARCHAR(50) NOT NULL,
                date_parution_originale DATE,
                date_parution_fr DATE,
                date_sortie DATE
            )'
        );
    }

    public function get_books()
    {
        $fetch = $this->pdo->query(
            'SELECT * FROM book'
        )->fetchAll();

        $books = [];

        foreach($fetch as $l)
        {
            $books[] = new Book(
                $l['id'],
                $l['couverture'],
                $l['titre'],
                $l['auteur'],
                $l['description'],
                $l['theme'],
                $l['langue_original'],
                $l['date_parution_originale'],
                $l['date_parution_fr'],
                $l['date_sortie']
            );

        }

        return $books;
    }

    public function get_book_by_id(string $id)
    {
        $sql = $this->pdo->prepare(
            'SELECT * from book WHERE id=:iduser'
        );

        $sql->bindParam(':iduser',$id);
        $sql->execute();

        $b = $sql->fetch();

        $book = new Book(
            $b['id'],
            $b['couverture'],
            $b['titre'],
            $b['auteur'],
            $b['description'],
            $b['theme'],
            $b['langue_original'],
            $b['date_parution_originale'],
            $b['date_parution_fr'],
            $b['date_sortie']
        );

        return $book;
    }

}

?>


