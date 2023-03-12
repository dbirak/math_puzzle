var setup = true;
var vol = true;
var song1 = document.createElement('audio');
var song2 = document.createElement('audio');
var song3 = document.createElement('audio');
var song4 = document.createElement('audio');

var N;
var V;
var wylosowane;
var suma;
var suma2;
var trafione;
var zaznaczone;
var poziomo;
var pionowo = 0;
var game_num;
var time;
var s,t;
var time_start = false;
var minuty = 0, sekundy = 0;
var checked_name = false;
var name;
var zoom_level = 0;
var zoom_value = 1;

var board_size = [];
var number_range = [];
var board_size2 = [];

function start()
{
    if(setup == true)
    {
		var leader;
    
		$.ajax({
			
			url: "leaderboards.php",
			method: "POST",
			data:{input:leader},
			
			success:function(data){
				$(".leaders").html(data);
			}
		});
		
		
        song1.setAttribute('src', 'muzyka/button_on.wav');
        song2.setAttribute('src', 'muzyka/button_off.wav');
        song3.setAttribute('src', 'muzyka/button1.wav');
        song4.setAttribute('src', 'muzyka/win.wav');
        
        board_size[0] = true;
        number_range[0] = true;
        board_size2[0] = true;

        for(let i=1; i<4; i++)
        {
            board_size[i] = false;

            $('.circle'+(i+110)).css("background-color", "transparent");
            $('.circle'+(i+110)).css("color", "#40434f");
            $('.circle'+(i+110)).css("border-color", "#40434f");

            out2(i+110);
        }

        for(let i=1; i<3; i++)
        {
            number_range[i] = false;

            $('.circle'+(i+100)).css("background-color", "transparent");
            $('.circle'+(i+100)).css("color", "#40434f");
            $('.circle'+(i+100)).css("border-color", "#40434f");

            out2(i+100);
        }
        
        for(let i=1; i<4; i++)
        {
            board_size2[i] = false;

            $('.circle'+(i+120)).css("background-color", "transparent");
            $('.circle'+(i+120)).css("color", "#40434f");
            $('.circle'+(i+120)).css("border-color", "#40434f");

            out2(i+120);
        }

        $('.circle100').css("background-color", "#e1134d");
        $('.circle100').css("color", "white");
        $('.circle100').css("border-color", "white");

        $('.circle110').css("background-color", "#e1134d");
        $('.circle110').css("color", "white");
        $('.circle110').css("border-color", "white");
        
        $('.circle120').css("background-color", "#e1134d");
        $('.circle120').css("color", "white");
        $('.circle120').css("border-color", "white");
        
        setup = false;
    }
}

function volume()
{
    if(vol == true)
    {
        $('.fa-volume-down').css("color", "#40434f");
        
        vol = false;
    }
    
    else if(vol == false)
    {
        $('.fa-volume-down').css("color", "white");
        
        vol = true;
    }
}

function back()
{
    if(vol == true) song3.play();
    $('.plansza1').css("transform", "translateX(0px)");
    $('.plansza2').css("transform", "translateX(-1000px)");
    $('.plansza4').css("transform", "translateX(1000px)");
    $('.plansza5').css("transform", "translateX(2000px)");
    $('.plansza3').css("transform", "translate(0px,650px)");
    
    setTimeout(function(){
        
        $('.circle120').css("background-color", "#e1134d");
            $('.circle120').css("color", "white");
            $('.circle120').css("border-color", "white");

            for(let i=1; i<board_size2.length; i++)
            {
                    board_size2[i] = false;
                
                    $('.circle'+(i+120)).css("background-color", "transparent");
                    $('.circle'+(i+120)).css("color", "#40434f");
                    $('.circle'+(i+120)).css("border-color");
                
                    out2(i+120);
            }
            
            board_size2[0] = true;

                $('.leaders_5x5').css("transform", "translateX(0px)");
                $('.leaders_6x6').css("transform", "translateX(930px)");
                $('.leaders_7x7').css("transform", "translateX(1860px)");
                $('.leaders_8x8').css("transform", "translateX(2790px)");
        
    },1300); 
}

function gamesettings(num)
{
    if(num > 99 && num < 103)
    {
        if(number_range[num-100] == false)
        {
            $('.circle'+num).css("background-color", "#e1134d");
            $('.circle'+num).css("color", "white");
            $('.circle'+num).css("border-color", "white");

            for(let i=0; i<number_range.length; i++)
            {
                if(num != i+100) 
                {
                    number_range[i] = false;
                
                    $('.circle'+(i+100)).css("background-color", "transparent");
                    $('.circle'+(i+100)).css("color", "#40434f");
                    $('.circle'+(i+100)).css("border-color", "#40434f");
                
                }
            }
            
            number_range[num-100] = true;
            
            if(vol == true) song3.play();

        }
    }
    
    if(num > 109 && num < 114)
    {
        if(board_size[num-110] == false)
        {
            $('.circle'+num).css("background-color", "#e1134d");
            $('.circle'+num).css("color", "white");
            $('.circle'+num).css("border-color", "white");

            for(let i=0; i<board_size.length; i++)
            {
                if(num != i+110) 
                {
                    board_size[i] = false;
                
                    $('.circle'+(i+110)).css("background-color", "transparent");
                    $('.circle'+(i+110)).css("color", "#40434f");
                    $('.circle'+(i+110)).css("border-color", "#40434f");
                
                }
            }
            
            board_size[num-110] = true;
            
            if(vol == true) song3.play();

        }
    }
    
    if(num > 119 && num < 124)
    {
        if(board_size2[num-120] == false)
        {
            $('.circle'+num).css("background-color", "#e1134d");
            $('.circle'+num).css("color", "white");
            $('.circle'+num).css("border-color", "white");

            for(let i=0; i<board_size2.length; i++)
            {
                if(num != i+120) 
                {
                    board_size2[i] = false;
                
                    $('.circle'+(i+120)).css("background-color", "transparent");
                    $('.circle'+(i+120)).css("color", "#40434f");
                    $('.circle'+(i+120)).css("border-color", "#40434f");
                
                }
            }
            
            board_size2[num-120] = true;
            
            if(num == 120)
            {
                $('.leaders_5x5').css("transform", "translateX(0px)");
                $('.leaders_6x6').css("transform", "translateX(930px)");
                $('.leaders_7x7').css("transform", "translateX(1860px)");
                $('.leaders_8x8').css("transform", "translateX(2790px)");
            }
            else if(num == 121)
            {
                $('.leaders_5x5').css("transform", "translateX(-930px)");
                $('.leaders_6x6').css("transform", "translateX(0px)");
                $('.leaders_7x7').css("transform", "translateX(930px)");
                $('.leaders_8x8').css("transform", "translateX(1860px)");
                
            }
            else if(num == 122)
            {
                $('.leaders_5x5').css("transform", "translateX(-1860px)");
                $('.leaders_6x6').css("transform", "translateX(-930px)");
                $('.leaders_7x7').css("transform", "translateX(0px)");
                $('.leaders_8x8').css("transform", "translateX(930px)");
                
            }
            else if(num == 123)
            {
                $('.leaders_5x5').css("transform", "translateX(-2790px)");
                $('.leaders_6x6').css("transform", "translateX(-1860px)");
                $('.leaders_7x7').css("transform", "translateX(-930px)");
                $('.leaders_8x8').css("transform", "translateX(0px)");
                
            }
            
            if(vol == true) song3.play();

        }
    }
}

function newgame()
{ 
    if(vol == true) song3.play();
    $('.plansza1').css("transform", "translateX(-1000px)");
    $('.plansza2').css("transform", "translateX(-2000px)");
    $('.plansza4').css("transform", "translateX(0px)");
    $('.plansza5').css("transform", "translateX(1000px)");
    $('.plansza3').css("transform", "translate(-1000px,650px)");
}

function rules()
{
    if(vol == true) song3.play();
    $('.plansza1').css("transform", "translate(0px, -650px)");
    $('.plansza2').css("transform", "translate(-1000px,-650px)");
    $('.plansza5').css("transform", "translate(2000px,-650px)");
    $('.plansza4').css("transform", "translate(1000px,-650px)");
    $('.plansza3').css("transform", "translate(0px,0px)");
}

function leaderboards()
{
    var leader;
    
    $.ajax({
        
        url: "leaderboards.php",
        method: "POST",
        data:{input:leader},
        
        success:function(data){
            $(".leaders").html(data);
        }
    });
    
    if(vol == true) song3.play();
    $('.plansza1').css("transform", "translateX(1000px)");
    $('.plansza2').css("transform", "translateX(0px)");
    $('.plansza4').css("transform", "translateX(2000px)");
    $('.plansza5').css("transform", "translateX(3000px)");
    $('.plansza3').css("transform", "translate(1000px,650px)");
}

function restart2()
{
    if(vol == true) song3.play();
    
    $('.res').html("RESTART");
    $('.game1').css("pointer-events", "all");
    
    t = "00:00";
    time = 0;
    sekundy = 0;
    minuty = 0;
    clearTimeout(s);
    $('.timer').html("00:00");
    
    if(game_num == 1) 
    {
        $('.game1').css("pointer-events", "all");
        res_for_5();
    }
    
    else if(game_num == 2)
    {
        $('.game2').css("pointer-events", "all");
        res_for_6();
    }
    
    else if(game_num == 3)
    {
        $('.game3').css("pointer-events", "all");
        res_for_7();
    }
    
    else if(game_num == 4)
    {
        $('.game4').css("pointer-events", "all");
        res_for_8();
    }
    
    time_start = true;
    if(time_start) s = setTimeout(timer, 1000);
    start = true;
}

function timer()
{
    time++;
    sekundy++;
    
    if(sekundy >= 60)
    {
        sekundy = 0;
        minuty++;
    }
    
    if(minuty <= 9) t = "0"+minuty+":";
    else t = minuty+":";
    
    if(sekundy <= 9) t += "0"+sekundy;
    else t += sekundy;
    
    $('.timer').html(t);
    
    s = setTimeout(timer, 1000);
}

function main_menu()
{
    if(vol == true) song3.play();
    time_start = false;
    clearTimeout(s);
    newgame();
}

function start_game()
{
    $('.res').html("START");
    $('.game1').css("pointer-events", "none");
    $('.game2').css("pointer-events", "none");
    $('.game3').css("pointer-events", "none");
    $('.game4').css("pointer-events", "none");
    
    $('.timer').html("00:00");
    
    if(board_size[0] == true)
    {
        N = 5;
        game_num = 1;
        $('.game1').css("transform", "translateY(0px)");
        $('.game2').css("transform", "translateY(-653px)");
        $('.game3').css("transform", "translateY(-653px)");
        $('.game4').css("transform", "translateY(-653px)");
    }
    else if(board_size[1] == true)
    {
        N = 6;
        game_num = 2;
        $('.game1').css("transform", "translateY(-653px)");
        $('.game2').css("transform", "translateY(0px)");
        $('.game3').css("transform", "translateY(-653px)");
        $('.game4').css("transform", "translateY(-653px)");
    }
    else if(board_size[2] == true)
    {
        N = 7;
        game_num = 3;
        $('.game1').css("transform", "translateY(-653px)");
        $('.game2').css("transform", "translateY(-653px)");
        $('.game3').css("transform", "translateY(0px)");
        $('.game4').css("transform", "translateY(-653px)");
    }
    else if(board_size[3] == true)
    {
        N = 8;
        game_num = 4;
        $('.game1').css("transform", "translateY(-653px)");
        $('.game2').css("transform", "translateY(-653px)");
        $('.game3').css("transform", "translateY(-653px)");
        $('.game4').css("transform", "translateY(0px)");
    }
    
    if(number_range[0] == true) V=4;
    else if(number_range[1] == true) V=9;
    else if(number_range[2] == true) V=19;
    
    wylosowane = new Array(N*N);
    suma = new Array(N*2);
    suma2 = new Array(N*2);
    trafione = new Array(N*N);
    zaznaczone = new Array(N*N);
    poziomo = N;
    
    for(let i=0; i<=wylosowane.length; i++)
    {
        $('.circle'+i).html("");
        $('.circle'+i).css("background-color", "transparent");
        $('.circle'+i).css("color", "#40434f");
        $('.circle'+i).css("border-color", "#40434f");
    }
    
    for(let i=0; i<=suma.length; i++)
    {
        $('.square'+i).html("");
        $('.square'+i).css("border-color", "#40434f");
        $('.square'+i).css("color", "white");
    }
    
    if(vol == true) song3.play();
    
    $('.plansza1').css("transform", "translateX(-2000px)");
    $('.plansza2').css("transform", "translateX(-3000px)");
    $('.plansza4').css("transform", "translateX(-1000px)");
    $('.plansza5').css("transform", "translateX(0px)");
}

function res_for_5()
{
    for(let i=1; i<=N*N; i++)
    {
        wylosowane[i-1] = Math.floor(Math.random() * V) + 1;
        
        $('.circle'+i).css("background-color", "transparent");
        $('.circle'+i).css("border-color", "#40434f");
        $('.circle'+i).css("color", "#40434f");
        
        $('.circle'+i).html(wylosowane[i-1]);
    }
    
    for(let i=1; i<=N*N; i++)
    {
        trafione[i-1] = false;
        zaznaczone[i-1] = false;
    }
    
    for(let i=1; i<=N*2; i++)
    {
        suma[i-1] = 0;
        suma2[i-1] = 0;
        
        $('.square'+i).css("border-color", "#40434f");
        $('.square'+i).css("color", "white");
    }
    
    for(let i=1; i<=N*N; i=i+N)
    {
        let checker = false;
        
        while(checker == false)
        {
            let losowa1 = Math.floor(Math.random() * 2) + 1;
            let losowa2 = Math.floor(Math.random() * 2) + 1;
            let losowa3 = Math.floor(Math.random() * 2) + 1;
            let losowa4 = Math.floor(Math.random() * 2) + 1;
            let losowa5 = Math.floor(Math.random() * 2) + 1;
            
            if(losowa1 != 1 || losowa2 != 1 || losowa3 != 1 || losowa4 != 1 || losowa5 != 1) 
            {
                checker = true;
                
                if(losowa1 == 2) trafione[i-1] = true;
                if(losowa2 == 2) trafione[i] = true;
                if(losowa3 == 2) trafione[i+1] = true;
                if(losowa4 == 2) trafione[i+2] = true;
                if(losowa5 == 2) trafione[i+3] = true; 
            }
        }
    }
    
    for(let i=1; i<=N*N; i=i+N)
    {
        if(trafione[i-1] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i)).html());
        
        if(trafione[i] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+1)).html());
        
        if(trafione[i+1] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+2)).html());
        
        if(trafione[i+2] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+3)).html());
        
        if(trafione[i+3] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+4)).html());
        
        poziomo++;
    }
    
    for(let i=1; i<=N; i++)
    {
        if(trafione[i-1] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i)).html());
        
        if(trafione[i+4] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+5)).html());
        
        if(trafione[i+9] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+10)).html());
        
        if(trafione[i+14] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+15)).html());
        
        if(trafione[i+19] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+20)).html());
        
        pionowo++;
    }
    
    $('.square1').html(suma[0]);
    $('.square2').html(suma[1]);
    $('.square3').html(suma[2]);
    $('.square4').html(suma[3]);
    $('.square5').html(suma[4]);
    $('.square6').html(suma[5]);
    $('.square7').html(suma[6]);
    $('.square8').html(suma[7]);
    $('.square9').html(suma[8]);
    $('.square10').html(suma[9]);
    
    poziomo = N;
    pionowo = 0;
    
    let restart = suma.some(function(el) {
    return el == 0});
    
    if(restart == true) res_for_5();
}

function res_for_6()
{
    for(let i=1; i<=N*N; i++)
    {
        wylosowane[i-1] = Math.floor(Math.random() * V) + 1;
        
        $('.circle'+i).css("background-color", "transparent");
        $('.circle'+i).css("border-color", "#40434f");
        $('.circle'+i).css("color", "#40434f");
        
        $('.circle'+i).html(wylosowane[i-1]);
    }
    
    for(let i=1; i<=N*N; i++)
    {
        trafione[i-1] = false;
        zaznaczone[i-1] = false;
    }
    
    for(let i=1; i<=N*2; i++)
    {
        suma[i-1] = 0;
        suma2[i-1] = 0;
        
        $('.square'+i).css("border-color", "#40434f");
        $('.square'+i).css("color", "white");
    }
    
    for(let i=1; i<=N*N; i=i+N)
    {
        let checker = false;
        
        while(checker == false)
        {
            let losowa1 = Math.floor(Math.random() * 2) + 1;
            let losowa2 = Math.floor(Math.random() * 2) + 1;
            let losowa3 = Math.floor(Math.random() * 2) + 1;
            let losowa4 = Math.floor(Math.random() * 2) + 1;
            let losowa5 = Math.floor(Math.random() * 2) + 1;
            let losowa6 = Math.floor(Math.random() * 2) + 1;
            
            if(losowa1 != 1 || losowa2 != 1 || losowa3 != 1 || losowa4 != 1 || losowa5 != 1 || losowa6 != 1) 
            {
                checker = true;
                
                if(losowa1 == 2) trafione[i-1] = true;
                if(losowa2 == 2) trafione[i] = true;
                if(losowa3 == 2) trafione[i+1] = true;
                if(losowa4 == 2) trafione[i+2] = true;
                if(losowa5 == 2) trafione[i+3] = true;
                if(losowa6 == 2) trafione[i+4] = true; 
            }
        }
    }
    
    for(let i=1; i<=N*N; i=i+N)
    {
        if(trafione[i-1] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i)).html());
        
        if(trafione[i] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+1)).html());
        
        if(trafione[i+1] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+2)).html());
        
        if(trafione[i+2] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+3)).html());
        
        if(trafione[i+3] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+4)).html());
        
        if(trafione[i+4] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+5)).html());
        
        poziomo++;
    }
    
    for(let i=1; i<=N; i++)
    {
        if(trafione[i-1] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i)).html());
        
        if(trafione[i+5] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+6)).html());
        
        if(trafione[i+11] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+12)).html());
        
        if(trafione[i+17] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+18)).html());
        
        if(trafione[i+23] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+24)).html());
        
        if(trafione[i+29] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+30)).html());
        
        pionowo++;
    }
    
    $('.square1').html(suma[0]);
    $('.square2').html(suma[1]);
    $('.square3').html(suma[2]);
    $('.square4').html(suma[3]);
    $('.square5').html(suma[4]);
    $('.square6').html(suma[5]);
    $('.square7').html(suma[6]);
    $('.square8').html(suma[7]);
    $('.square9').html(suma[8]);
    $('.square10').html(suma[9]);
    $('.square11').html(suma[10]);
    $('.square12').html(suma[11]);
    
    poziomo = N;
    pionowo = 0;
    
    let restart = suma.some(function(el) {
    return el == 0});
    
    if(restart == true) res_for_6();
}

function res_for_7()
{
    for(let i=1; i<=N*N; i++)
    {
        wylosowane[i-1] = Math.floor(Math.random() * V) + 1;
        
        $('.circle'+i).css("background-color", "transparent");
        $('.circle'+i).css("border-color", "#40434f");
        $('.circle'+i).css("color", "#40434f");
        
        $('.circle'+i).html(wylosowane[i-1]);
    }
    
    for(let i=1; i<=N*N; i++)
    {
        trafione[i-1] = false;
        zaznaczone[i-1] = false;
    }
    
    for(let i=1; i<=N*2; i++)
    {
        suma[i-1] = 0;
        suma2[i-1] = 0;
        
        $('.square'+i).css("border-color", "#40434f");
        $('.square'+i).css("color", "white");
    }
    
    for(let i=1; i<=N*N; i=i+N)
    {
        let checker = false;
        
        while(checker == false)
        {
            let losowa1 = Math.floor(Math.random() * 2) + 1;
            let losowa2 = Math.floor(Math.random() * 2) + 1;
            let losowa3 = Math.floor(Math.random() * 2) + 1;
            let losowa4 = Math.floor(Math.random() * 2) + 1;
            let losowa5 = Math.floor(Math.random() * 2) + 1;
            let losowa6 = Math.floor(Math.random() * 2) + 1;
            let losowa7 = Math.floor(Math.random() * 2) + 1;
            
            if(losowa1 != 1 || losowa2 != 1 || losowa3 != 1 || losowa4 != 1 || losowa5 != 1 || losowa6 != 1|| losowa7 != 1) 
            {
                checker = true;
                
                if(losowa1 == 2) trafione[i-1] = true;
                if(losowa2 == 2) trafione[i] = true;
                if(losowa3 == 2) trafione[i+1] = true;
                if(losowa4 == 2) trafione[i+2] = true;
                if(losowa5 == 2) trafione[i+3] = true;
                if(losowa6 == 2) trafione[i+4] = true; 
                if(losowa7 == 2) trafione[i+5] = true; 
            }
        }
    }
    
    for(let i=1; i<=N*N; i=i+N)
    {
        if(trafione[i-1] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i)).html());
        
        if(trafione[i] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+1)).html());
        
        if(trafione[i+1] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+2)).html());
        
        if(trafione[i+2] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+3)).html());
        
        if(trafione[i+3] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+4)).html());
        
        if(trafione[i+4] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+5)).html());
        
        if(trafione[i+5] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+6)).html());
        
        poziomo++;
    }
    
    for(let i=1; i<=N; i++)
    {
        if(trafione[i-1] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i)).html());
        
        if(trafione[i+6] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+7)).html());
        
        if(trafione[i+13] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+14)).html());
        
        if(trafione[i+20] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+21)).html());
        
        if(trafione[i+27] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+28)).html());
        
        if(trafione[i+34] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+35)).html());
        
        if(trafione[i+41] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+42)).html());
        
        pionowo++;
    }
    
    $('.square1').html(suma[0]);
    $('.square2').html(suma[1]);
    $('.square3').html(suma[2]);
    $('.square4').html(suma[3]);
    $('.square5').html(suma[4]);
    $('.square6').html(suma[5]);
    $('.square7').html(suma[6]);
    $('.square8').html(suma[7]);
    $('.square9').html(suma[8]);
    $('.square10').html(suma[9]);
    $('.square11').html(suma[10]);
    $('.square12').html(suma[11]);
    $('.square13').html(suma[12]);
    $('.square14').html(suma[13]);
    
    poziomo = N;
    pionowo = 0;
    
    let restart = suma.some(function(el) {
    return el == 0});
    
    if(restart == true) res_for_7();
}

function res_for_8()
{
    for(let i=1; i<=N*N; i++)
    {
        wylosowane[i-1] = Math.floor(Math.random() * V) + 1;
        
        $('.circle'+i).css("background-color", "transparent");
        $('.circle'+i).css("border-color", "#40434f");
        $('.circle'+i).css("color", "#40434f");
        
        $('.circle'+i).html(wylosowane[i-1]);
    }
    
    for(let i=1; i<=N*N; i++)
    {
        trafione[i-1] = false;
        zaznaczone[i-1] = false;
    }
    
    for(let i=1; i<=N*2; i++)
    {
        suma[i-1] = 0;
        suma2[i-1] = 0;
        
        $('.square'+i).css("border-color", "#40434f");
        $('.square'+i).css("color", "white");
    }
    
    for(let i=1; i<=N*N; i=i+N)
    {
        let checker = false;
        
        while(checker == false)
        {
            let losowa1 = Math.floor(Math.random() * 2) + 1;
            let losowa2 = Math.floor(Math.random() * 2) + 1;
            let losowa3 = Math.floor(Math.random() * 2) + 1;
            let losowa4 = Math.floor(Math.random() * 2) + 1;
            let losowa5 = Math.floor(Math.random() * 2) + 1;
            let losowa6 = Math.floor(Math.random() * 2) + 1;
            let losowa7 = Math.floor(Math.random() * 2) + 1;
            let losowa8 = Math.floor(Math.random() * 2) + 1;
            
            if(losowa1 != 1 || losowa2 != 1 || losowa3 != 1 || losowa4 != 1 || losowa5 != 1 || losowa6 != 1 || losowa7 != 1 || losowa8 != 1) 
            {
                checker = true;
                
                if(losowa1 == 2) trafione[i-1] = true;
                if(losowa2 == 2) trafione[i] = true;
                if(losowa3 == 2) trafione[i+1] = true;
                if(losowa4 == 2) trafione[i+2] = true;
                if(losowa5 == 2) trafione[i+3] = true;
                if(losowa6 == 2) trafione[i+4] = true; 
                if(losowa7 == 2) trafione[i+5] = true;
                if(losowa7 == 2) trafione[i+6] = true;
            }
        }
    }
    
    for(let i=1; i<=N*N; i=i+N)
    {
        if(trafione[i-1] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i)).html());
        
        if(trafione[i] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+1)).html());
        
        if(trafione[i+1] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+2)).html());
        
        if(trafione[i+2] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+3)).html());
        
        if(trafione[i+3] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+4)).html());
        
        if(trafione[i+4] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+5)).html());
        
        if(trafione[i+5] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+6)).html());
        
        if(trafione[i+6] == true) suma[poziomo] = parseInt(suma[poziomo]) + parseInt($('.circle'+ parseInt(i+7)).html());
        
        poziomo++;
    }
    
    for(let i=1; i<=N; i++)
    {
        if(trafione[i-1] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i)).html());
        
        if(trafione[i+7] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+8)).html());
        
        if(trafione[i+15] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+16)).html());
        
        if(trafione[i+23] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+24)).html());
        
        if(trafione[i+31] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+32)).html());
        
        if(trafione[i+39] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+40)).html());
        
        if(trafione[i+47] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+48)).html());
        
        if(trafione[i+55] == true) suma[pionowo] = parseInt(suma[pionowo]) + parseInt($('.circle'+ parseInt(i+56)).html());
        
        pionowo++;
    }
    
    $('.square1').html(suma[0]);
    $('.square2').html(suma[1]);
    $('.square3').html(suma[2]);
    $('.square4').html(suma[3]);
    $('.square5').html(suma[4]);
    $('.square6').html(suma[5]);
    $('.square7').html(suma[6]);
    $('.square8').html(suma[7]);
    $('.square9').html(suma[8]);
    $('.square10').html(suma[9]);
    $('.square11').html(suma[10]);
    $('.square12').html(suma[11]);
    $('.square13').html(suma[12]);
    $('.square14').html(suma[13]);
    $('.square15').html(suma[14]);
    $('.square16').html(suma[15]);
    
    poziomo = N;
    pionowo = 0;
    
    let restart = suma.some(function(el) {
    return el == 0});
    
    if(restart == true) res_for_7();
}

function circle_click(num)
{
    if(zaznaczone[num-1] == false)
    {
        $('.circle'+num).css("background-color", "#e1134d");
        $('.circle'+num).css("color", "white");
        $('.circle'+num).css("border-color", "white");
        
        zaznaczone[num-1] = true;
        
        if(vol == true) song1.play();
        
        if(game_num == 1) dodaj(num);
        else if(game_num == 2) dodaj2(num);
        else if(game_num == 3) dodaj3(num);
        else if(game_num == 4) dodaj4(num);
    }
    
    else if(zaznaczone[num-1] == true)
    {
        $('.circle'+num).css("background-color", "transparent");
        $('.circle'+num).css("color", "#40434f");
        $('.circle'+num).css("border-color", "#40434f");
        
        zaznaczone[num-1] = false;
        move(num);
        
        if(vol == true) song2.play();
        
        if(game_num == 1) odejmij(num);
        else if(game_num == 2) odejmij2(num);
        else if(game_num == 3) odejmij3(num);
        else if(game_num == 4) odejmij4(num);
    }
    
    wynik();
    
}

function move(num)
{
    $('.circle'+num).css("background-color", "transpartnet");
    $('.circle'+num).css("color", "white");
    $('.circle'+num).css("border-color", "white");
}

function out2(num)
{
    if(num > 99 && num < 103 && number_range[num-100] == false)
    {
        $('.circle'+num).css("background-color", "transpartnet");
        $('.circle'+num).css("color", "#40434f");
        $('.circle'+num).css("border-color", "#40434f");
    }
    
    if(num > 109 && num < 114 && board_size[num-110] == false)
    {
        $('.circle'+num).css("background-color", "transpartnet");
        $('.circle'+num).css("color", "#40434f");
        $('.circle'+num).css("border-color", "#40434f");
    }
    
    if(num > 119 && num < 124 && board_size2[num-120] == false)
    {
        $('.circle'+num).css("background-color", "transpartnet");
        $('.circle'+num).css("color", "#40434f");
        $('.circle'+num).css("border-color", "#40434f");
    }
}

function out(num)
{
    if(zaznaczone[num-1] == false)
    {
        $('.circle'+num).css("background-color", "transpartnet");
        $('.circle'+num).css("color", "#40434f");
        $('.circle'+num).css("border-color", "#40434f");
    }
}

function dodaj(num)
{
    if(num >= 1 && num <= 5) suma2[5] = parseInt(suma2[5]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 6 && num <= 10) suma2[6] = parseInt(suma2[6]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 11 && num <= 15) suma2[7] = parseInt(suma2[7]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 16 && num <= 20) suma2[8] = parseInt(suma2[8]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 21 && num <= 25) suma2[9] = parseInt(suma2[9]) + parseInt($('.circle'+ parseInt(num)).html());
    
    if(num == 1 || num == 6 || num == 11 || num == 16 || num == 21) suma2[0] = parseInt(suma2[0]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 2 || num == 7 || num == 12 || num == 17 || num == 22) suma2[1] = parseInt(suma2[1]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 3 || num == 8 || num == 13 || num == 18 || num == 23) suma2[2] = parseInt(suma2[2]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 4 || num == 9 || num == 14 || num == 19 || num == 24) suma2[3] = parseInt(suma2[3]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 5 || num == 10 || num == 15 || num == 20 || num == 25) suma2[4] = parseInt(suma2[4]) + parseInt($('.circle'+ parseInt(num)).html());
}

function dodaj2(num)
{
    if(num >= 1 && num <= 6) suma2[6] = parseInt(suma2[6]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 7 && num <= 12) suma2[7] = parseInt(suma2[7]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 13 && num <= 18) suma2[8] = parseInt(suma2[8]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 19 && num <= 24) suma2[9] = parseInt(suma2[9]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 25 && num <= 30) suma2[10] = parseInt(suma2[10]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 31 && num <= 36) suma2[11] = parseInt(suma2[11]) + parseInt($('.circle'+ parseInt(num)).html());
    
    if(num == 1 || num == 7 || num == 13 || num == 19 || num == 25 || num == 31) suma2[0] = parseInt(suma2[0]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 2 || num == 8 || num == 14 || num == 20 || num == 26 || num == 32) suma2[1] = parseInt(suma2[1]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 3 || num == 9 || num == 15 || num == 21 || num == 27 || num == 33) suma2[2] = parseInt(suma2[2]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 4 || num == 10 || num == 16 || num == 22 || num == 28 || num == 34) suma2[3] = parseInt(suma2[3]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 5 || num == 11 || num == 17 || num == 23 || num == 29 || num == 35) suma2[4] = parseInt(suma2[4]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 6 || num == 12 || num == 18 || num == 24 || num == 30 || num == 36) suma2[5] = parseInt(suma2[5]) + parseInt($('.circle'+ parseInt(num)).html());
}

function dodaj3(num)
{
    if(num >= 1 && num <= 7) suma2[7] = parseInt(suma2[7]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 8 && num <= 14) suma2[8] = parseInt(suma2[8]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 15 && num <= 21) suma2[9] = parseInt(suma2[9]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 22 && num <= 28) suma2[10] = parseInt(suma2[10]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 29 && num <= 35) suma2[11] = parseInt(suma2[11]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 36 && num <= 42) suma2[12] = parseInt(suma2[12]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 33 && num <= 49) suma2[13] = parseInt(suma2[13]) + parseInt($('.circle'+ parseInt(num)).html());
    
    if(num == 1 || num == 8 || num == 15 || num == 22 || num == 29 || num == 36 || num == 43) suma2[0] = parseInt(suma2[0]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 2 || num == 9 || num == 16 || num == 23 || num == 30 || num == 37 || num == 44) suma2[1] = parseInt(suma2[1]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 3 || num == 10 || num == 17 || num == 24 || num == 31 || num == 38 || num == 45) suma2[2] = parseInt(suma2[2]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 4 || num == 11 || num == 18 || num == 25 || num == 32 || num == 39 || num == 46) suma2[3] = parseInt(suma2[3]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 5 || num == 12 || num == 19 || num == 26 || num == 33 || num == 40 || num == 47) suma2[4] = parseInt(suma2[4]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 6 || num == 13 || num == 20 || num == 27 || num == 34 || num == 41 || num == 48) suma2[5] = parseInt(suma2[5]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 7 || num == 14 || num == 21 || num == 28 || num == 35 || num == 42 || num == 49) suma2[6] = parseInt(suma2[6]) + parseInt($('.circle'+ parseInt(num)).html());
}

function dodaj4(num)
{
    if(num >= 1 && num <= 8) suma2[8] = parseInt(suma2[8]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 9 && num <= 16) suma2[9] = parseInt(suma2[9]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 17 && num <= 24) suma2[10] = parseInt(suma2[10]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 25 && num <= 32) suma2[11] = parseInt(suma2[11]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 33 && num <= 40) suma2[12] = parseInt(suma2[12]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 41 && num <= 48) suma2[13] = parseInt(suma2[13]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 49 && num <= 56) suma2[14] = parseInt(suma2[14]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 57 && num <= 64) suma2[15] = parseInt(suma2[15]) + parseInt($('.circle'+ parseInt(num)).html());
    
    if(num == 1 || num == 9 || num == 17 || num == 25 || num == 33 || num == 41 || num == 49 || num == 57) suma2[0] = parseInt(suma2[0]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 2 || num == 10 || num == 18 || num == 26 || num == 34 || num == 42 || num == 50 || num == 58) suma2[1] = parseInt(suma2[1]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 3 || num == 11 || num == 19 || num == 27 || num == 35 || num == 43 || num == 51 || num == 59) suma2[2] = parseInt(suma2[2]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 4 || num == 12 || num == 20 || num == 28 || num == 36 || num == 44 || num == 52 || num == 60) suma2[3] = parseInt(suma2[3]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 5 || num == 13 || num == 21 || num == 29 || num == 37 || num == 45 || num == 53 || num == 61) suma2[4] = parseInt(suma2[4]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 6 || num == 14 || num == 22 || num == 30 || num == 38 || num == 46 || num == 54 || num == 62) suma2[5] = parseInt(suma2[5]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 7 || num == 15 || num == 23 || num == 31 || num == 39 || num == 47 || num == 55 || num == 63) suma2[6] = parseInt(suma2[6]) + parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 8 || num == 16 || num == 24 || num == 32 || num == 40 || num == 48 || num == 56 || num == 64) suma2[7] = parseInt(suma2[7]) + parseInt($('.circle'+ parseInt(num)).html());
}

function odejmij(num)
{
    if(num >= 1 && num <= 5) suma2[5] = parseInt(suma2[5]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 6 && num <= 10) suma2[6] = parseInt(suma2[6]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 11 && num <= 15) suma2[7] = parseInt(suma2[7]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 16 && num <= 20) suma2[8] = parseInt(suma2[8]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 21 && num <= 25) suma2[9] = parseInt(suma2[9]) - parseInt($('.circle'+ parseInt(num)).html());
    
    if(num == 1 || num == 6 || num == 11 || num == 16 || num == 21) suma2[0] = parseInt(suma2[0]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 2 || num == 7 || num == 12 || num == 17 || num == 22) suma2[1] = parseInt(suma2[1]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 3 || num == 8 || num == 13 || num == 18 || num == 23) suma2[2] = parseInt(suma2[2]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 4 || num == 9 || num == 14 || num == 19 || num == 24) suma2[3] = parseInt(suma2[3]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 5 || num == 10 || num == 15 || num == 20 || num == 25) suma2[4] = parseInt(suma2[4]) - parseInt($('.circle'+ parseInt(num)).html());
}

function odejmij2(num)
{
    if(num >= 1 && num <= 6) suma2[6] = parseInt(suma2[6]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 7 && num <= 12) suma2[7] = parseInt(suma2[7]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 13 && num <= 18) suma2[8] = parseInt(suma2[8]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 19 && num <= 24) suma2[9] = parseInt(suma2[9]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 25 && num <= 30) suma2[10] = parseInt(suma2[10]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 31 && num <= 36) suma2[11] = parseInt(suma2[11]) - parseInt($('.circle'+ parseInt(num)).html());
    
    if(num == 1 || num == 7 || num == 13 || num == 19 || num == 25 || num == 31) suma2[0] = parseInt(suma2[0]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 2 || num == 8 || num == 14 || num == 20 || num == 26 || num == 32) suma2[1] = parseInt(suma2[1]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 3 || num == 9 || num == 15 || num == 21 || num == 27 || num == 33) suma2[2] = parseInt(suma2[2]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 4 || num == 10 || num == 16 || num == 22 || num == 28 || num == 34) suma2[3] = parseInt(suma2[3]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 5 || num == 11 || num == 17 || num == 23 || num == 29 || num == 35) suma2[4] = parseInt(suma2[4]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 6 || num == 12 || num == 18 || num == 24 || num == 30 || num == 36) suma2[5] = parseInt(suma2[5]) - parseInt($('.circle'+ parseInt(num)).html());
}

function odejmij3(num)
{
    if(num >= 1 && num <= 7) suma2[7] = parseInt(suma2[7]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 8 && num <= 14) suma2[8] = parseInt(suma2[8]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 15 && num <= 21) suma2[9] = parseInt(suma2[9]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 22 && num <= 28) suma2[10] = parseInt(suma2[10]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 29 && num <= 35) suma2[11] = parseInt(suma2[11]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 36 && num <= 42) suma2[12] = parseInt(suma2[12]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 33 && num <= 49) suma2[13] = parseInt(suma2[13]) - parseInt($('.circle'+ parseInt(num)).html());
    
    if(num == 1 || num == 8 || num == 15 || num == 22 || num == 29 || num == 36 || num == 43) suma2[0] = parseInt(suma2[0]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 2 || num == 9 || num == 16 || num == 23 || num == 30 || num == 37 || num == 44) suma2[1] = parseInt(suma2[1]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 3 || num == 10 || num == 17 || num == 24 || num == 31 || num == 38 || num == 45) suma2[2] = parseInt(suma2[2]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 4 || num == 11 || num == 18 || num == 25 || num == 32 || num == 39 || num == 46) suma2[3] = parseInt(suma2[3]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 5 || num == 12 || num == 19 || num == 26 || num == 33 || num == 40 || num == 47) suma2[4] = parseInt(suma2[4]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 6 || num == 13 || num == 20 || num == 27 || num == 34 || num == 41 || num == 48) suma2[5] = parseInt(suma2[5]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 7 || num == 14 || num == 21 || num == 28 || num == 35 || num == 42 || num == 49) suma2[6] = parseInt(suma2[6]) - parseInt($('.circle'+ parseInt(num)).html());
}

function odejmij4(num)
{
    if(num >= 1 && num <= 8) suma2[8] = parseInt(suma2[8]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 9 && num <= 16) suma2[9] = parseInt(suma2[9]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 17 && num <= 24) suma2[10] = parseInt(suma2[10]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 25 && num <= 32) suma2[11] = parseInt(suma2[11]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 33 && num <= 40) suma2[12] = parseInt(suma2[12]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 41 && num <= 48) suma2[13] = parseInt(suma2[13]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 49 && num <= 56) suma2[14] = parseInt(suma2[14]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num >= 57 && num <= 64) suma2[15] = parseInt(suma2[15]) - parseInt($('.circle'+ parseInt(num)).html());
    
    if(num == 1 || num == 9 || num == 17 || num == 25 || num == 33 || num == 41 || num == 49 || num == 57) suma2[0] = parseInt(suma2[0]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 2 || num == 10 || num == 18 || num == 26 || num == 34 || num == 42 || num == 50 || num == 58) suma2[1] = parseInt(suma2[1]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 3 || num == 11 || num == 19 || num == 27 || num == 35 || num == 43 || num == 51 || num == 59) suma2[2] = parseInt(suma2[2]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 4 || num == 12 || num == 20 || num == 28 || num == 36 || num == 44 || num == 52 || num == 60) suma2[3] = parseInt(suma2[3]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 5 || num == 13 || num == 21 || num == 29 || num == 37 || num == 45 || num == 53 || num == 61) suma2[4] = parseInt(suma2[4]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 6 || num == 14 || num == 22 || num == 30 || num == 38 || num == 46 || num == 54 || num == 62) suma2[5] = parseInt(suma2[5]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 7 || num == 15 || num == 23 || num == 31 || num == 39 || num == 47 || num == 55 || num == 63) suma2[6] = parseInt(suma2[6]) - parseInt($('.circle'+ parseInt(num)).html());
    
    else if(num == 8 || num == 16 || num == 24 || num == 32 || num == 40 || num == 48 || num == 56 || num == 64) suma2[7] = parseInt(suma2[7]) - parseInt($('.circle'+ parseInt(num)).html());
}

function wynik()
{
    let wygrales = false;
    let flaga = true;
    
    for(let i=1; i<=N*2; i++)
    {
        if(suma[i-1] == suma2[i-1] && suma2[i-1] != 0)
        {
            $('.square'+i).css("border-color", "#efd98b");
            $('.square'+i).css("color", "#efd98b");
        }
        
        else if(suma[i-1] != suma2[i-1])
        {
            $('.square'+i).css("border-color", "#40434f");
            $('.square'+i).css("color", "white");
        }
        
        if (suma[i-1] == suma2[i-1] && suma2[i-1] != 0 && flaga == true)
        {
            wygrales = true;
        }
        
        else if(suma[i-1] != suma2[i-1])
        {
            wygrales = false;
            flaga = false;
        }
    }
    
    if(wygrales == true)
    {
        clearTimeout(s);
        time_start = false;
        $('.game1').css("pointer-events", "none");
        $('.game2').css("pointer-events", "none");
        $('.game3').css("pointer-events", "none");
        $('.game4').css("pointer-events", "none");
        
        var place;
        $.ajax({
        
            url: "checkplace.php",
            method: "POST",
            data:{time, game_num, V},

            success:function(data){
               place = parseInt(data);
                

                if(place < 6)
                {
                    if(place == 1) $('.winner_place').html(place+"ST");
                    else if(place == 2) $('.winner_place').html(place+"ND");
                    else if(place == 3) $('.winner_place').html(place+"RD");
                    else $('.winner_place').html(place+"TH");
                    
                    $('.winner_name').css("color", "white");
                    $('.winner_name').css("border-color", "white");
                    $('.winner_name').val("");
                    $('.winner1').css("filter", "opacity(1)");
                    $('.winner1').css("pointer-events", "all");
                    $('.plansza5').css("filter", "blur(5px)");
                    $('.plansza5').css("pointer-events", "none");
                }
                else
                {
                    $('.winner_time').html(t);
                    $('.winner2').css("filter", "opacity(1)");
                    $('.winner2').css("pointer-events", "all");
                    $('.plansza5').css("filter", "blur(5px)");
                    $('.plansza5').css("pointer-events", "none");

                }

                setTimeout(function(){
                    if(vol == true) song4.play();
                },50);
           
        }
        });
    }
}

function focuss()
{
    $('.winner_name').css("color", "#e1134d");
    $('.winner_name').css("border-color", "#e1134d");
}

function blurr()
{
    name = $('.winner_name').val();
    
    if(!(/^[a-z0-9A-ZĄ-ŻĄąĆćĘęŁłŃńÓóŚśŹźŻż_-]{1,8}$/.test(name)))
    {
        $('.winner_name').css("color", "#FF6962");
        $('.winner_name').css("border-color", "#FF6962");
        
        checked_name = false;
    }
    
    else
    {
        $('.winner_name').css("color", "#5FA777");
        $('.winner_name').css("border-color", "#5FA777");
        
        checked_name = true;
    }
}

function winner2_click()
{
    $('.winner2').css("filter", "opacity(0)");
    $('.winner2').css("pointer-events", "none");
    $('.plansza5').css("filter", "blur(0px)");
    $('.plansza5').css("pointer-events", "all");
    
    if(vol == true) song3.play();
}

function winner1_click()
{
    if(checked_name == true)
    {
        $.ajax({
        
            url: "addleader.php",
            method: "POST",
            data:{time, game_num, V, name},

            success:function(data){
                
                $('.winner1').css("filter", "opacity(0)");
                $('.winner1').css("pointer-events", "none");
                $('.plansza5').css("filter", "blur(0px)");
                $('.plansza5').css("pointer-events", "all");
    
                if(vol == true) song3.play();
                checked_name = false;
            }
        });
        
        checked_name = false;
    }
    
    else
    {
        $('.winner_name').css("color", "#FF6962");
        $('.winner_name').css("border-color", "#FF6962");
    }
}

function zoom(num)
{
    if(num == -1 && zoom_level > -5)
    {
        zoom_value -= 0.05;
        $('body').css("zoom", zoom_value);
        zoom_level--;
        if(vol == true) song3.play();
    }
    else if(num == 1 && zoom_level < 5)
    {
        zoom_value += 0.05;
        $('body').css("zoom", zoom_value);
        zoom_level++;
        if(vol == true) song3.play();
    }
}

window.onload = start;