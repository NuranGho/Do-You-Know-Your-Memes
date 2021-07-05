<?php 

$db = new PDO ("mysql:dbname=quiz;host=localhost:3307", "root", "root");
$rows1 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 135791;");
$rows2 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 135792;");
$rows3 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 135793;");
$rows4 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 135794;");
$rows5 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 135795;");
$rows6 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 135796;");
$rows7 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 135797;");
$rows8 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 135798;");
$rows9 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 135799;");
$rows10 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 1357910;");

$question1opt1 = $db->query("SELECT content FROM quiz_answers WHERE id = 246801"); 
$question1opt2 = $db->query("SELECT content FROM quiz_answers WHERE id = 246802"); 
$question1opt3 = $db->query("SELECT content FROM quiz_answers WHERE id = 246803"); 
$question1opt4 = $db->query("SELECT content FROM quiz_answers WHERE id = 246804"); 
$question2opt1 = $db->query("SELECT content FROM quiz_answers WHERE id = 246805"); 
$question2opt2 = $db->query("SELECT content FROM quiz_answers WHERE id = 246806"); 
$question2opt3 = $db->query("SELECT content FROM quiz_answers WHERE id = 246807"); 
$question2opt4 = $db->query("SELECT content FROM quiz_answers WHERE id = 246808"); 
$question3opt1 = $db->query("SELECT content FROM quiz_answers WHERE id = 246809"); 
$question3opt2 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468010"); 
$question3opt3 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468011"); 
$question3opt4 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468012"); 
$question4opt1 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468013"); 
$question4opt2 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468014"); 
$question4opt3 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468015"); 
$question4opt4 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468016"); 
$question5opt1 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468017"); 
$question5opt2 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468018"); 
$question5opt3 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468019"); 
$question5opt4 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468020"); 
$question6opt1 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468021"); 
$question6opt2 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468022"); 
$question6opt3 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468023"); 
$question6opt4 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468024"); 
$question7opt1 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468025"); 
$question7opt2 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468026"); 
$question7opt3 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468027"); 
$question7opt4 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468028"); 
$question8opt1 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468029"); 
$question8opt2 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468030"); 
$question8opt3 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468031"); 
$question8opt4 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468032"); 
$question9opt1 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468033"); 
$question9opt2 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468034"); 
$question9opt3 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468035"); 
$question9opt4 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468036"); 
$question10opt1 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468037"); 
$question10opt2 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468038"); 
$question10opt3 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468039"); 
$question10opt4 = $db->query("SELECT content FROM quiz_answers WHERE id = 2468040"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Final Project Quiz Page</title>
    <link rel="stylesheet" type="text/css" href="quiz.css" />
</head>

<body>

    <h1>Do You Know Your Memes? </h1>
    <img src="https://media.tenor.com/images/d55a83e9abb508b54415a8672e0da24c/tenor.gif" alt="Head Bopping Cat" class="headericon">
    <img src="https://media.tenor.com/images/d55a83e9abb508b54415a8672e0da24c/tenor.gif" alt="Head Bopping Cat" class="headericon2"> 
    <h2>By: Nawshin Rahman, Destiny Stribling, Nuran Ghoneim </h2>

    <hr />
    <p class = "instructions"> Instructions: Welcome to "Do You Know Your Memes" Quiz! This quiz consists of 10 questions with 4 options. Out of the 4 choices,
    only one of them is the correct answer. Choose wisely. Have fun!
    </p>
    

    
    <form action="results.php" method="post" id="quiz">

    <div class="questions">
        <ol>
        <?php
        foreach($rows1 as $r1){
            ?>
            
            <li> Complete the meme: <?=$r1["content"]?> <img src="whatarethose.gif" alt="What Are Those" class="whatarethose"> </li>
                <?php 
                foreach($question1opt2 as $opt2){
                ?>
                <div>
                     <input type = "radio" name = "q1-answers" id="q1-answers-A" value="A"/>
                     <label for="q1-answers-A"><?=$opt2["content"]?></label> 
                </div>        
            <?php
                }
                foreach($question1opt1 as $opt1){
                    ?>
                    <div>
                        <input type = "radio" name = "q1-answers" id="q1-answers-B" value="B"/>
                        <label for="q1-answers-B"><?=$opt1["content"]?></label> 
                    </div>   
                 <?php
             }
             foreach($question1opt3 as $opt3){
                ?>
                <div>
                    <input type = "radio" name = "q1-answers" id="q1-answers-C" value="C"/>
                    <label for="q1-answers-C"><?=$opt3["content"]?></label> 
                </div>   
             <?php
             }
             foreach($question1opt4 as $opt4){
                ?>
                <div>
                    <input type = "radio" name = "q1-answers" id="q1-answers-D" value="D"/>
                    <label for="q1-answers-D"><?=$opt4["content"]?></label> 
                </div>  
                <p></p> 
             <?php
            }
            foreach($rows2 as $r2){
                ?>
                    <li>Complete the meme: <?=$r2["content"]?> <img src="keepcalm.png" alt="Keep Calm" class="keepcalm"> </li>   
                    <?php 
                    foreach($question2opt1 as $opt1){
                    ?>
                    <div>
                         <input type = "radio" name = "q2-answers" id="q2-answers-A" value="A"/>
                         <label for="q2-answers-A"><?=$opt1["content"]?></label> 
                    </div>        
                <?php
                    }
                    foreach($question2opt2 as $opt2){
                        ?>
                        <div>
                            <input type = "radio" name = "q2-answers" id="q2-answers-B" value="B"/>
                            <label for="q2-answers-B"><?=$opt2["content"]?></label> 
                        </div>   
                     <?php
                 }
                 foreach($question2opt3 as $opt3){
                    ?>
                    <div>
                        <input type = "radio" name = "q2-answers" id="q2-answers-C" value="C"/>
                        <label for="q2-answers-C"><?=$opt3["content"]?></label> 
                    </div>   
                 <?php
                 }
                 foreach($question2opt4 as $opt4){
                    ?>
                    <div>
                        <input type = "radio" name = "q2-answers" id="q2-answers-D" value="D"/>
                        <label for="q2-answers-D"><?=$opt4["content"]?></label> 
                    </div>
                    <p></p>   
                 <?php
                } 
              }
              foreach($rows3 as $r3){
                ?>
                    <li> Complete the meme: <?=$r3["content"]?> <img src="kimKearrings.gif" alt="earrings" class="earrings"> </li>   
                    <?php 
                    foreach($question3opt1 as $opt1){
                    ?>
                    <div>
                         <input type = "radio" name = "q3-answers" id="q3-answers-A" value="A"/>
                         <label for="q3-answers-A"><?=$opt1["content"]?></label> 
                    </div>        
                <?php
                    }
                    foreach($question3opt2 as $opt2){
                        ?>
                        <div>
                            <input type = "radio" name = "q3-answers" id="q3-answers-B" value="B"/>
                            <label for="q3-answers-B"><?=$opt2["content"]?></label> 
                        </div>   
                     <?php
                 }
                 foreach($question3opt3 as $opt3){
                    ?>
                    <div>
                        <input type = "radio" name = "q3-answers" id="q3-answers-C" value="C"/>
                        <label for="q3-answers-C"><?=$opt3["content"]?></label> 
                    </div>   
                 <?php
                 }
                 foreach($question3opt4 as $opt4){
                    ?>
                    <div>
                        <input type = "radio" name = "q3-answers" id="q3-answers-D" value="D"/>
                        <label for="q3-answers-D"><?=$opt4["content"]?></label> 
                    </div>
                    <p></p>   
                 <?php
                } 
              }
              foreach($rows4 as $r4){
                ?>
                    <li>Complete the meme: <?=$r4["content"]?> <img src="youdidit.png" alt="you" class="you"> </li>   
                    <?php 
                    foreach($question4opt4 as $opt4){
                    ?>
                    <div>
                         <input type = "radio" name = "q4-answers" id="q4-answers-A" value="A"/>
                         <label for="q4-answers-A"><?=$opt4["content"]?></label> 
                    </div>        
                <?php
                    }
                    foreach($question4opt2 as $opt2){
                        ?>
                        <div>
                            <input type = "radio" name = "q4-answers" id="q4-answers-B" value="B"/>
                            <label for="q4-answers-B"><?=$opt2["content"]?></label> 
                        </div>   
                     <?php
                 }
                 foreach($question4opt3 as $opt3){
                    ?>
                    <div>
                        <input type = "radio" name = "q4-answers" id="q4-answers-C" value="C"/>
                        <label for="q4-answers-C"><?=$opt3["content"]?></label> 
                    </div>   
                 <?php
                 }
                 foreach($question4opt1 as $opt1){
                    ?>
                    <div>
                        <input type = "radio" name = "q4-answers" id="q4-answers-D" value="D"/>
                        <label for="q4-answers-D"><?=$opt1["content"]?></label> 
                    </div> 
                    <p></p>  
                 <?php
                } 
              }
              foreach($rows5 as $r5){
                ?>
                    <li>Complete the meme: <?=$r5["content"]?> <img src="9plus10.gif" alt="plus" class="plus"> </li>   
                    <?php 
                    foreach($question5opt1 as $opt1){
                    ?>
                    <div>
                         <input type = "radio" name = "q5-answers" id="q5-answers-A" value="A"/>
                         <label for="q5-answers-A"><?=$opt1["content"]?></label> 
                    </div>        
                <?php
                    }
                    foreach($question5opt2 as $opt2){
                        ?>
                        <div>
                            <input type = "radio" name = "q5-answers" id="q5-answers-B" value="B"/>
                            <label for="q5-answers-B"><?=$opt2["content"]?></label> 
                        </div>   
                     <?php
                 }
                 foreach($question5opt3 as $opt3){
                    ?>
                    <div>
                        <input type = "radio" name = "q5-answers" id="q5-answers-C" value="C"/>
                        <label for="q5-answers-C"><?=$opt3["content"]?></label> 
                    </div>   
                 <?php
                 }
                 foreach($question5opt4 as $opt4){
                    ?>
                    <div>
                        <input type = "radio" name = "q5-answers" id="q5-answers-D" value="D"/>
                        <label for="q5-answers-D"><?=$opt4["content"]?></label> 
                    </div>  
                    <p></p> 
                 <?php
                } 
              }
              foreach($rows6 as $r6){
                ?>
                    <li>Complete the meme: <?=$r6["content"]?> <img src="garbage.png" alt="garbage" class="garbage"> </li>   
                    <?php 
                    foreach($question6opt1 as $opt1){
                    ?>
                    <div>
                         <input type = "radio" name = "q6-answers" id="q6-answers-A" value="A"/>
                         <label for="q6-answers-A"><?=$opt1["content"]?></label> 
                    </div>        
                <?php
                    }
                    foreach($question6opt4 as $opt4){
                        ?>
                        <div>
                            <input type = "radio" name = "q6-answers" id="q6-answers-B" value="B"/>
                            <label for="q6-answers-B"><?=$opt4["content"]?></label> 
                        </div>   
                     <?php
                 }
                 foreach($question6opt3 as $opt3){
                    ?>
                    <div>
                        <input type = "radio" name = "q6-answers" id="q6-answers-C" value="C"/>
                        <label for="q6-answers-C"><?=$opt3["content"]?></label> 
                    </div>   
                 <?php
                 }
                 foreach($question6opt2 as $opt2){
                    ?>
                    <div>
                        <input type = "radio" name = "q6-answers" id="q6-answers-D" value="D"/>
                        <label for="q6-answers-D"><?=$opt2["content"]?></label> 
                    </div> 
                    <p></p>  
                 <?php
                } 
              }
              foreach($rows7 as $r7){
                ?>
                    <li>Complete the meme: <?=$r7["content"]?> <img src="friends.png" alt="friends" class="friends"> </li>   
                    <?php 
                    foreach($question7opt1 as $opt1){
                    ?>
                    <div>
                         <input type = "radio" name = "q7-answers" id="q7-answers-A" value="A"/>
                         <label for="q7-answers-A"><?=$opt1["content"]?></label> 
                    </div>        
                <?php
                    }
                    foreach($question7opt2 as $opt2){
                        ?>
                        <div>
                            <input type = "radio" name = "q7-answers" id="q7-answers-B" value="B"/>
                            <label for="q7-answers-B"><?=$opt2["content"]?></label> 
                        </div>   
                     <?php
                 }
                 foreach($question7opt3 as $opt3){
                    ?>
                    <div>
                        <input type = "radio" name = "q7-answers" id="q7-answers-C" value="C"/>
                        <label for="q7-answers-C"><?=$opt3["content"]?></label> 
                    </div>   
                 <?php
                 }
                 foreach($question7opt4 as $opt4){
                    ?>
                    <div>
                        <input type = "radio" name = "q7-answers" id="q7-answers-D" value="D"/>
                        <label for="q7-answers-D"><?=$opt4["content"]?></label> 
                    </div> 
                    <p></p>  
                 <?php
                } 
              }
              foreach($rows8 as $r8){
                ?>
                    <li>Complete the meme: <?=$r8["content"]?> <img src="attacked.gif" alt="attacked" class="attacked"> </li>   
                    <?php 
                    foreach($question8opt1 as $opt1){
                    ?>
                    <div>
                         <input type = "radio" name = "q8-answers" id="q8-answers-A" value="A"/>
                         <label for="q8-answers-A"><?=$opt1["content"]?></label> 
                    </div>        
                <?php
                    }
                    foreach($question8opt2 as $opt2){
                        ?>
                        <div>
                            <input type = "radio" name = "q8-answers" id="q8-answers-B" value="B"/>
                            <label for="q8-answers-B"><?=$opt2["content"]?></label> 
                        </div>   
                     <?php
                 }
                 foreach($question8opt3 as $opt3){
                    ?>
                    <div>
                        <input type = "radio" name = "q8-answers" id="q8-answers-C" value="C"/>
                        <label for="q8-answers-C"><?=$opt3["content"]?></label> 
                    </div>   
                 <?php
                 }
                 foreach($question8opt4 as $opt4){
                    ?>
                    <div>
                        <input type = "radio" name = "q8-answers" id="q8-answers-D" value="D"/>
                        <label for="q8-answers-D"><?=$opt4["content"]?></label> 
                    </div>  
                    <p></p> 
                 <?php
                } 
              }
              foreach($rows9 as $r9){
                ?>
                    <li>Complete the meme: <?=$r9["content"]?> <img src="chickens.jpg" alt="chickens" class="chickens"> </li>   
                    <?php 
                    foreach($question9opt1 as $opt1){
                    ?>
                    <div>
                         <input type = "radio" name = "q9-answers" id="q9-answers-A" value="A"/>
                         <label for="q9-answers-A"><?=$opt1["content"]?></label> 
                    </div>        
                <?php
                    }
                    foreach($question9opt3 as $opt3){
                        ?>
                        <div>
                            <input type = "radio" name = "q9-answers" id="q9-answers-B" value="B"/>
                            <label for="q9-answers-B"><?=$opt3["content"]?></label> 
                        </div>   
                     <?php
                 }
                 foreach($question9opt2 as $opt2){
                    ?>
                    <div>
                        <input type = "radio" name = "q9-answers" id="q9-answers-C" value="C"/>
                        <label for="q9-answers-C"><?=$opt2["content"]?></label> 
                    </div>   
                 <?php
                 }
                 foreach($question9opt4 as $opt4){
                    ?>
                    <div>
                        <input type = "radio" name = "q9-answers" id="q9-answers-D" value="D"/>
                        <label for="q9-answers-D"><?=$opt4["content"]?></label> 
                    </div> 
                    <p></p>  
                 <?php
                } 
              }
              foreach($rows10 as $r10){
                ?>
                    <li>Complete the meme: <?=$r10["content"]?> <img src="will.gif" alt="will" class="will"> </li>   
                    <?php 
                    foreach($question10opt1 as $opt1){
                    ?>
                    <div>
                         <input type = "radio" name = "q10-answers" id="q10-answers-A" value="A"/>
                         <label for="q10-answers-A"><?=$opt1["content"]?></label> 
                    </div>        
                <?php
                    }
                    foreach($question10opt2 as $opt2){
                        ?>
                        <div>
                            <input type = "radio" name = "q10-answers" id="q10-answers-B" value="B"/>
                            <label for="q10-answers-B"><?=$opt2["content"]?></label> 
                        </div>   
                     <?php
                 }
                 foreach($question10opt3 as $opt3){
                    ?>
                    <div>
                        <input type = "radio" name = "q10-answers" id="q10-answers-C" value="C"/>
                        <label for="q10-answers-C"><?=$opt3["content"]?></label> 
                    </div>   
                 <?php
                 }
                 foreach($question10opt4 as $opt4){
                    ?>
                    <div>
                        <input type = "radio" name = "q10-answers" id="q10-answers-D" value="D"/>
                        <label for="q10-answers-D"><?=$opt4["content"]?></label> 
                    </div> 
                 <?php
                } 
              }
                
          }
          
        ?>
        </ol>
        
    </div>
    <input type = "submit" name = "submit" value="Submit Your Answers" class = "submitbutton"/>
    </form>

    <p>
    <a href="http://validator.w3.org/check/referer">
        <img src="https://www.w3.org/Icons/valid-xhtml11" 
        alt="W3C HTML1.1" />
    </a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img src="http://jigsaw.w3.org/css-validator/images/vcss"
        alt="W3C CSS" />
    </a>
    </p>
        </form>
    
</body>
</html>

