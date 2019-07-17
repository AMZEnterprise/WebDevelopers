st = window.location.toString();
st = st.charAt(st.length - 1);
if(st == 'c')
{
	alert("Confirm Your Password Correctly!");
}
else if(st == 'e')
{
	alert("You can't leave any box empty!");
}
else if(st == 's')
{
	alert("You information update Succesfully!");
}