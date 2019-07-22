 function Save_Employee_Click(){
     var text="save employee";
     var name=document.getElementById("First_Name").value;
     var surname=document.getElementById("Second_Name").value;
     var address=document.getElementById("Home_Address").value;
     var contact=document.getElementById("Contact_Numbers").value;
     var email=document.getElementById("Email_Address").value;
     var gender=document.getElementById("Gender").value;
     var position=document.getElementById("Job_Position").value;
     var family=document.getElementById("Family_Member").value;

     if(name=="" && family=="" ){
          alert("Sorry cannot save employee seems as if you've left out some blank spaces,please re-ckheck whether ot not you have entered all the employees information.");
     }else if( surname==""){
         alert("Sorry cannot save employee seems as if you've left out some blank spaces,please re-ckheck whether ot not you have entered all the employees information.");
     }else if(address==""){
         alert("Sorry cannot save employee seems as if you've left out some blank spaces,please re-ckheck whether ot not you have entered all the employees information.");
     }else if(contact==""){
         alert("Sorry cannot save employee seems as if you've left out some blank spaces,please re-ckheck whether ot not you have entered all the employees information.");
     }else if(email==""){
         alert("Sorry cannot save employee seems as if you've left out some blank spaces,please re-ckheck whether ot not you have entered all the employees information.");
     }else if(gender==""){
          alert("Sorry cannot save employee seems as if you've left out some blank spaces,please re-ckheck whether ot not you have entered all the employees information.");
     }else if(position==""){
         alert("Sorry cannot save employee seems as if you've left out some blank spaces,please re-ckheck whether ot not you have entered all the employees information.");
     }else if(family=="" ){
         alert("Sorry cannot save employee seems as if you've left out some blank spaces,please re-ckheck whether ot not you have entered all the employees information.");
     }

 }








// function Save_Employee() {
// $("First_Name").val;
// $("Second_Name").val;
// $("Home_Address").val;
// $("Email_Address").val;
// $("Job_Position").val;
// $("Gender").val;
// $("Family_Member").val;

// if($name==" " )
//     alert("asdfghjbn") return true;
//     else return false;
// }
    