<?php include 'head.php'; 
        
include 'aside.php'; ?>

    
        <div class="page-wrapper">
      
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">My Payments</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>







                                    <li class="breadcrumb-item"><a href="pay.php?user=<?php echo $_SESSION['username']; ?>" class="text-muted">My Payments</a></li>
                                    <li class="breadcrumb-item"><a href="myprofilescan.php?user=<?php echo $_SESSION['username']; ?>" class="text-muted">Radiology Payments</a></li>
                                    
                                    <li class="breadcrumb-item"><a href="myprofilelab.php?user=<?php echo $_SESSION['username']; ?>" class="text-muted">Lab Payments</a></li>
                                    <li class="breadcrumb-item"><a href="myprofiletreat.php?user=<?php echo $_SESSION['username']; ?>" class="text-muted">Treatment Payments</a></li>


   <li class="breadcrumb-item"><a href="myprofiletherapy.php?user=<?php echo $_SESSION['username']; ?>" class="text-muted">Therapy Payments</a></li>
                                    <li class="breadcrumb-item"><a href="myprofiletherapya.php?user=<?php echo $_SESSION['username']; ?>" class="text-muted">Covid 19 Test Payments</a></li>
                                    
                                    <li class="breadcrumb-item"><a href="ambulancepayment.php?user=<?php echo $_SESSION['username']; ?>" class="text-muted">Ambulance Payment</a></li>
                                    <li class="breadcrumb-item"><a href="tpayments.php?user=<?php echo $_SESSION['username']; ?>" class="text-muted">Transport Payments</a></li>
                                     <li class="breadcrumb-item"><a href="patientinvoices.php?user=<?php echo $_SESSION['username']; ?>" class="text-muted">View Payments</a></li>

<hr>
                                </ol>
                            </nav><hr>




                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <h4><?php echo date('Y-m-d'); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
       
                             



        <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    

                                  <li class="breadcrumb-item"><a href="myprofilescan.php?user=<?php echo $_SESSION['username']; ?>" class="text-muted">Pending Radiology Invoices</a></li>
                                    <li class="breadcrumb-item"><a href="myprofilescan1.php?user=<?php echo $_SESSION['username']; ?>" class="text-muted">Accepted Radiology Invoices</a></li>
                                    
                                    <li class="breadcrumb-item"><a href="myprofilescan11.php?user=<?php echo $_SESSION['username']; ?>" class="text-muted">Approved Radiology Invoices</a></li>
                                    


                                    

<hr>
                                </ol>
                            </nav>
       
            <div class="container-fluid">
               
                <div class="row">

        <?php 
                           $e=$_SESSION['username'];
                           
                            $sq=mysqli_query($con,"SELECT * FROM newscan WHERE cname='$e' AND name='Pending' AND pstatus='Pending'");
                           
                          
                            ?>


                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                            </div>
                           <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th>Invoice No</th>
                                            <th>Doctor</th>

                                            <th>Date</th>
                                            <th>Type</th>
                                            <th> Status</th> 
                                            <th>Client Name</th>
                                            <th>File No</th>
                                            <th>Patient</th>
                                            <th>Total Amount</th><th>Payment Status</th>
                                            <th>Radiology</th><th>View</th>
<th>Accept Invoice By Cash</th>  <!-- <th>Accept Invoice By Insurance</th> --> <th>Accept Invoice By E-Wallet</th>   

                                    </tr>
                                </thead>


                                <?php $k=1;
                                    while($hk=mysqli_fetch_array($sq))
                                    { ?>
                                <tbody>
                                    <tr>
                                       <td><?php echo $hk['transaction_id'];?></td>

                                     <td><?php echo $hk['invoice'];?></td>
                                            <td><?php echo $hk['cashier'];?></td>
                                            <td><?php echo $hk['date'];?></td>
                                            <td><?php echo $hk['type'];?></td>
                                            <td><?php echo $hk['name'];?></td>
                                            <td><?php echo $hk['cname'];?></td>
                                            <td><?php echo $hk['fileNo'];?></td>
                                            <td><?php echo $hk['patientname'];?></td>
                                            
                                     <td><?php echo $hk['amount'];?></td>
                             <td><?php echo $hk['pstatus'];?></td>
                             <td><?php echo $hk['primary_doc'];?></td>
 <td><a href="preview2scan.php?invoice=<?php echo $hk['invoice'];?>">View Invoice</a></td>
                                          
 <td><a href="accscaneditviewinvoice.php?transaction_id=<?php echo $hk['transaction_id']?>&invoice=<?php echo $hk['invoice']?>&date=<?php echo $hk['date']; ?>&cashier=<?php echo $hk['cashier']?>&type=<?php echo $hk['type']?>&fileNo=<?php echo $hk['fileNo'];?>&cname=<?php echo $hk['cname'];?>&name=<?php echo $hk['name'];?>&amount=<?php echo $hk['amount'];?>&pstatus=<?php echo $hk['pstatus'];?>&primary_doc=<?php echo $hk['primary_doc'];?>&patientname=<?php echo $hk['patientname'];?>">Accept Invoice By Cash</a></td>

    <!-- <td><a href="accscaneditviewinvoice1.php?transaction_id=<?php echo $hk['transaction_id']?>&invoice=<?php echo $hk['invoice']?>&date=<?php echo $hk['date']; ?>&cashier=<?php echo $hk['cashier']?>&type=<?php echo $hk['type']?>&fileNo=<?php echo $hk['fileNo'];?>&cname=<?php echo $hk['cname'];?>&name=<?php echo $hk['name'];?>&amount=<?php echo $hk['amount'];?>&pstatus=<?php echo $hk['pstatus'];?>&primary_doc=<?php echo $hk['primary_doc'];?>&patientname=<?php echo $hk['patientname'];?>">Accept Invoice By Insurance</a></td>
 -->
 
                                        
  <td><a href="accscaneditviewinvoice2.php?transaction_id=<?php echo $hk['transaction_id']?>&invoice=<?php echo $hk['invoice']?>&date=<?php echo $hk['date']; ?>&cashier=<?php echo $hk['cashier']?>&type=<?php echo $hk['type']?>&fileNo=<?php echo $hk['fileNo'];?>&cname=<?php echo $hk['cname'];?>&name=<?php echo $hk['name'];?>&amount=<?php echo $hk['amount'];?>&pstatus=<?php echo $hk['pstatus'];?>&primary_doc=<?php echo $hk['primary_doc'];?>&patientname=<?php echo $hk['patientname'];?>">Accept Invoice By E-Wallet</a></td>
                       
                                    </tr>
                                  <?php $k++; } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>








                
                    
                </div>
                
            <?php include 'footer.php'; ?>