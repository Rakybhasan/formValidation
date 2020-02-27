
  <?php
   require 'header.php';
   ?>


  <!-- Super Global Variable -->


   <?php
    // $_POST = To send data
    // $_GET = To bring data in a link
    // $_REQUEST
    // $_SERVER
    // $_FILES
    // $_COOKIES
    // $_SESSION
    // $_ENV

    ?>


     <div class="container">
       <div class="row">
         <div class="col-md-6 offset-md-3">
          <form class="form-group bg-dark" action="form-post.php" method="post">
             <div class="head py-3 bg-dark text-white">
                 <h1 class="text-center">Registration Form</h1>
             </div>
             <div class="p-3 bg-dark">
               <label class="text-white" for="name">Full name</label>
               <input id="name" class="form-control" type="text" name="name" placeholder="Enter Full name">
             </div>
             <div class="p-3 bg-dark">
               <label class="text-white" for="email">Email</label>
               <input id="email" class="form-control" type="text" name="email" placeholder="Enter Email">
             </div>
             <div class="p-3 bg-dark">
               <label class="text-white" for="password">Password</label>
               <input id="password" class="form-control" type="password" name="password" placeholder="Enter Password">
             </div>

             <div class="p-3 bg-dark text-center">
               <label for="male">Male</label>
               <input id="male" type="radio" name="gender" value="male"  checked>
               <label for="female">Female</label>
               <input id="female" type="radio" name="gender" value="female">
             </div>
             <div class="p-3 bg-dark text-center">
               <p>Hobbies:</p>
                 <input type="checkbox" name="hobbies[]" value="Cricket">Cricket
                 <input type="checkbox" name="hobbies[]" value="Book">Book
                 <input type="checkbox" name="hobbies[]" value="Guitar">Guitar
             </div>

             <div class="p-3 bg-dark">
               <select class="form-control" name="country">
                 <option value="">Select your country</option>
                 <option value="Bd">Bd</option>
                 <option value="Bd">Bd</option>
                 <option value="Bd">Bd</option>
                 <option value="Bd">Bd</option>
                 <option value="Bd">Bd</option>
                 <option value="Bd">Bd</option>
               </select>
             </div>
             <div class="p-3 bg-dark">
             <select class="form-control" name="subject[]" multiple>
               <option value="">Select your subject</option>
               <option value="Web design">Web design</option>
               <option value="Web dev">Web dev</option>
               <option value="Seo">Seo</option>
               <option value="graphic">graphic</option>
             </select>
           </div>

            <div class="p-3 bg-dark">
              <input class="form-control" type="date" name="dob" placeholder="Enter dob">
            </div>

            <div class="p-3 bg-dark">
             <textarea name="message" class="form-control" placeholder="Enter message"></textarea>
            </div>

                <div class="p-3 bg-dark text-center">
             <button class="btn btn-primary" type="submit" name="button">Submit</button>
                <div class="<?= (!empty($_GET['success'])? "alert alert-success py-3" : "")?>">
                   <?php
                     if(!empty($_GET['success'])){
                       echo $_GET['success'];
                     }
                    ?>
                </div>
           </div>
          </form>
         </div>

       </div>
     </div>





  <?php
  require 'footer.php';
   ?>
