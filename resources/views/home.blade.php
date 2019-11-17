@extends('layout')

@section('content')
<p>Wellcome user {{ Auth::user()->name }}</p>

<p>Insert e-mail adress:</p>

<form>
 

  <input type="text" name="adrese" ><br><br>

  <input type="button" name="btn" value="Submit"><br><br><br><br>

</form> 

<div id="links">
	<p ></p>
</div>

<script>
	xhr = new XMLHttpRequest();
	var links = document.getElementById('links');
	var btn = document.forms[0].btn;
	btn.addEventListener('click', ajaxInsert);
	
	function ajaxInsert(){
		var adrese = document.forms[0].adrese.value;
		xhr.open('GET', 'links?adrese=' + adrese, true);
		xhr.send();
		xhr.onreadystatechange = function(){
         if(xhr.readyState === 4){
        /*var insert = xhr.responseText;

        alert(insert);*/
        //document.getElementById('time').innerHTML = rezultati;
        document.forms[0].adrese.value="";
        }
    }
		
	}

	function ajaxCreate(){
		xhr.open('GET', 'getLinks', true);
		xhr.send();
		 xhr.onreadystatechange = function(){
         	if(xhr.readyState === 4){
        	var getLinks = JSON.parse(xhr.responseText);
        	renderHTML(getLinks);
        	}
    	}
	}

	function renderHTML(r){
    	var htmlStr = "";
    	for(var i in r){
        htmlStr += "<p><a target='_blank' href='http://" + r[i].adrese + "'</a>" + r[i].adrese + "</p>";
    	}
    document.getElementById('links').innerHTML = htmlStr;
    
	}
	
	ajaxCreate();
	setInterval(ajaxCreate, 500);
	
</script>   

	

<form method="GET" action="/logout">
	<input type="submit" value="Logout">
</form>

@endsection

