function addNew() {
	window.location.href = "add.php";
}
function validateData() {
	var productName = document.getElementById("productName").value;
	var productDescription = document.getElementById("productDescription").value;
	var qty = document.getElementById("qty").value;
	var rate = document.getElementById("rate").value;
	if (productName == null || productName.trim() == "") {
		alert('Enter the product name');
		return false;
	}
	else if (productName == null || productDescription.trim() == "") {
		alert('Enter the product descriptions');
		return false;
	}
	else if (isNaN(productName) == false) {
		alert('Product name should be alphabet');
		return false;
	}
	else if (isNaN(productDescription) == false) {
		alert('Product description should be alphabet');
		return false;
	}
	else if (isNaN(qty) == true) {
		alert('Quantity should be numeric');
		return false;
	}
	else if (isNaN(rate) == true) {
		alert('Rate should be numeric');
		return false;
	}
	else {
		return true;
	}
}




