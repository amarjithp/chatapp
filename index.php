<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat App</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
  <div class="wrapper">
    <section class="form signup">
      <form action="#" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label for="">First Name</label>
            <input type="text" name="fname" placeholder="First Name" required>
          </div>
          <div class="field input">
            <label for="">Last Name</label>
            <input type="text" name="lname" placeholder="Last Name" required>
          </div>
        </div>
        
        <div class="field input">
          <label >Email Address</label>
          <input type="text" name="email" placeholder="Enter Your Email" required>
        </div>

        <div class="field input">
          <input type="password" name="password" placeholder="Enter New Password" required>
        </div>

        <div class="field image">
          <label>Profile Pic</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>

        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      
    </section>
  </div>
</body>
</html>