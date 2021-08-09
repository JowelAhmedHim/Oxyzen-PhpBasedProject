<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../helper/Format.php');

class Category
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db =  new Database();
        $this->fm = new Formate();
    }

    public function catInsert($catName)
    {
        $catName = $this->fm->validation($catName);
        $catName = mysqli_real_escape_string($this->db->link, $catName);

        if (empty($catName)) {
            $msg = "<span style= 'color:Green;'>Enter a Category Name</span>";
            return $msg;
        } else {
            $query = "INSERT INTO tbl_category(catName) VALUES('$catName')";
            $catinsert = $this->db->insert($query);

            if ($catinsert) {
                $msg = "<span style= 'color:Green;'>Category Inserted Succesfully</span>";
                return $msg;
            } else {
                $msg = "Category Inserted Failled";
                return $msg;
            }
        }
    }

    public function getAllCat()
    {
        $query = "SELECT * FROM tbl_category ORDER BY catId DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function getCatById($id)
    {
        $query = "SELECT * FROM tbl_category WHERE catId ='$id' ";
        $result = $this->db->select($query);
        return $result;
    }

    public function catUpdate($catName, $id)
    {
        $catName = $this->fm->validation($catName);
        $catName = mysqli_real_escape_string($this->db->link, $catName);
        $id = mysqli_real_escape_string($this->db->link, $id);

        if (empty($catName)) {
            $msg = "Enter a Category Name";
            return $msg;
        } else {
            $query = "UPDATE tbl_category SET catName = '$catName' WHERE catId='$id' ";
            $updated_row = $this->db->update($query);

            if ($updated_row) {
                $msg = "Category Updated Succesfully";
                return $msg;
            } else {
                $msg = "Category Updated Failled";
                return $msg;
            }
        }
    }

    public function dalCatById($id)
    {
        $query = "DELETE FROM tbl_category WHERE catId = '$id'";
        $deldata = $this->db->delete($query);
        if ($deldata) {
            $msg = "Category Deleted Succesfully";
            return $msg;
        } else {
            $msg = "Category Deleted Failled";
            return $msg;
        }
    }
}
