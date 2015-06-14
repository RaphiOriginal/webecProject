function changeTitle(){
	var form = createChangeForm("/saveTitle");
	var div = createDivClass("form-group");
	var input = createInput("title", "Event Titel");
	var button = createSubmit();

	div.appendChild(input);
	form.appendChild(div);
	form.appendChild(button);

	removeChilds("eventTitle");
	var element = document.getElementById("eventTitle");
	element.appendChild(form);
}
function changeItems(){
	var form = createChangeForm("/saveItems");
	var div = createDivClass("form-group");
	var input = createInput("items", "Item Liste (ohne Lehrzeichen!): Item1,Item2,Item 3,...");
	var button = createSubmit();

	div.appendChild(input);
	form.appendChild(div);
	form.appendChild(button);

	removeChilds("items");
	var element = document.getElementById("items");
	element.appendChild(form);
}
function changeLocation(){
	var form = createChangeForm("/saveLocation");
	var div = createDivClass("form-group");
	var input = createInput("location", "Event Ort");
	var button = createSubmit();

	div.appendChild(input);
	form.appendChild(div);
	form.appendChild(button);

	removeChilds("location");
	var element = document.getElementById("location");
	element.appendChild(form);
}
function changeAmount(){
	var form = createChangeForm("/saveAmount");
	var div = createDivClass("form-group");
	var input = createInput("amount", "Kosten");
	var button = createSubmit();

	div.appendChild(input);
	form.appendChild(div);
	form.appendChild(button);

	removeChilds("amount");
	var element = document.getElementById("amount");
	element.appendChild(form);
}
function changeDescription(){
	var form = createChangeForm("/saveDescription");
	var div = createDivClass("form-group");
	var input = createTextArea("description", "Event Beschreibung");
	var button = createSubmit();

	div.appendChild(input);
	form.appendChild(div);
	form.appendChild(button);

	removeChilds("description");
	var element = document.getElementById("description");
	element.appendChild(form);
}
function changeDateTime(){
	var form = createChangeForm("/saveDatetime");
	var div = createDivClass("form-group");
	var input = createPicker("datetime", "Event Termin: YYYY-mm-dd HH:ii");
	var button = createSubmit();

	div.appendChild(input);
	form.appendChild(div);
	form.appendChild(button);

	removeChilds("date");
	var element = document.getElementById("date");
	element.appendChild(form);
}
function changeAdress(prename, name, adress, plz, location){
	var form = createChangeForm("/saveAdress");
	var div = createDivClass("form-group");
	var inputpre = createInput("prename", "Vornamen");
	var inputname = createInput("name", "Nachnamen");
	var inputadress = createInput("adress", "Strasse");
	var inputplz = createInput("PLZ", "Postleitzahl");
	var inputloc = createInput("location", "Ort");
	var button = createSubmit();

	div.appendChild(inputpre);
	div.appendChild(inputname);
	div.appendChild(inputadress);
	div.appendChild(inputplz);
	div.appendChild(inputloc);
	form.appendChild(div);
	form.appendChild(button);

	removeChilds("adress");
	var element = document.getElementById("adress");
	element.appendChild(form);
}
function removeChilds(id){
	var myNode = document.getElementById(id);
	while (myNode.firstChild) {
    	myNode.removeChild(myNode.firstChild);
	}
}
function changeSTV(){
	var form = createChangeForm("/saveStv");
	var div = createDivClass("form-group");
	var input = createInput("stv_number", "STV-Nummer");
	var button = createSubmit();

	div.appendChild(input);
	form.appendChild(div);
	form.appendChild(button);

	removeChilds("stv");
	var element = document.getElementById("stv");
	element.appendChild(form);
}
function changeEmail(){
	var form = createChangeForm("/saveEmail");
	var div = createDivClass("form-group");
	var input = createInput("email", "E-Mail");
	var button = createSubmit();

	div.appendChild(input);
	form.appendChild(div);
	form.appendChild(button);

	removeChilds("email");
	var element = document.getElementById("email");
	element.appendChild(form);
}
function createPicker(name, placeholder){
	var picker = document.createElement("div");
	var pclass = document.createAttribute("class");
	pclass.value = "input-group date";
	var pid = document.createAttribute("id");
	pid.value = "datetimepicker1";

	picker.setAttributeNode(pclass);
	picker.setAttributeNode(pid);

	var input = document.createElement("input");
	var iclass = document.createAttribute("class");
	iclass.value = "form-control";
	var itype = document.createAttribute("type");
	itype.value = "text";
	var iid = document.createAttribute("id");
	iid.value = "datetimepicker";
	var iname = document.createAttribute("name");
	iname.value = name;
	var iplaceholder = document.createAttribute("placeholder");
	iplaceholder.value = placeholder;

	input.setAttributeNode(iclass);
	input.setAttributeNode(itype);
	input.setAttributeNode(iid);
	input.setAttributeNode(iname);
	input.setAttributeNode(iplaceholder);

	var span = document.createElement("span");
	var sid = document.createAttribute("id");
	sid.value = "datepickericon";
	var sclass = document.createAttribute("class");
	sclass.value = "input-group-addon";

	span.setAttributeNode(sid);
	span.setAttributeNode(sclass);

	var ispan = document.createElement("span");
	var isclass = document.createAttribute("class");
	isclass.value = "glyphicon glyphicon-calendar";

	ispan.setAttributeNode(isclass);

	span.appendChild(ispan);
	picker.appendChild(input);
	picker.appendChild(span);

	return picker;
}
function createTextArea(name, placeholder){
	var textarea = document.createElement("textarea");
	var iclass = document.createAttribute("class");
	iclass.value = "form-control";
	var iname = document.createAttribute("name");
	iname.value = name;
	var iplaceholder = document.createAttribute("placeholder");
	iplaceholder.value = placeholder;
	var itype = document.createAttribute("type");
	itype.value = "text";
	var irow = document.createAttribute("row");
	irow.value = "5";

	textarea.setAttributeNode(itype);
	textarea.setAttributeNode(iclass);
	textarea.setAttributeNode(iname);
	textarea.setAttributeNode(iplaceholder);
	textarea.setAttributeNode(irow);

	return textarea;
}
function createSubmit(){
	var button = document.createElement("button");
	var atrClass = document.createAttribute("class");
	atrClass.value = "btn btn-success";

	button.setAttributeNode(atrClass);

	var text = document.createTextNode("Save");

	button.appendChild(text);

	return button;
}
function createInput(name, placeholder){
	var input = document.createElement("input");
	var iclass = document.createAttribute("class");
	iclass.value = "form-control";
	var iname = document.createAttribute("name");
	iname.value = name;
	var iplaceholder = document.createAttribute("placeholder");
	iplaceholder.value = placeholder;
	var itype = document.createAttribute("type");
	itype.value = "text";

	input.setAttributeNode(itype);
	input.setAttributeNode(iclass);
	input.setAttributeNode(iname);
	input.setAttributeNode(iplaceholder);

	return input;
}
function createChangeForm(url){
	var form = document.createElement("form");
	var fclass = document.createAttribute("class");
	fclass.value = "form-horizontal form-group";
	var fmethod = document.createAttribute("method");
	fmethod.value = "POST";
	var faction = document.createAttribute("action");
	faction.value = url;
	var role = document.createAttribute("role");
	role.value = "form";

	form.setAttributeNode(fclass);
	form.setAttributeNode(fmethod);
	form.setAttributeNode(faction);
	form.setAttributeNode(role);

	return form;
}
function deleteRequest(){
	createModal();
	$('#delete').modal('show');
}
function createModal(){
	var modal = document.getElementById("deleteModal");

	var divFirst = createModalDiv();
	var dialog = createDivClass("modal-dialog");
	var content = createDivClass("modal-content");
	var header = createDivClass("modal-header");
	//var closeButton = createCloseButton();
	var title = createModalTitle();
	var body = createDivClass("modal-body");
	var p = createText();
	var submit = createSubmitButton();
	var cancel = createCancelButton();

	//header.appendChild(closeButton);
	header.appendChild(title);
	body.appendChild(p);
	body.appendChild(submit);
	body.appendChild(cancel);
	content.appendChild(header);
	content.appendChild(body);
	dialog.appendChild(content);
	divFirst.appendChild(dialog);

	var testp = document.createElement("p");
	var test = document.createTextNode("Test");
	testp.appendChild(test);
	modal.appendChild(testp);

	modal.appendChild(divFirst);
}

function createModalDiv(){
	var modal = document.createElement("div");
	var atrClass = document.createAttribute("class");
	atrClass.value = "modal fade";
	var atrId = document.createAttribute("id");
	atrId.value = "delete";
	var atrTabindex = document.createAttribute("tabindex");
	atrTabindex.value = "-1";
	var atrRole = document.createAttribute("role");
	atrRole.value = "dialog";
	var atrHidden = document.createAttribute("aria-hidden");
	atrHidden.value = "false";

	modal.setAttributeNode(atrClass);
	modal.setAttributeNode(atrId);
	modal.setAttributeNode(atrTabindex);
	modal.setAttributeNode(atrRole);
	modal.setAttributeNode(atrHidden);

	return modal;
}
function createDivClass(className){
	var div = document.createElement("div");
	var atrClass = document.createAttribute("class");
	atrClass.value = className;
	div.setAttributeNode(atrClass);
	return div;
}
function createCloseButton(){
	var button = document.createElement("button");
	var atrType = document.createAttribute("type");
	atrType.value = "button";
	var atrClass = document.createAttribute("class");
	atrClass.value = "close";
	var atrData = document.createAttribute("data-dismiss");
	atrData.value = "modal";
	var atrAria = document.createAttribute("aria-label");
	atrAria.value = "Close";

	button.setAttributeNode(atrType);
	button.setAttributeNode(atrClass);
	button.setAttributeNode(atrData);
	button.setAttributeNode(atrAria);

	var span = createCloseButtonSpan();
	button.appendChild(span);

	return button;
}
function createModalTitle(){
	var title = document.createElement("h4");
	var attr = document.createAttribute("class");
	attr.value = "modal-title";

	var text = document.createTextNode("Account Löschen?");

	title.appendChild(text);

	title.setAttributeNode(attr);

	return title;
}
function createText(){
	var p = document.createElement("p");
	var text = document.createTextNode("Wollen Sie ihren Account wirklich löschen?");

	p.appendChild(text);

	return p;
}
function createSubmitButton(){
	var a = document.createElement("a");
	var attr = document.createAttribute("class");
	attr.value = "btn btn-success";
	var href = document.createAttribute("href");
	href.value = "/DeleteMe";

	a.setAttributeNode(attr);
	a.setAttributeNode(href);

	var text = document.createTextNode("Löschen");

	a.appendChild(text);

	return a;
}
function createCancelButton(){
	var button = document.createElement("button");
	var atrType = document.createAttribute("type");
	atrType.value = "button";
	var atrClass = document.createAttribute("class");
	atrClass.value = "btn btn-default pull-right";
	var atrData = document.createAttribute("data-dismiss");
	atrData.value = "modal";

	button.setAttributeNode(atrType);
	button.setAttributeNode(atrClass);
	button.setAttributeNode(atrData);

	var text = document.createTextNode("Cancel");

	button.appendChild(text);

	return button;
}
function createCloseButtonSpan(){
	var span = document.createElement("span");
	var attr = document.createAttribute("aria-hidden");
	attr.value = "true";
	span.setAttributeNode(attr);
	var text = document.createTextNode('&times;');
	span.appendChild(text);

	return span;
}