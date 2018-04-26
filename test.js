
	function valid()
	{
		var id= document.getElementById("id");
			if(id.value=="")
			{		
				alert("Student Id cannot be Blank");
				id.focus();
				return false;
			}
		var name= document.getElementById("name");
			if(name.value=="")
			{
				alert("Student Name cannot be Blank");
				name.focus();
				return false;
			}
		var gender = document.getElementsByName("gender");
			if(!(gender[0].checked || gender[1].checked))
			{
				alert("Select at least One Gender");
				return false;
			}
		var photo= document.getElementById("photo");
			if(photo.value=="")
			{
				alert("Select Student Photo");
				return false;
			}
		var city= document.getElementById("city");
			if(city.selectedIndex=="")
			{
				alert("Select city");
				return false;
			}		
		var hobby=document.getElementsByName("hobby[]")
			var i,flag=false;
				for(i=0;i<hobby.length;i++)
				{
					if(hobby[i].checked)
					{
						flag=true;
						break;
					}
				}
				if(flag==false)
				{
					alert("select Hobby");
					return false;
				}
	
		return true;
	}
