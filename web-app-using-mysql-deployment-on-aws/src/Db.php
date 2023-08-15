<?php

/* fichier de controle de la base donées */

class Db
{
    private PDO $pdo;

    /***
     * Database constructor.
     * @param string $path
     *
     */
    public function __construct(string $path, string $user, string $pwd)
    {
        try
        {
            $this->pdo = new PDO($path, $user, $pwd);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            #$this->createTable();
            #$this->fillTable();
        }
        catch (PDOException $e) {
            throw new Exception("Connection failed: " . $e->getMessage());
        }
    }

    private function createTable(): void{
        $this->pdo->query('CREATE TABLE IF NOT EXISTS recette (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        title VARCHAR(100) NOT NULL,
        descript VARCHAR(5000) NOT NULL
        )');
    }
    

    private function fillTable(): void {
        $this->pdo->query("INSERT INTO recette (`id`, `username`, `email`, `title`, `descript`) VALUES
        (1, 'user1', 'user1@gmail.com', 'title1', 'first description'),
        (2, 'user2', 'user2@gmail.com', 'title2', 'second description'),
        (3, 'user3', 'user3@gmail.com', 'title3', 'third description'),
        (4, 'user4', 'user4@gmail.com', 'title4', 'fourth description'),
        (5, 'user5', 'user5@gmail.com', 'title5', 'fith description'),
        (6, 'user6', 'user6@gmail.com', 'title6', 'sixth description')");
    }
    

    /**
     * @return PDO
     */
    public function getPdo(): PDO
    {
        return $this->pdo;
    }

    /**
     * @return array
     */
    public function getMeals(): array
    {
        return $this->pdo
            ->query('SELECT * FROM recette')
            ->fetchAll();
    }

    public function insertRecette(
        string $username,
        string $email,
        string $title,
        string $descript
    ): void{
        if (
            $this->checkUsername($username) &&
            $this->checkEmail($email) &&
            $this->checkTitle($title) &&
            $this->checkDescript($descript)
        ){
            $statement = $this->pdo->prepare('INSERT INTO recette (username, email, title, descript) 
                    values (:username, :email, :title, :descript)');
            $statement->bindValue(':username',$username,PDO::PARAM_STR);
            $statement->bindValue(':email',$email,PDO::PARAM_STR);
            $statement->bindValue(':title',$title,PDO::PARAM_STR);
            $statement->bindValue(':descript',$descript,PDO::PARAM_STR);
            $statement->execute();
        }
        else {
            var_dump("un Champ n'est pas bien  rempli ... :( !!!");
        }

    }

    private function checkUsername(String $username): bool{
        return $username !== '' && strlen($username) <= 100;
    }

    private function checkEmail(String $email): bool{
        return  $email !== '' && strlen($email) <= 100;
    }

    private function checkTitle(String $title): bool{
        return $title !== '' && strlen($title) <= 100;
    }

    private function checkDescript(String $descript): bool{
        return $descript !== '' && strlen($descript) <= 5000;
    }
}