<?php 

// buat kelas database
class Database {
    // tulis data dari database
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    // membuat koneksi ke database dan mengambil data dari dalam database
    // membuat variabel / parameter
    // variabel untuk koneksi
    // databasehandler
    private $dbh;
    // statement
    private $stmt;

    // buat construct
    // membuat koneksi ke database
    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

        $option = [
            // untuk membuat koneksi db tetap terjaga
            PDO::ATTR_PERSISTENT => true,
            // mode error tampilkan exeption
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        
        // cek mengguunakan block try catch
        try {
            // instansiasi PHP Data Object baru dengan parameter ($dsn, 'nama user', 'password')
            // parameter $option digunakan untuk optimasi koneksi ke db
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
            // tangkap jika error
        } catch(PDOException $e) {
            // kirimkan data error dengan pesan
            die($e->getMessage());
        }
    }

    // membuat function untuk menjalankan query (generic bisa dipakai untuk query apapun)
    public function query($query)
    {
        // menyiapkan query
        $this->stmt = $this->dbh->prepare($query);
    }

    // membuat binding data
    // cek apakah ada where di querynya, value insert, update set
    public function bind($param, $value, $type = null)
    {
        if( is_null($type)) {
            switch( true ) {
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    // eksekusi
    public function execute()
    {
        $this->stmt->execute();
    }

    // tentukan hasilnya akan banyak atau satu
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }


}

?>