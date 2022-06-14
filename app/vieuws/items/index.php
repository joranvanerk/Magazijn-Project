<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Item Name</th>
      <th scope="col">Category</th>
      <th scope="col">Total stock</th>
      <th scope="col">total availability</th>
      <th scope="col">Cat</th>
      <th scope="col">Pricing</th>
    </tr>
  </thead>
  	<!-- form om de id te deleten -->
  <form action="" method="POST">
    <br><h3>Verwijder een item door de ID in te voeren in het veld hieronder</h3><br> 
    <input class="form-control" type="text" name="itemid" placeholder="voer item id in">
    <button class="btn btn-primary" type="submit" name="delete">Confirm</button>
</form>
<!-- form om te updaten -->

  <tbody>   
        <?= $data["itemData"]; ?>
  </tbody>
</table>