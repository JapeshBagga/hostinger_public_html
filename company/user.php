<!doctype html>
<?php
   require "php/connect.php";
   require "php/messageDisp.php";
   // require "php/preCommonHeader.php";
   // $hnewComp = "class='mm-active'";
   require "php/commonHeader.php";
   ?>
<div class="app-main__outer">
   <div class="app-main__inner">
      <div class="row" style="margin: auto;width: 50%;padding: 10px;">
         <div class="col-md-2"></div>
         <div class="col-md-4">
            <button onclick="myFunction1()" class="btn btn-warning">Personal Profile</button>
         </div>
         <div class="col-md-4">
            <button onclick="myFunction2()" class="btn btn-warning">Organisation Profile</button>
         </div>
         <div class="col-md-2"></div>
      </div>
      <br>
      <div class="container" id='personal' style="display: block;">
         <div class="main-body">
            <div class="row gutters-sm">
               <div class="col-md-1"></div>
               <div class="col-md-10">
                  <div class="card mb-3">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-sm-3">
                              <h6 class="mb-0">Full Name</h6>
                           </div>
                           <div class="col-sm-9 text-secondary">
                              Kenneth Valdez
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-sm-3">
                              <h6 class="mb-0">Email</h6>
                           </div>
                           <div class="col-sm-9 text-secondary">
                              fip@jukmuh.al
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-sm-3">
                              <h6 class="mb-0">Phone</h6>
                           </div>
                           <div class="col-sm-9 text-secondary">
                              (239) 816-9029
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-sm-3">
                              <h6 class="mb-0">Address</h6>
                           </div>
                           <div class="col-sm-9 text-secondary">
                              Bay Area, San Francisco, CA
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-sm-12">
                              <a class="btn btn-info " target="__blank" href="">Edit</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-1"></div>
            </div>
         </div>
      </div>
      <div class="container" id='org' style="display: none;">
         <div class="main-body">
            <div class="row gutters-sm">
               <div class="col-md-1"></div>
               <div class="col-md-10">
                  <div class="card mb-3">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-sm-3">
                              <h6 class="mb-0">Name of Organization </h6>
                           </div>
                           <div class="col-sm-9 text-secondary">
                              AMAZON.COM, INC
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-sm-3">
                              <h6 class="mb-0">Email</h6>
                           </div>
                           <div class="col-sm-9 text-secondary">
                              amazon.ama@gmail.com
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-sm-3">
                              <h6 class="mb-0">Phone</h6>
                           </div>
                           <div class="col-sm-9 text-secondary">
                              (239) 816-9029
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-sm-3">
                              <h6 class="mb-0">Description</h6>
                           </div>
                           <div class="col-sm-9 text-secondary">
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                              Why do we use it?
                              It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-sm-3">
                              <h6 class="mb-0">Change Logo</h6>
                           </div>
                           <div class="col-sm-9 text-secondary">
                              Upload file
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-sm-3">
                              <h6 class="mb-0">Address</h6>
                           </div>
                           <div class="col-sm-9 text-secondary">
                              New York, lane 21, USA
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-sm-12">
                              <a class="btn btn-info " target="__blank" href="">Edit</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-1"></div>
            </div>
         </div>
      </div>
   </div>
   <footer>
      <div class="app-wrapper-footer">
         <div class="app-footer">
            <div class="app-footer__inner">
               <p>All rights Reversed</p>
            </div>
         </div>
      </div>
   </footer>
</div>
</div>
</div>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script src='https://code.jquery.com/jquery-3.5.1.js'></script>
<script src='https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js'></script>
<script>
   $(document).ready(function() {
      $('#example').DataTable();
    } );
    function myFunction1() {
      var x = document.getElementById("personal");
      var y = document.getElementById("org");
          x.style.display = "block";
          y.style.display = "none";
    }
    function myFunction2() {
      var x = document.getElementById("personal");
      var y = document.getElementById("org");
          x.style.display = "none";
          y.style.display = "block";
    }
</script>
</body>
</html>