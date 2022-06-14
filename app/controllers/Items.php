<?php

class Items extends Controller {
    public function __construct()
    {
        $this->itemModel = $this->model('item');
    }

    public function index()
    {
        $itemsData = $this->itemModel->readItems();
        $rows = "";
        // For each loop to get data
        foreach($itemsData as $value)
        {
            $rows .= '<tr>
            <th scope="row">' . $value->id . '</th>
            <td>' . $value->itemname . '</td>
            <td> '. $value->totalstock .'</td>
            <td>'.$value->cat.'</td>
            <td>'. $value->pricing.'</td>';
            $rows .= '<td><a href="/items/update/$value->id">update</a> </td>';
            $rows .= '</tr>';
        }



        $data = [
            'itemData'=>$rows
        ];

        $this->view("items/index", $data);

           //Form submit button to delete student entry
           if(isset($_POST["delete"])){

            //Call function in Model class and give no arguments
            $this->itemModel->delete();

          }


        //Form submit button to update item entries in the database
        if(isset($_POST["update"])){

            //Call function in Model class without any arguments passed or needed
            $this->itemModel->updateItem();

            }

    }

}
