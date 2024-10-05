<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">

   <title>NubeEra.Training(Interview):PySpark</title>
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

               <!-- Title -->PySpark
               <h1 class="mt-4">PySpark Interview QnA</h1>

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
               <!-- <img class="img-fluid rounded size1" style="max-width:60%;" src="../img/interviews/NGINX_1.jpg" alt=""> -->

               <input type="text" id="myInput" onkeyup="searchTopicsInQuestionNAnswers()" placeholder="Enter Topic...">
               <ul id="myUL">
                  <!-- 
                     <li><a href="#">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              QUESTION HERE
                           </div>
                           <div class="panel-body">
                              ANSWER HERE
                           </div>
                        </div>
                        </a>
                     </li> 
                  -->

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>1) Explain PySpark in brief?</strong><br />
                           </div>
                           <div class="panel-body">
								Which we call PySpark. In Python programming language. we can also work with RDDs, using PySpark. It is
								possible due to its library name Py4j.<br />
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                             <strong>2) What are the main characteristics of (Py)Spark?</strong><br />
                           </div>
                           <div class="panel-body">
								Some of the main characterstics of (Py)Spark are:<br />
							<ul>
								<li>Here Nodes are abstracted that says no possible to address an individual node.</li>
								<li>Also, Network is abstracted, that means there is only implicit communication possible.</li>
								<li>Moreover, it is based on Map-Reduce, that means programmer provides a map and a reduce function here.</li>
								<li>And, PySpark is one of the API for Spark.</li>
							</ul>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>3) Pros of PySpark?</strong><br />
                           </div>
                           <div class="panel-body">
                              Some of the benefits of using PySpark are:
							  <ul>
							  <li>For simple problems, it is a very simple to write parallelized code.</li>
							  <li>Also, it handles Synchronization points as well as errors.</li>
							  <li>Moreover in Spark, many useful algorithms is already impleimplemented.</li>
							  </ul>                           
						   </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>4) Cons of PySpark?</strong>
                           </div>
                           <div class="panel-body">
                              some of the limitations on using PySpark are:
							  <ul>
							  <li>It is difficult to express a problem in MapReduce fashion sometimes.</li>
							  <li>Also, Sometimes, it is not as efficient as other programming models.</li>
							  </ul>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>5) Prerequisites to learn PySpark?</strong>
                           </div>
                           <div class="panel-body">
                             It is being assumed that the readers are already aware of what a programming language and a framework is,
							 before proceeding with the various concepts givenin this turtorial. Also, if the readers have some knowledge of
							 Spark and Python in advance, it will be very helpful.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>6) What do you mean by PySpark SparkContext?</strong>
                           </div>
                           <div class="panel-body">
                              In simple words, an entry point to any spark functionality is what we call SparkContext. While it comes to
							  PySpark, SparkContext uses Py4j(library)in order to launch a JVM. in this way, it creates a
							  JavaSparkContext. However. PySpark has a SparkContext available as 'se',by default.
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>7) Eplain PySpark SparkConf?</strong>
                           </div>
                           <div class="panel-body">
                              Mainly, we use PySparkconf because we need to set a few configurations and parameters to run a Spark
							  application on the local/cluster. In other words, SparkConf offers configuration to run a Spark application.
							  <pre>
class PySpark. SparkConf
loadDefaults = True,
_jvm = None,
_jconf = None
	)
							  </pre> 
						  </div>
                       </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>8) Tell us something about PySpark SparkFiles?</strong>
                           </div>
                           <div class="panel-body">
							  It is possible to upload our files in ApacheSpark. We do it using sc.addfile, where sc is our default
							  SparkContext. Also, it helps to get the path on a worker usingSparkFies.get. Morever, it resolves the paths to
							  files which are added through SparkContext.addFileO.
							  It contains some classmethods, such as-<br />
							  <ul>
							  <li>get(filename)</li>
							  <li>getrootdirectory()</li>
							  </ul>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>9)Explain get(Filename).</strong>
                           </div>
                           <div class="panel-body">
                              It helps to get absolute path of a file, which are added through SparkContext.addfile().<br />
								<pre>
def get(cls, filename):
path = os.path.join(SparkFiles.getRootDirectory(),filename)
return os.path.abspath(path)
								</pre>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>10) Explain getrootdirectory().</strong>
                           </div>
                           <div class="panel-body">
                              Whereas, it helps to get the root directory which is consist of the files which are added through
							  SparkContext.adddFile()<br />
							  <pre>
							  
def getRootDirectory (cls):
if cls._is_running_on_worker:
return cls._root_directory
else:
# This will have to change if we support multiple SparkContexts:
return cls._sc._jvm.org.apache.spark.sparkfiles. getRootDirectory()
							  </pre>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>11) Explain PySpark StorageLevel in brief.</strong>
                           </div>
                           <div class="panel-body">
                              over the disk,orboth. In addtion, even it controls that we need to serialize RDD or to replicate RDD partitions
							  <ul>
							  <li>Code</li>
							  </ul>
							  <ol>
							  <li>class PySpark.Stroagelevel (usedisk, useMemory, useoffileap, deserialized, replication = 1</li><br />
							  </ol>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>12)Name diffrent storage levels.</strong>
                           </div>
                           <div class="panel-body">
                              <ul>
							  <li>Disk_only_StroageLevel(True, False, False, False,1)</li>
							  <li>DISK_ONLY_2 StroageLevel(True, False, True, False,2)</li>
							  <li>MEMORY_AND_DISK Stroage Level(True, True, False, False,1)</li>
							  <li>MEMORY_AND_DISK_2 Stroage Level(True, True, False, False,2)</li>
							  <li>MEMORY_AND_DISK_SER Stroage Level(True, True, False, False,1)</li>
							  <li>MEMORY_AND_DISK_SER_2 Stroage Level(True, True, False, False,2)</li>
							  <li>memory_only stroageLevel(False, True, False, False,1)</li>
							  <li>memory_only_2stroageLevel(False, True, False, False,2)</li>
							  <li>MEMORY_ONLY_SERStroageLevel(False, True, False, False,1)</li>
							  <li>MEMORY_ONLY_SER_2StroageLevel(False, True, False, False,2)</li>
							  <li>OFF_HEAP StroageLevel(True, True, True, False, 1)</li>
							  </ul>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>13) What do mean by Broadcast variables?</strong>
                           </div>
                           <div class="panel-body">
                            In order to save the copy of data across all nodes, we use it.<br />
							With SparkContext.broadcast variables is created.<br />
							For Examples:<br />
							<ol>
							<li>>>> from pyspark. Context import SparkContext</li>
							<li>>>> sc = SparkContext ('local', 'test')</li>
							<li>>>> b = sc.broadcast([1, 2, 3, 4, 5])</li>
							<li>>>> b .value</li>
							<li>[1, 2, 3, 4, 5,]</li>
							<li>>>> sc .parallelize ([0,0]) .flatmap(lambda x: b.value) .collect()</li>
							<li> [1, 2, 3, 4, 5, 1, 2, 3, 4, 5]</li>
							<li>>>> b.unpersist()</li>
							<li>>>> large_broadcast = sc.broadcast (range(10000))</li>
							</ol>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>14) What are Accmulator variables?</strong>
                           </div>
                           <div class="panel-body">
                              In order to aggregate the informtion through associative and commutative operations, we use them.
							  <ul>
							  <li>code.</li>
							  </ul>
							  <ol>
							  <li>class pyspark. Accumulator(aid, value, accum_param)</li>
							  </ol>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>15) Explain Accumulatorparam?</strong>
                           </div>
                           <div class="panel-body">
                              Accumulatorparam is a helper object which explains how to accumulate values of a given type.<br />
							  <strong>class AccumulatorParam(object):<br />
							     def Zero(self, value):<br />
								 """<br />
								 Also,<br />
							  With the provided C{value)(e.g.,a zero vector) it<br />
							  Provides a "zero value" for the type,compaitable in dimensions<br />
							    """<br />
							  raise NotlmplementedError<br />
							def addInPlace(self, value1, value2):</strong>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>16) Why we need Serializers in PySpark?</strong>
                           </div>
                           <div class="panel-body">
                              For the purpose of performance tunning, PySpark supports custom serializers, such as-
							  <ul>
							  <li>MarshalSerializer</li>
							  <li>PickleSerializere</li>
							  </ul>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>17) Explain Marshal Serializer?</strong>
                           </div>
                           <div class="panel-body">
                              With the help of Python's Marshal Serializer, it serializes objects. Even if it supports fewer datatypes, it is
							  faster than PickleSelizer.
							  <pre>
class MarshalSerializer (Framedserializer):
def dumps (self, obj):
return marshal .dumps (obj)
def loads (self, obj):
return marshal. loads(obj)
							  </pre>                          
							</div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>18) Explain Marshal Serializer?</strong>
                           </div>
                           <div class="panel-body">
                             This uses Python's Pickle Serializer to serialize objects. It supports nearly any python object, but in slow
							 speed.<br />
							 <pre>
class pickleserializer (FramedSerilizer):
def dump a (self, obj):
return pickle .dumps(obj, protocol)
if sys.version >= '3':
def loads (self, obj, encoding=encoding)
else:
def loads (self, obj, encoding-None):
							 </pre>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                           <strong>19) what do you mean by status Tracker?</strong>
                           </div>
                           <div class="panel-body">
                           Status Trackers are Low-Level status reporting APIs which helps to monitor job and stage process.<br />
						   <pre>
def__init__(self, jtracker):
self._jtracker = jtracker
						   </pre>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>20) Explain SparkJobInfo?</strong>
                           </div>
                           <div class="panel-body">
							  SparkJobinfo exposes information about Spark Jobs.
							  <ol>
							  <li>class SparkJobInfo(namedtuple("SparkJobInfo", "JobId StageIds Status")):</li>
							  </ol>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                           <strong>21) Explain SparkStageInfo?</strong>
                           </div>
                           <div class="panel-body">
                              SparkStageinfo exposes information about spark Stages<br />
							  <pre>
class SparkStageInfo(namedtuple("SparkStageInfo",
"stageId CurrentAttempt Id name numtasks numActiveTasks"
"numcompletedTasks numfailedeTasks")):
							  </pre>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>22) Which Profilers do we use in PySpark?</strong>
                           </div>
						   <div class="panel-body">
							  Custom profilers are PySpark supported in PySpark to allow for diffrent Profilers to be used an for
							  outputing to different formats than that is offered in the BasicProfiler.
							  We need to define or inherit the following methods, with a custom profiler:<br />
							  <ul>
							  <strong><li>profile-</strong>Basically, it produces a system profile of some sort.</li>
							  <strong><li>stats-</strong>Well, it returns the collected stats.</li>
							  <strong><li>dump-</strong>Whereas, it dumps the profiles to a path.</li>
							  <strong><li>add-</strong>Moreover, this method helps to add a profile to the existing accumulated profile</li>
							  </ul>
							  Generally, When we create a SparkContext,we choose the profiler class. 
							</div>
                        </div>
                     </a>
                  </li>
                  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>23) Explain Basic Profiler?</strong>
                           </div>
                           <div class="panel-body">
                           It is a default profiler, which we implement on the basis of cProfile and Accomulator.
                           </div>
                        </div>
                     </a>
                  </li>
                  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>24) Do, we have machine learning API in Python?</strong>
                           </div>
                           <div class="panel-body">
							MLIB machine learning API.
                           </div>
                        </div>
                     </a>
                  </li> 
                  
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>25) Name algorithms supported in PySpark?</strong>
                           </div>
                           <div class="panel-body">
							   There are several algorithms in PySpark?<br />
							   <ul>
								   <li>mlib.classification</li>
								   <li>mlib.clustering</li>
								   <li>mlib.fpm</li>
								   <li>mlib.linalg</li>
								   <li>mlib.recommedation</li>
								   <li>spark.mlib</li>
								   <li>Mlib.regression</li>
							   </ul>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>26) Name algorithms supported in PySpark?</strong>
                           </div>
                           <div class="panel-body">
                              The parameters of a SparkContext are:<br />
							  <ul>
							  <strong><li>Master-</strong> URL of the cluster from which it connects.</li>
							  <strong><li>appName-</strong> Name of our Job.</li>
							  <strong><li>sparkHome-</strong> Spark installation directory.</li>
							  <strong><li>pyFiles-</strong> It is the .Zip or .py files, in order to send to the cluster and alsoto add to the PYTHONPATH.</li>
							  <strong><li>Environment-</strong> Worker nodes environment variables.</li>
							  <strong><li>Serializer-</strong> RDD serializer.</li>
							  <strong><li>Conf-</strong> to set all the spark properties, an object of L{SparkConf}.</li>
							  <strong><li>JSC-</strong> It is the JavaSparkContext instance.</li>
							  </ul>
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>27) Which of the parameters of SparkContext we mostly use?</strong>
                           </div>
                           <div class="panel-body">
                             Master and app name. 
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>28) Name attributes of SparkConf.</strong>
                           </div>
                           <div class="panel-body">
                             <strong>Attributes of SparkConf-</strong>
							 <ol>
							 <li>set(Key, value)-This attributes helps to set a configuration property.</li>
							 <li>setMaster(value)-It helps to set the master URL.</li>
							 <li>setAppName(value)-This helps to set an application application name.</li>
							 <li>get(key, defaultValue=None)(value)-This attribute helps to get a configuration value of a key.</li>
							 <li>setSparkHome(value)-It helps to set Spark installation path on worker nodes.</li>
							 </ol>
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>29) Why Profiler?</strong>
                           </div>
                           <div class="panel-body">
                              Profilers help us to ensure that the applications do not waste any resources also to spot any problematic code. 
                           </div>
                        </div>
                     </a>
                  </li>
				  
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>30) What is the diffrence between Python and Scala APIs?</strong>
                           </div>
                           <div class="panel-body">
                              Differences between the Python and Scala APIs are:<br />
							  <ul>
							  <li>It is dynamically typed hence because of that RDDs can hold objects of multiple types.</li>
							  <li>On compairing with Scala, PySpark does not yet support some APIs.</li>
							  </ul>
                           </div>
                        </div>
                     </a>
                  </li>
				  
               </ul>

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



         </div>

         </div>
         <!-- /.row -->

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