<!DOCTYPE HTML>
<html lang="pl">
<head>
    
    <meta charset="utf-8" />
    <title>MATH PUZZLE</title>
	
	<link rel="stylesheet" href="style.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Saira+Stencil+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2ee7728ea1.js" crossorigin="anonymous"></script>
	
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="script.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
    
<body>
    
    <div class="logo">
            
            <p>MATH PUZZLE</p>
            
            <div class="semi_circle"></div>
        
    </div>
 
	<div class="conteiner">

        <div class="plansza1">
        
            <div class="button1" onclick="newgame()">NEW GAME</div>
            <div class="button1" onclick="rules()">RULES</div>
            <div class="button1" onclick="leaderboards()">LEADERBOARDS</div>
            
            
        
        </div>
        
        <div class="plansza2">
            
            <h1>BOARD SIZE</h1>
            <div class="flex" style="margin-bottom: 30px;">
                
                
                
                <div class="button1 circle120" onmousemove="move(120)" onmouseout="out2(120)" onclick="gamesettings(120)">5 x 5</div>
                <div class="button1 circle121" onmousemove="move(121)" onmouseout="out2(121)" onclick="gamesettings(121)">6 x 6</div>
                <div class="button1 circle122" onmousemove="move(122)" onmouseout="out2(122)" onclick="gamesettings(122)">7 x 7</div>
                <div class="button1 circle123" onmousemove="move(123)" onmouseout="out2(123)" onclick="gamesettings(123)">8 x 8</div>
                
            </div>
            
            <div class="flex" style="margin-bottom: 30px; margin-top: 50px">
                
                <div class="leaders">
                
                    <div class="leaders_5x5">
                    
                        <div class="leaders_5x5_1-4">
                            <div class="leaders_head">1 - 4</div>
                            
                            <div class="leaders_center">
                                <div class="leaders_name">1. asdasa</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">2. asdsssassdda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">3. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">4. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">5. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            
                        </div>
                        <div class="leaders_5x5_1-9">
                        
                            <div class="leaders_head">1 - 9</div>
                            
                            <div class="leaders_center">
                                <div class="leaders_name">1. asdasa</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">2. asdsssassdda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">3. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">4. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">5. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            
                        </div>
                        <div class="leaders_5x5_1-19">
                        
                            <div class="leaders_head">1 - 19</div>
                            
                            <div class="leaders_center">
                                <div class="leaders_name">1. asdasa</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">2. asdsssassdda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">3. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">4. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">5. WWWWWWWW</div><div class="leaders_time">00:02</div>
                            </div>
                            
                        </div>
                        
                    </div>
                
                    <div class="leaders_6x6">
                    
                        <div class="leaders_6x6_1-4">
                            <div class="leaders_head">1 - 4</div>
                            
                            <div class="leaders_center">
                                <div class="leaders_name">1. asdasa</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">2. asdsssassdda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">3. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">4. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">5. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            
                        </div>
                        <div class="leaders_6x6_1-9">
                        
                            <div class="leaders_head">1 - 9</div>
                            
                            <div class="leaders_center">
                                <div class="leaders_name">1. asdasa</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">2. asdsssassdda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">3. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">4. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">5. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            
                        </div>
                        <div class="leaders_6x6_1-19">
                        
                            <div class="leaders_head">1 - 19</div>
                            
                            <div class="leaders_center">
                                <div class="leaders_name">1. asdasa</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">2. asdsssassdda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">3. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">4. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">5. WWWWWWWW</div><div class="leaders_time">00:02</div>
                            </div>
                            
                        </div>
                        
                    </div>
                
                    <div class="leaders_7x7">
                    
                        <div class="leaders_7x7_1-4">
                            <div class="leaders_head">1 - 4</div>
                            
                            <div class="leaders_center">
                                <div class="leaders_name">1. asdasa</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">2. asdsssassdda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">3. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">4. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">5. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            
                        </div>
                        <div class="leaders_7x7_1-9">
                        
                            <div class="leaders_head">1 - 9</div>
                            
                            <div class="leaders_center">
                                <div class="leaders_name">1. asdasa</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">2. asdsssassdda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">3. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">4. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">5. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            
                        </div>
                        <div class="leaders_7x7_1-19">
                        
                            <div class="leaders_head">1 - 19</div>
                            
                            <div class="leaders_center">
                                <div class="leaders_name">1. asdasa</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">2. asdsssassdda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">3. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">4. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">5. WWWWWWWW</div><div class="leaders_time">00:02</div>
                            </div>
                            
                        </div>
                        
                    </div>
                
                    <div class="leaders_8x8">
                    
                        <div class="leaders_8x8_1-4">
                            <div class="leaders_head">1 - 4</div>
                            
                            <div class="leaders_center">
                                <div class="leaders_name">1. asdasa</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">2. asdsssassdda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">3. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">4. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">5. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            
                        </div>
                        <div class="leaders_8x8_1-9">
                        
                            <div class="leaders_head">1 - 9</div>
                            
                            <div class="leaders_center">
                                <div class="leaders_name">1. asdasa</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">2. asdsssassdda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">3. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">4. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">5. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            
                        </div>
                        <div class="leaders_8x8_1-19">
                        
                            <div class="leaders_head">1 - 19</div>
                            
                            <div class="leaders_center">
                                <div class="leaders_name">1. asdasa</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">2. asdsssassdda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">3. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">4. asda</div><div class="leaders_time">00:02</div>
                            </div>
                            <div class="leaders_center">
                                <div class="leaders_name">5. WWWWWWWW</div><div class="leaders_time">00:02</div>
                            </div>
                            
                        </div>
                        
                    </div>
                
                    
                </div>
                
            </div>
            
            <div class="flex2">
                
                <div class="button1" onclick="back()" style="margin-right: 100px; margin-top: 0px;">MAIN MENU</div>
                
            </div>
            
            
        
        </div>
        
        <div class="plansza3">
            
            <div class="button1" onclick="back()" style="margin-top: 40px">MAIN MENU</div>
            
            <div class="rules">
            
                THE SUM OF THE SELECTED NUMBERS IN THE CIRCLES MUST BE EQUAL TO THE NUMBERS IN THE SQUARES IN THE RELEVANT COLUMNS AND ROWS<br><br>
                
                <img src="obrazy/rules1.png"><br>
                
                SELECTED NUMBERS CHANGE THE COLOR<br><br>
                
                <img src="obrazy/rules2.png"><br>
                
                IF THE SUM OF MARKED NUMBERS IN THE CIRCLES CORRESPOND TO THE SQUARE NUMBERS IN THE RELEVANT ROWS AND COLUMNS THE SQUARES WILL CHANGE THEIR COLOR<br><br>
                
                <img src="obrazy/rules3.png"><br>
                
                CHANGING THE COLOR OF THE SQUARES DOES NOT MEAN FOR CORRECT WHEELS BECAUSE DIFFERENT COMBINATIONS CAN GIVE THE SAME TOTAL<br><br>
                FOR EXAMPLE 6 + 1 = 7<br><br>
                <img src="obrazy/rules4.png"><br>
                
                AND 7 = 7<br><br>
                
                <img src="obrazy/rules5.png"><br>
                
                THE PLAYER WINS IF THE SUM OF MARKED NUMBERS IN THE CIRCLES IS EQUAL TO THE NUMBERS IN THE SQUARES IN ALL COLUMNS AND ROWS<br><br>
                
                <img src="obrazy/rules7.png"><br>
                
                THERE IS A TIMER IN THE TOP LEFT CORNER<br><br>
                
                <img src="obrazy/rules8.png"><br><br>
                
                IF YOU HAD LOW TIME YOU CAN SIGN UP TO THE LEADERS TABLE<br><br>
                
                <img src="obrazy/rules6.png"><br>
            
            </div>
            
        </div>
        
        <div class="plansza4">
            
            <h1>BOARD SIZE</h1>
            <div class="flex">
                
                
                
                <div class="button1 circle110" onmousemove="move(110)" onmouseout="out2(110)" onclick="gamesettings(110)">5 x 5</div>
                <div class="button1 circle111" onmousemove="move(111)" onmouseout="out2(111)" onclick="gamesettings(111)">6 x 6</div>
                <div class="button1 circle112" onmousemove="move(112)" onmouseout="out2(112)" onclick="gamesettings(112)">7 x 7</div>
                <div class="button1 circle113" onmousemove="move(113)" onmouseout="out2(113)" onclick="gamesettings(113)">8 x 8</div>
                
            </div>
            
            <h1>NUMBER RANGE</h1>
            <div class="flex">
                
                
                
                <div class="button1 circle100" onmousemove="move(100)" onmouseout="out2(100)" onclick="gamesettings(100)">1 - 4</div>
                <div class="button1 circle101" onmousemove="move(101)" onmouseout="out2(101)" onclick="gamesettings(101)">1 - 9</div>
                <div class="button1 circle102" onmousemove="move(102)" onmouseout="out2(102)" onclick="gamesettings(102)">1 - 19</div>
                
            </div>
            
            <div class="flex2">
                
                
                
                <div class="button1" onclick="back()">MAIN MENU</div>
                <div class="button1" onclick="start_game()">START</div>
                
            </div>
            
            
        
        </div>
        
        <div class="plansza5">
            
            <div class="tools">
                
                <div class="timer">00:00</div>
                <div class="button2 res" onclick="restart2()">START</div>
                <div class="button2" onclick="main_menu()">BACK</div>
                
                
            </div>
            
            <div class="game1">
                
                <div class="center">
                
                    <div class="sekcja1 sekcja">
                
                        <div class="square1 square"></div>
                        <div class="square2 square"></div>
                        <div class="square3 square"></div>
                        <div class="square4 square"></div>
                        <div class="square5 square"></div>

                    </div>

                    <div class="sekcja2 sekcja">

                        <div class="square6 square"></div>
                        <div class="circle1 circle" onclick="circle_click(1)" onmousemove="move(1)" onmouseout="out(1)"></div>
                        <div class="circle2 circle" onclick="circle_click(2)" onmousemove="move(2)" onmouseout="out(2)"></div>
                        <div class="circle3 circle" onclick="circle_click(3)" onmousemove="move(3)" onmouseout="out(3)"></div>
                        <div class="circle4 circle" onclick="circle_click(4)" onmousemove="move(4)" onmouseout="out(4)"></div>
                        <div class="circle5 circle" onclick="circle_click(5)" onmousemove="move(5)" onmouseout="out(5)"></div>
                        <div class="square6 square"></div>

                    </div>

                    <div class="sekcja3 sekcja">

                        <div class="square7 square"></div>
                        <div class="circle6 circle" onclick="circle_click(6)" onmousemove="move(6)" onmouseout="out(6)"></div>
                        <div class="circle7 circle" onclick="circle_click(7)" onmousemove="move(7)" onmouseout="out(7)"></div>
                        <div class="circle8 circle" onclick="circle_click(8)" onmousemove="move(8)" onmouseout="out(8)"></div>
                        <div class="circle9 circle" onclick="circle_click(9)" onmousemove="move(9)" onmouseout="out(9)"></div>
                        <div class="circle10 circle" onclick="circle_click(10)" onmousemove="move(10)" onmouseout="out(10)"></div>
                        <div class="square7 square"></div>

                    </div>

                    <div class="sekcja4 sekcja">

                        <div class="square8 square"></div>
                        <div class="circle11 circle" onclick="circle_click(11)" onmousemove="move(11)" onmouseout="out(11)"></div>
                        <div class="circle12 circle" onclick="circle_click(12)" onmousemove="move(12)" onmouseout="out(12)"></div>
                        <div class="circle13 circle" onclick="circle_click(13)" onmousemove="move(13)" onmouseout="out(13)"></div>
                        <div class="circle14 circle" onclick="circle_click(14)" onmousemove="move(14)" onmouseout="out(14)"></div>
                        <div class="circle15 circle" onclick="circle_click(15)" onmousemove="move(15)" onmouseout="out(15)"></div>
                        <div class="square8 square"></div>

                    </div>

                    <div class="sekcja5 sekcja">

                        <div class="square9 square"></div>
                        <div class="circle16 circle" onclick="circle_click(16)" onmousemove="move(16)" onmouseout="out(16)"></div>
                        <div class="circle17 circle" onclick="circle_click(17)" onmousemove="move(17)" onmouseout="out(17)"></div>
                        <div class="circle18 circle" onclick="circle_click(18)" onmousemove="move(18)" onmouseout="out(18)"></div>
                        <div class="circle19 circle" onclick="circle_click(19)" onmousemove="move(19)" onmouseout="out(19)"></div>
                        <div class="circle20 circle" onclick="circle_click(20)" onmousemove="move(20)" onmouseout="out(20)"></div>
                        <div class="square9 square"></div>

                    </div>

                    <div class="sekcja6 sekcja">

                        <div class="square10 square"></div>
                        <div class="circle21 circle" onclick="circle_click(21)" onmousemove="move(21)" onmouseout="out(21)"></div>
                        <div class="circle22 circle" onclick="circle_click(22)" onmousemove="move(22)" onmouseout="out(22)"></div>
                        <div class="circle23 circle" onclick="circle_click(23)" onmousemove="move(23)" onmouseout="out(23)"></div>
                        <div class="circle24 circle" onclick="circle_click(24)" onmousemove="move(24)" onmouseout="out(24)"></div>
                        <div class="circle25 circle" onclick="circle_click(25)" onmousemove="move(25)" onmouseout="out(25)"></div>
                        <div class="square10 square"></div>

                    </div>

                    <div class="sekcja7 sekcja">

                        <div class="square1 square"></div>
                        <div class="square2 square"></div>
                        <div class="square3 square"></div>
                        <div class="square4 square"></div>
                        <div class="square5 square"></div>

                    </div>
                    
                </div>
            
            </div>
            
            <div class="game2">
                
                <div class="center">
                
                    <div class="sekcja1 sekcja222">
                
                        <div class="square1 square222"></div>
                        <div class="square2 square222"></div>
                        <div class="square3 square222"></div>
                        <div class="square4 square222"></div>
                        <div class="square5 square222"></div>
                        <div class="square6 square222"></div>

                    </div>

                    <div class="sekcja2 sekcja222">

                        <div class="square7 square222"></div>
                        <div class="circle1 circle222" onclick="circle_click(1)" onmousemove="move(1)" onmouseout="out(1)"></div>
                        <div class="circle2 circle222" onclick="circle_click(2)" onmousemove="move(2)" onmouseout="out(2)"></div>
                        <div class="circle3 circle222" onclick="circle_click(3)" onmousemove="move(3)" onmouseout="out(3)"></div>
                        <div class="circle4 circle222" onclick="circle_click(4)" onmousemove="move(4)" onmouseout="out(4)"></div>
                        <div class="circle5 circle222" onclick="circle_click(5)" onmousemove="move(5)" onmouseout="out(5)"></div>
                        <div class="circle6 circle222" onclick="circle_click(6)" onmousemove="move(6)" onmouseout="out(6)"></div>
                        <div class="square7 square222"></div>

                    </div>

                    <div class="sekcja3 sekcja222">

                        <div class="square8 square222"></div>
                        <div class="circle7 circle222" onclick="circle_click(7)" onmousemove="move(7)" onmouseout="out(7)"></div>
                        <div class="circle8 circle222" onclick="circle_click(8)" onmousemove="move(8)" onmouseout="out(8)"></div>
                        <div class="circle9 circle222" onclick="circle_click(9)" onmousemove="move(9)" onmouseout="out(9)"></div>
                        <div class="circle10 circle222" onclick="circle_click(10)" onmousemove="move(10)" onmouseout="out(10)"></div>
                        <div class="circle11 circle222" onclick="circle_click(11)" onmousemove="move(11)" onmouseout="out(11)"></div>
                        <div class="circle12 circle222" onclick="circle_click(12)" onmousemove="move(12)" onmouseout="out(12)"></div>
                        <div class="square8 square222"></div>

                    </div>

                    <div class="sekcja4 sekcja222">

                        <div class="square9 square222"></div>
                        <div class="circle13 circle222" onclick="circle_click(13)" onmousemove="move(13)" onmouseout="out(13)"></div>
                        <div class="circle14 circle222" onclick="circle_click(14)" onmousemove="move(14)" onmouseout="out(14)"></div>
                        <div class="circle15 circle222" onclick="circle_click(15)" onmousemove="move(15)" onmouseout="out(15)"></div>
                        <div class="circle16 circle222" onclick="circle_click(16)" onmousemove="move(16)" onmouseout="out(16)"></div>
                        <div class="circle17 circle222" onclick="circle_click(17)" onmousemove="move(17)" onmouseout="out(17)"></div>
                        <div class="circle18 circle222" onclick="circle_click(18)" onmousemove="move(18)" onmouseout="out(18)"></div>
                        <div class="square9 square222"></div>

                    </div>

                    <div class="sekcja5 sekcja222">

                        <div class="square10 square222"></div>
                        <div class="circle19 circle222" onclick="circle_click(19)" onmousemove="move(19)" onmouseout="out(19)"></div>
                        <div class="circle20 circle222" onclick="circle_click(20)" onmousemove="move(20)" onmouseout="out(20)"></div>
                        <div class="circle21 circle222" onclick="circle_click(21)" onmousemove="move(21)" onmouseout="out(21)"></div>
                        <div class="circle22 circle222" onclick="circle_click(22)" onmousemove="move(22)" onmouseout="out(22)"></div>
                        <div class="circle23 circle222" onclick="circle_click(23)" onmousemove="move(23)" onmouseout="out(23)"></div>
                        <div class="circle24 circle222" onclick="circle_click(24)" onmousemove="move(24)" onmouseout="out(24)"></div>
                        <div class="square10 square222"></div>

                    </div>

                    <div class="sekcja6 sekcja222">

                        <div class="square11 square222"></div>
                        <div class="circle25 circle222" onclick="circle_click(25)" onmousemove="move(25)" onmouseout="out(25)"></div>
                        <div class="circle26 circle222" onclick="circle_click(26)" onmousemove="move(26)" onmouseout="out(26)"></div>
                        <div class="circle27 circle222" onclick="circle_click(27)" onmousemove="move(27)" onmouseout="out(27)"></div>
                        <div class="circle28 circle222" onclick="circle_click(28)" onmousemove="move(28)" onmouseout="out(28)"></div>
                        <div class="circle29 circle222" onclick="circle_click(29)" onmousemove="move(29)" onmouseout="out(29)"></div>
                        <div class="circle30 circle222" onclick="circle_click(30)" onmousemove="move(30)" onmouseout="out(30)"></div>
                        <div class="square11 square222"></div>

                    </div>
                    
                    <div class="sekcja7 sekcja222">

                        <div class="square12 square222"></div>
                        <div class="circle31 circle222" onclick="circle_click(31)" onmousemove="move(31)" onmouseout="out(31)"></div>
                        <div class="circle32 circle222" onclick="circle_click(32)" onmousemove="move(32)" onmouseout="out(32)"></div>
                        <div class="circle33 circle222" onclick="circle_click(33)" onmousemove="move(33)" onmouseout="out(33)"></div>
                        <div class="circle34 circle222" onclick="circle_click(34)" onmousemove="move(34)" onmouseout="out(34)"></div>
                        <div class="circle35 circle222" onclick="circle_click(35)" onmousemove="move(35)" onmouseout="out(35)"></div>
                        <div class="circle36 circle222" onclick="circle_click(36)" onmousemove="move(36)" onmouseout="out(36)"></div>
                        <div class="square12 square222"></div>

                    </div>

                    <div class="sekcja8 sekcja222">

                        <div class="square1 square222"></div>
                        <div class="square2 square222"></div>
                        <div class="square3 square222"></div>
                        <div class="square4 square222"></div>
                        <div class="square5 square222"></div>
                        <div class="square6 square222"></div>

                    </div>
                    
                </div>
            
            </div>
            
            <div class="game3">
                
                <div class="center">
                
                    <div class="sekcja1 sekcja333">
                
                        <div class="square1 square333"></div>
                        <div class="square2 square333"></div>
                        <div class="square3 square333"></div>
                        <div class="square4 square333"></div>
                        <div class="square5 square333"></div>
                        <div class="square6 square333"></div>
                        <div class="square7 square333"></div>

                    </div>

                    <div class="sekcja2 sekcja333">

                        <div class="square8 square333"></div>
                        <div class="circle1 circle333" onclick="circle_click(1)" onmousemove="move(1)" onmouseout="out(1)"></div>
                        <div class="circle2 circle333" onclick="circle_click(2)" onmousemove="move(2)" onmouseout="out(2)"></div>
                        <div class="circle3 circle333" onclick="circle_click(3)" onmousemove="move(3)" onmouseout="out(3)"></div>
                        <div class="circle4 circle333" onclick="circle_click(4)" onmousemove="move(4)" onmouseout="out(4)"></div>
                        <div class="circle5 circle333" onclick="circle_click(5)" onmousemove="move(5)" onmouseout="out(5)"></div>
                        <div class="circle6 circle333" onclick="circle_click(6)" onmousemove="move(6)" onmouseout="out(6)"></div>
                        <div class="circle7 circle333" onclick="circle_click(7)" onmousemove="move(7)" onmouseout="out(7)"></div>
                        <div class="square8 square333"></div>

                    </div>

                    <div class="sekcja3 sekcja333">

                        <div class="square9 square333"></div>
                        <div class="circle8 circle333" onclick="circle_click(8)" onmousemove="move(8)" onmouseout="out(8)"></div>
                        <div class="circle9 circle333" onclick="circle_click(9)" onmousemove="move(9)" onmouseout="out(9)"></div>
                        <div class="circle10 circle333" onclick="circle_click(10)" onmousemove="move(10)" onmouseout="out(10)"></div>
                        <div class="circle11 circle333" onclick="circle_click(11)" onmousemove="move(11)" onmouseout="out(11)"></div>
                        <div class="circle12 circle333" onclick="circle_click(12)" onmousemove="move(12)" onmouseout="out(12)"></div>
                        <div class="circle13 circle333" onclick="circle_click(13)" onmousemove="move(13)" onmouseout="out(13)"></div>
                        <div class="circle14 circle333" onclick="circle_click(14)" onmousemove="move(14)" onmouseout="out(14)"></div>
                        <div class="square9 square333"></div>

                    </div>

                    <div class="sekcja4 sekcja333">

                        <div class="square10 square333"></div>
                        <div class="circle15 circle333" onclick="circle_click(15)" onmousemove="move(15)" onmouseout="out(15)"></div>
                        <div class="circle16 circle333" onclick="circle_click(16)" onmousemove="move(16)" onmouseout="out(16)"></div>
                        <div class="circle17 circle333" onclick="circle_click(17)" onmousemove="move(17)" onmouseout="out(17)"></div>
                        <div class="circle18 circle333" onclick="circle_click(18)" onmousemove="move(18)" onmouseout="out(18)"></div>
                        <div class="circle19 circle333" onclick="circle_click(19)" onmousemove="move(19)" onmouseout="out(19)"></div>
                        <div class="circle20 circle333" onclick="circle_click(20)" onmousemove="move(20)" onmouseout="out(20)"></div>
                        <div class="circle21 circle333" onclick="circle_click(21)" onmousemove="move(21)" onmouseout="out(21)"></div>
                        <div class="square10 square333"></div>

                    </div>

                    <div class="sekcja5 sekcja333">

                        <div class="square11 square333"></div>
                        <div class="circle22 circle333" onclick="circle_click(22)" onmousemove="move(22)" onmouseout="out(22)"></div>
                        <div class="circle23 circle333" onclick="circle_click(23)" onmousemove="move(23)" onmouseout="out(23)"></div>
                        <div class="circle24 circle333" onclick="circle_click(24)" onmousemove="move(24)" onmouseout="out(24)"></div>
                        <div class="circle25 circle333" onclick="circle_click(25)" onmousemove="move(25)" onmouseout="out(25)"></div>
                        <div class="circle26 circle333" onclick="circle_click(26)" onmousemove="move(26)" onmouseout="out(26)"></div>
                        <div class="circle27 circle333" onclick="circle_click(27)" onmousemove="move(27)" onmouseout="out(27)"></div>
                        <div class="circle28 circle333" onclick="circle_click(28)" onmousemove="move(28)" onmouseout="out(28)"></div>
                        <div class="square11 square333"></div>

                    </div>

                    <div class="sekcja6 sekcja333">

                        <div class="square12 square333"></div>
                        <div class="circle29 circle333" onclick="circle_click(29)" onmousemove="move(29)" onmouseout="out(29)"></div>
                        <div class="circle30 circle333" onclick="circle_click(30)" onmousemove="move(30)" onmouseout="out(30)"></div>
                        <div class="circle31 circle333" onclick="circle_click(31)" onmousemove="move(31)" onmouseout="out(31)"></div>
                        <div class="circle32 circle333" onclick="circle_click(32)" onmousemove="move(32)" onmouseout="out(32)"></div>
                        <div class="circle33 circle333" onclick="circle_click(33)" onmousemove="move(33)" onmouseout="out(33)"></div>
                        <div class="circle34 circle333" onclick="circle_click(34)" onmousemove="move(34)" onmouseout="out(34)"></div>
                        <div class="circle35 circle333" onclick="circle_click(35)" onmousemove="move(35)" onmouseout="out(35)"></div>
                        <div class="square12 square333"></div>

                    </div>
                    
                    <div class="sekcja7 sekcja333">

                        <div class="square13 square333"></div>
                        <div class="circle36 circle333" onclick="circle_click(36)" onmousemove="move(36)" onmouseout="out(36)"></div>
                        <div class="circle37 circle333" onclick="circle_click(37)" onmousemove="move(37)" onmouseout="out(37)"></div>
                        <div class="circle38 circle333" onclick="circle_click(38)" onmousemove="move(38)" onmouseout="out(38)"></div>
                        <div class="circle39 circle333" onclick="circle_click(39)" onmousemove="move(39)" onmouseout="out(39)"></div>
                        <div class="circle40 circle333" onclick="circle_click(40)" onmousemove="move(40)" onmouseout="out(40)"></div>
                        <div class="circle41 circle333" onclick="circle_click(41)" onmousemove="move(41)" onmouseout="out(41)"></div>
                        <div class="circle42 circle333" onclick="circle_click(42)" onmousemove="move(42)" onmouseout="out(42)"></div>
                        <div class="square13 square333"></div>

                    </div>
                    
                    <div class="sekcja7 sekcja333">

                        <div class="square14 square333"></div>
                        <div class="circle43 circle333" onclick="circle_click(43)" onmousemove="move(43)" onmouseout="out(43)"></div>
                        <div class="circle44 circle333" onclick="circle_click(44)" onmousemove="move(44)" onmouseout="out(44)"></div>
                        <div class="circle45 circle333" onclick="circle_click(45)" onmousemove="move(45)" onmouseout="out(45)"></div>
                        <div class="circle46 circle333" onclick="circle_click(46)" onmousemove="move(46)" onmouseout="out(46)"></div>
                        <div class="circle47 circle333" onclick="circle_click(47)" onmousemove="move(47)" onmouseout="out(47)"></div>
                        <div class="circle48 circle333" onclick="circle_click(48)" onmousemove="move(48)" onmouseout="out(48)"></div>
                        <div class="circle49 circle333" onclick="circle_click(49)" onmousemove="move(49)" onmouseout="out(49)"></div>
                        <div class="square14 square333"></div>

                    </div>

                    <div class="sekcja8 sekcja333">

                        <div class="square1 square333"></div>
                        <div class="square2 square333"></div>
                        <div class="square3 square333"></div>
                        <div class="square4 square333"></div>
                        <div class="square5 square333"></div>
                        <div class="square6 square333"></div>
                        <div class="square7 square333"></div>

                    </div>
                    
                </div>
            
            </div>
            
            <div class="game4">
                
                <div class="center">
                
                    <div class="sekcja1 sekcja444">
                
                        <div class="square1 square444"></div>
                        <div class="square2 square444"></div>
                        <div class="square3 square444"></div>
                        <div class="square4 square444"></div>
                        <div class="square5 square444"></div>
                        <div class="square6 square444"></div>
                        <div class="square7 square444"></div>
                        <div class="square8 square444"></div>

                    </div>

                    <div class="sekcja2 sekcja444">

                        <div class="square9 square444"></div>
                        <div class="circle1 circle444" onclick="circle_click(1)" onmousemove="move(1)" onmouseout="out(1)"></div>
                        <div class="circle2 circle444" onclick="circle_click(2)" onmousemove="move(2)" onmouseout="out(2)"></div>
                        <div class="circle3 circle444" onclick="circle_click(3)" onmousemove="move(3)" onmouseout="out(3)"></div>
                        <div class="circle4 circle444" onclick="circle_click(4)" onmousemove="move(4)" onmouseout="out(4)"></div>
                        <div class="circle5 circle444" onclick="circle_click(5)" onmousemove="move(5)" onmouseout="out(5)"></div>
                        <div class="circle6 circle444" onclick="circle_click(6)" onmousemove="move(6)" onmouseout="out(6)"></div>
                        <div class="circle7 circle444" onclick="circle_click(7)" onmousemove="move(7)" onmouseout="out(7)"></div>
                        <div class="circle8 circle444" onclick="circle_click(8)" onmousemove="move(8)" onmouseout="out(8)"></div>
                        <div class="square9 square444"></div>

                    </div>

                    <div class="sekcja3 sekcja444">

                        <div class="square10 square444"></div>
                        <div class="circle9 circle444" onclick="circle_click(9)" onmousemove="move(9)" onmouseout="out(9)"></div>
                        <div class="circle10 circle444" onclick="circle_click(10)" onmousemove="move(10)" onmouseout="out(10)"></div>
                        <div class="circle11 circle444" onclick="circle_click(11)" onmousemove="move(11)" onmouseout="out(11)"></div>
                        <div class="circle12 circle444" onclick="circle_click(12)" onmousemove="move(12)" onmouseout="out(12)"></div>
                        <div class="circle13 circle444" onclick="circle_click(13)" onmousemove="move(13)" onmouseout="out(13)"></div>
                        <div class="circle14 circle444" onclick="circle_click(14)" onmousemove="move(14)" onmouseout="out(14)"></div>
                        <div class="circle15 circle444" onclick="circle_click(15)" onmousemove="move(15)" onmouseout="out(15)"></div>
                        <div class="circle16 circle444" onclick="circle_click(16)" onmousemove="move(16)" onmouseout="out(16)"></div>
                        <div class="square10 square444"></div>

                    </div>

                    <div class="sekcja4 sekcja444">

                        <div class="square11 square444"></div>
                        <div class="circle17 circle444" onclick="circle_click(17)" onmousemove="move(17)" onmouseout="out(17)"></div>
                        <div class="circle18 circle444" onclick="circle_click(18)" onmousemove="move(18)" onmouseout="out(18)"></div>
                        <div class="circle19 circle444" onclick="circle_click(19)" onmousemove="move(19)" onmouseout="out(19)"></div>
                        <div class="circle20 circle444" onclick="circle_click(20)" onmousemove="move(20)" onmouseout="out(20)"></div>
                        <div class="circle21 circle444" onclick="circle_click(21)" onmousemove="move(21)" onmouseout="out(21)"></div>
                        <div class="circle22 circle444" onclick="circle_click(22)" onmousemove="move(22)" onmouseout="out(22)"></div>
                        <div class="circle23 circle444" onclick="circle_click(23)" onmousemove="move(23)" onmouseout="out(23)"></div>
                        <div class="circle24 circle444" onclick="circle_click(24)" onmousemove="move(24)" onmouseout="out(24)"></div>
                        <div class="square11 square444"></div>

                    </div>

                    <div class="sekcja5 sekcja444">

                        <div class="square12 square444"></div>
                        <div class="circle25 circle444" onclick="circle_click(25)" onmousemove="move(25)" onmouseout="out(25)"></div>
                        <div class="circle26 circle444" onclick="circle_click(26)" onmousemove="move(26)" onmouseout="out(26)"></div>
                        <div class="circle27 circle444" onclick="circle_click(27)" onmousemove="move(27)" onmouseout="out(27)"></div>
                        <div class="circle28 circle444" onclick="circle_click(28)" onmousemove="move(28)" onmouseout="out(28)"></div>
                        <div class="circle29 circle444" onclick="circle_click(29)" onmousemove="move(29)" onmouseout="out(29)"></div>
                        <div class="circle30 circle444" onclick="circle_click(30)" onmousemove="move(30)" onmouseout="out(30)"></div>
                        <div class="circle31 circle444" onclick="circle_click(31)" onmousemove="move(31)" onmouseout="out(31)"></div>
                        <div class="circle32 circle444" onclick="circle_click(32)" onmousemove="move(32)" onmouseout="out(32)"></div>
                        <div class="square12 square444"></div>

                    </div>

                    <div class="sekcja6 sekcja444">

                        <div class="square13 square444"></div>
                        <div class="circle33 circle444" onclick="circle_click(33)" onmousemove="move(33)" onmouseout="out(33)"></div>
                        <div class="circle34 circle444" onclick="circle_click(34)" onmousemove="move(34)" onmouseout="out(34)"></div>
                        <div class="circle35 circle444" onclick="circle_click(35)" onmousemove="move(35)" onmouseout="out(35)"></div>
                        <div class="circle36 circle444" onclick="circle_click(36)" onmousemove="move(36)" onmouseout="out(36)"></div>
                        <div class="circle37 circle444" onclick="circle_click(37)" onmousemove="move(37)" onmouseout="out(37)"></div>
                        <div class="circle38 circle444" onclick="circle_click(38)" onmousemove="move(38)" onmouseout="out(38)"></div>
                        <div class="circle39 circle444" onclick="circle_click(39)" onmousemove="move(39)" onmouseout="out(39)"></div>
                        <div class="circle40 circle444" onclick="circle_click(40)" onmousemove="move(40)" onmouseout="out(40)"></div>
                        <div class="square13 square444"></div>

                    </div>
                    
                    <div class="sekcja7 sekcja444">

                        <div class="square14 square444"></div>
                        <div class="circle41 circle444" onclick="circle_click(41)" onmousemove="move(41)" onmouseout="out(41)"></div>
                        <div class="circle42 circle444" onclick="circle_click(42)" onmousemove="move(42)" onmouseout="out(42)"></div>
                        <div class="circle43 circle444" onclick="circle_click(43)" onmousemove="move(43)" onmouseout="out(43)"></div>
                        <div class="circle44 circle444" onclick="circle_click(44)" onmousemove="move(44)" onmouseout="out(44)"></div>
                        <div class="circle45 circle444" onclick="circle_click(45)" onmousemove="move(45)" onmouseout="out(45)"></div>
                        <div class="circle46 circle444" onclick="circle_click(46)" onmousemove="move(46)" onmouseout="out(46)"></div>
                        <div class="circle47 circle444" onclick="circle_click(47)" onmousemove="move(47)" onmouseout="out(47)"></div>
                        <div class="circle48 circle444" onclick="circle_click(48)" onmousemove="move(48)" onmouseout="out(48)"></div>
                        <div class="square14 square444"></div>

                    </div>
                    
                    <div class="sekcja7 sekcja444">

                        <div class="square15 square444"></div>
                        <div class="circle49 circle444" onclick="circle_click(49)" onmousemove="move(49)" onmouseout="out(49)"></div>
                        <div class="circle50 circle444" onclick="circle_click(50)" onmousemove="move(50)" onmouseout="out(50)"></div>
                        <div class="circle51 circle444" onclick="circle_click(51)" onmousemove="move(51)" onmouseout="out(51)"></div>
                        <div class="circle52 circle444" onclick="circle_click(52)" onmousemove="move(52)" onmouseout="out(52)"></div>
                        <div class="circle53 circle444" onclick="circle_click(53)" onmousemove="move(53)" onmouseout="out(53)"></div>
                        <div class="circle54 circle444" onclick="circle_click(54)" onmousemove="move(54)" onmouseout="out(54)"></div>
                        <div class="circle55 circle444" onclick="circle_click(55)" onmousemove="move(55)" onmouseout="out(55)"></div>
                        <div class="circle56 circle444" onclick="circle_click(56)" onmousemove="move(56)" onmouseout="out(56)"></div>
                        <div class="square15 square444"></div>

                    </div>
                    
                    <div class="sekcja8 sekcja444">

                        <div class="square16 square444"></div>
                        <div class="circle57 circle444" onclick="circle_click(57)" onmousemove="move(57)" onmouseout="out(57)"></div>
                        <div class="circle58 circle444" onclick="circle_click(58)" onmousemove="move(58)" onmouseout="out(58)"></div>
                        <div class="circle59 circle444" onclick="circle_click(59)" onmousemove="move(59)" onmouseout="out(59)"></div>
                        <div class="circle60 circle444" onclick="circle_click(60)" onmousemove="move(60)" onmouseout="out(60)"></div>
                        <div class="circle61 circle444" onclick="circle_click(61)" onmousemove="move(61)" onmouseout="out(61)"></div>
                        <div class="circle62 circle444" onclick="circle_click(62)" onmousemove="move(62)" onmouseout="out(62)"></div>
                        <div class="circle63 circle444" onclick="circle_click(63)" onmousemove="move(63)" onmouseout="out(63)"></div>
                        <div class="circle64 circle444" onclick="circle_click(64)" onmousemove="move(64)" onmouseout="out(64)"></div>
                        <div class="square16 square444"></div>

                    </div>


                    <div class="sekcja9 sekcja444">

                        <div class="square1 square444"></div>
                        <div class="square2 square444"></div>
                        <div class="square3 square444"></div>
                        <div class="square4 square444"></div>
                        <div class="square5 square444"></div>
                        <div class="square6 square444"></div>
                        <div class="square7 square444"></div>
                        <div class="square8 square444"></div>

                    </div>
                    
                </div>
            
            </div>
        
        </div>
        
        <div class="winner winner1">
        
            <div class="winner_center">CONGRATULATIONS</div>
            <div class="winner_description">YOU TOOK <span class="winner_place">5TH</span> PLACE ON THE LEADERBOARD<br>PLEASE ENTER YOUR NAME</div>
            <div class="winner_flex">
            <input class="winner_name" maxlength="8" type="text" onblur="blurr()" onfocus="focuss()">
            <div class="winner_close button1" onclick="winner1_click()">OK</div>
            </div>
    
        </div>
        
        <div class="winner winner2">
        
            <div class="winner_center">YOUR TIME - <span class="winner_time">00:00</span></div>
            <div class="winner_description">YOUR TIME IS TOO LARGE TO GET ON THE<br> LEADERBOARD</div>
            <div class="winner_flex">
            <div class="winner_close button1 winner_close2" onclick="winner2_click()">OK</div>
            </div>
    
        </div>
        
    </div>
    
    <div class="volume"><i class="fas fa-volume-down" onclick="volume()"></i></div>
    
    <div class="footer">DOMINIK BIRAK - ALL RIGHTS RESERVED</div>
    
    <div class="zoom"><i class="fa-solid fa-magnifying-glass-minus" onclick="zoom(-1)"></i><i class="fa-solid fa-magnifying-glass-plus" onclick="zoom(1)"></i></div>
 
</body>
</html>