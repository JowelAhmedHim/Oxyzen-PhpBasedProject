<?php

$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../helper/Format.php');

?>

<?php

class Product
{

    private $db;
    private $fm;

    public function __construct()
    {
        $this->db =  new Database();
        $this->fm = new Formate();
    }

    public function productInsert($data, $file)
    {
        $productName = $this->fm->validation($data['productName']);

        $productName = mysqli_real_escape_string($this->db->link, $data['productName']);
        $catId = mysqli_real_escape_string($this->db->link, $data['catId']);
        $body = mysqli_real_escape_string($this->db->link, $data['body']);
        $price = mysqli_real_escape_string($this->db->link, $data['price']);

        $permitted = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']['tmp_name'];


        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
        $uploaded_image = "upload/" . $unique_image;

        if ($productName == "" || $catId == "" || $body == "" || $price == "") {
            $msg = "Field Can't be empty";
            return $msg;
        } else {
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO tbl_product(productName,catId,body,price,image) VALUES( '$productName','$catId','$body','$price','$uploaded_image' )";

            $insert_row = $this->db->insert($query);

            if ($insert_row) {
                $msg = "Product Inserted Succesfully";
                return $msg;
            } else {
                $msg = "Product Inserted Failled";
                return $msg;
            }
        }
    }

    public function getAllProduct()
    {
        $query = "SELECT tbl_product.*, tbl_category. catName
        FROM tbl_product
        INNER JOIN tbl_category
        ON tbl_product. catId = tbl_category. catId
        ORDER BY tbl_product. productId DESC ";
        $result = $this->db->select($query);
        return $result;
    }

    public function getTopProduct()
    {
        $query = "SELECT * FROM tbl_product ORDER BY productId DESC LIMIT 4";
        $result = $this->db->select($query);
        return $result;
    }
}



?>