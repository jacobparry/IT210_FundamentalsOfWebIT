/////////////////////////LISTENER Functions
/////////////////////////LISTENER Functions
/////////////////////////LISTENER Functions


//These record the keystrokes so it can be repopulated or submitted.
function recordNameStrokes() {
    if (typeof(Storage) !== "undefined") {
        localStorage.setItem('currentName', document.getElementById("currentName").value);
    }
}

function recordEndorsementStrokes() {
    if (typeof(Storage) !== "undefined") {
        localStorage.setItem('currentEndorsement', document.getElementById("currentEndorsement").value);
    }
}






/////////////////////////////////PAGE LOADS
/////////////////////////////////PAGE LOADS
/////////////////////////////////PAGE LOADS


//This checks to see if there are stored localStorage values and populates the page with them.
function loadFromLocalStorage() {

    if (localStorage.currentName) {
        document.getElementById('currentName').value = localStorage.currentName;
    }
    if (localStorage.currentEndorsement) {
        document.getElementById('currentEndorsement').value = localStorage.currentEndorsement;
    }

    if (localStorage.json) {
        addEndorsement();
    }

}



////////////////////////////////////SORTING FUNCTIONS
////////////////////////////////////SORTING FUNCTIONS
////////////////////////////////////SORTING FUNCTIONS
function sortByName() {

    var table = document.getElementById("endorsementTable"); // grabs the table.
    for (var i = 0; i < table.length; i++) //Empties the table of all the rows.
    {
        table.deleteRow(i);
    }
    var sorted = JSON.parse(localStorage.json); //Takes my stores json string and parses it back into a JSON.
    sorted = sortByKey(sorted, 'name') ////This black box takes my JSON I want sorted and the Key I want it sorted by.
    localStorage.json = JSON.stringify(sorted); //I now take the sorted JSON and put it back into localStorage.
    addEndorsement(); ////This calls my print function

}

function sortByDate() {
    var table = document.getElementById("endorsementTable");
    for (var i = 0; i < table.length; i++) {
        table.deleteRow(i);
    }
    var sorted = JSON.parse(localStorage.json);
    sorted = sortByKey(sorted, 'timestamp')
    localStorage.json = JSON.stringify(sorted);
    addEndorsement();
}

function sortCompany() {
    var table = document.getElementById("endorsementTable");
    for (var i = 0; i < table.length; i++) {
        table.deleteRow(i);
    }
    var sorted = JSON.parse(localStorage.json);
    sorted = sortByKey(sorted, 'endorsement')
    localStorage.json = JSON.stringify(sorted);
    addEndorsement();
}

function sortByKey(array, key) {
    return array.sort(function(a, b) {
        var x = a[key];
        var y = b[key];
        return ((x < y) ? -1 : ((x > y) ? 1 : 0));
    });
}






/////////////////////////////////saves JSON to localStorage
/////////////////////////////////saves JSON to localStorage
/////////////////////////////////saves JSON to localStorage

function saveJSON() {
    if (typeof(Storage) !== "undefined") ////Checks to make sure the browser supports it.
    {
        if (localStorage.currentEndorsement && localStorage.currentName) ////Checks that both curr.Endorsment and curr.Name are both in localStorage. If not, throws and alert.
        {
            var name = document.getElementById('currentName').value; //gets the name value from the input html tags.
            var endor = document.getElementById("currentEndorsement").value; //gets the endorsement value from the input html tags.
            var timestamp = Date(); ////Adds a timestamp for time submitted.
            var myjson = []; ////I declare an empty temp json.

            if (localStorage.json) ////I store my json in the localStorage under json. 
            ////This checks to see if it is there. If it is, it adds everything in it to my temp json.
            {
                myjson = JSON.parse(localStorage.json);
            }

            myjson.push({ ////Adds the new endorsment to the temp JSON.
                "name": name,
                "endorsement": endor,
                "timestamp": timestamp
            });
            var toSave = JSON.stringify(myjson); ////makes the temp JSON into a string so it can be stored in localStorage.
            localStorage.json = toSave; ////Either creates json if there is not one, or saves the temp JSON string to it.

            localStorage.removeItem("currentEndorsement"); ////Removes the localStorage values after submission.
            localStorage.removeItem("currentName");

            document.getElementById('currentName').value = ""; ////After local storage is erased, sets the textbox back to default.
            document.getElementById('currentEndorsement').value = ""; ////After local storage is erased, sets the textbox back to default.
            addEndorsement();
        } else {
            alert("Please enter in both fields.");
        }

    }

}



function addEndorsement() {
    var toPrint = JSON.parse(localStorage.json); ////I pull my values out of the LS json string.
    var table = document.getElementById("endorsementTable"); ////I grab my html table.
    table.innerHTML = ""; ////I get rid of all my HTML table rows.

    var HTML = "<table class=\"table table-striped\">" +
				"<thead>" +
					"<tr id=\"rowhead\">" +
						"<th id=\"namehead\" class=\"active\" onclick=\"sortByName()\">Name</th>" +
						"<th id=\"companyhead\" onclick=\"sortCompany()\">Endorsement</th>" +
						"<th id=\"datehead\" onclick=\"sortByDate()\">Date</th>" +
					"<tr>" +
				"</thead>" +
				"<tbody>";
    for (var i = 0; i < toPrint.length; i++) ///For every index in the json, I insert a row and 3 cells for the data.
    { ////I put the data into the cells here as well.

    	HTML += "<tr>" +
					"<td>" + toPrint[i].name + "</td>" +
					"<td>" + toPrint[i].endorsement + "</td>" +
					"<td>" + toPrint[i].timestamp + "</td>" +
				"</tr>";

    };

    HTML += "</tbody></table>"
		table.innerHTML = HTML;

}


/////////////////////////////////////////////AJAX FUNCTIONS
/////////////////////////////////////////////AJAX FUNCTIONS
/////////////////////////////////////////////AJAX FUNCTIONS

$(function(){
    reload_json_database();
    setInterval(function() {reload_json_database()}, 3000);


})


function reload_json_database(){

//from http://stackoverflow.com/questions/6216234/disable-ajax-caching
 $.ajax
        (
            {
                type: "GET", // we want a file from the server 
                url: "/js/myendorsements.json", // this is the file 
                
           
                cache:false, //disable caching
                dataType: 'html', // what it is returned as
                success: function(msg) // if it works then send it as msg to a funciton 
                {
                    localStorage.json=msg; //set msg to be the json_as_string in localStorage
                },
                error:function (xhr, textStatus, thrownError) // if it doesn't work then run this error function and alert the user
                {
                    ret_val=xhr.readyState;
                    alert("status=" +xhr.status);
                }
            }
        );

        addEndorsement();
console.log("Thump");
}