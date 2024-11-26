edit_post_validate                                                                                                                                                                                <?php

 include 'connectdb.php';

 $id = $_POST['id'];
 $title =$_POST['title'];
 $description =$_POST['description'];
 $post_text =$_POST['post_txt'];

 $sanitisedTitle = htmlentities(string: $title);
 // Carry On with Sanitised Description