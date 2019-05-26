<!DOCTYPE html>
<html>
        <head>
        <title>Learn Janji Solving</title>

                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"/>
                <meta name="description" content="Rubik’s Cube">
                <meta name="keywords" content="Erno Rubik’s Cube">
                <link rel="stylesheet" type="text/css" href="../styles/cube.css">
                <link rel="stylesheet" type="text/css" href="../styles/bootstrap.css">
                <link rel="stylesheet" type="text/css" href="../styles/cardinal.css">
                <link rel="stylesheet" type="text/css" href="../styles/styles.css">
                <link rel="icon" type="image/png" href="../media/cuber-favicon-0064x0064.png">
                <link rel="apple-touch-icon" href="../media/cuber-favicon-0144x0144.png">
                <style>
                        html, body, #container{
                                margin: 0px;
                                padding: 0px;
                                width: 100%;
                                height: 100%;
                        }

                        #container{
                                background: #fff;
                        }
                </style>
                <title>JG Cuber</title>
        </head>
        <body>
                <div class="container">
                        <div class="row">
                                <!-- virtual cube -->
                                <div class="col-lg-8">
                                        <!-- <center><br><button class="btn btn-sm btn-primary" id="button-shuffle">Scramble</button></center> -->
                                        <div id='container' style="height: 90vh;"></div>
                                </div>
                                <div class="col-lg-4">
                                        <center>
                                                <h1 class="header"><br><img src="../media/janjilogo.png" width="150px" height="60"></h1>
                                                        <!-- navigation bar -->
                                                        <div id="page links">
                                                                <div class="dropdown">
                                                            <button class="dropbtn"><a href="../index.html" target="_blank">HOME</a></button>
                                                        </div>

                                                        <div class="dropdown">
                                                            <button class="dropbtn"><a href="#">MODES</a></button>
                                                              <div class="dropdown-content">
                                                                <a href="solver.php" target="_blank">Janji Solver</a>
                                                                <a href="learn.php" target="_blank">Learn to solve</a>
                                                                <a href="free.php" target="_blank">Free solve</a>
                                                              </div>
                                                        </div>

                                                        <div class="dropdown">
					            <button class="dropbtn"><a href="../algorithms/algorithms.php" target="_blank">ALGORITHMS</a></button>
					              <div class="dropdown-content">
					                <a href="../algorithms/algorithms.php" target="_blank">Algorithm Page</a>
					                <a href="../algorithms/notations.php" target="_blank">Notations</a>
					              </div>
					        </div>

					        <div class="dropdown">
					          <button class="dropbtn"><a href="#">HELP</a></button>
					            <div class="dropdown-content">
					              <a href="../about/tips_facts.php" target="_blank">Tips & facts</a>
					              <a href="https://github.com/Keli-el-halel/Janji-cuber" target="_blank">More Info</a>
					            </div>
					        </div>
                                                    </div>

                                                <!-- message body -->
                                                <div><a href="../algorithms/notations.php" class="pointer" target="_blank">
                                                        <span title="Right side Clockwise rotation">R</span>
                                                        <span title="Right side Counter Clockwise rotation">R'</span>
                                                        <span title="Top layer Clockwise rotation">U</span>
                                                        <span title="Top layer Counter Clockwise rotation">U'</span>
                                                        <span title="Left side Clockwise rotation">L</span>
                                                        <span title="Left side Counter Clockwise rotation">L'</span>
                                                        <span title="Bottom layer Clockwise rotation">D</span>
                                                        <span title="Bottom layer Counter Clockwise rotation">D'</span>
                                                        <span title="Front face Clockwise rotation">F</span>
                                                        <span title="Front face Counter Clockwise rotation">F'</span>
                                                        </a></div>
                                                <button class="btn btn-xs btn-primary" id="yellowcross" onclick="startTimer()">Begin Puzzle</button><br>
                                                <button class="btn btn-xs btn-primary" id="yellowcorners" onclick="startTimer()">Yellow Corners</button>
                                                <button class="btn btn-xs btn-primary" id="middle" onclick="startTimer()">Middle Layer</button>
                                                <button class="btn btn-xs btn-primary" id="whitecross" onclick="startTimer()">White cross</button>
                                                <button class="btn btn-xs btn-primary" id="whiteedges" onclick="startTimer()">White Edges</button>
                                                <button class="btn btn-xs btn-primary" id="permute" onclick="startTimer()">White Corners</button>
                                                <button class="btn btn-xs btn-primary" id="orient" onclick="startTimer()">Finale</button>

                                                        <!-- variable content -->
                                                        <div id="contentChange"> </div>

                                                        <!-- Timer -->
                                                        <div id="display2">
                                                    <label id="hours">00</label>:<label id="minutes">00</label>:<label id="seconds">00</label>
                                                </div>
                                                        <button class="btn" id="gobutton2" width="220" height="220" onclick="startTimer()">Start!</button>
                                                        <button class="btn" id="stopbutton2" width="220" height="220" onclick="stopTimer()">Stop</button>
                                        
                                        </center>
                                        <br><br>
                                        <footer class="footer">© 2019 Janji Productions.</footer>
                                
                                </div>
                                    
                        </div>
                </div>

                <!-- javascript -->
                <script src='../js/cube/cuber.min.js'></script>
                <script src='../js/photon.js'></script>
                <script src='../js/jg.js'></script>
                <!-- <script src='//code.jquery.com/jquery-2.1.1.min.js'></script> -->
                <script type="text/javascript" src="../js/jquery.js"></script>
                <script>

                        var container   = document.querySelector( '#container' ),
                                cube            = new ERNO.Cube();
                                light           = new Photon.Light( 10, 0, 100 );

                        container.appendChild( cube.domElement );


                </script>
                <!-- <script>

                    $(function() {
                      function init(dimensions) {
                        dimensions = +(dimensions) || 3;

                        var element = $("#scene").empty();
                        var rubik = new Rubik(element, dimensions);

                        $("#button-shuffle").on('click', function(e) { e.preventDefault(); rubik.shuffle() });
                               
                      };

                      init();

                      
                    });

                </script> -->
                <!-- javascript for content change -->
                <script type="text/javascript">
                var yellowcross = '<div class="scrollmenu"><a href="#a1"><b>What we want to achieve</b><br><img src="../media/yc/cross2.png"></a><a href="#a2">The yellow face (point) should be<br>facing up for the first 2 stages<br>(yellow cross and yellow corners)<br><img src="../media/yc/y_face.png"></a><a href="#a3">Edge pieces can only be in<br>these 12 possible positions<br>on the cube<br><img src="../media/yc/edgelocations.png"></a><a href="#a4"><b>Search round the cube<br>for the yellow edge piece</b></a><a href="#a5">We want to get all the yellow<br>edge pieces to the bottom<br>like this... <br><img src="../media/yc/fouredges.png"></a><a href="#a6" id="r6"><b>To do that, check the current<br>position of a yellow piece...</b></a><a href="#a7">· Position 1: perform F-F<br><img src="../media/yc/yc_pos1.png"></a><a href="#a8">· Position 2: perform F-R’<br><img src="../media/yc/yc_pos2.png"></a><a href="#a9">· Position 3: perform L<br><img src="../media/yc/yc_pos3.png"></a><a href="#a10">· Position 4: perform R’<br><img src="../media/yc/yc_pos4.png"></a><a href="#a11">· Position 5: perform F-L<br><img src="../media/yc/yc_pos5.png"></a><a href="#a12"><b>Parity Consideration</b><br>Parity 1: 2 yellow edge pieces<br>next to each other interchanging<br><img src="../media/yc/yc_parity1.png"></a><a href="#a13">Rotate D slice<br>until no yellow edge pieces interchange</a><a href="#a14">Parity 2: 2 yellow edge pieces<br>opposite each other interchanging<br><img src="../media/yc/yc_parity2.png"></a><a href="#a15">Rotate D slice and perform/repeat<br>F-F move until no yellow edge<br>pieces interchange</a><a href="#a16">The four edge pieces should now<br>be below the yellow face/opposite<br>the white face<br><img src="../media/yc/fouredges.png"></a><a href="#a17"><b>Finishing off easy</b><br>Search for the yellow-blue edge piece<br><img src="../media/yc/locate_yb.png"></a><a href="#a18">· Rotate D until the yellow-blue<br>edge piece is in contact with<br>the blue center<br><img src="../media/yc/rotateD_yb.png"><img src="../media/yc/rotateD_yb2.png"></a><a href="#a19">· Rotate blue center face by<br>180 degrees to make the yellow-blue<br>edge connect with the<br>yellow center and blue center<br><img src="../media/yc/rotate180_yb.png"><img src="../media/yc/rotate180_yb2.png"></a><a href="#r6" class="drpbtn"><i>Repeat this sequence for the<br>yellow-red, yellow-green and<br>yellow-orange edge pieces</i></a><a href="#a21">By the end of this procedure,<br>the Yellow cross should be completed.<br><img src="../media/yc/cross2.png"></a></div>';

                var yellowcorners = '<div class="scrollmenu"><a href="#b1"><b>What we want to achieve</b><br><img src="../media/ycn/whatwewant.png"></a><a href="#b2">Corner pieces can only be in<br>these 8 possible positions<br><img src="../media/ycn/cornerpositions.png"></a><a href="#b3">Maintaining the yellow face<br>(point/center) facing up…<br><img src="../media/ycn/y_face.png"></a><a href="#b4"><b>We must first locate any<br>yellow-corner piece on the top layer</b></a><a href="#b5">We do this by bringing the corner<br>pieces with a yellow square on them<br>to the bottom layers opposite<br>the yellow face<br><img src="../media/ycn/yellowcornerstobottom.png"></a><a href="#b6">When found, Use the face that<br>has the yellow corner piece<br>at the top right position<br><img src="../media/ycn/ycornertopright.png"></a><a href="#b7"><img src="../media/ycn/ycornertopright.png"><br>Perform R-D-R’-D’ move</a><a href="#b8"><b>Parity Consideration</b><br>Parity 1: Interchange of <br>yellow corner pieces<br><img src="../media/ycn/ycornersparity1.png"></a><a href="#b9"><img src="../media/ycn/ycornersparity1.png"><br>Simply Rotate the D slice first<br>and then repeat R’-D’-R-D move</a><a href="#b10"><b>When all yellow corner pieces<br>are at the bottom like this…</b><br><img src="../media/ycn/ycorners@bottom.png"></a><a href="#b11"><b>We will now begin to complete<br>the yellow face</b></a><a href="#b12">Locate yellow-blue-red corner piece.<br><img src="../media/ycn/locateyrb.png"></a><a href="#b13">Rotate D slice to place it at<br>the bottom right corner<br>of the blue face<br><img src="../media/ycn/rotateyrbtoblueface.png"></a><a href="#b14"><b>Confirm which position it is in...</b></a><a href="#b15">• Position 1: perform R’-D’-R-D<br><img src="../media/ycn/rotateyrbtoblueface.png"></a><a href="#b16">• Position 2: perform R’-D-D-R-<br>D-R’-D’-R-D<br><img src="../media/ycn/yrbpos2.png"></a><a href="#b17">• Position 3: perform D’-R’-D-R<br><img src="../media/ycn/yrbpos3.png"></a><a href="#b18">Repeat for yellow-red-green<br>(PF-red)(yrg),<br>yellow-green-orange<br>(PF-green)(yog) and<br>yellow-orange-blue<br>(PF-orange)pieces.</a><a href="#b19"><b>Parity Consideration</b><br>Parity 2: misplaced yellow-corner<br>piece in correct color group<br><img src="../media/ycn/ycornersparity2.png"></a><a href="#b20"><img src="../media/ycn/ycornersparity2.png"><br>Simply perform R’-D’-R-D move to<br>displace the piece</a></div>';

                var middle = '<div class="scrollmenu"><a href="#c1"><b>What we want to achieve</b><br><img src="../media/mid/whatwewantml.png"></a><a href="#c2">Middle layer edge pieces can<br>only be in these 8 possible positions.<br>(after completing the previous stages)<br><img src="../media/mid/possposml.png"><img src="../media/mid/possposml2.png"></a><a href="#c3">The white face (point) should<br>be facing up for the rest of<br>the cube solving stages<br><img src="../media/mid/whitefacingup.png"></a><a href="#c4">There are only four<br>middle layer edge pieces<br><img src="../media/mid/4mlpieces.png"></a><a href="#c5"><b>We must first place all<br>middle layer edge pieces at<br>the top slice like this...</b><br><img src="../media/mid/mlpiecesontop.png"></a><a href="#c6"><b>We do this by locating any<br>misplaced middle layer edge piece<br>at the middle slice</b><br><img src="../media/mid/misplacedmlpieces.png"></a><a href="#c7">Using a pivot face that has the<br>misplaced piece at the right,<br><img src="../media/mid/mlpiecetotop.png"></a><a href="#c8">(make sure the piece above the pivot face<br>is not a middle layer piece by rotating the top<br>slice until it is a white edge piece there)</a><a href="#c9"><img src="../media/mid/mlpiecetotopx.png"><img src="../media/mid/mlpiecetotopy.png"></a><a href="#c10">Perform U-R-U’-R’-U’-F’-U-F<br><img src="../media/mid/mlpiecetotopface.png"></a><a href="#c11">Repeat for any other misplaced<br>middle edge piece<br><img src="../media/mid/mlpiecetotopface2.png"></a><a href="#c12"><b>Now we can begin placing the<br>middle edge pieces in the right positions</b><br><img src="../media/mid/mlpiecestoptomid.png"></a><a href="#c13">Locate blue-red edge piece<br><img src="../media/mid/locatebr.png"></a><a href="#c14" id="mid">• If blue square of the<br>blue-red piece is on top;<br><img src="../media/mid/locatebr.png"></a><a href="#c15">Twist top layer placing the<br>blue-red piece at the red face<br><img src="../media/mid/twistbr.png"></a><a href="#c16">(using the red face)<br>perform U-R-U’-R’-U’-F’-U-F<br><img src="../media/mid/brpos1.png"></a><a href="#c17">• Otherwise, If red square of the<br>blue-red piece is on top;<br><img src="../media/mid/locatebr2.png"></a><a href="#c18">Twist top layer placing the<br>blue-red piece at the blue face<br><img src="../media/mid/twistbr2.png"></a><a href="#c19">(using the blue face)<br>perform U’-L’-U-L-U-F-U’-F’<br><img src="../media/mid/brpos2.png"></a><a href="#c20">The blue red piece should<br>now be in position. <br><img src="../media/mid/correctbr.png"></a><a href="#c21"><b>The other middle pieces...</b></a><a href="#mid">Repeat for <b>red-green piece</b>;<br>where If top color is green,<br>place piece at red face and<br>perform U’-L’-U-L-U-F-U’-F’</a><a href="#mid">Else if top color is red,<br>place piece at green face and<br>perform U-R-U’-R’-U’-F’-U-F.</a><a href="#mid">For <b>green-orange piece</b>;<br>where If top color is orange,<br>place piece at green face and<br>perform U’-L’-U-L-U-F-U’-F’</a><a href="#mid">Else if top color is green,<br>place piece at orange face and<br>perform U-R-U’-R’-U’-F’-U-F.</a><a href="#mid">And for <b>orange-blue piece</b>;<br>where If top color is blue,<br>place piece @ orange face and<br>do U’-L’-U-L-U-F-U’-F’</a><a href="#mid">Else if top color is orange,<br>place piece at blue face and<br>perform U-R-U’-R’-U’-F’-U-F.</a></div>';

                var whitecross = '<div class="scrollmenu"><a href="#d1"><b>What we want to achieve</b><br><img src="../media/wc/whatwewantwc.png"></a><a href="#d2">We are focusing on<br>these four main pieces<br><img src="../media/wc/focus.png"></a><a href="#d3">Scan over the white face...</a><a href="#d4">There are four possible states<br>of the white face at this stage</a><a href="#d5">1•White dot&nbsp2•L shape<br><img src="../media/wc/whatwewantml.png"><img src="../media/wc/lshape.png"></a><a href="#d6">3•White line&nbsp4•White cross<br><img src="../media/wc/lineshape.png"><img src="../media/wc/whatwewantwc.png"></a><a href="#d7">If the white face has a <b>white line</b>;<br><img src="../media/wc/lineshape.png"></a><a href="#d8">Select a face where the white line<br>is facing you horizontally<br><img src="../media/wc/linehor.png"></a><a href="#d9"><img src="../media/wc/linehor.png"><br>Perform F-R-U-R’-U’-F’</a><a href="#d10" id="lshape">If white face has an <b>L shape</b>;<br><img src="../media/wc/lshape.png"></a><a href="#d11">Select a face where the L shape<br>is facing you in this position<br><img src="../media/wc/lhor.png"></a><a href="#d12"><img src="../media/wc/lhor.png"><br>Perform F-R-U-R’-U’-R-U-R’-U’-F’</a><a href="#d13">If the white face has a <b>White dot</b>;<br><img src="../media/wc/whatwewantml.png"></a><a href="#d14">Select any of the four sides as a face<br><img src="../media/wc/whatwewantml.png"><br>Perform F-R-U-R’-U’-F’</a><a href="#lshape">You will now get an L shape<br><img src="../media/wc/lshape.png"></a><a href="#lshape">Go back to the L shape algorithm,<br> afterwards you will have your white cross<br><img src="../media/wc/whatwewantwc.png"></a></div>';

                var whiteedges = '<div class="scrollmenu"><a href="#e1"><b>What we want to achieve</b><br><img src="../media/we/whatwewantwe.png"></a><a href="#e2">Maintaining the white face on top…<br><img src="../media/we/whatwewantwc.png"></a><a href="#e3">Rotate the top slice until<br>(at least) two white edge pieces<br>are connected to their correct faces</a><a href="#e4">It can be connected in<br>these three possible positions;<br>1• Next to each other<br><img src="../media/we/edgeconnect2.png"></a><a href="#e5">2•Opposite each other$nbsp3•All four are connected<br><img src="../media/we/edgeconnect.png" id="nxt"><img src="../media/we/edgeconnect3.png"></a><a href="#e6" id="#nxt">If the white edge pieces connected<br>are <b>next to each other</b><br><img src="../media/we/edgeconnect21.png"></a><a href="#e7">Select the face at the right of<br>the two misplaced white<br>edge pieces as your pivot face<br><img src="../media/we/nextto.png"></a><a href="#e8"><img src="../media/we/nextto.png"><br>Perform R-U-R’-U-R-U-U-R’-U</a><a href="#e9">If the white edge pieces connected<br>are <b>opposite each other</b><br><img src="../media/we/edgeconnect23.png"></a><a href="#e10">Select the face of any of the<br>two correctly placed edge pieces.<br><img src="../media/we/edgeconnect.png"></a><a href="#e11"><img src="../media/we/edgeconnect.png"><br>Perform R-U-R’-U-R-U-U-R’</a><a href="#nxt">You will now have the white edge<br>pieces connected next<br>to each other<br><img src="../media/we/edgeconnect21.png"></a><a href="#nxt">Use the previous algorithm for<br>solving white edge pieces<br>connected next to each other</a><a href="#e14">If all the white edge pieces are<br>connected to their centers,<br><img src="../media/we/edgeconnect22.png"></a><a href="#e15">Then proceed to the next stage.</a></div>';

                var permute = '<div class="scrollmenu"><a href="#f1"><b>What we want to achieve</b><br><img src="../media/cp/permute.png"></a><a href="#f2">We are focusing on<br>these four corner pieces<br><img src="../media/cp/focuscp.png"></a><a href="#f3"><b>Scan through to see if any<br>(or all) of them are with<br>their color groups</b></a><a href="#f4">There are only three possible<br>scenarios to consider:</a><a href="#f5">1•One corner piece is in<br>position with its color group<br><img src="../media/cp/oneinpos.png"></a><a href="#f6">2•No corner piece is in<br>position with their color groups<br><img src="../media/cp/noneinpos.png"></a><a href="#f7">3•All corner pieces are in<br>position with their color groups<br><img src="../media/cp/allinpos.png"></a><a href="#f8" id="grp">If <b>one</b> is with its color group<br><img src="../media/cp/oneinpos.png"></a><a href="#f9">Select the face that has the<br>correctly color-grouped corner<br>piece at its top right corner<br><img src="../media/cp/oneinposface.png"></a><a href="#f10">Perform U-R-U’-L’-U-R’-U’-L<br>(This reshuffles the three<br>other corner pieces)</a><a href="#f11">Redo until all four white corner<br>pieces are with their color groups</a><a href="#f12">If <b>none</b> are with their color groups<br><img src="../media/cp/noneinpos.png"></a><a href="#f13">Select any of the four<br>side faces as a pivot face</a><a href="#f14">Perform U-R-U’-L’-U-R’-U’-L<br>(This gets one corner piece<br>with its color group)</a><a href="#grp">Do previous algorithm for<br><b>one corner piece with<br>its color group</b></a><a href="#f16">If all are within their color groups,<br><img src="../media/cp/allinpos.png"></a><a href="#f17">Then proceed to the final stage</a></div>';

                var orient = '<div class="scrollmenu"><a href="#g1"><b>The final aim and state</b><br><img src="../media/finale/inposup.png"></a><a href="#g2">Select any of the four<br>side faces to be a pivot face</a><a href="#g3">You are to focus only on the<br>white corner piece on the<br>top-right of your chosen face<br><img src="../media/finale/focusfinale.png"></a><a href="#g4"><i>(you shouldn’t change the face<br>you use for this stage<br>until it is completed)</i></a><a href="#g5">There are three possible positions<br>for the corner piece we are<br>focusing on…</a><a href="#g6">1•It is in its correct position<br><img src="../media/finale/inpos.png"></a><a href="#g7">2•The white square is facing right<br><img src="../media/finale/whiteright.png"></a><a href="#g8">3•The white square is facing you<br><img src="../media/finale/whiteface.png"></a><a href="#g9">If the white corner piece<br><b>is in its correct position</b><br><img src="../media/finale/inpos.png"><br>Perform U move</a><a href="#g10">If the white square<br><b>is facing right</b><br><img src="../media/finale/whiteright.png"><br>Perform (R’-D’-R-D)x2 U</a><a href="#g11">If the white square<br><b>is facing you</b><br><img src="../media/finale/whiteface.png"><br>Perform (D’-R’-D-R)x2 U</a><a href="#g12">Note that the cube might look<br>scrambled at many points again<br>but we are to maintain focus<br>on the top-right corner piece<br>until the end.</a><a href="#g13">At the end of this stage,<br>you would get the cube<br>in this position<br><img src="../media/finale/finalu.png"></a><a href="#g14">Go ahead, finish it.<br>You have just solved<br>The Rubiks cube<br><img src="../media/finale/orient.png"></a></div>';



                                                        $('#yellowcross').on('click',function(){
                                                                $('#contentChange').html(yellowcross).show();
                                                        });

                                                        $('#yellowcorners').on('click',function(){
                                                                $('#contentChange').html(yellowcorners).show();
                                                        });

                                                        $('#middle').on('click',function(){
                                                                $('#contentChange').html(middle).show();
                                                        });

                                                        $('#whitecross').on('click',function(){
                                                                $('#contentChange').html(whitecross).show();
                                                        });

                                                        $('#whiteedges').on('click',function(){
                                                                $('#contentChange').html(whiteedges).show();
                                                        });

                                                        $('#permute').on('click',function(){
                                                                $('#contentChange').html(permute).show();
                                                        });

                                                        $('#orient').on('click',function(){
                                                                $('#contentChange').html(orient).show();
                                                        });

                </script>
        </body>
</html>