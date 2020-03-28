<?php
class Lab
{
    public function __construct() {
        
    }

    public function getAllLabs()
	{
			$db = db_connect();
			$statement = $db->prepare("select * from labs");
			$statement->execute();
			$labs = $statement->fetchAll(PDO::FETCH_ASSOC);
		
		    return $labs;
	}
    
    
    public function searchLab($query)
	{
			$db = db_connect();
            $statement = $db->prepare("select * from labs where to_tsvector(labs::text) @@ to_tsquery(:query)");
            $statement->bindValue(':query', $query); 
			$statement->execute();
			$labs = $statement->fetchAll(PDO::FETCH_ASSOC);
		    return $labs;
	}
    
    
	
}

?>