<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">

   <title>NubeEra (Python)</title>
   <link rel="stylesheet" href="../../lib/bootstrap-grid.processed.css">
   <link rel="icon" type="image/png" href="../../img/logo.ico">
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
   <link rel='stylesheet' href='http://www.microsoft.com/surface/assets/css/fonts/all/fonts.css'>

   <link rel="stylesheet" href="../../styles/style.interviewQnA.css">
   <link rel="stylesheet" href="../../js/searchbox/searchbox.css">

   <script src="../../js/searchbox/searchbox.js"></script>
   <!--START: for Panel-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <!--END:  for Panel-->

   <!--START: Collapsable-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <!--END: Collapsable-->

   <link rel="stylesheet" href="../../styles/style.processed.css">
   <link rel="stylesheet" href="../../styles/style.footer.css">
   <link rel="stylesheet" href="../../styles/style.nav1.css">
   <link rel="stylesheet" href="../../styles/style.progress.css">
   <link rel="stylesheet" href="../../lib/blog-vendor/bootstrap/css/bootstrap.min.css">

   <style media="screen">
      body {
         padding-top: 56px;
      }

      .size {
         height: 55px;
         width: 55px;
      }

      .size1 {
         height: 300px;
         width: 100%;
      }

      .blockquote1 {
         background-color: #f0f0f0;
      }

      .pad-1 {
         padding-left: 20%;
         padding-right: 20%;
      }
   </style>

   <style>
      table, th, td  {
         border: 1px solid black;
         border-collapse: collapse;
      }

      th,td  {
         padding: 10px;
      }
   </style>

</head>
<body oncopy="return false" oncut="return false" onpaste="return false">
  <!--<div id="preloader"><?php require '../../templates/preloader.php'; ?></div>-->
   <main class="site-content">

      <!-- ===============================NAVIGATION BAR=========================================== -->
      <?php require '../../templates/folder_navbar.php'; ?>
      <!-- ================================DISPLAY=============================================== -->


      <section>

         <div class="container">

            <!-- Post Content Column -->
            <div class="col-lg-12">

               <!-- Title -->
               <h1 class="mt-4">Python Interview QnA</h1>

               <!-- Author -->
               <center>
                  <h6>
                     by
                     <a href="#">Mujahed</a>
                     Posted on <?php 
                     $timezone =date('d-M-Y'); 
                     echo $timezone
                     ?>
                  </h6>
               </center>
               <!-- Date/Time -->
               <!-- <p>Posted on April Day, year at 00:00 AM</p> -->

               <hr>

               <!-- Preview Image -->
               <!-- <img class="img-fluid rounded size1" style="max-width:60%;" src="../../img/interviews/NGINX_1.jpg" alt=""> -->

               <input type="text" id="myInput" onkeyup="searchTopicsInQuestionNAnswers()"
                  placeholder="Enter Topic..." />

               <!--Start of UL Contents -->
               <ul id="myUL">


                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong> 1) What is the difference between list and tuples in Python?</strong> </div>
                           <div class="panel-body">
                              The differences between the two are listed down in the table below.
                              <table>
                                 <tr>
                                    <th style= "background-color:powderblue; width:50%; text-align:Center;">List</th>
                                    <th style="background-color:powderblue; width:50%; text-align:Center;">Tuple</th>
                                 </tr>

                                 <tr>
                                    <td style="width:50%";>Lists are mutable i.e they can be edited</td>
                                    <td style="width:50%";>Tuples are immutable (tuples are lists which can’t be edited)</td>

                                 <tr>
                                    <td style="width:50%";>Lists are slower than tuples.</td>
                                    <td style="width:50%";>Tuples are faster than list.</td>


                                 <tr>
                                    <td style="width:50%";>Syntax: list_1 = [10, ‘Chelsea’, 20]</td>
                                    <td style="width:50%";>Syntax: tup_1 = (10, ‘Chelsea’ , 20)</td>
                                 </tr>

                                 </tr>
                              </table>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>2) What are the features of python?</strong>
                           </div>
                           <div class="panel-body">
                              <ul>
                                 <li>
                                    Python is an <strong>interpreted</strong> language. That means that, unlike languages
                                    like C and its variants, Python does not does not need to be
                                    compiled before it is run. Other interpreted languages include PHP and Ruby.
                                 </li>
                                 <li>
                                    Python is <strong>dynamically typed,</strong> this means that you don't need to
                                    state the types of varibles when you declare them or
                                    anything like that. You can do things like x=111 and then x="I'm a starting"
                                    Without error.
                                 </li>
                                 <li>
                                    Python is well suited to <strong>object orientated programming </strong>in
                                    that it allows the definition of classes along with composition
                                    and inheritance. Python does not have access specifiers (like C++'s public,
                                    private).
                                 </li>

                                 <li>
                                    In python,<strong> functions </strong> are first-class object.</strong>
                                    This means that they can be assigned to varibles, returned from other
                                    function and passed into functions. Classes are first class objects.
                                 </li>

                                 <li>
                                    <strong> Writing python code is quick </strong> but running it is often
                                    slower than compiled languages. Fortunately, python allows the
                                    inclusion of C based extensions so bottlenecks can be optimized away and
                                    often are. The numpy. Package is a good
                                    example of this, it's really quite quick because a lot of the number
                                    crunching it does not actually done by Python.
                                 </li>

                                 <li>
                                    <strong>Python find uses in many spheres-</strong> web applications,
                                    automation, scientific modeling, big data applications and many
                                    more. It's also often used as"glue" code to get other languages and
                                    components to play nice.
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong> 3) What type of language is python? Programming or scripting?</strong>
                           </div>
                           <div class="panel-body">
                              Python is capable of scripting, but in genral sense, it is considered as a general-purpose
                              programming language. To know
                              more about scripting, you can refer to the Python Scripting Turtorial.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong> 4) Why is a Python an interpreted language?</strong>
                           </div>
                           <div class="panel-body">
                              An interpreted language is any programming language which is not in machine level code
                              before runtime. Therefore,
                              Python is an interpreted language.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>5) What is pep 8?</strong>
                           </div>
                           <div class="panel-body">
                              PEP stands for<strong> Python Enhancement Proposal.</strong> It is a set of rules that
                              specify how to format Python code for maximum
                              readabilty.
                              <ol>


                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>6) How is memory managed in python?</strong>
                           </div>
                           <div class="panel-body">
                              <ol>
                                 <li>Memory management in python is managed by <strong> Python private heap
                                       space</strong>.
                                    All python objects and data structures are
                                    located in a private heap. The programmer does not have access to this private heap.
                                    The
                                    python interpreter takes care of
                                    this instead.</li>
                                 <li>The allocation of heap space for python object is done by Python's memory manager.
                                    The core API gives access to some tools for the programmer code.</li>
                                 <li>Python also has an in-built garbage collector, which recycles all the unused
                                    memory so that it can be made available to
                                    the heap space.</li>
                              </ol>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong> 7) What is namespace in python? </strong>
                           </div>
                           <div class="panel-body">
                              A namespace is a naming system use to make sure that names are unique to avoid naming
                              conficts.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>8) What are a python modules? Name some commonly used built-in modules in
                                 python?</strong>
                           </div>
                           <div class="panel-body">
                              Python modules are files containing Python code. This code can either be functions classes
                              or variables.<br />
                              A python module is a .py file containing executable Code Some of the commonly used
                              built-in modules are:
                              <ul>
                                 <li>os</li>
                                 <li>sys</li>
                                 <li>math</li>
                                 <li>random</li>
                                 <li>data time</li>
                                 <li>JSON</li>
                              </ul>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>9) What are local variables and global variables in python?</strong>
                           </div>
                           <div class="panel-body">
                              <strong>Global Variables</strong> <br />

                              Variables declared outside a function or in global space are called global variables.
                              These
                              variables can be accessed by any
                              function in the program.<br>
                              <strong>Local Variables</strong> <br />
                              Any variable declared inside a function is known as a local variable. This variable
                              is present in the local space and not in the global space.

                              <strong>Example</strong> <br />
                              1 a=2<br />
                              2 def add():<br />
                              3 b=3<br />
                              4 c=a+b<br />
                              5 print(c)<br />
                              6 add()<br />
                              <strong>Output</strong>: 5 <br />
                              When you try to access the local variable outside the function add(),it will throw an
                              error
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>10) Is python case sensitive?</strong>
                           </div>
                           <div class="panel-body">
                              Yes, Python is a case sensitive language.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>11) What is type conversion in Python?</strong>
                           </div>
                           <div class="panel-body">
                              Type conversion refers to the conversion of one data type into another.<br />
                              <strong>int()</strong>-converts any data type into integer type<br />
                              <strong>float()-</strong> converts any data type into float type<br />
                              <strong>ord()-</strong> converts characters into integer<br />
                              <strong>hex()-</strong> converts integers to hexadecimal<br />
                              <strong>oct()-</strong> converts integer to octal<br />
                              <strong>tuple()-</strong> This function is used convert any data type to a tuple.<br />
                              <strong>set()-</strong> This function returns the type after converting to set.<br />
                              <strong>list()-</strong> This function is used to convert any data type to a list
                              type<br />
                              <strong>complex(real,imag)-</strong> This function converts real numbers to
                              complex(real,imag)number.<br />
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>12) How to install Python on Windows and set path variable?</strong>
                           </div>
                           <div class="panel-body">
                              To install Python on Windows, follow the below steps:<br />
                              <ul>
                                 <li> install Python from this link:https://www.python.Org/downloads/</li>
                                 <li> After this, install it on your PC. Look for the location where PYTHON has been
                                    installed on your PC using the following command on your command promt:cmd python.
                                 </li>
                                 <li>Then go to advance system settings and add a new variable and name it as
                                    PYTHON_NAME and paste the copied path.</li>
                                 <li>Look for the path variable, select its value and select 'edit'.</li>
                                 <li>Add a semicolon(;) towards the end of the value if it's not present and then type
                                    %PYTHON_HOME%</li>
                              </ul>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>13) Is indentation required in python?</strong>
                           </div>
                           <div class="panel-body">
                              Indentation is necessary for Python. It specifies a block of code. All code within loops,
                              classes,
                              functions, etc are specified<br /> within an indented block. It is usually done using for
                              space characters. If your code is not indented necessarily, it will not<br />
                              execute accurately and will throw errors as well.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>14) What is the difference between Python Arrays and lists?</strong>
                           </div>
                           <div class="panel-body">
                              Arrays and lists, in Python, have the same way of storing data. But, arrays can hold only
                              a single data type elements where as<br />
                              lists can hold any data type elements.<br />
                              <strong>Example:</strong><br />
                              <ol>
                                 <li>importarrays as arr</li>
                                 <li>My arrays=arr .array('i', [1,2,3,4])</li>
                                 <li>My_list=[1,'abc',1.20]</li>
                                 <li>print(My Array)</li>
                                 <li>print(My_list)</li>
                              </ol>
                              <strong>output:</strong><br />
                              array('i',[1,2,3,4]) [1,'abc',1.2]
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>15)What are functions in Python?</strong>
                           </div>
                           <div class="panel-body">
                              A function is a block of code which is executed only when it is called. To define a Python
                              function, the <strong>def</strong> keyword is used.<br />
                              <strong>Example:</strong>
                              <ol>
                                 <li>def Newfunt():</li>
                                 <li>print("Hi,Welcome to Edureka")</li>
                                 <li>Newfunt();#calling the function</li>
                              </ol>
                              <strong>Output:</strong> Hi,Welcome to Edureka
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>16) What is_init?</strong>
                           </div>
                           <div class="panel-body">
                              _init_is a method or constructor in Python. This method is automatically called to
                              allocate memory when a new object/<br />
                              instance of a class is created. All classes have the_init_method.<br />
                              Here is an example of how to use it.
                              <ol>
                                 <li>class Employee:</li>
                                 <li>def _init_(self,name,age,salary):</li>
                                 <li>self.name = name</li>
                                 <li>self.age = age</li>
                                 <li>self.salary = 20000</li>
                                 <li>E1 = Employee("XYZ", 23, 20000)
                                 <li># E1 is the instance of class Employee.</li>
                                 <li>#_init_allocates memory for E1.</li>
                                 <li>print(E1.name)</li>
                                 <li>print(E1.age)</li>
                                 <li>print(E1 .salary)</li>
                              </ol>
                              23<br />
                              20000<br />
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>17) What is a lambda function?</strong>
                           </div>
                           <div class="panel-body">
                              Ananonymous function is known as a lambda function. This function can have any number of
                              parameters but, can have<br />
                              just one statement.<br />
                              <strong>Example:</strong>
                              <ol>
                                 <li>a = lambda x,y : x+y</li>
                                 <li>print (a(5,6))
                              </ol>
                              <strong>output:</strong> 11
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>18) What is self in Python?</strong>
                           </div>
                           <div class="panel-body">
                              self is an instance or an object of a class. In Python, this is explicitly included as the
                              first parameter. However, this is not the<br />
                              case in java where it's optional. It helps to differentiate between the methods and
                              attributes of a class with local variables.<br />
                              The self variable in the init method refers to the newly created object while in other
                              methods, it refers to the object whose<br />
                              method was called.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>19) How does break, continue and pass work?</strong>
                           </div>
                           <div class="panel-body">
                              <table>
                                 <tr>
                                    <th style="background-color:powderblue;text-align:center;">Break</th>
                                    <td>Allows loop termination when some condition is met and the control is
                                       transferred to the next statement.</td>
                                 </tr>
                                 <tr>
                                    <th style="background-color:powderblue;text-align:center;">Continue</th>
                                    <td>Allows skipping some part of a loop when some specific condition is met and the
                                       control is transferred to the beginning of the loop.</td>
                                 </tr>
                                 <tr>
                                    <th style="background-color:powderblue;text-align:center;">Pass</th>
                                    <td>Used when you need some block of code syntactically, but you want to skip its
                                       execution. This is basically a null operation. Nothing happens when this is
                                       executed.</td>
                              </table>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>20) What does [::-1} do?</strong>
                           </div>
                           <div class="panel-body">
                              [::-1] is used to reverse the order of an array or a sequence.<br />
                              For example:
                              <ol>
                                 <li>import array as arr</li>
                                 <li>My_Array=arr .array('i',[1,2,3,4,5])</li>
                                 <li>My_Array[::-1]</li>
                              </ol>
                              <strong>output:</strong> array('i',[5,4,3,2,1])<br />
                              [::-1] reprints a reversed copy of ordered data structures such as an array or a list. the
                              original array or list remains unchanged.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>21) How can you randomize the items of a list in place in Python?</strong>
                           </div>
                           <div class="panel-body">
                              Consider the example shown below:

                           </div>
                        </div>
                     </a>
                  </li>
                  <!-- <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>X) Question Here?</strong>
                           </div>
                           <div class="panel-body">
                              Answer here
                           </div>
                        </div>
                     </a>
                  </li> -->
                  <!-- All Question Completed -->
               </ul>
            
               <!--END of UL Contents -->
               <!-- Comments Form -->
               <div class="card my-4">
                  <h6 class="card-header">Leave a Comment:</h6>
                  <div class="card-body">
                     <form>
                        <div class="form-group">
                           <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn-primary">Submit</button>
                     </form>
                  </div>
               </div>

               <!-- Single Comment -->
               <div class="media mb-4">
                  <img class="d-flex mr-3 size rounded-circle" src="../../img/sample.png" alt="">
                  <div class="media-body">
                     <h6 class="mt-0">Commenter Name</h6>
                        Text
                  </div>
               </div>

               <div class="media mb-4">
                  <img class="d-flex mr-3 size rounded-circle" src="../../img/sample.png" alt="">
                  <div class="media-body">
                     <h6 class="mt-0">Commenter Name</h6>
                     Text
                  </div>
               </div>



            </div>

         </div>
        
      </section>

      <?php require "../../templates/footer_outer.php" ?>
      <!-- ==================================================Script Section============================================== -->

      <script type="text/javascript" src="../../lib/vanilla-tilt.min.js"></script>
      <!-- ======================================================================================================== -->
      <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>

      <!-- <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script> -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
      <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
      <!-- ======================================================================================================== -->
      <script src="../../js/main.js"></script>

      <script src="../../js/navmenu.js"></script>


      <script src="../../lib/blog-vendor/jquery/jquery.min.js"></script>
      <script src="../../lib/blog-vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>