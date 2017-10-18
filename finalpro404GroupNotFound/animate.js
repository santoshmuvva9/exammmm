/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var arr = [];
var count=-1;
var ans1;
var subject='subject1';
var id=-2;
var score=0;
var question,opta1,opta2,opta3,opta4;
var ansa;
var sb;
function select_sub(obj)
{
    if(obj.id=='subject1'){
        sb=1;
    subject='subject1';}
if(obj.id=='subject2'){
    sb=2;
    subject='subject2';}
$( ".second" ).trigger( "click" );
}
$(document).on("click","#try",function()
   {
       document.location="index.php";
   });
function randomQuestions()
{
while(arr.length < 10){
    var randomnumber = Math.ceil(Math.random()*20);
    if(arr.indexOf(randomnumber) > -1) continue;
    arr[arr.length] = randomnumber;
} 
}
function checkAns(){
    //this.remove();
    $(".maintab1").removeClass("col-xs-2");
    $(".maintab1").addClass("col-xs-12");
    if(score<8)
    {
        $(".maintab1").html(score+"<span style='font-size:0.5em'><br><span id='success' style='color:green;'></span>\n\
<br>Unfortunately you did not pass the test. Please try again later!\n\
<br><span><button id='try'>Try Again</button>");
    }else
    {
        $(".maintab1").html(score+"<span style='font-size:0.5em><br><span id='success' style='color:green'></span>\n\
<br>You have successfully passed the test. You are now certified in "+subject+"\n\
<br><span><button id='try'>Try Again</button>");
    }
    $(".maintab2").remove();
    $.ajax({
  type: "POST",
  dataType: "json",
  data: {markScore :score},
  url: 'insertScore.php',
  success: function(data) {
    $("#success").text(data);
  }
});
}
function ajaxNextQues(count)
{
    $.ajax({
  type: "POST",
  dataType: "json",
  data: {questionid :count,subq:sb},
  url: 'sendquestion.php',
  success: function(data) {
    $.each(data, function(idx, qu){
     question=qu.ques;
     opta1=qu.opt1;
     opta2=qu.opt2;
     opta3=qu.opt3;
     opta4=qu.opt4;
     ansa=qu.ans;
    });
  
  }
});
}
$(function()
{      
   randomQuestions();
   nextQuestion();
   $(document).on("click",".second",function()
   {
       if(id==ans1)
       {
           score++;
           //alert("sfgsgh");
           document.getElementById("score").innerHTML=""+score;
         $(".first").css({
         "background-color":"green" 
      });
      
       }
       else
       {
           $(".first").css({
         "background-color":"red" 
      });
      
       }
      $(".first").fadeOut( 3000, function() {
  }).queue(function (next1) {
    $(this).remove();
    next1();
});
  $(this).removeClass("second");
  $(this).addClass("first");
  $(this).html("<h3 class='question'></h3><ol class='options'></ol>");
  nextQuestion();
  $("<div class='second'>").delay(3000).queue(function (next) {
    $(this).hide().appendTo(".maintab2").fadeIn(3000);
    if(count>10)
       checkAns();
    next();
    
});
/*if(count>8)
{
    this.remove();
    $(".maintab1").removeClass("col-xs-2");
    $(".maintab1").addClass("col-xs-12");
}*/    
   });
   $(document).on("click",".options li",function()
   {
       
       var idl=$(this).attr("id");
       id=parseInt(idl);
       $( ".second" ).trigger( "click" );
   });
});
function nextQuestion()
{
    var content="<h3 class='question2'>Select the subject</h3>";
    content=content+"<div align='center' style='height: auto'>";
    content=content+"<button id='subject1' onclick='select_sub(this)'>Inventions and Inventors</button></div><br>";
    content=content+"<div align='center' style='height: auto'><button id='subject2' onclick='select_sub(this)'>Technology</button></div>";
    
    if(count==-1)
    {
       $(".first .question").html(content);
       var $lis = $('.options').html("");
    }
    else{  
        ajaxNextQues(arr[count]);
    setTimeout(function() {
        $(".first .question").html(question);
       ans1=parseInt(ansa);
  $('.options').html("<li id='1'>"+opta1+"</li><li id='2'>"+opta2+"</li><li id='3'>"+opta3+"</li><li id='4'>"+opta4+"</li>");
}, 3000);
    }
    count++;
}