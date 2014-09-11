// JavaScript Document
/* This script and many more are available free online at
The JavaScript Source :: http://javascript.internet.com
Created by: Down Home Consulting :: http://downhomeconsulting.com */

/*
Country State Drop Downs v1.0.
(c) Copyright 2005 Down Home Consulting, Inc.
www.DownHomeConsulting.com

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. The software is provided "as is", without warranty of any kind, express or implied, including but not limited to the warranties of merchantability, itness for a particular purpose and noninfringement. in no event shall the authors or copyright holders be liable for any claim, damages or other liability, whether in an action of contract, tort or otherwise, arising from, out of or in connection with the software or the use or other dealings in the software.

*/

// If you have PHP you can set the post values like this
//var postState = '<?=$_POST["state"] ?>';
//var postCountry = '<?=$_POST["country"] ?>';
//var postState = '';
//var postCountry = '';
// State table
//
// To edit the list, just delete a line or add a line. Order is important.
// The order displayed here is the order it appears on the drop down.
//
var state = '\
US:AL:Alabama (AL)|\
US:AK:Alaska (AK)|\
US:AZ:Arizona (AZ)|\
US:AR:Arkansas (AR)|\
US:CA:California (CA)|\
US:CO:Colorado (CO)|\
US:CT:Connecticut (CT)|\
US:DE:Delaware (DE)|\
US:FL:Florida (FL)|\
US:GA:Georgia (GA)|\
US:HI:Hawaii (HI)|\
US:ID:Idaho (ID)|\
US:IL:Illinois (IL)|\
US:IN:Indiana (IN)|\
US:IA:Iowa (IA)|\
US:KS:Kansas (KS)|\
US:KY:Kentucky (KY)|\
US:LA:Louisiana (LA)|\
US:ME:Maine (ME)|\
US:MD:Maryland (MD)|\
US:MA:Massachusetts (MA)|\
US:MI:Michigan (MI)|\
US:MN:Minnesota (MN)|\
US:MO:Missouri (MO)|\
US:MS:Mississippi (MS)|\
US:MT:Montana (MT)|\
US:NE:Nebraska (NE)|\
US:NH:New Hampshire (NH)|\
US:NJ:New Jersey (NJ)|\
US:NM:New Mexico (NM)|\
US:NY:New York (NY)|\
US:NC:North Carolina (NC)|\
US:ND:North Dakota (ND)|\
US:OH:Ohio (OH)|\
US:OK:Oklahoma (OK)|\
US:OR:Oregon (OR)|\
US:PA:Pennsylvania (PA)|\
US:RI:Rhode Island (RI)|\
US:SC:South Carolina (SC)|\
US:SD:South Dakota (SD)|\
US:TN:Tennessee (TN)|\
US:TX:Texas (TX)|\
US:VT:Vermont (VT)|\
US:VA:Virginia (VA)|\
US:WA:Washington (WA)|\
US:DC:Washington DC (DC)|\
US:WV:West Virginia (WV)|\
US:WI:Wisconsin (WI)|\
US:WY:Wyoming (WY)|\
CA:AB:Alberta|\
CA:MB:Manitoba|\
CA:BC:British Columbia|\
CA:NB:New Brunswick|\
CA:NL:Newfoundland and Labrador|\
CA:NT:Northwest Territories|\
CA:NS:Nova Scotia|\
CA:NU:Nunavut|\
CA:ON:Ontario|\
CA:PE:Prince Edward Island|\
CA:QC:Quebec|\
CA:SK:Saskatchewan|\
CA:YT:Yukon Territory|\
AU:AAT:Australian Antarctic Territory|\
AU:ACT:Australian Capital Territory|\
AU:NT:Northern Territory|\
AU:NSW:New South Wales|\
AU:QLD:Queensland|\
AU:SA:South Australia|\
AU:TAS:Tasmania|\
AU:VIC:Victoria|\
AU:WA:Western Australia|\
BR:AC:Acre|\
BR:AL:Alagoas|\
BR:AM:Amazonas|\
BR:AP:Amapa|\
BR:BA:Baia|\
BR:CE:Ceara|\
BR:DF:Distrito Federal|\
BR:ES:Espirito Santo|\
BR:FN:Fernando de Noronha|\
BR:GO:Goias|\
BR:MA:Maranhao|\
BR:MG:Minas Gerais|\
BR:MS:Mato Grosso do Sul|\
BR:MT:Mato Grosso|\
BR:PA:Para|\
BR:PB:Paraiba|\
BR:PE:Pernambuco|\
BR:PI:Piaui|\
BR:PR:Parana|\
BR:RJ:Rio de Janeiro|\
BR:RN:Rio Grande do Norte|\
BR:RO:Rondonia|\
BR:RR:Roraima|\
BR:RS:Rio Grande do Sul|\
BR:SC:Santa Catarina|\
BR:SE:Sergipe|\
BR:SP:Sao Paulo|\
BR:TO:Tocatins|\
NL:DR:Drente|\
NL:FL:Flevoland|\
NL:FR:Friesland|\
NL:GL:Gelderland|\
NL:GR:Groningen|\
NL:LB:Limburg|\
NL:NB:Noord Brabant|\
NL:NH:Noord Holland|\
NL:OV:Overijssel|\
NL:UT:Utrecht|\
NL:ZH:Zuid Holland|\
NL:ZL:Zeeland|\
UK:AVON:Avon|\
UK:BEDS:Bedfordshire|\
UK:BERKS:Berkshire|\
UK:BUCKS:Buckinghamshire|\
UK:CAMBS:Cambridgeshire|\
UK:CHESH:Cheshire|\
UK:CLEVE:Cleveland|\
UK:CORN:Cornwall|\
UK:CUMB:Cumbria|\
UK:DERBY:Derbyshire|\
UK:DEVON:Devon|\
UK:DORSET:Dorset|\
UK:DURHAM:Durham|\
UK:ESSEX:Essex|\
UK:GLOUS:Gloucestershire|\
UK:GLONDON:Greater London|\
UK:GMANCH:Greater Manchester|\
UK:HANTS:Hampshire|\
UK:HERWOR:Hereford & Worcestershire|\
UK:HERTS:Hertfordshire|\
UK:HUMBER:Humberside|\
UK:IOM:Isle of Man|\
UK:IOW:Isle of Wight|\
UK:KENT:Kent|\
UK:LANCS:Lancashire|\
UK:LEICS:Leicestershire|\
UK:LINCS:Lincolnshire|\
UK:MERSEY:Merseyside|\
UK:NORF:Norfolk|\
UK:NHANTS:Northamptonshire|\
UK:NTHUMB:Northumberland|\
UK:NOTTS:Nottinghamshire|\
UK:OXON:Oxfordshire|\
UK:SHROPS:Shropshire|\
UK:SOM:Somerset|\
UK:STAFFS:Staffordshire|\
UK:SUFF:Suffolk|\
UK:SURREY:Surrey|\
UK:SUSS:Sussex|\
UK:WARKS:Warwickshire|\
UK:WMID:West Midlands|\
UK:WILTS:Wiltshire|\
UK:YORK:Yorkshire|\
EI:CO ANTRIM:County Antrim|\
EI:CO ARMAGH:County Armagh|\
EI:CO DOWN:County Down|\
EI:CO FERMANAGH:County Fermanagh|\
EI:CO DERRY:County Londonderry|\
EI:CO TYRONE:County Tyrone|\
EI:CO CAVAN:County Cavan|\
EI:CO DONEGAL:County Donegal|\
EI:CO MONAGHAN:County Monaghan|\
EI:CO DUBLIN:County Dublin|\
EI:CO CARLOW:County Carlow|\
EI:CO KILDARE:County Kildare|\
EI:CO KILKENNY:County Kilkenny|\
EI:CO LAOIS:County Laois|\
EI:CO LONGFORD:County Longford|\
EI:CO LOUTH:County Louth|\
EI:CO MEATH:County Meath|\
EI:CO OFFALY:County Offaly|\
EI:CO WESTMEATH:County Westmeath|\
EI:CO WEXFORD:County Wexford|\
EI:CO WICKLOW:County Wicklow|\
EI:CO GALWAY:County Galway|\
EI:CO MAYO:County Mayo|\
EI:CO LEITRIM:County Leitrim|\
EI:CO ROSCOMMON:County Roscommon|\
EI:CO SLIGO:County Sligo|\
EI:CO CLARE:County Clare|\
EI:CO CORK:County Cork|\
EI:CO KERRY:County Kerry|\
EI:CO LIMERICK:County Limerick|\
EI:CO TIPPERARY:County Tipperary|\
EI:CO WATERFORD:County Waterford|\
';

// Country data table
//
// To edit the list, just delete a line or add a line. Order is important.
// The order displayed here is the order it appears on the drop down.
//
//var country = '\
//CA:Canada|\
//US:United States|\ ';

var country = '\
UK:United Kingdom|US:United States|\ ';

function TrimString(sInString) {
  if ( sInString ) {
    sInString = sInString.replace( /^\s+/g, "" );// strip leading
    return sInString.replace( /\s+$/g, "" );// strip trailing
  }
}

// Populates the country selected with the counties from the country list
function populateCountry(defaultCountry) {
  if ( postCountry != '' ) {
    defaultCountry = postCountry;
  }
  var countryLineArray = country.split('|');  // Split into lines
  var selObj = document.getElementById('country');
  //selObj.options[0] = new Option('Select Country','');
  selObj.selectedIndex = 0;
  for (var loop = 0; loop < countryLineArray.length; loop++) {
    lineArray = countryLineArray[loop].split(':');
    countryCode  = TrimString(lineArray[0]);
    countryName  = TrimString(lineArray[1]);
    if ( countryCode != '' ) {
      //selObj.options[loop + 1] = new Option(countryName, countryCode);
	  selObj.options[loop] = new Option(countryName, countryCode);
    }
    if ( defaultCountry == countryCode ) {
      selObj.selectedIndex = loop; //+ 1;
    }
  }
}

function populateState() {
  var selObj = document.getElementById('state');
  var foundState = false;
  // Empty options just in case new drop down is shorter
  if ( selObj.type == 'select-one' ) {
    for (var i = 0; i < selObj.options.length; i++) {
      selObj.options[i] = null;
    }
    selObj.options.length=null;
    selObj.options[0] = new Option('Select State','');
    selObj.selectedIndex = 0;
  }
  // Populate the drop down with states from the selected country
  var stateLineArray = state.split("|");  // Split into lines
  var optionCntr = 1;
  for (var loop = 0; loop < stateLineArray.length; loop++) {
    lineArray = stateLineArray[loop].split(":");
    countryCode  = TrimString(lineArray[0]);
    stateCode    = TrimString(lineArray[1]);
    stateName    = TrimString(lineArray[2]);
  if (document.getElementById('country').value == countryCode && countryCode != '' ) {
    // If it's a input element, change it to a select
      if ( selObj.type == 'text' ) {
        parentObj = document.getElementById('state').parentNode;
        parentObj.removeChild(selObj);
        var inputSel = document.createElement("SELECT");
        inputSel.setAttribute("name","state");
        inputSel.setAttribute("id","state");
        parentObj.appendChild(inputSel) ;
        selObj = document.getElementById('state');
        selObj.options[0] = new Option('Select State','');
        selObj.selectedIndex = 0;
      }
      if ( stateCode != '' ) {
        selObj.options[optionCntr] = new Option(stateName, stateCode);
      }
      // See if it's selected from a previous post
      if ( stateCode == postState && countryCode == postCountry ) {
        selObj.selectedIndex = optionCntr;
      }
      foundState = true;
      optionCntr++
    }
  }
  // If the country has no states, change the select to a text box
  if ( ! foundState ) {
    parentObj = document.getElementById('state').parentNode;
    parentObj.removeChild(selObj);
  // Create the Input Field
    var inputEl = document.createElement("INPUT");
    inputEl.setAttribute("id", "state");
    inputEl.setAttribute("type", "text");
    inputEl.setAttribute("name", "state");
    inputEl.setAttribute("size", 20);
    inputEl.setAttribute("value", postState);
    parentObj.appendChild(inputEl) ;
  }
}

function initCountry(country) {
  populateCountry(country);
  populateState();
}


