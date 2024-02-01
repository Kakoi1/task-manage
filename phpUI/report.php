<?php 
    echo '<div class="container mt-5">
    <div class="card1 bg-dark text-white p-3 rounded-3">
        <div class="card-header"><h1>Task Progress</h1></div>
        <div class="card-body1 p-3">
            <!-- Task 1 -->
            <div class="mb-3">
              <label for="dueDate1">Task 1 Status: <p class="text-warning">Inprogress</p></label>
              <br>
                <label for="dueDate1">Task 1 Due Date:</label>
               
                <input type="text" id="dueDate1" class="form-control bg-dark" value="2024-02-03" readonly>
                <div class="progress mt-2">
                    <div id="progressBar1" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="mt-2">
                    <span id="progressText1">0%</span>
                </div>
            </div>
            <hr>

            <!-- Task 2 (Repeat similar structure for other tasks) -->
            <div class="mb-3">
              <label for="dueDate1">Task 2 Status:  <p class="text-primary">Complete</p></label>
              <br>
                <label for="dueDate2">Task 2 Due Date:</label>
                
                <input type="text" id="dueDate2" class="form-control bg-dark" value="2024-02-3">
                <div class="progress mt-2">
                    <div id="progressBar2" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="mt-2">
                    <span id="progressText2">0%</span>
                </div>
            </div>
            <hr>
            <!-- Repeat similar structure for other tasks (Task 3, Task 4, Task 5) -->
            <div class="mb-3">
              <label for="dueDate3">Task 3 Status:  <p class="text-warning">Inprogress</p></label>
              <br>
                <label for="dueDate3">Task 3 Due Date:</label>
              <input type="text" id="dueDate3" class="form-control bg-dark" value="2024-02-11">
              <div class="progress mt-2">
                  <div id="progressBar3" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="mt-2">
                  <span id="progressText3">0%</span>
              </div>
          </div>

          <hr>
          <div class="mb-3">
            <label for="dueDate4">Task 4 Status: <p class="text-danger">Over Due</p></label>
            <br>
              <label for="dueDate4">Task 4 Due Date:</label>
            <input type="text" id="dueDate4" class="form-control bg-dark" value="2024-01-20">
            <div class="progress mt-2">
                <div id="progressBar4" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="mt-2">
                <span id="progressText4">0%</span>
            </div>
        </div>

        <hr>

        <div class="mb-3">
          <label for="dueDate5">Task 5 Status: <p class="text-primary">Complete</p></label>
          <br>
            <label for="dueDate5">Task 5 Due Date:</label>
          <input type="text" id="dueDate5" class="form-control bg-dark" value="2024-02-2">
          <div class="progress mt-2">
              <div id="progressBar5" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="mt-2">
              <span id="progressText5">0%</span>
          </div>
      </div>

      <hr>

        </div>
    </div>
</div>';
?>
