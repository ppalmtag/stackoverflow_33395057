<?php 
 if(isset($_GET['tab'])){
    $tab = $_GET['tab'];
 } else{
    $tab = 'Dashboard';
 }
?>
<div class="tabs">
    <div id="Dashboard" class="tab">
        <?php if($tab == 'Dashboard'){include('dashboard.php');} ?>
    </div>
    <div id="Members" class="tab">
        <?php if($tab == 'Members'){include('accounts.php');} ?>
    </div>
    <div id="Export" class="tab">
        <?php if($tab == 'Export'){include('export.php');} ?>
    </div>
</div>
<aside id="sidebar">
    <strong class="logo"><a href="#">lg</a></strong>
    <ul class="tabset buttons">
        <li <?php if($tab == 'Dashboard'){ echo 'class="active"'; }?>>
            <a href="?tab=Dashboard" class="ico1"><span>Dashboard</span><em></em></a>
        </li>
        <li <?php if($tab == 'Members'){ echo 'class="active"'; }?>>
            <a href="?tab=Members" class="ico2"><span>Members</span><em></em></a>
        </li>
        <li <?php if($tab == 'Export'){ echo 'class="active"'; }?>>
            <a href="?tab=Export" class="ico3"><span>Export</span><em></em></a>
        </li>
    </ul>
</aside>
<?php
echo '<h3>DEBUG</h3>';
echo '<pre>';
echo 'Loaded files:<br/>';
var_dump(get_included_files());
echo '</pre>';
?>