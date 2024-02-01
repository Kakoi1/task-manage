<?php 
    echo'
    <div id="tablet" class="mt-5 p-6">

<h2 class="mt-90">Team List</h2>
<div class="d-md-flex justify-content-md-end">

<button type="button" class="btn btn-success " onclick="openprojTeam()">Add Project</button>
</div>
      <table class="table table-striped">
        <thead>
              <tr class="table table-dark">
                  <th scope="col">Team_id</th>
                  <th scope="col">Team Name</th>
                  <th scope="col">Team Members</th>
                  <th scope="col">Action</th>
                 
              </tr>
          <thead>
          <tbody>
          <tr>
                  <td scope="row">1001</td>
                  <td>Team name</td>
                  <td>Jhon, rey, degamo</td>
                  <td><button type="button" onclick="addTask()" class="btn btn-primary me-3">Edit</button> 
                  <button type="button" onclick="addTask()" class="btn btn-danger ">delete</button>
                
              </tr>
              <tr>
              
              <td scope="row">1002</td>
                  <td>Team name</td>
                  <td>Jhon, rey, degamo</td>
                  <td><button type="button" onclick="addTask()" class="btn btn-primary me-3">Edit</button> 
                  <button type="button" onclick="addTask()" class="btn btn-danger ">delete</button>
                
              </tr>
              <tr>
             
              <td scope="row">1003</td>
                  <td>Team name</td>
                  <td>Jhon, rey, degamo</td>
                  
                  <td><button type="button" onclick="addTask()" class="btn btn-primary me-3">Edit</button> 
                  <button type="button" onclick="addTask()" class="btn btn-danger ">delete</button>
                 
                  </td>
                
              </tr>
          </tbody>
      </table>


</div>

<div class="overlayProj" id="overlayTeam">
<div class="medForm md-8">
<br>
<h1 class="text-white">Team Form</h1>
<br>


<div class="input-group mb-4">
<span class="input-group-text" id="basic-addon1">Team Name</span>
<input type="text" class="form-control" placeholder="Task Name" aria-label="Task Name" aria-describedby="basic-addon1">
</div>

<div class="row">
<div class="col-lg-4">

<div class="input-group mb-3">
<label class="input-group-text" for="inputGroupSelect01">Options</label>
<select class="form-select sm-2" id="mySelect">
<option selected>Choose...</option>
<option value="1">Jhongwapo</option>
<option value="2">Degamo</option>
<option value="3">rey</option>
</select>
</div>

</div>

<div class="col-lg-8">
<input id="selectedInput" type="text" aria-label="Last name" class="form-control">
</div>

</div>


<div class="input-group mb-4">
<span class="input-group-text" id="basic-addon1">Team Id</span>
<input id="taskId" type="text" class="form-control" placeholder="ID" aria-label="Task Name" aria-describedby="basic-addon1" readonly>
</div>



<br>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
<button class="btn btn-primary me-md-2" type="button">Add</button>
<button class="btn btn-danger" type="button" onclick="closeprojTeam()">Cancel</button>
</div>


</div>
</div>';
?>