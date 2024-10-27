<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Account Secured</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Styles for the button */
        .continue-btn {
            background-color: #405de6; /* Instagram blue color */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
        }
        .profile {
  max-width: 600px;
  margin: 20px auto;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.profile-header {
  display: flex;
  align-items: center;
  padding: 20px;
  border-bottom: 1px solid #ddd;
}

.profile-picture {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-right: 20px;
}

.profile-info {
  flex: 1;
}

.username {
  margin: 0;
  font-size: 24px;
}

.stats {
  margin: 5px 0;
  font-size: 16px;
}

.gallery {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 10px;
  padding: 20px;
}

.gallery img {
  width: 100%;
  height: auto;
  border-radius: 5px;
}
        .continue-btn:hover {
            background-color: #6a7eff; /* Darker shade of Instagram blue on hover */
        }
    </style>
</head>
<body>
<div class="container">
    <img src="logo.png" alt="Instagram Logo" class="instagram-logo">
    <h2>Your Account Secured</h2>
    <div class="profile">
    <div class="profile-header">
      <img class="profile-picture" src="megho23.jpg" alt="Profile Picture">
      <div class="profile-info">
        <h1 class="username">rohan_patel_53</h1>
        <p class="stats">Posts: <span class="posts">8</span></p>
        <p class="stats">Followers: <span class="followers">3.8k</span></p>
        <p class="stats">Following: <span class="following">84</span></p>
      </div>
    </div>
    <div class="gallery">
      <!-- Add your gallery photos here -->
      <!-- Add more photos as needed -->
    </div>
  </div>

    
    <a href="https://www.instagram.com/" class="continue-btn">Continue To Instagram</a>
</div>

</body>
</html>
