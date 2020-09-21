<!DOCTYPE html>
<html>

<body bgcolor="lightblue" text="black" >
    <?php
    /* php has three types of variables 
    php variables are case sensitive ($age & $AGE are two different variables)
    global static and local*/
    //global: a vaiable declared outside the function has a GLOBAL SCOPE and only can be accessed outside the function:
    $x =20;

    $a=20;
    $b=30;
    function test()
    {
        echo "v r in function and cant access variable here : $x <br>" ;

        }
        test();
        echo"v r out of function and can access variable here : $x <br>";
     // to use global variable from within the function we have to use 'global' keyword before variables inside the function 
      
    function test1()
    {
    global $a,$b;
   // $b=$a+$b;
    echo "$b<br>";

    }
    test1();
      /* global variables also stores in an array called $GLOBALS[index] .the index holds the name of variables and this array
       also accessible from within functions and can be used to update global variables directly. */
       function test2()
       {
           $GLOBALS['b']=$GLOBALS['a']+$GLOBALS['b'];

       }
       test2();
       echo "$b<br>";
       /* a variable declared within a function has a local scope and can only be accessed within that function 
       you can have local variables with the same name in different functions,because local variables are 
       only recognized by the function in which they are declared*/
       echo"*********this is an example of local variable*********<br>";
       function testlocal()
       {
           $y=5;
           echo"<p>variable y inside the function is :$y</p>";
       }
       testlocal();
       echo"<p>variable y outside the function is :$y</p>";

       /*when a function is completed/executed ,all of its variables are deleted .however ,sometimes we want a local variable not to be deleted 
       we need it for further job .to do this we use 'static' keyword when you first declare the variable.then each time the function is called 
       that variable will still have the information it contained from the last time the function was called.
       note:the variable is still local to the function.*/
       function myTest(){
        static $x=0;
        echo $x;
        $x++;
        }
        echo"**********this is an example of static variable**********<br>";
        myTest();
        echo"<br>";
        myTest();
        echo"<br>";
        myTest();
        echo"<br>";
?>
</body>
</html>