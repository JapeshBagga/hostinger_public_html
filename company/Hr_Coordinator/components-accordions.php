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
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <!-- <div class="page-title-icon">
                                    <i class="pe-7s-diamond icon-gradient bg-warm-flame">
                                    </i>
                                </div> -->
                                <div>
                                    <h3>Hiring Process</h3>
                                </div>

                            </div>

                        </div>
                    </div>
                    <!--page content-->
                    <div class="row" id="container">
                        <div class="col-md-12">

                            <div class="stud_head1">

                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Hire for</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected hidden>Choose...</option>
                                            <option value="1">Internship1</option>
                                            <option value="2">Internship2</option>
                                            <option value="3">Job1</option>
                                            <option value="4">Job2</option>

                                        </select>
                                    </div>

                                </div>

                            </div>
                        </div>
                        </div>
                        <div class="row">
                        
                        <div class="col-md-12" id="mainsection">
                            <div class="main-card mb-3 card" >
                                <div class="card-body">
                                    <h3 class="card-title">Round</h>
                                    <form class="forms-sample">
                                        <div class="form-group">
                                          <input name[]="first" id="one" type="text" class="form-control tDes"
                                            placeholder="Title (eg. Resume screening, Group Discussion)">
                                        </div>
                                        <div class="form-group">
                                           <h6>Process Details</h6>
                                          <textarea name[]="second" id="twoNew" class="form-control" rows="5"></textarea>
                                        </div>
                                        <button id="newsectionbtn" type="button" class="btn btn-success mr-2">Add another round</button>
                                      </form>
                                </div>
                            </div>
                        </div>
                        </div>

                    



                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <p>All rights Reversed</p>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
    <script>
    document.getElementById("newsectionbtn").onclick = function () {
            var container = document.getElementById("container");
            var section = document.getElementById("mainsection");
            var characters = "ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
            var characters1 = "ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";

            //specify the length for the new string  
            var lenString = 7;
            var randomstring = '';
            var lenString1 = 8;
            var randomstring1 = '';
            //loop to select a new character in each iteration  
            for (var i = 0; i < lenString; i++) {
                var rnum = Math.floor(Math.random() * characters.length);
                randomstring += characters.substring(rnum, rnum + 1);
            }

            for (var i = 0; i < lenString1; i++) {
                var rnum1 = Math.floor(Math.random() * characters1.length);
                randomstring1 += characters1.substring(rnum1, rnum1 + 1);
            }

            var newOne = document.getElementById("one");
            var newTwo = document.getElementById("twoNew");
            newOne.setAttribute("name", randomstring);
            newTwo.setAttribute("name", randomstring1);
            console.log(newOne.name);
            console.log(newTwo.name);
            container.append(section.cloneNode(true));
        }
    </script>
</body>

</html>
