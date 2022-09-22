<?php include 'inc/header.php' ;?>
   <?php 
      $sql = 'select * from feedback';
      $result = mysqli_query($conn , $sql);
      $feedback = mysqli_fetch_all($result , MYSQLI_ASSOC);
   ?>
    <h2>past Feedback</h2>
    <?php if(empty($feedback)):?>
        <p class="lead mt3"> there is no feedback </p>
    <?php endif;
     ?>    
    <?php foreach($feedback as $item):?> 
    <div class="card my-3 w-75">
     <div class="card-body text-center">
      <?php echo $item['body'] ?>
       <div class="text-secandary mt-2">
            By <?php echo $item['name']; ?> on  <?php echo $item['date'] ?>
       </div>
     </div>
   </div>
      <?php endforeach; ?>
   

   <?php include 'inc/footer.php' ;?>