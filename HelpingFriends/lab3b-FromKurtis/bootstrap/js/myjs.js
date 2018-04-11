function storeName()
{
	var name = document.getElementById("FirstName").value;
	localStorage["username"] = name;
	closeWindow();
	console.log(name);

}

function closeWindow()
{
	$('#myModal').modal('hide');

}

function storeInput()
{
	var endorseName = document.getElementById("StoreIn").value;
	localStorage["FullName"] = endorseName;
}
