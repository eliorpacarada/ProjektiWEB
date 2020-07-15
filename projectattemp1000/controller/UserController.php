<?php

include './models/dbinc.php';

class UserController
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function all()
    {
        $query = $this->db->pdo->query('SELECT * FROM users');

        return $query->fetchAll();
    }

    public function store($request)
    {
        isset($request['role']) ? $role = 1 : $isAdmin = 0;
        $password = password_hash($request['password'], PASSWORD_DEFAULT);

        $query = $this->db->pdo->prepare('INSERT INTO users (name, email, username, password) VALUES (:name, :email, :username, :password)');
        $query->bindParam(':name', $request['name']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':username', $password);
        $query->bindParam(':role', $role);
        $query->execute();

        return header('Location: ./index.php');
    }

    public function edit($id)
    {
        $query = $this->db->pdo->prepare('SELECT * FROM users WHERE id = :id');
        $query->execute(['id' => $id]);

        return $query->fetch();
    }

    public function update($id, $request)
    {
        isset($request['role']) ? $role = 1 : $role = 0;

        $query = $this->db->pdo->prepare('UPDATE users SET name = :name, email = :email, role = :role WHERE id = :id');
        $query->execute([
            'name' => $request['fullName'],
            'email' => $request['email'],
            'role' => $role,
            'id' => $id
        ]);

        return header('Location: index.php');
    }

    public function destroy($id)
    {
        $query = $this->db->pdo->prepare('DELETE FROM users WHERE id = :id');
        $query->execute(['id' => $id]);

        return header('Location: index.php');
    }
}