<?php
namespace Usecase;
use PDO;

class Search {
    public function __construct($repo){
        $this->repo  = $repo;
    }
    public function new_search($q, $max){
        $statement = $this->repo->db->prepare("SELECT * FROM `airports` AS a LEFT JOIN `cities` AS c ON a.cityID = c.CityId WHERE a.searchField LIKE :n LIMIT :maxval");
        $statement->bindValue(':maxval', $max);
        $statement->bindValue(':n',"%$q%");
        $statement->execute();
        $matches = $statement->fetchAll();

        return $matches;
    }
}