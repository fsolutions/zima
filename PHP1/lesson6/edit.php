 <form action="product.php">
   <p><select name="product">
   <option selected value>Change product</option>
    <? 
    require "config.php";
    $sql = "select * from shop order by rate DESC ";
    $res=mysqli_query($connect,$sql);
    while ($data=mysqli_fetch_assoc($res)){
    $name=$data['name'];
    $id=$data['id'];
   echo "<option value=\"$id\">$name</option>";
    }
   ?>
   </select>
   <p><input name="action" type="radio" value="1" checked>New(default)</p> 
   <p><input name="action" type="radio" value="edit">Edit</p>
   <p><input name="action" type="radio" value="del">Delete</p>
   <input type="submit" value="ok">
</p>
 </form> 