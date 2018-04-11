var endorse=[];	

function storeName()
{
	var name = document.getElementById("FirstName").value;
	localStorage["UserName"] = name;
	closeWindow();
	console.log(name);
	displayUserName();

}



function closeWindow()
{
	$('#myModal').modal('hide');

}

function storeFullName()
{
	var endorseName = document.getElementById("StoreFullName").value;
	localStorage["FullName"] = endorseName;
}

function storeEmail()
{
	var email = document.getElementById("StoreEmail").value;
	localStorage["Email"] = email;
}

function storeEndorsement()
{
	var endorsement = document.getElementById("StoreEndorsement").value;
	localStorage["Endorsement"] = endorsement;
	
}

function makeEndorsement()
{

	var endorseName = localStorage["FullName"];
	var email = localStorage["Email"];
	var endorsement = localStorage["Endorsement"];
	var date = "";
	var newendorse = {
		date: date,
		endorseName: endorseName,
		endorsement: endorsement,
		email: email
	};
	endorse.push(newendorse);
	displayEndorsement();
}

function displayUserName()
{
	document.getElementById("welcome").innerHTML="Welcome " + localStorage.UserName;
}

function displayEndorsement()
{
	var table=document.getElementById("awesometable");
			
			var row=table.insertRow(-1);
			//var cell1=row.insertCell(0);
			//var cell2=row.insertCell(1);
			//var cell3=row.insertCell(2);
			//var cell4=row.insertCell(3);

	for (var i=0; i<endorse.length; i++)
		{

			var row=table.insertRow(-1);
			var cell1=row.insertCell(0);
			cell1.innerHTML=endorse[i].Full_Name;
			var cell2=row.insertCell(1); 
			cell2.innerHTML=endorse[i].date;
			var cell3=row.insertCell(2); 
			cell3.innerHTML=endorse[i].words;
			//cell4.innerHTML=endorse[i].date; 
		}	

}

function startjson()
{

	$.getJSON("myjson.json", function(data)
	{

		endorse = data;
		endorse.sort(sort);
		displayEndorsement();
	})
}

function sort(a, b)
{
	return new Date(a.date).getTime() - new Date(b.date).getTime();
}

function beginCarousel()
	{

		var projects = window.location.hash;
		$('#Carousel').carousel(parseInt(projects[1]));

	}
	









