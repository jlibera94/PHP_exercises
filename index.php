<!DOCTYPE html>
<html>
<head>
   <title>Presentation</title>
   <link rel="stylesheet" type="text/css" href="styles.css"  >
</head>
<body>
<?php include 'header.php';?>
 <forms name="myForm" action="/action_page_post.php"
onsubmit="return validateForm()" method="post">
              <fieldset id="main-contain"> 
                    
                  
                    
                <fieldset id="contain1">
                    <legend><h2>Renter's Information</h2></legend>
                    <label>How many people live in your apartment?</label>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>                 
                    <br><br>
                    
                    <label>Smoker?</label>
                    <input type="radio" name="smoke">Yes
                    <input type="radio" name="smoke">No
                    <br><br>
                    
                    <label>Any pets?</label><br>
                    <input type="checkbox">Cat(s)
                    <br>
                    <input type="checkbox">Dog(s)
                    <br>
                    <input type="checkbox">Other Specify:
                    <input type="text">
                    <br>
                    <input type="checkbox">No Pets<br>
                </fieldset>
                
                <fieldset id="contain2">
                    <legend><h2>What are you looking for?</h2></legend>
                    
                    <label id="size">Size of apartment:</label><br>
                    <input type="checkbox" value="option1">Studio
                    <input type="checkbox" value="option2">3&frac12;
                    <input type="checkbox" value="option3">4&frac12;
                    <input type="checkbox" id="option4">5&frac12;
                    <input type="checkbox" id="option5">More than 5&frac12;<br><br>
                    
                    <label id="location">Do you have a preferred location?</label><br>
                    <input type="checkbox" value="location1">West Island
                    <input type="checkbox" id="location2">Downtown
                    <input type="checkbox" value="location3">Lower Westmount
                    <input type="checkbox" value="location4">NDG
                    <input type="checkbox" value="location5">East end of Island
                    <input type="checkbox" value="location6">Don't care
                    <br><br>
                    
                    <label>Price range</label><br>
                    <select id="selection">
                        <option></option>
                         <option>less than $500</option>
                        <option>$500-600</option>
                        <option>$600-700</option>
                        <option>$700-800</option>
                        <option>+$800</option>
                    </select> <br><br>
                    
                    <label>Would be nice to have</label><br>
                    <input type="checkbox">Fire place
                    <input type="checkbox">Laundromat in building
                    <input type="checkbox">Indoor Parking
                    <input type="checkbox">Output Parking
                    <input type="checkbox">Balcony
                    
                </fieldset>
                
                  
                    <fieldset id="hide" style="display:none;">
                    <legend><h2>Expert Suggestions</h2></legend>
                    <p>It is very difficult to find an apartment larger than 5&frac12 in downtown</p>
                    </fieldset>
                 
                    <fieldset id="hide2" style="display:none;">
                    <legend><h2>Expert Suggestions</h2></legend>
                    <p>Normally an apartment of 4 ½ and above costs more than 1000$ in downtown area</p>
                    </fieldset>
                
                 <h5>Let's see what we can find..</h5>
                
                <input type="submit" value="Search" onclick="validateForm()" >
                
                <input type="reset" value="Start over">
				
                  <script type="text/javascript">
                      
                 
        
            function validateForm() {
               
                var choice1 = document.getElementById("option5").checked;
                var choice2 = document.getElementById("location2").checked;
                
                if((choice1 == true) && (choice2 == true)){
                        document.getElementById('hide').style.display = 'block';    
                }else{
                    document.getElementById('hide').style.display = 'none';  
                }
                
                
                
                }
         
                 </script>
               
               
                </fieldset>
            </form>				
<?php include 'footer.php';?>
</body>
</html>