var playerJ;

function getUsername(){
	if (document.cookie.split("=")[0]=="uname"){
		return document.cookie.split("=")[1];
	}
}

function requestJson(){
	var json;
	$.ajax({
		type: 'GET', 
        url: 'playerjson.php?u='+getUsername(), 
        //data: { get_param: 'value' }, 
        dataType:'json',
        success: function (data) { 
        	console.log(data);
            json = data
            playerJ = json;
            return json;
        }
	});
	return json;
}

function getPlayerJson(){
	requestJson();
	return playerJ;
}

requestJson();