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