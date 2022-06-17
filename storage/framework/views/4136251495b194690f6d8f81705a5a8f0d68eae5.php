<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<style>
				table tr td {
				border-right: 1px solid rgb(39, 137, 199);
				border-bottom: 1px solid rgb(39, 137, 199);
				padding: 5px;
				}
                td {
                    padding: 20px 20px 10px 20px
                }

				table tr td:first-child {
				border-left: 1px solid rgb(39, 137, 199);
				}
				table tr td:first-child {
				border-left: 1px solid rgb(39, 137, 199);
				}
				table tr td {
				text-align: left;
				border-top: solid 1px rgb(39, 137, 199);
				}

				/* top-left border-radius */
				table tr:first-child td:first-child {
				border-top-left-radius: 15px;
				}

				/* top-right border-radius */
				table tr:first-child td:last-child {
				border-top-right-radius: 15px;
				}

				/* bottom-left border-radius */
				table tr:last-child td:first-child {
				border-bottom-left-radius: 15px;
				}

				/* bottom-right border-radius */
				table tr:last-child td:last-child {
				border-bottom-right-radius: 15px;
				}
		</style>
	</head>
	<body>
		<div style="padding: 20px 20px 10px 20px">
			<div style="">
				<div><img src="data:image/png;base64,<?php echo e($image); ?>" alt="logo" width="200px" /></div>
				<div
					style=" display: flex; flex-direction: column; align-items: flex-end"
				>
					<div
						style="position: absolute; right: 20px; top: 20px;
							text-align: center;
							width: 250px;
							height: 60px;
							font-size: 20pt;
							font-weight: 800;
							background-color: rgb(39, 137, 199);;
							color: white;
							border-top-right-radius: 20px;
							border-top-left-radius: 20px;
						"
					>
						<p>Job Work Order</p>
					</div>
					<div
						style="position: absolute; right: 20px; top: 80px;
                        padding: 0px 0px 0px 10px;
							background-color: rgb(224, 217, 217);
							color: rgb(39, 137, 199);
							border: 1px solid rgb(39, 137, 199);
							border-top-left-radius: 20px;
							width: 300px;
							height: 50px;
						"
					>
						<p>Date of Order : <?php echo e($today); ?></p>
					</div>
				</div>
			</div>
			<div>
				<table style="width: 100%">
					<tr style="height: 50px">
						<td width="70%">Bill to : <?php echo e($current_order->bill_to); ?></td>
						<td width="30%">Phone : <?php echo e($current_order->phone_number); ?></td>
					</tr>
					<tr style="height: 50px">
						<td>Address : <?php echo e($current_order->address); ?></td>
						<td>Work order :  <?php echo e($current_order->work_order); ?></td>
					</tr>
					<tr style="height: 50px">
						<td>City : <?php echo e($current_order->city); ?></td>
						<td>Order Taken by : <?php echo e($current_order->order_taken_by); ?></td>
					</tr>
					<tr style="height: 50px">
						<td>Email : <?php echo e($current_order->email); ?></td>
						<td>REF Quote : <?php echo e($current_order->ref); ?></td>
					</tr>
				</table>
			</div>

            <div style="padding: 10px 0px 0px 0px">
				<table style="width: 100%">
					<tr style="height: 50px">
						<td style="width: 30%">Start Date : <?php echo e($start_date); ?></td>
						<td style="width: 30%">Start Time : <?php echo e($current_order->start_time); ?></td>
                        <td style="width: 40%"><input type="checkbox" checked style="color:rgb(39, 137, 199);">
							Installation <input type="checkbox" checked style="color:rgb(39, 137, 199);">
							Maintenance</td>
					</tr>
					<tr style="height: 50px">
						<td>End Date : <?php echo e($end_date); ?></td>
						<td>End Time : <?php echo e($current_order->end_time); ?></td>
                        <td ><input type="checkbox" style="color:rgb(39, 137, 199);"> Other</td>
					</tr>
				</table>
			</div>

            <div style="padding: 10px 0px 0px 0px">
				<div style=" padding: 0px 0px 0px 10px;width: 100%;border: 1px solid rgb(39, 137, 199);border-radius: 15px 15px 15px 15px ; height: 330px;">
					<h2 style="color:rgb(39, 137, 199) ;padding-left: 20px;">Description of Work</h2>
                    <?php echo $current_order->description; ?>

					
				</div>
				<p style="color:rgb(39, 137, 199); padding-bottom:5px">Technician Names: <?php echo e($current_order->tech_name); ?></p>
			</div>
            
            <div style="padding: 10px 0px 0px 0px;color: rgb(39, 137, 199);">
				<p style="padding: 0px 0px 0px 10px;color: rgb(39, 137, 199);">I hereby acknowledge for satisfactory completion of the above conducted work</p>
				<div style="width: 45%;">
					<span style="padding: 0px 0px 0px 10px">Signature:</span>
					<span>
						<img src="<?php echo e($current_order->signature); ?>" alt="logo" width="200px">
					</span>
					<p style="padding: 0px 0px 0px 5px">By signing above. I (the customer) agree that all services performed are done to my satisfaction. I also agree to be billed for the above completed work and or deliveries of hardware equipment and make payment charges.</p>
				</div>

				<div style="position: absolute; right: 10px; bottom: 50px; width:45%">
					<p>LIMITED WARRANTY. All material parts and equipment are warranted by the manufacturers or suppliers written warrnty only .All labor performed by HSW Energy N.V. makes no other warranties, express or implied, and its agents or technicians are not authorized to make any such warranties on behalf of HSW Energy N.V.</p>
				</div>
				
				<h3 style="position:absolute;right:220px;bottom: 5px;">thank you for your business</h3>
			</div>
		</div>
	</body>
</html>
<?php /**PATH E:\practice_by_++\DMS\resources\views/workOrder-convert-pdf.blade.php ENDPATH**/ ?>