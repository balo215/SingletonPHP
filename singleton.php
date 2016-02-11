class DataBase {
    static private $instance = null;
     
    private function __contruct() {
    }
     
    public static function getInst() {
        if (self::$instance == null) {
            echo "nueva instancia";
            self::$instance = new DataBase();
        }
        //echo "instancia creada anteriormente";
        return self::$instance;
    }
    public function connectToDB($data) {
        echo "Conectando con la base de datos";
    }
     
    public function selectQuery($data) {
        echo "haciendo un select";
    }
     
    public function insertQuery($data) {
        //Codigo
    }
    //Utilizando una variable donde guardamos la instancia.
    $db = Database::getInst();
    $db->connectToDB($data);

    //Exactamente lo mismo, pero sin utilizar variables
    Database::getInst()->connectToDB($data);
    
    //$db = new DataBase();
    //Nos retornara un error
    
}
