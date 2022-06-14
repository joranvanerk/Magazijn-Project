<?php

class Item{

   private $db;

   public function __construct()
   {
      $this->db = new Database;
   }
   // Read Table Items
   public function readItems()
   {
      $this->db->query("SELECT * FROM stock");
      $result = $this->db->resultSet();

      return $result;
   }
   public function delete() {
      
      $id = $_POST["id"];

      $query = $this->db->query("DELETE FROM items WHERE id='$id'");

      header("location: ../items/index");
      $result = $this->db->resultset();

      return $result;
   }

     // get the user id from a single user to use that id in the update script
     public function getSingleItem($id)
     {
         $this->db->query("SELECT * FROM stock WHERE id = :id");
         $this->db->bind(':id', $id, PDO::PARAM_INT);
         //only returns 1 row with the right id
         return $this->db->single();
     }

   //   public function updateItems($post)
   //   {
   //       //get the rows that need to get updated
   //       $this->db->query("UPDATE items 
   //                                       SET itemname = :itemname,
   //                                           category = :category, 
   //                                           brand = :brand,
   //                                           typenumber = :typenumber,
   //                                           purchasedate = :purchasedate
   //                                           price = :price
   //                                       WHERE itemid= :itemid ");
   //       //bind the id
   //       $this->db->bind(':itemid', $post["itemid"], PDO::PARAM_INT);
   //       //get the binding of the items in the function
   //       $this->db->bind(':itemname', $post['itemname']);
   //       $this->db->bind(':category', $post['category']);
   //       $this->db->bind(':brand', $post['brand']);
   //       $this->db->bind(':typenumber', $post['purchasedate']);
   //       $this->db->bind(':price', $post['price']);
   //       //return the execute
   //       return $this->db->execute();
 
   //   }
}

// Function GetItems() {
//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $dbname = "proefexamen";


//     $conn = mysqli_connect($servername, $username, $password, $dbname);

//     $sql = "SELECT * FROM `items`";

//     $result = mysqli_query($conn, $sql);

//     $count = mysqli_num_rows($result);

//     $result = mysqli_query($conn, $sql);

//     $records = "";

//     while ($record = mysqli_fetch_assoc($result)) 
//     {
//         //code to get the code in the right way, there in lowercasses
        
//      $records .= "<tr>
//        <th scope='row'>" . $record["item id"] . "</th>
//        <td> " . $record["item name"] . "</td>
//        <td> " . $record["category"] . "</td>
//        <td> " . $record["description"] . "</td>
//        <td> " . $record["brand"] . "</td>
//        <td> " . $record["typenumber"] . "</td>
//        <td> " . $record["purchase date"] . "</td>
//        <td> " . $record["price"] . "</td>
       
  
//        <td>
//          <a href='./update.php?id=" . $record["id"] . "'>
//          <button style='background-color:green; border-color:black; color:white' > Update </button>
//          </a>
//        </td >
  
//        <td>
//           <a href='?delete=" . $record["id"] . "' class='btn' style='background-color:red; border-color:black; color:white'>
//               Delete
//           </a>
//         </td >
  
//      </tr>";
//     }

//  }