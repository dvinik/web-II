$(document).ready(function() {
    $("a.top_menu").each(function() {
        // checks if its the same on the address bar
        var url = window.location.href;
        if (url == (this.href)) {
            $(this).addClass("active");
            return false;
        }
    });
    var menu = $("a.nav_text.active").attr("menu");
    $("a.top_menu").each(function() {
        var name = $(this).attr("menu");
        if (name.indexOf(menu) >= 0) {
            $(this).addClass("active");
            return false;
        }
    });
});

// function list_suppliers(){
// 	$link = open_db_connection();
// 	if(!$link){
// 		echo "Cannot connect to db";
// 	}else{
// 		$sql = "SELECT * FROM Suppliers";
// 		$res = $link->query($sql);
// 		if($res->num_rows > 0){
// 			while($row = $res->fetch_assoc()){
// 				$id = $row["supplier_id"];
// 				$name = $row["supplier_name"];
// 				echo "<option value='$id'>$name</option>";
// 			}
// 		}
// 		$conn->close();
// 	}
// }