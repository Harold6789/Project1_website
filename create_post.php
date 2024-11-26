<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="create_post.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post Form</title>
</head>
<body>
<header class="header">

<div class="header-right">
    <a class="buttonClass active" href="create_post.php">Create Posts</a>
    <a class="buttonClass active" href=>Search Posts</a>
    <a class="buttonClass active" href=>View Profile</a>
    <a class="buttonClass active" href=>Create Bio</a>
    <a class="buttonClass active" href=>Feedback</a>
  </div>
  </header>
  <a href="Home.php" class="home">
  <p>Home</p>
</a>
    <form action="new_post_validate.php" method="post">
    <div class="Create-Your-Post">
  <h1><u>Create Your Own Post</u></h1>
</div>
        <input type="text" name="title" id="title" placeholder="New Post Title" size="34">
        <br>
        <label for="description_txt">Description: </label><br>
        <textarea name="description" id="description_txt" cols="100" rows="5" placeholder="New Post Description"></textarea><br>
        <label for="post_txt">Content: </label><br>
        <textarea name="post_txt" id="post_txt" cols="300" rows="35" placeholder="Enter Post Content"></textarea>
        <br>
        <button type="Submit">submit</button>
    </form>





</body>
</html>