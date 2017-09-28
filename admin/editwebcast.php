<?php 
include("../config.php");

$data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM  `webcasts` WHERE id = ". $_GET["id"]));
if(isset($_POST['submit'])){

  $id = $_POST["id"];

  $title = $_POST["title"];

  $url = $_POST["url"];

  $type = $_POST["type"];

  $date = strtotime($_POST["date"]);

  $date  = date('Y-m-d H:i:s',$date);

  $target_file = $data["thumb"];

  $datenow = date('Y-m-d H:i:s');

  $flag = $_POST["flag"];

  $category = $_POST["category"];

  $meta = $_POST["meta"];

  $thumb = $_FILES["thumb"]["name"];

  $order = $_POST["order"];

  $links = $_POST["links"];



  if($title == "" || $url == "" || $date == "" || $order == ""){
    header("Location: editwebcast.php?id=".$id."&failed");
    die();
  }


  if(!empty($thumb)){
    $target_dir = "../images/thumb/";
    $uploadOk = 1;
    $target_file = $target_dir . basename($_FILES["thumb"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $imageTitle = str_replace(" ", "-", $title);
    $imageTitle = str_replace("/", "-", $imageTitle);
    if(isset($data["thumb"])){
      $target_file = $target_dir . "thumb_" . $data["id"] . "_" . $imageTitle . "_" . date("YmdHis") . "." . $imageFileType;
    }else{
      $target_file = $data["thumb"];
    }


    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["thumb"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
          //echo"validate";
            $uploadOk = 0;
        }
    }

    // Check file size
    if ($_FILES["thumb"]["size"] > 500000) {
      //echo"size";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        // echo"type" . $imageFileType;
        // $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        // header("Location: editwebcast.php?uploadfailed");
        // die();
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["thumb"]["tmp_name"], $target_file)) {

        } else {
            // header("Location: editwebcast.php?uploadfailed");
            // die();
        }
    }


  }

	 mysqli_query($conn, "UPDATE `webcasts` SET `url` = '".$url."', `type` = '".$type."', `title` = '".$title."', `flag` = '".$flag."', `category` = '".$category."' , `metadata` = '".$meta."', `datetime` = '".$date."', `thumb` = '".$target_file."', `order` = '".$order."', `download_links` = '".$links."' 
  		WHERE `id` = '".$id."' ");

  	header("Location: index.php");
 	 die();
 
} 

if(!isset($_GET["id"])){
  header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Edit Webcast</title>
    <link rel="stylesheet"  href="../css/bootstrap.min.css" /> 
    <link rel="stylesheet"  href="../css/bootstrap-theme.min.css" />
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet"  href="../css/style.css" />
    
  </head>
  <body>
  <div class="container" id="home">
    <div class="row header">
        <div class="col-lg-6 header-left">
            <a href="index.php" class="header-logo"></a>
            <div class="header-title">
                <h4>Federal Deposit<br>Insurance Corporation</h4><h5>Each depositor insured to at least $250,000 per insured bank</h5>
            </div>
        </div>
        <div class="col-lg-5 col-lg-offset-1 header-right">
            <!-- <input type="text" placeholder="Search FDIC..." class="form-control search"> -->
        </div>
    </div>
    <div class="row menu">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="index.php" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Home</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Webcast <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="live.php">Live Webcasts</a></li>
                    <li><a href="archived.php">Archived Webcasts</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="addwebcast.php" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Add New Webcast</a>
                </li>
                <li class="dropdown">
                  <a href="logout.php"  role="button" aria-haspopup="true" aria-expanded="false">Logout</a>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div>
    <div class="row">
      <?php if(isset($_GET["failed"])){ ?>
        <div class="alert alert-danger" role="alert"> <strong>Failed!</strong> Please fill up all the details. </div>
      <?php } ?>
        <div class="col-lg-4">
          <h2>Edit <span class="webcast">Webcast</span></h2>
          <form action="editwebcast.php?id=<?php echo $_GET["id"]; ?>" method="post" enctype="multipart/form-data">
            <fieldset class="form-group">
              <input class="form-control" type="hidden" name="id" value="<?php echo $_GET["id"]; ?>" />
              <input class="form-control" type="text" name="title" value="<?php echo $data["title"]; ?>" placeholder="Enter Webcast title" />
            </fieldset>
            <fieldset class="form-group">
              <input class="form-control" type="number" min="0" name="order" placeholder="Order" value="<?php echo $data["order"]; ?>" />
            </fieldset>
            <fieldset class="form-group">
              <input class="form-control" type="text" name="url" value="<?php echo $data["url"]; ?>" placeholder="Enter URL" />
            </fieldset>
            <fieldset class="form-group">
              <select class="form-control" name="type">
                <option value="">Select Webcast Type (Optional)</option>
                <option <?php if($data["type"] == "Board Meeting"){echo"selected='selected'";} ?>>Board Meeting</option>
                <option <?php if($data["type"] == "Advisory Meeting"){echo"selected='selected'";} ?>>Advisory Meeting</option>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <select class="form-control" name="flag">
                <option value="0">Select Webcast Flag</option>
                <option <?php if($data["flag"] == "Live"){echo"selected='selected'";} ?>>Live</option>
                <option <?php if($data["flag"] == "Archive"){echo"selected='selected'";} ?>>Archive</option>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <select class="form-control" name="category" id="category">
                <option value="">Select Category (Optional)</option>
                <option value="FDIC Board Meetings" <?php if($data["category"] == "FDIC Board Meetings"){echo"selected='selected'";} ?>>FDIC Board Meetings</option>
                <option value="Quarterly Banking Profile" <?php if($data["category"] == "Quarterly Banking Profile"){echo"selected='selected'";} ?>>Quarterly Banking Profile</option>
                <option value="Advisory Committee on Economic Inclusion (Come-IN)" <?php if($data["category"] == "Advisory Committee on Economic Inclusion (Come-IN)"){echo"selected='selected'";} ?>>Advisory Committee on Economic Inclusion (Come-IN)</option>
                <option value="Community Banking Advisory Committee" <?php if($data["category"] == "Community Banking Advisory Committee"){echo"selected='selected'";} ?>>Community Banking Advisory Committee</option>
                <option value="Systemic Resolution Advisory Committee" <?php if($data["category"] == "Systemic Resolution Advisory Committee"){echo"selected='selected'";} ?>>Systemic Resolution Advisory Committee</option>
                <option value="Other Events" <?php if($data["category"] == "Other Events"){echo"selected='selected'";} ?>>Other Events</option>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <input class="form-control" type="text" name="meta" id="meta" placeholder="Enter MetaData" value="<?php echo $data["metadata"]; ?>" />
            </fieldset>
            <fieldset class="form-group">
              <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" name="date" value="" placeholder="Select DateTime" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
              </div>
            </fieldset>
            <fieldset class="form-group">
              <img src="<?php echo $data["thumb"]; ?>" style="width:360px" /><br>
              <label class="control-label">Select Image:</label>
              <input id="input-1a" type="file" class="file" name="thumb" data-show-preview="false" >
            </fieldset>
            <fieldset class="form-group">
              <button class="add_field_button btn btn-primary">Add Download</button>
            </fieldset>
            <div class="input_fields_wrap">
              <?php 
                $jsonarray = json_decode($data["download_links"]);
                foreach($jsonarray as $value){ ?>
                  <div><a href="#" class="remove_field">Remove</a><div class="form-group"><input type="text" name="mytext[]" class="form-control" placeholder="Donwload URL" value="<?php echo $value->url; ?>"></div><div class="form-group"><input type="text" name="mytext2[]" class="form-control" placeholder="File Description" value="<?php echo $value->desc; ?>"></div></div>
              <?php } ?>
            </div>
            <fieldset class="form-group">
              <input type="hidden" name="links" id="downloadurl" />
              <input class="btn btn-success" onclick="createJSON()" type="submit" value="Edit Webcast" name="submit" />
            </fieldset>
          </form>
        </div>
      </div>
</div>
<div class="loading">
  <div class="loader"></div>
</div>
<script src="../js/jquery-1.11.3.js"></script>
<script src="../js/moment.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
      var max_fields      = 5; //maximum input boxes allowed
      var wrapper         = $(".input_fields_wrap"); //Fields wrapper
      var add_button      = $(".add_field_button"); //Add button ID
      
      var x = 1; //initlal text box count
      $(add_button).click(function(e){ //on add input button click
          e.preventDefault();
          if(x < max_fields){ //max input box allowed
              x++; //text box increment
              $(wrapper).append('<div><a href="#" class="remove_field">Remove</a><div class="form-group"><input type="text" name="mytext[]" class="form-control" placeholder="Donwload URL" /></div><div class="form-group"><input type="text" name="mytext2[]" class="form-control" placeholder="File Description" /></div></div>'); //add input box
          }
      });
      
      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
          e.preventDefault(); $(this).parent('div').remove(); x--;
      })
  });

    $(function () {
        $('#datetimepicker1').datetimepicker();
        $('#datetimepicker1 input').val("<?php echo $data["datetime"]; ?>");
    });

    $( "#category" ).change(function() {
      if($(this).val() == "FDIC Board Meetings"){
        $("#meta").val("board, chairman, board meeting, board meetings, directors, board of directors");
      }
      if($(this).val() == "Quarterly Banking Profile"){
        $("#meta").val("banking profile, financial results, industry, banking industry, bank performance, bank results, bank");
      }
      if($(this).val() == "Advisory Committee on Economic Inclusion (Come-IN)"){
        $("#meta").val("inclusion, economic inclusion, banking services, underserved, unbanked, underbanked, financial services");
      }
      if($(this).val() == "Community Banking Advisory Committee"){
        $("#meta").val("community, community banking, rural, small banks, local banking, small business");
      }
      if($(this).val() == "Systemic Resolution Advisory Committee"){
        $("#meta").val("Dodd-Frank, resolution, wall street, too big to fail, living wills, title 1, title 2, liquidation, orderly liquidation");
      }
      if($(this).val() == "Other Events"){
        $("#meta").val("");
      }
      if($(this).val() == "None"){
        $("#meta").val("");
      }


    });

  function createJSON() {
      jsonObj = [];
      var url = "";
      var description = "";
      var counter  = 1;
      var item = {};

      $(".loading").show();

      $(".input_fields_wrap input").each(function() {

        if($(this).attr("name") == "mytext[]"){
          url = $(this).val();
        }

        if($(this).attr("name") == "mytext2[]"){
          description = $(this).val();
        }
        
        if(counter > 1){
            item ["url"] = url;
            item ["desc"] = description;

            jsonObj.push(item);

            url = "";
          description = "";
          counter  = 1;
          item = {};
          }
          else{
            counter++;
          }
      });

      $("#downloadurl").val(JSON.stringify(jsonObj));
  }
</script>
</body>
</html>