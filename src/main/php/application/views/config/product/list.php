<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Product List</title>		
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/dojo/1.6/dojo/resources/dojo.css">
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/dojo/1.6/dijit/themes/claro/claro.css">
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/dojo/1.6/dojox/grid/resources/Grid.css">
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/dojo/1.6/dojox/grid/resources/claroGrid.css">
		
	<script src="http://ajax.googleapis.com/ajax/libs/dojo/1.6.0/dojo/dojo.xd.js" data-dojo-config="isDebug: true,parseOnLoad: true">
	</script>
	
	<script>
		dojo.require("dijit.layout.BorderContainer");
		dojo.require("dijit.layout.TabContainer");
		dojo.require("dijit.layout.ContentPane");

		dojo.require("dojox.grid.DataGrid");
		dojo.require("dojo.data.ObjectStore");
		dojo.require("dojo.store.Memory");

		dojo.require("dojox.form.Manager");
		dojo.require("dijit.form.TextBox");
		dojo.require("dijit.form.DateTextBox");
		dojo.require("dijit.form.FilteringSelect");
		dojo.require("dijit.form.Form");
		dojo.require("dijit.form.Button");

		var store, gridProductList;
		
		dojo.ready(function(){
			var product = [
                 {code:"P-001", name:"Product 001"},
                 {code:"P-002", name:"Product 002"},
                 {code:"P-003", name:"Product 003"} 
               ];
			store = new dojo.store.Memory({data:product, idProperty: "code"});

			gridProductList = new dojox.grid.DataGrid({
				store: dataStore = dojo.data.ObjectStore({objectStore: store}),
				structure: [
					{ name: "Product Code", field: "code", width: "200px" },
					{ name: "Product Name", field: "name", width: "300px" }
				]
			}, "gridProductList");

			gridProductList.startup();
		});
		
	</script>
	
	<style type="text/css">
		html,body {
			height: 100%;
			margin: 0;
			overflow: hidden;
			padding: 0;
		}
		
		body {
			margin: 0;
			padding: 2em;
			font-family: Lucida Sans, Lucida Grande, Arial !important;
			font-size: 13px !important;
			background: white;
			color: #333;
		}
		
		table {
			padding: 5px;
			
		}
		
		td {
			margin: 5px; 
			padding: 5px;
		}
		
		h1 {
			font-size:1.5em;
		}
		
		#appLayout {
			height: 80%;
		}
	</style>

</head>
	<body class="claro">
	
		<h1>Product Management</h1>
	
		<div id="appLayout" class="demoLayout" data-dojo-type="dijit.layout.BorderContainer" data-dojo-props="design: 'headline'">
			<div data-dojo-type="dijit.layout.ContentPane"
				data-dojo-props="region: 'left'" style="width: 50%">
				<div id="gridProductList"></div>
			</div>
			<div data-dojo-type="dijit.layout.ContentPane"
				data-dojo-props="region: 'center'">
				<form data-dojo-type="dojox.form.Manager" id="productForm" enctype="multipart/form-data" action="" method="post">
					<table style="border: 1px solid #9f9f9f;">
						<tr>
							<td><label for="firstname">Product Code:</label>
							</td>
							<td><input type="text" id="productCode" dojo-data-id="productCode"
								data-dojo-type="dijit.form.TextBox" name="productCode" trim="true"
								id="productCode" propercase="true"></input>
							</td>
						</tr>
						<tr>
							<td><label for="firstname">Product Name:</label>
							</td>
							<td><input type="text" id="productName" dojo-data-id="productName"
								data-dojo-type="dijit.form.TextBox" name="productName" trim="true"
								id="productName" propercase="true"></input>
							</td>
						</tr>
						<tr>
	
							<td></td>
							<td>
								<button data-dojo-type="dijit.form.Button">Submit Form</button>
							</td>
						</tr>
					</table>
				</form>
	
			</div>
		</div>
	</body>
</html>