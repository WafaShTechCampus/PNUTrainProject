
    var timerID = null;
    var timerRunning = false;

    function showtime()
    {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();
        var timeValue = "" + ((hours > 12) ? hours - 12 : hours);
        timeValue  += ((minutes < 10) ? ":0" : ":") + minutes;
        timeValue  += ((seconds < 10) ? ":0" : ":") + seconds;
        timeValue  += (hours >= 12) ? "PM" : "AM";
        document.clock.face.value = timeValue ;
        timerID = setTimeout("showtime()",1000);
        timerRunning = true;
    }
	
	var M_A1_1=2,S_A1_1=10;
	var M_A1_2=1 ,S_A1_2=22;
	var M_A2_1=1,s_A2_1=11;
	var M_A2_2=1,s_A2_2=33;
	var M_A3_1=1 ,S_A3_1=30;
	var M_A3_2=1,S_A3_2=2;
	var M_A4_1=1,S_A4_1=40;
	var M_A4_2=1,S_A4_2=3;
	var M_A5_1=1,S_A5_1=15;
	var M_A5_2=1,S_A5_2=50;
	var M_A6_1=1,S_A6_1=19;
	var M_A6_2=1, S_A6_2=2;
	var M_A7_1=1,S_A7_1=45;
	var M_A7_2=1,S_A7_2=37;
	var M_A8_1=1,s_A8_1=50;
	var M_A8_2=1,S_A8_2=4;
	var M_A9_1=1,S_A9_1=26;
	var M_A9_2=1,S_A9_2=9;
	var M_A10_1=1, s_A10_1=5;
	var M_A10_2=1,S_A10_2=29;
	var M_F1_1=1, S_F1_1=35;
	var M_F1_2=1,S_F1_2=44;
	var M_F2_1=1,S_F2_1=52;
	var M_F2_2=1,S_F2_2=1;
	var M_S1_1=1,S_S1_1=1;
	var M_S1_2=1,S_S1_2=1;
	function myfun(){
		 var now = new Date();
		 var seconds = now.getSeconds();
		 


//-------------------- A1 ---------------------------------	
if(seconds>25 && seconds<33){
document.getElementById("A1-1").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A1-1").style.backgroundColor ="#e4e5de";}

if(seconds>44 && seconds<52){
document.getElementById("A1-2").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A1-2").style.backgroundColor ="#e4e5de";}
//-------------------- A2 ---------------------------------		   
if(seconds>1 && seconds<9){
document.getElementById("A2-1").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A2-1").style.backgroundColor = "#e4e5de";}
if(seconds>44 && seconds<53){
document.getElementById("A2-2").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A2-2").style.backgroundColor ="#e4e5de";}
//-------------------- A3 ---------------------------------		   
if(seconds>40 && seconds<48){
document.getElementById("A3-1").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A3-1").style.backgroundColor = "#e4e5de";}

if(seconds>5 && seconds<13){
document.getElementById("A3-2").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A3-2").style.backgroundColor ="#e4e5de";}
//-------------------- A4 ---------------------------------	
if(seconds>10 && seconds<18){
document.getElementById("A4-1").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A4-1").style.backgroundColor ="#e4e5de";}
if(seconds>50 && seconds<58){
document.getElementById("A4-2").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A4-2").style.backgroundColor ="#e4e5de";}
//-------------------- A5 ---------------------------------	
if(seconds>4 && seconds<12){
document.getElementById("A5-1").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A5-1").style.backgroundColor ="#e4e5de";}
if(seconds>19 && seconds<27){
document.getElementById("A5-2").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A5-2").style.backgroundColor ="#e4e5de";}
//-------------------- A6 ---------------------------------	
if(seconds>11 && seconds<19){
document.getElementById("A6-1").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A6-1").style.backgroundColor = "#e4e5de";}
if(seconds>33 && seconds<41){
document.getElementById("A6-2").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A6-2").style.backgroundColor = "#e4e5de";}
//-------------------- A7 ---------------------------------	
if(seconds>15 && seconds<23){
document.getElementById("A7-1").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A7-1").style.backgroundColor ="#e4e5de";}
if(seconds>1 && seconds<9){
document.getElementById("A7-2").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A7-2").style.backgroundColor ="#e4e5de";}
//-------------------- A8 ---------------------------------	

if(seconds>5 && seconds<13){
document.getElementById("A8-1").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A8-1").style.backgroundColor = "#e4e5de";}
if(seconds>52 && seconds<59){
document.getElementById("A8-2").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A8-2").style.backgroundColor = "#e4e5de";}
//-------------------- A9 ---------------------------------	
if(seconds>28 && seconds<36){
document.getElementById("A9-1").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A9-1").style.backgroundColor = "#e4e5de";}
if(seconds>13 && seconds<22){
document.getElementById("A9-2").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A9-2").style.backgroundColor = "#e4e5de";}
//-------------------- A10 ---------------------------------	
if(seconds>22 && seconds<30){
document.getElementById("A10-1").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A10-1").style.backgroundColor = "#e4e5de";}
if(seconds>23 && seconds<31){
document.getElementById("A10-2").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A10-2").style.backgroundColor = "#e4e5de";}
//-------------------- F1 ---------------------------------	
if(seconds>52 && seconds<58){
document.getElementById("F1").style.backgroundColor = "#ff820d";}
else {
document.getElementById("F1").style.backgroundColor = "#e4e5de";}

//-------------------- F2 ---------------------------------	
if(seconds>37 && seconds<43){
document.getElementById("F2").style.backgroundColor = "#ff820d";}
else {
document.getElementById("F2").style.backgroundColor = "#e4e5de";}

//-------------------- S1 ---------------------------------	
if(seconds>5 && seconds<11){
document.getElementById("S1").style.backgroundColor = "#ff820d";}
else {
document.getElementById("S1").style.backgroundColor = "#e4e5de";}

//-------------------- S2 ---------------------------------	
if(seconds>36 && seconds<44){
document.getElementById("S2").style.backgroundColor = "#ff820d";}
else {
document.getElementById("S2").style.backgroundColor = "#e4e5de";}

/*
//-------------------- A1 ---------------------------------	
if(seconds>25 && seconds<35){
document.getElementById("A1-1").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A1-1").style.backgroundColor ="#e4e5de";}
if(seconds>5 && seconds<13){
document.getElementById("A1-2").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A1-2").style.backgroundColor ="#e4e5de";}
//-------------------- A2 ---------------------------------		   
if(seconds>1 && seconds<7){
document.getElementById("A2-1").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A2-1").style.backgroundColor = "#e4e5de";}
if(seconds>44 && seconds<51){
document.getElementById("A2-2").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A2-2").style.backgroundColor ="#e4e5de";}
//-------------------- A3 ---------------------------------		   
if(seconds>40 && seconds<50){
document.getElementById("A3-1").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A3-1").style.backgroundColor = "#e4e5de";}
if(seconds>44 && seconds<54){
document.getElementById("A3-2").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A3-2").style.backgroundColor ="#e4e5de";}
//-------------------- A4 ---------------------------------	
if(seconds>10 && seconds<16){
document.getElementById("A4-1").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A4-1").style.backgroundColor ="#e4e5de";}
if(seconds>6 && seconds<12){
document.getElementById("A4-2").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A4-2").style.backgroundColor ="#e4e5de";}
//-------------------- A5 ---------------------------------	
if(seconds>4 && seconds<10){
document.getElementById("A5-1").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A5-1").style.backgroundColor ="#e4e5de";}
if(seconds>19 && seconds<25){
document.getElementById("A5-2").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A5-2").style.backgroundColor ="#e4e5de";}
//-------------------- A6 ---------------------------------	
if(seconds>11 && seconds<17){
document.getElementById("A6-1").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A6-1").style.backgroundColor = "#e4e5de";}
if(seconds>33 && seconds<39){
document.getElementById("A6-2").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A6-2").style.backgroundColor = "#e4e5de";}
//-------------------- A7 ---------------------------------	
if(seconds>15 && seconds<21){
document.getElementById("A7-1").style.backgroundColor ="#ff820d";}
else {
document.getElementById("A7-1").style.backgroundColor ="#e4e5de";}
if(seconds>40 && seconds<46){
document.getElementById("A7-2").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A7-2").style.backgroundColor = "#e4e5de";}
//-------------------- A8 ---------------------------------	

if(seconds>5 && seconds<11){
document.getElementById("A8-1").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A8-1").style.backgroundColor = "#e4e5de";}
if(seconds>55 && seconds<2){
document.getElementById("A8-2").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A8-2").style.backgroundColor = "#e4e5de";}
//-------------------- A9 ---------------------------------	
if(seconds>28 && seconds<34){
document.getElementById("A9-1").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A9-1").style.backgroundColor = "#e4e5de";}
if(seconds>13 && seconds<20){
document.getElementById("A9-2").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A9-2").style.backgroundColor = "#e4e5de";}
//-------------------- A10 ---------------------------------	
if(seconds>22 && seconds<28){
document.getElementById("A10-1").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A10-1").style.backgroundColor = "#e4e5de";}
if(seconds>23 && seconds<29){
document.getElementById("A10-2").style.backgroundColor = "#ff820d";}
else {
document.getElementById("A10-2").style.backgroundColor = "#e4e5de";}
//-------------------- F1 ---------------------------------	
if(seconds>52 && seconds<58){
document.getElementById("F1").style.backgroundColor = "#ff820d";}
else {
document.getElementById("F1").style.backgroundColor = "#e4e5de";}

//-------------------- F2 ---------------------------------	
if(seconds>37 && seconds<43){
document.getElementById("F2").style.backgroundColor = "#ff820d";}
else {
document.getElementById("F2").style.backgroundColor = "#e4e5de";}

//-------------------- S1 ---------------------------------	
if(seconds>5 && seconds<11){
document.getElementById("S1").style.backgroundColor = "#ff820d";}
else {
document.getElementById("S1").style.backgroundColor = "#e4e5de";}

//-------------------- S2 ---------------------------------	
if(seconds>37 && seconds<43){
document.getElementById("S2").style.backgroundColor = "#ff820d";}
else {
document.getElementById("S2").style.backgroundColor = "#e4e5de";}

*/

	timerID = setTimeout("myfun()",1000); }

