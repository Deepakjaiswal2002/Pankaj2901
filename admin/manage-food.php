
<?php include("partial/menu.php"); ?>
<div class="main-content"> 
      <div class="wrapper"> 
            
          
<!-- new lines added from here  -->
<h2 style="color:blueviolet" >Manage-Food</h2>
<br><br>

<!-- button for admin  -->
<a href="#" class="btn-primary">Add Food</a>
<br> <br>
<style>
.btn-primary{ background-color:blue;
  padding: 1%;
  background-color:#25CCF7;
  color: white;
  text-decoration: none;
  font-weight: bold;
  
}

.btn-primary:hoeer{
  background-color:#d12929; 
}
</style>

<style>
  .btn-secondary{ background-color:#55E6C1;
    padding: 1%;
    background-color: #55E6C1;
    color: white;
    text-decoration: none;
    font-weight: bold;
    
  }
  
  .btn-secondary:hoeer{
    background-color:#55E6C1; 
  }
  
  </style>
  
  <style >
    .btn-danger{ 
      padding: 1%;
    background-color: rgb(172, 16, 16);
    color: white;
    text-decoration: none;
    font-weight: bold;
    


    }
  
</style>
  
  
     

      <table class="tbl-full" style =" width: 100%; padding:1% " >
        <tr  style ="  border-bottom: 5px solid black; padding:1% ;text-align: left" >

        <th style ="  border-bottom: 5px solid black; padding:1% ">S.N</th>
        <th style ="  border-bottom: 5px solid black; padding:1% ">full_name</th>
        <th style ="  border-bottom: 5px solid black; padding:1%">username</th>
        <th style ="  border-bottom: 5px solid black; padding:1%">action</th>
        
        </tr>  

        <tr  >

        <td  style =" padding:1% " > 1 </td>
        <td  style =" padding:1% "> Deepak_jaiswal </td>
        <td  style =" padding:1% "> Deepak </td>
        <td  style =" padding:1% ">
               <a href="#" class="btn-primary">update_admin</a>
               <a href="#" class="btn-danger">delete_admin</a>
  
       
        
        </tr>

        <tr  >

<td  style =" padding:1% " > 2 </td>
<td  style =" padding:1% "> Deepak_jaiswal </td>
<td  style =" padding:1% "> Deepak </td>
<td  style =" padding:1% "> 
               <a href="#" class="btn-primary">update_admin</a>
               <a href="#" class="btn-danger">delete_admin</a>
  
 


</tr>

<tr  >

<td  style =" padding:1% " > 3 </td>
<td  style =" padding:1% "> Deepak_jaiswal </td>
<td  style =" padding:1% "> Deepak </td>
<td  style =" padding:1% ">
  <a href="#" class="btn-primary">update_admin</a>
  <a href="#" class="btn-danger">delete_admin</a> <td>
 


</tr>
        
</br>

      </table> 


      </div>
</div>

<?php include("partial/footer.php"); ?>
