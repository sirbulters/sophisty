<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Which style fits you?</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>


</head>

<body>

	<div id="page-wrap">

		<h1 class="transparent index-headline">What style fits You?</h1>
		
		<form action="grade.php" method="post" id="quiz">
		
		<?php
		/**
	         * Each <li> holds a question. Follow the same pattern if you want to add more questions.
	         * If you add more questions, be sure to add more $answer variables in grade.php 
	         * (See lines 26-30 in grade.php).
	         * The important values here: name value on the rasio buttons for each answer, .fwrd class on labels.
	         * You need the name value to store answers for grading.
	         * the frwd class controls question advancement through jQuery.
	         */
            ?>    
            <ul id="test-questions">

<!--                vraag1-->
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Hotelsleutel</h3>
                    
                    <div class="mtm">
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A" class="fwrd labela">modern<!--<img src="imgs/modern.jpg" alt="modern">--></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B" class="fwrd labelb">vintage<!--<img src="imgs/vintage.jpg" alt="vintage">--></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C" class="fwrd labelc">classic<!--<img src="imgs/classic.jpg" alt="classic">--></label>
                    </div>


                    <p class="quiz-progress">1 of 7</p>
                </li>

<!--                vraag2-->
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Lobby</h3>
                    
                    <div class="mtm">
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A" class="fwrd labela">modern<!--<img src="imgs/modern.jpg" alt="modern">--></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B" class="fwrd labelb">vintage<!--<img src="imgs/vintage.jpg" alt="vintage">--></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C" class="fwrd labelc">classic<!--<img src="imgs/classic.jpg" alt="classic">--></label>
                    </div>

                    <p class="quiz-progress">2 of 7</p>
                </li>

<!--                vraag 3-->
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Bedroom</h3>
                    
                    <div class="mtm">
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A" class="fwrd labela">modern<!--<img src="imgs/modern.jpg" alt="modern">--></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B" class="fwrd labelb">vintage<!--<img src="imgs/vintage.jpg" alt="vintage">--></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C" class="fwrd labelc">classic<!--<img src="imgs/classic.jpg" alt="classic">--></label>
                    </div>
                    

                    <p class="quiz-progress">3 of 7</p>
                </li>

<!--                vraag4-->
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Bathroom</h3>
                    
                    <div class="mtm">
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A" class="fwrd labela">modern<!--<img src="imgs/modern.jpg" alt="modern">--></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B" class="fwrd labelb">vintage<!--<img src="imgs/vintage.jpg" alt="vintage">--></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C" class="fwrd labelc">classic<!--<img src="imgs/classic.jpg" alt="classic">--></label>
                    </div>
                    

                    <p class="quiz-progress">4 of 7</p>
                </li>

<!--                vraag 5-->
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Breakfast</h3>
                    
                    <div class="mtm">
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A" class="fwrd labela">modern<!--<img src="imgs/modern.jpg" alt="modern">--></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B" class="fwrd labelb">vintage<!--<img src="imgs/vintage.jpg" alt="vintage">--></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C" class="fwrd labelc">classic<!--<img src="imgs/classic.jpg" alt="classic">--></label>
                    </div>
                    

                    <p class="quiz-progress">5 of 7</p>
                </li>

<!--                vraag 6-->
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Bar</h3>

                    <div class="mtm">
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A" class="fwrd labela">modern<!--<img src="imgs/modern.jpg" alt="modern">--></label>
                    </div>

                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B" class="fwrd labelb">vintage<!--<img src="imgs/vintage.jpg" alt="vintage">--></label>
                    </div>

                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C" class="fwrd labelc">classic<!--<img src="imgs/classic.jpg" alt="classic">--></label>
                    </div>

                    <p class="quiz-progress">6 of 7</p>
                </li>

<!--                vraag 7-->
                <li>
                    <div class="quiz-overlay"></div>
                    <h3>Reception</h3>

                    <div class="mtm">
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                        <label for="question-7-answers-A" class="fwrd labela">modern<!--<img src="imgs/modern.jpg" alt="modern">--></label>
                    </div>

                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B" class="fwrd labelb">vintage<!--<img src="imgs/vintage.jpg" alt="vintage">--></label>
                    </div>

                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                        <label for="question-7-answers-C" class="fwrd labelc">classic<!--<img src="imgs/classic.jpg" alt="classic">--></label>
                    </div>

                    <p class="quiz-progress">7 of 7</p>
                </li>

                <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="anticipate">Now it&#8217;s time to see your results...</h3>
                    <input type="submit" value="Show my Style" id="submit-quiz" />
                </li>
            </ul>
		
		</form>
    </div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
	<?php
	/**
         * This quiz uses jQuery to move the questions up each time you click an answer.
         * You can change the layout of the quiz, but you may need to adjust the $mt variable.
         * The $mt variable is the margin-top of the quiz.
         * This gives the illusion of each question being on a separate page.
         * It is actually one page, just this element moves.
         * Quiz-takers need to get to the end and hit the Submt button to see results.
         * The answers get stored and sent to grade.php for evaluation.
         * 
         */
        ?>
    <script>
           (function($) {
              var timeout= null;
              var $mt = 0;
              $("#quiz .fwrd").click(function(){
                clearTimeout(timeout);
                timeout = setTimeout(function(){ 
                    $mt = $mt - 430;
//                    430
                    $("#test-questions").css("margin-top", $mt); 
                }, 333);
              });
           }(jQuery))
    </script>
<!--<script>-->
<!--  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){-->
<!--  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),-->
<!--  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)-->
<!--  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');-->
<!---->
<!--  ga('create', 'UA-00000000-1', 'auto');-->
<!--  ga('send', 'pageview');-->
<!--</script>-->
</body>
</html>
