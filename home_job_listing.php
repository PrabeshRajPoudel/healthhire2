<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Health At Home - Job Listings</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="home_job_listing my-5">
    <div class="container">
      <h2 class="text-center my-4">Featured Jobs</h2>
      
      <!-- Buttons to toggle between job sections -->
      <div class="text-center mb-4">
        <button id="showRecent" class="btn btn-recent mx-2 d-inline-block">Show Recent Jobs</button>
        <button id="showUpdated" class="btn btn-update mx-2 d-inline-block">Show Updated Jobs</button>
      </div>

      <!-- Recent Jobs Section -->
      <div id="recentJobs" class="py-5">
        <h3 class="text-center">Recent Jobs</h3>
        
        <!-- Job Card 1 (Recent) -->
        <div class="card job-card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <h3>Helper</h3>
                <p>No of openings: 5</p>
              </div>
              <div class="col-md-4">
                <h5>Type: Remote</h5>
                <p>Published: 2020/10/10</p>
              </div>
              <div class="col-md-4 text-right">
                <a href="job-form.php" class="btn btn-apply">Apply Now</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Job Card 2 (Recent) -->
        <div class="card job-card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <h3>Nurse</h3>
                <p>No of openings: 3</p>
              </div>
              <div class="col-md-4">
                <h5>Type: Full-Time</h5>
                <p>Published: 2021/06/15</p>
              </div>
              <div class="col-md-4 text-right">
                <a href="job-form.php" class="btn btn-apply">Apply Now</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Job Card 3 (Recent) -->
        <div class="card job-card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <h3>Driver</h3>
                <p>No of openings: 2</p>
              </div>
              <div class="col-md-4">
                <h5>Type: Part-Time</h5>
                <p>Published: 2022/01/05</p>
              </div>
              <div class="col-md-4 text-right">
                <a href="job-form.php" class="btn btn-apply">Apply Now</a>
              </div>
            </div>
          </div>
        </div>
        
      </div>      

      <!-- Updated Jobs Section -->
      <div id="updatedJobs" class="py-5" style="display: none;">
        <h3 class="text-center">Updated Jobs</h3>
        
        <!-- Job Card 1 (Updated) -->
        <div class="card job-card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <h3>Receptionist</h3>
                <p>No of openings: 2</p>
              </div>
              <div class="col-md-4">
                <h5>Type: Full-Time</h5>
                <p>Published: 2022/03/12</p>
              </div>
              <div class="col-md-4 text-right">
                <a href="job-form.php" class="btn btn-apply">Apply Now</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Job Card 2 (Updated) -->
        <div class="card job-card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <h3>Lab Assistant</h3>
                <p>No of openings: 1</p>
              </div>
              <div class="col-md-4">
                <h5>Type: Part-Time</h5>
                <p>Published: 2023/09/25</p>
              </div>
              <div class="col-md-4 text-right">
                <a href="job-form.php" class="btn btn-apply">Apply Now</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Job Card 3 (Updated) -->
        <div class="card job-card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <h3>Technician</h3>
                <p>No of openings: 4</p>
              </div>
              <div class="col-md-4">
                <h5>Type: Full-Time</h5>
                <p>Published: 2023/11/05</p>
              </div>
              <div class="col-md-4 text-right">
                <a href="job-form.php" class="btn btn-apply">Apply Now</a>
              </div>
            </div>
          </div>
        </div>
        
      </div>

    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
  <script>
    // Toggle functionality for job sections
    document.getElementById('showRecent').addEventListener('click', function() {
      document.getElementById('recentJobs').style.display = 'block';
      document.getElementById('updatedJobs').style.display = 'none';
    });

    document.getElementById('showUpdated').addEventListener('click', function() {
      document.getElementById('updatedJobs').style.display = 'block';
      document.getElementById('recentJobs').style.display = 'none';
    });
  </script>
</body>
</html>
