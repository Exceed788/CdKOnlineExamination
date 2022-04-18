<div class="app-main__outer">
<div class="app-main__inner">
<div class="app-page-title">
<div class="page-title-wrapper">
<div class="page-title-heading">
<div><b>Examinee Codes</b></div>
</div>
</div>
</div> 

<div class="col-md-12">
<div class="main-card mb-3 card">
<div class="card-header">


<button class="btn btn-success btn-sm" type="submit" onclick="myFunction()" >Add 5 New Codes</button>
<button class="btn btn-primary btn-sm" onclick="print()" style="float:right; margin-left: 10px;">

Print Codes <i class='fa fa-print'></i></button>

<script> 

    function myFunction() {
        location.reload();
        alert("Added 5 new codes");
	}
</script>

    <?php
 
    for ($x = 0; $x < 5; $x++) {
        $uni = uniqid(substr(2, 4),true);
        $suffix = str_shuffle('abcdefghijklmnopqrstuvwxyz');
        $examineecode = strtoupper(substr($suffix , 0 ,2). substr(str_shuffle(strrev(str_replace(".","",$uni))),0 ,4));                    
        $conn->query("INSERT INTO examineecode_tbl(exmne_code) VALUES ('$examineecode')");
        }
    ?>


     

</div>
    <body>
    <table id="dtBasicExample" class="align-middle mb-0 table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <div class="table-responsive">
    <thead>
    <tr>
    <th class="text-left pl-4" width="20%">Examinee Codes</th>
    <th class="text-center" width="20%">Status</th>
    <th class="text-left ">Date Created</th>
    </tr>
    </thead>
    <tbody>


    <?php 

    $selCodes = $conn->query("SELECT * FROM examineecode_tbl");

    if($selCodes->rowCount() > 0)
    {   
        while ($selCodesRow = $selCodes->fetch(PDO::FETCH_ASSOC)) { ?>

            <tr>
            <td class="pl-4"><strong> <?php echo $selCodesRow['exmne_code']; ?></strong></td>
            <td class="text-center"><?php echo $selCodesRow['code_status']; ?></td>
            <td class="text-left"> <?php echo $selCodesRow['code_created']; ?></td>
            
            </tr>
            
            <?php }
        }
        else
        { ?>
            <tr>
            <td colspan="5">
            <h3 class="p-3">No Examinee Codes Yet</h3>
            </td>
            </tr>
            <?php }
            ?>
            </tbody>
            </table>
            </div>
            </div>
            </div>   
            
    </div>
</body>

