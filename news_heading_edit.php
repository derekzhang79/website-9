<!DOCTYPE html>
<html>
<head>

    <title>News & Events - Update</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
	<link href="css/advisories_newsandevents.css"   rel="stylesheet" type="text/css" />
<script type="text/javascript">
 
function GotoHome()
{
    window.location = 'news_headingindex.php?';
}
function GotoCall()
{
    window.location = 'news_index.php?';
}
 </script>
 
  <!-- libraries -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>
		<script src="js/advisories_newsandevents_validator.js"></script>
		
</head>
<body>
    <div class="wrapper">
		<div class="content" style="width: 800px !important;">
			<?php //include 'header.php'; ?><br/>
			<div>
			<form id="frmvalue" method="POST" action="news_headingindex.php"; >		
				<input type="hidden" name="S No" 
		         value="<?php echo (isset($gresult) ? $gresult["s_no"] : ''); ?>" /> 

				<table>
					
					<tr>
						<td>
							<label for="advisoryheader">NEWS & EVENTS HEADER : </label>
						</td>
						<td>
							<input type="text" name="news-header-edit" id="news-header-add"
							value="<?php echo (isset($gresult) ? $gresult["advisoryheader"] :  '');?>" 
							class="txt-fld"/>
							<td>
								<p class="news-frmvalue-header-add-message">                        
								<input type="hidden" >
								</p>
							</td>
						</td>
					</tr>
					
					
				</table>
				
				<input type="hidden" name="action_type" value="<?php echo (isset($gresult) ? 'edit' :  'add');?>"/>
				<div style="text-align: center; padding-top: 30px;">
					<input class="btn" type="submit" name="save" id="save-news-header-add" value="SAVE" 
					onclick=" return GotoHome();"/>
					<input class="btn" type="button" name="save" id="cancel" value="CANCEL" 
					onclick=" return GotoCall();"/><br><br>
					 <a href="news_heading_list.php" class="link-btn">HEADERS LIST</a>
				</div>
			</form>
			
			</div>
		</div>
	</div>
</body>
</html>