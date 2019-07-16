st = window.location.toString();
st = st.charAt(st.length - 1);
if(st == 'i')
{
	alert("Sorry, your information is incorrect!\nPlease try again!");
}
else if(st == 'e')
{
	alert("You must Enter someword in both Boxes!");
}
else if(st == 'x')
{
	alert("You Logout Successfully!");
}