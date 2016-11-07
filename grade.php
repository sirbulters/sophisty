<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Which style fits you? Quiz Results</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
</head>

<body>

	<div id="page-wrap">

		<h1 class="transparent index-headline" >Which style fits you</h1>
		
        <?php
        
           /**
            * Make a new variable for each question, so we can grab the answers from them.
            * If you have more than five questions, add answer variables as appropriate.
            */
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question--answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            /**
            * Now, make outcome variables, and set those values to zero.
            * These variables represent our four outcome screens.
            * Whatever outcome variable has the most points at the end, "wins".
            */

            $totalA = 0;
            $totalB = 0;
            $totalC = 0;

            
            /**
            * For each question, look at the answers, and add points to the outcome variables as indicated.
            * You may ask, "Why aren't we giving one point to A, one point to B, etc?".
            * Good question. It has to do with tie breakers.
            * In a five question test, what if someone "votes" twice each for A and B, and once for C?
            * How do you determine what wins between A and B in that scenario?
            * There has to be at least one unevenly weighted question to break ties, but you can have more than one.
            * For this quiz, I also wanted to add give points to different outcomes for certain answers.
            * 
            */

            if ($answer1 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .06; }
            if ($answer1 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .05; }
            if ($answer1 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; }

            if ($answer2 == "A") { $totalA = $totalA + 1.23; }
            if ($answer2 == "B") { $totalB = $totalB + 1.15; }
            if ($answer2 == "C") { $totalC = $totalC + 1.13; }

            if ($answer3 == "A") { $totalA = $totalA + 1.17; $totalC = $totalC + .05; }
            if ($answer3 == "B") { $totalB = $totalB + 1.15; $totalC = $totalC + .03; }
            if ($answer3 == "C") { $totalC = $totalC + 1.13; $totalB = $totalB + .07; }

            if ($answer4 == "A") { $totalA = $totalA + 1.17; }
            if ($answer4 == "B") { $totalB = $totalB + 1.15; }
            if ($answer4 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; $totalB = $totalB + .06; $totalD = $totalD + .07; }

            if ($answer5 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .08; }
            if ($answer5 == "B") { $totalB = $totalB + 1.15; }
            if ($answer5 == "C") { $totalC = $totalC + 1.14; $totalA = $totalA + .06; $totalD = $totalD + .08; }
//
            if ($answer6 == "A") { $totalA = $totalA + 1.17; }
            if ($answer6 == "B") { $totalB = $totalB + 1.15; }
            if ($answer6 == "C") { $totalC = $totalC + 1.13; $totalA = $totalA + .05; $totalB = $totalB + .06; $totalD = $totalD + .07; }

            if ($answer7 == "A") { $totalA = $totalA + 1.17; $totalD = $totalD + .08; }
            if ($answer7 == "B") { $totalB = $totalB + 1.15; }
            if ($answer7 == "C") { $totalC = $totalC + 1.14; $totalA = $totalA + .06; $totalD = $totalD + .08; }
            ?>

            <div class="results-overlay">
            	
            <?php 
            /**
             * Now we compare our outcome variables.
             * I used AND (&&) in the if statements. You can also use OR (||).
             */ 
            ?>

            <?php
            if ($totalA > $totalB && $totalA > $totalC && $totalA > $totalD) {
                  echo '<div class="quiz-overlay result modern"></div><div class="results-text"><p class="you-chose">You Scored:</p><!--<img src="" alt="modern" class="results-img" />--><div class="results test-results2"><p class="score">modern</p><p class="score-details"></p><a id="replay" class="take-quiz-btn" href="/bewijzenmap/year3/quiztest/index.php">Do Again?</a></div>';
            }
            elseif ($totalB > $totalA && $totalB > $totalC && $totalB > $totalD) {
                  echo '<div class="quiz-overlay result vintage"></div><div class="results-text"><p class="you-chose">You Scored:</p><!--<img src="" alt="vintage" class="results-img" />--><div class="results test-results2"><p class="score">vintage</p><p class="score-details"></p><a id="replay" class="take-quiz-btn" href="/bewijzenmap/year3/quiztest/index.php">Do Again?</a></div>';
            }
            elseif ($totalC > $totalA && $totalC > $totalB && $totalC > $totalD) {
                  echo '<div class="quiz-overlay result classic"></div><div class="results-text"><p class="you-chose">You Scored:</p><!--<img src="" alt="classic" class="results-img" />--><div class="results test-results2"><p class="score">classic</p><p class="score-details"><p></p><a id="replay" class="take-quiz-btn" href="/bewijzenmap/year3/quiztest/index.php">Do Again</a></div>';
            }
            
        ?>     
                </div>
            </div>
            
           <?php 
           /**
            * Modal window, in case people wan to share your quiz.
            * Virality!!!
            */
           ?>

  
  <script type="text/javascript">
      function modalshow(){

        modalbg = document.getElementById("modalbg");
        modalbg.style.display = "block";
        modalwindow = document.getElementById("modalwindow");
        modalwindow.style.display = "block";
      }
      function modalhide(){
        document.getElementById("modalbg").style.display = "none";
        document.getElementById("modalwindow").style.display = "none";
      }
  </script>
<!--	<script>-->
<!--  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){-->
<!--  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),-->
<!--  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)-->
<!--  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');-->
<!---->
<!--  ga('create', 'UA-000000000-1', 'auto');-->
<!--  ga('send', 'pageview');-->
<!--</script>-->
</body>
</html>
