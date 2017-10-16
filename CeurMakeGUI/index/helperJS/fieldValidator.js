var alphaNumeric = new RegExp(/^[a-z\d\-_\s]+$/i);
var alphaNumericNotMust = new RegExp(/^[a-z\d\-_\s]*$/i);
var alpha = new RegExp(/^[A-Za-z\s]+$/);
var numberAndSpace = new RegExp("/^[0-9 ]*$/") ;
var numberOnly = new RegExp(/^[0-9]*$/) ;
var volNumber = new RegExp(/^\Vol-[0-9]+$/);
var capitalLettersNumbers =  new RegExp(/^[A-Z0-9]+$/);
var capitalLettersNumbersNotMust =  new RegExp(/^[A-Z0-9]*$/);
var email = new RegExp("/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i") ;
var hyperLink = new RegExp(/[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/i) ;
var hyperLinkNotMust = new RegExp(/[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)*$/i) ;
var emptyString = new RegExp("/^[\s]*$/");
var dateYYYYMMDD = new RegExp(/^\d{4}-\d{1,2}-\d{1,2}$/);
var address = new RegExp(/^[a-zA-Z0-9\s,'-]*$/i);



// TODO: complete the validator functions for PublishPage and EasyChair Upload

function validateAlphaNumeric( id, errorId )
{
	if(!(  alphaNumeric.test( document.getElementById(id).value ) ))
	{
		document.getElementById(errorId).style.display = "initial" ;
		return 1 ;
	}else
		return 0 ;

}

function validatingMetaDataOfTwo( boolTemp )
{
	boolTemp = 0 ;
	clearingMetaDataErrorSpan( ) ;

	if ( !( alphaNumeric.test( document.getElementById("id").value )) )
	{
		document.getElementById("idError").style.display = "initial" ;
		boolTemp++;

	}

	if( !(capitalLettersNumbers.test(document.getElementById("acronym").value)))
	{
		document.getElementById("acronymError").style.display = "initial" ;
		boolTemp++ ;
	}

	if ( !( alphaNumeric.test(document.getElementById("fullTitle").value )))
	{
		document.getElementById("fullTitleError").style.display = "initial" ;
		boolTemp++;
	}

	if( !(alphaNumeric.test(document.getElementById("volume").value)))
	{
		document.getElementById("volumeError").style.display = "initial" ;
		boolTemp++;
	}

	if( !(alphaNumeric.test(document.getElementById("volumeNumber").value )))
	{
		document.getElementById("volumeNumberID").style.display = "initial" ;
		boolTemp++;
	}

	if( !(dateYYYYMMDD.test(document.getElementById("date").value )) )
	{
		document.getElementById("dateError").style.display = "initial" ;
		boolTemp++;

	}

	if( !(hyperLink.test(document.getElementById("homePage").value )) )
	{
		document.getElementById("homePageError").style.display = "initial" ;
		boolTemp++;
	}

	if( !(address.test(document.getElementById("location").value )) )
	{
		document.getElementById("locationError").style.display = "initial" ;
		boolTemp++;
	}

	if( !(hyperLink.test(document.getElementById("linkLocation").value )) )
	{
		document.getElementById("linkLocationError").style.display = "initial" ;
		boolTemp++;
	}

	return boolTemp ;

}
