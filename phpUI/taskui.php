<?php 
   echo '<div id="tablet" class="mt-5 p-6">
    
   <h2 class="mt-90">Task List</h2>
   <div class="d-md-flex justify-content-md-end">

   <button type="button" class="btn btn-outline-danger me-4" onclick="openMessage()"> <i class="bi bi-chat-dots-fill"></i>Chat Box</button>

   <button type="button" class="btn btn-success " onclick="openForm()">Add Task</button>
   </div>
               <table class="table table-striped">
                 <thead>
                       <tr class="table table-dark">
                           <th scope="col">Task_id</th>
                           <th scope="col">Task title</th>
                           <th scope="col">Task description</th>
                           <th scope="col">Task due date</th>
                           <th scope="col">Task priority</th>
                           <th scope="col">Project Assigned</th>
                           <th scope="col">Team Assigned</th>
                           <th scope="col">Task Status</th>
                           <th scope="col">Action</th>
                          
                       </tr>
                   <thead>
                   <tbody>
                   <tr>
                           <td scope="row">1001</td>
                           <td>task name</td>
                           <td>task description</td>
                           <td>Due date</td>
                           <td>Priority</td>
                           <td>Project Name</td>
                           <td>team name</td>
                           <td>Inprogress</td>
                           <td><button type="button" onclick="addTask()" class="btn btn-primary me-3">Edit</button> 
                           <button type="button" onclick="addTask()" class="btn btn-danger ">delete</button>
                         
                       </tr>
                       <tr>
                           <td scope="row">1002</td>
                           <td>task name</td>
                           <td>task description</td>
                           <td>Due date</td>
                           <td>Priority</td>
                           <td>Project Name</td>
                           <td>team name</td>
                           <td>Inprogress</td>
                           <td><button type="button" onclick="addTask()" class="btn btn-primary me-3">Edit</button> 
                           <button type="button" onclick="addTask()" class="btn btn-danger ">delete</button>
                         
                       </tr>
                       <tr>
                           <td scope="row">1003</td>
                           <td>task name</td>
                           <td>task description</td>
                           <td>Due date</td>
                           <td>Priority</td>
                           <td>Project Name</td>
                           <td>team name</td>
                           <td>Inprogress</td>
                           <td><button type="button" onclick="addTask()" class="btn btn-primary me-3">Edit</button> 
                           <button type="button" onclick="addTask()" class="btn btn-danger ">delete</button>
                         
                       </tr>
                   </tbody>
               </table>
               </div>
     <!-- message start -->
     <div class="overlayMessage" id="overlayMessage">
         <div class="messageForm lg">

         <div class="container mt-5">
   <div class="card">
       <div class="card-header">Chat Box</div>
       <div class="card-body" id="chat-box">
           <!-- Chat messages will be displayed here -->
       </div>
       <div class="card-footer">
           <div class="input-group">
        
               <input type="text" id="messageInput" class="form-control" placeholder="Type your message">

             <div class="d-grid gap-2 d-md-flex justify-content-md-end">
               <button class="btn btn-primary me-md-2" type="button" onclick="sendMessage()">Send</button>
               <button class="btn btn-danger" type="button" onclick="closeMessage()">Close</button>
             </div>

           </div>
       </div>
   </div>
 </div>

         </div>
         </div>
      <!-- message end -->
     
    
     <div class="overlayMed" id="overlayMed">
         <div class="medForm md-8">
     <br>
     <h1 class="text-white">Task Form</h1>
     <br>
     <div class="row">
     <div class="col">
   <div class="input-group mb-4">
   <span class="input-group-text" id="basic-addon1">Task Name</span>
   <input type="text" class="form-control" placeholder="Task Name" aria-label="Task Name" aria-describedby="basic-addon1">
 </div>
 <div class="input-group mb-4">
   <span class="input-group-text" id="basic-addon1">Task Due date</span>
   <input type="date" class="form-control" placeholder="Task Name" aria-label="Task Name" aria-describedby="basic-addon1">
 </div>
 
 <div class="input-group mb-4">
   <label class="input-group-text" for="inputGroupSelect01">Priority level:</label>
   <select class="form-select" id="inputGroupSelect01">
     <option selected>Choose...</option>
     <option value="1">Low</option>
     <option value="2">Medium</option>
     <option value="3">High</option>
   </select>
  </div>
 </div>
     <div class="col">
 <div class="input-group mb-4">
   <label class="input-group-text" for="inputGroupSelect01">Assign to:</label>
   <select class="form-select" id="inputGroupSelect01">
     <option selected>Choose...</option>
     <option value="1">team 1</option>
     <option value="2">team 2</option>
     <option value="3">team 3</option>
   </select>
 </div>

 <div class="input-group mb-4">
 <label class="input-group-text" for="inputGroupSelect01">Task Status</label>
 <select class="form-select" id="inputGroupSelect01">
   <option selected>Choose...</option>
   <option value="1">Inprogress</option>
   <option value="2">Complete</option>
   <option value="3">Over Due</option>
 </select>
</div>
 
 <div class="input-group mb-4">
   <span class="input-group-text" id="basic-addon1">Task ID</span>
   <input id="taskId" type="text" class="form-control" placeholder="ID" aria-label="Task Name" aria-describedby="basic-addon1" readonly>
 </div>
 </div>
 </div>
 <div class="input-group">
   <span class="input-group-text">Task description</span>
   <textarea class="form-control" aria-label="With textarea"></textarea>
 </div>
 
 <br>
 
 <div class="d-grid gap-2 d-md-flex justify-content-md-end">
   <button class="btn btn-primary me-md-2" type="button">Add</button>
   <button class="btn btn-danger" type="button" onclick="closeForm()">Cancel</button>
 </div>
 
 
         </div>
         </div>
 
     <!-- Add your content here -->
   ';
?>