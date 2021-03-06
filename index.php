<?php include "templates/header.php"; ?>
<div class="container shadow p-3 mb-5 bg-white rounded">
  <div class="d-flex mt-5 mb-3 justify-content-between align-items-center">
    <h2 class="">Task</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="Add New Task">+ Add Task</button>
    <!-- <button class="btn btn-primary float-right d-inline">Add new employee</button> -->
  </div>
  <?php include 'templates/model.php' ?>
  <?php
  require_once 'includes/config.php';
  $sql = "SELECT * from tasks";
  if ($result = mysqli_query($conn, $sql)) {
    echo
      "<table class='table table-striped table-sm'> 
        <thead>
          <tr>
            <th scope='col'>#</th>
            <th scope='col'>Title</th>
            <th scope='col'>Status</th>
            <th scope='col'>Priority</th>
            <th scope='col'>Action</th>
          </tr>
        </thead>
        <tbody>";
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<th scope='row'>" . $row['id'] . "</th>";
        echo "<td>" . $row['title'] . "</span></td>";
        switch($row['status']) {
            case 'doing':
                echo "<td><span class='badge badge-pill badge-warning'>" . $row['status'] . "</td>";
                break;
            case 'done':
                echo "<td><span class='badge badge-pill badge-success'>" . $row['status'] . "</td>";
                break;
            default:
                echo "<td><span class='badge badge-pill badge-primary'>" . $row['status'] . "</td>";
        }
        switch($row['priority']) {
            case 'high':
                echo "<td><span class='badge badge-pill badge-danger'>" . $row['priority'] . "</td>";
                break;
            case 'low':
                echo "<td><span class='badge badge-pill badge-secondary'>" . $row['priority'] . "</td>";
                break;
            case 'lowest':
                echo "<td><span class='badge badge-pill badge-light'>" . $row['priority'] . "</td>";
                break;
            default:
                echo "<td><span class='badge badge-pill badge-warning'>" . $row['priority'] . "</td>";
        }
        echo "<td>";

        echo '<button class="btn btn-sm btn-light mx-2" 
        data-whatever="Update Task Details"
        data-id="' . $row['id'] . '"
        data-title="' . $row['title'] . '"
        data-priority="' . $row['priority'] . '"
        data-status="' . $row['status'] . '"
        data-description="' . $row['description'] . '"
        data-toggle="modal" data-target="#exampleModal"
      >';
        echo "<svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-pencil-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
          <path fill-rule='evenodd' d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
        </svg>
      </button>

      <a class='btn btn-sm btn-light mx-2' href=\"includes/delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">
        <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-trash-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
          <path fill-rule='evenodd' d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z'/>
        </svg>
      </a>
    </td>
        ";
      }
    }
  }

  echo "</tr>
  </tbody>
</table>";

  mysqli_close($conn);
  ?>
</div>
<?php include "templates/footer.php"; ?>