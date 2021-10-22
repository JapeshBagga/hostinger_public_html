
<div class="row" id="container">
    <div class="col-md-12" id="mainsection">
        <h3 class="card-title">Round</h>
        <form class="forms-sample">
            <div class="form-group">
            <input name[]="first" id="ques" type="text" class="form-control tDes"
                placeholder="Title (eg. Resume screening, Group Discussion)">
            </div>
            <div class="form-group">
            <h6>Option's</h6>
                <input name[]="Option1" id="one" type="text" class="form-control tDes" placeholder="Option 1">
                <input name[]="Option2" id="two" type="text" class="form-control tDes" placeholder="Option 2">
                <input name[]="Option3" id="three" type="text" class="form-control tDes" placeholder="Option 3">
                <input name[]="Option4" id="four" type="text" class="form-control tDes" placeholder="Option 4">
            </div>
            <button id="add" type="button" class="btn btn-success mr-2">Add Question</button>
        </form>
    </div>
</div>

    
    <script>
    document.getElementById("add").onclick = function () {
            var container = document.getElementById("container");
            var section = document.getElementById("mainsection");
            var characters = "ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
            var characters0 = "ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
            var characters1 = "ABCDsdfEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
            var characters2 = "ABCDEsfsdfsfFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
            var characters3 = "ABCDEsfsdfsfFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxfghfghyz";
            //specify the length for the new string  
            var lenString = 4;
            var lenString0 = 5;
            var lenString1 = 6;
            var lenString2 = 7;
            var lenString3 = 8;
            var randomstring = '';
            var randomstring0 = '';
            var randomstring1 = '';
            var randomstring2 = ''; 
            var randomstring3 = '';
            

            //loop to select a new character in each iteration  
            for (var i = 0; i < lenString; i++) {
                var rnum = Math.floor(Math.random() * characters.length);
                randomstring += characters.substring(rnum, rnum + 1);
            }
             //loop to select a new character in each iteration  
             for (var i = 0; i < lenString0; i++) {
                var rnum0 = Math.floor(Math.random() * characters0.length);
                randomstring0 += characters0.substring(rnum, rnum + 1);
            }
             //loop to select a new character in each iteration  
             for (var i = 0; i < lenString1; i++) {
                var rnum1 = Math.floor(Math.random() * characters1.length);
                randomstring1 += characters1.substring(rnum, rnum + 1);
            }

            for (var i = 0; i < lenString2; i++) {
                var rnum2 = Math.floor(Math.random() * characters2.length);
                randomstring2 += characters2.substring(rnum1, rnum1 + 1);
            }
            for (var i = 0; i < lenString3; i++) {
                var rnum3 = Math.floor(Math.random() * characters3.length);
                randomstring3 += characters3.substring(rnum1, rnum1 + 1);
            }

            var newQues = document.getElementById("ques");
            var newOne = document.getElementById("one");
            var newTwo = document.getElementById("two");
            var newThree = document.getElementById("three");
            var newFour = document.getElementById("four");

            newQues.setAttribute("name", randomstring);
            newOne.setAttribute("name", randomstring1);
            newTwo.setAttribute("name", randomstring2);
            newThree.setAttribute("name", randomstring3);
            newFour.setAttribute("name", randomstring0);

            console.log(newOne.name);
            console.log(newTwo.name);
            container.append(section.cloneNode(true));
        }
    </script>


</body>

</html>
