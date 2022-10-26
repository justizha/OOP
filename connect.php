<?php
class Dbconfig
{
    // private adalah sebuah keyword untuk mengobah akses,dan juga menandai properti atau metode privat
    // Properti ini hanya dapat diguanakan oleh 'class' di mana properti atau metode di definisikan 
    // tetapi 'class' turunan dan kode luar tidak dapat menggunakannya

    //sebagai isi dari koneksi
    private $_host = 'localhost';
    private $_username = 'usr';
    private $_password = '';
    private $_database = 'dbpercobaan';
    
    protected $connection; // Protected adalah sebuah keyword untuk memandai bahwa sebuah 'method ',atau 'property',
                          // dilindungi. Property dan method yang di lindungi hanya dapat digunakan oleh 'class' dimana,
                          //property atau sebuah method di definisikan dan sebuah 'class' apapun yang diturunkan darinya
                          //namun kode lain tidak dapat digunakan  


    //fungsi ini digunakan sebagai koneksi ke data base
    public function __construct (){
                
        //mengacu pada line 9
        if (!isset($this->connection)){
            $this->connection = new mysqli($this->_host, $this->username, $this->password, $this->database );
            //jika koneksi gagal maka tampailkan pesan bahwa koneksi tidak bisa terhubung ke server database 
            if (!isset($this->connection)){
                echo 'Cannot connect to database server';
                exit;
            }
        }
        //mengembalikan nilai dari koneksi
        return $this ->connection;
        
     
        }
    }
   

$conn = mysqli_connect("localhost","usr","","dbpercobaan");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
?>