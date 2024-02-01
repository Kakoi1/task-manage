<?php 
    echo '             
    <div id="tablet" class="mt-5 p-6">
    
    <h2 class="mt-90">Project List</h2>
    <div class="d-md-flex justify-content-md-end">
    
    <button type="button" class="btn btn-success " onclick="openprojForm()">Add Project</button>
    </div>
                <table class="table table-striped">
                  <thead>
                        <tr class="table table-dark">
                            <th scope="col">Project_id</th>
                            <th scope="col">Project title</th>
                            <th scope="col">Project description</th>
                            <th scope="col">Project due date</th>
                            <th scope="col">Action</th>
                           
                        </tr>
                    <thead>
                    <tbody>
                    <tr>
                            <td scope="row">1001</td>
                            <td>project name</td>
                            <td>project description</td>
                            <td>Due date</td>
                            <td><button type="button" onclick="addTask()" class="btn btn-primary me-3">Edit</button> 
                            <button type="button" onclick="addTask()" class="btn btn-danger ">delete</button>
                          
                        </tr>
                        <tr>
                        <td scope="row">1001</td>
                            <td>project name</td>
                            <td>project description</td>
                            <td>Due date</td>
                            <td><button type="button" onclick="addTask()" class="btn btn-primary me-3">Edit</button> 
                            <button type="button" onclick="addTask()" class="btn btn-danger ">delete</button>
                          
                        </tr>
                        <tr>
                        <td scope="row">1001</td>
                            <td>project name</td>
                            <td>project description</td>
                            <td>Due date</td>
                            <td><button type="button" onclick="addTask()" class="btn btn-primary me-3">Edit</button> 
                            <button type="button" onclick="addTask()" class="btn btn-danger ">delete</button>
                          
                        </tr>
                    </tbody>
                </table>
  
  
      </div>

      <div class="overlayProj" id="overlayProj">
          <div class="medForm md-8">
      <br>
      <h1 class="text-white">Project Form</h1>
      <br>
      
    <div class="input-group mb-4">
    <span class="input-group-text" id="basic-addon1">Project Name</span>
    <input type="text" class="form-control" placeholder="Task Name" aria-label="Task Name" aria-describedby="basic-addon1">
  </div>
  
  <div class="input-group mb-4">
    <span class="input-group-text" id="basic-addon1">Project Due date</span>
    <input type="date" class="form-control" placeholder="Task Name" aria-label="Task Name" aria-describedby="basic-addon1">
  </div>

  
  <div class="input-group mb-4">
    <span class="input-group-text" id="basic-addon1">Project ID</span>
    <input id="taskId" type="text" class="form-control" placeholder="ID" aria-label="Task Name" aria-describedby="basic-addon1" readonly>
  </div>
  
  <div class="input-group">
    <span class="input-group-text">Project description</span>
    <textarea class="form-control" aria-label="With textarea"></textarea>
  </div>
  
  <br>
  
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-primary me-md-2" type="button">Add</button>
    <button class="btn btn-danger" type="button" onclick="closeprojForm()">Cancel</button>
  </div>
  
  
          </div>
          </div>';
?>