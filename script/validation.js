function validate()
{
 var error=0;
 var formName=document.getElementById("signup_form");
 var fname = document.getElementById( "fname" );
 var lname = document.getElementById( "lname" );
 var email = document.getElementById( "email" );
 var phnno = document.getElementById( "phnno" );
 var country = document.getElementById( "country" );
 var field = document.getElementById( "field" );
 if( fname.value == "" )
 {
  fname.style.border="solid 1px red";
  error++;
 }
 else{
  fname.style.border="#d5d6d9";
 }
 
 if( lname.value == "" )
 {
  lname.style.border="solid 1px red";
  error++;
 }
 else{
  lname.style.border="#d5d6d9";
 }
 
 if( phnno.value == "" )
 {
  phnno.style.border="solid 1px red";
  error++;
 }
 else{
  phnno.style.border="#d5d6d9";
 }
 if( country.value == "" )
 {
  country.style.border="solid 1px red";
  error++;
 }
 else{
  country.style.border="#d5d6d9";
 }
 if( field.value == "" )
 {
  field.style.border="solid 1px red";
  error++;
 }
 else{
  field.style.border="#d5d6d9";
 }
 if( email.value == "" || email.value.indexOf( "@" ) == -1 )
 {
 email.style.border="solid 1px red";
  error++;
 }
 else{
  email.style.border="#d5d6d9";
 }


if( password.value == "" || password.value >= 8 )
 {
  password.style.border="solid 1px red";
 error++;
 }
 else{
  password.style.border="#d5d6d9";
 }
if(error==0){
 return true;
}
 else
 {
  
  return false;
  signup_form.reset();
  
 }
}