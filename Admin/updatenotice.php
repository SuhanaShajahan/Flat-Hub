<?php

?>
<main id="main" class="main">

  <section>
  <div class="pagetitle ">
    <h1  style="margin-top:30px;margin-left: 750px;">UPDATE BILL</h1>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-6" style="margin-left: 500px;">

        <div class="card">
          <div class="card-body">
            

            <!-- General Form Elements -->
            <div id="adminPanel">
            <form action="updateaction.php?id=<?php echo $_REQUEST['id']?>" method="POST" enctype="multipart/form-data">
           
     <label for="notice_title">Notice Title:</label>
     <input type="text" id="notice_title" name="notice_title" required values="<?php echo $row['notice_title']?>">
     
     <label for="notice_content">Notice Content:</label>
     <textarea id="notice_content" name="notice_content" rows="4" required values="<?php echo $row['notice_content']?>"></textarea>
     <input type="submit" value="Add Notice" name="submit">
   </form>
 </div>

            <!-- End General Form Elements -->

          </div>
        </div>

      </div>
  </section>

</main>
