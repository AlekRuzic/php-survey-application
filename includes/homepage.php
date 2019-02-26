<?php
/* displays the home page to begin the survey.
   authors: Alek, Lillian, Lyniker, Jane, Wen */
   function homepage() { ?>
        <form method="POST">
        <h1>Welcome</h1>
        <p>The following survey is designed to help us understand our customers a little better, so we can improve the overall customer experience.</p>
        <p>Please fill in all available form fields.</p>
        <p>Thank you.</p>
        <button type="submit" name="nextButton" >Start Survey</button>
        </form>
<?php } ?>