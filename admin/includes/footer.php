<footer class="footer pt-5">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        
      
      </div>
    </div>
  </footer>
  </main>
  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/perfect-scrollbar.min.js"></script>
  <script src="assets/js/smooth-scrollbar.min.js"></script>

  
  
  <!-- sweet alert javascript -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="assets/js/custom.js"></script>

  <!-- AlertJS javascript -->
 <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
 
 <script>
    <?php 
    if(isset($_SESSION['message']))
    {
      ?>
        alertify.set('notifier','position', 'bottom-right');
        alertify.success('<?= $_SESSION['message']?>');
        
      <?php
      unset($_SESSION['message']);
    }
    ?>
 
    
  
 </script>

  </body>

</html>