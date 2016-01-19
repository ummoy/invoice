<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GeeksnTechnology Limited : Admin Area</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url();?>assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <!-- TABLE STYLES-->
<!-- Styling -->
    <link href="https://clients.hostpair.com/templates/hostpair/assets/css/invoice-clean.css" rel="stylesheet">
</head>  

<style type="text/css">
p{
    padding:0px;
    font-size:14px;
}
</style>
<body>
    <div class="container">
                <div class="invoice-container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="logo" style="width:35%">
                                <img style="width:100%" src="<?php echo base_url();?>assets/img/logo.png" title="HostPair LLC" />
                            </div>                         
                        </div>

                        <div class="col-sm-4">
                            <div class="invoice-status text-right" style="margin: 75px 0 0;font-size:30px;">
                                <span class="unpaid">Unpaid</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <h3>Invoice <?php echo "#".$invoice_id;?></h3>
                        </div>    
                    
                        <div class="col-md-4">
                            <div class="payment-btn-container text-right pull-right">
                                    
                            </div>
                        </div>    
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                         <h5>Invoiced To:</h5>
                            <address>
                            {invoice_to}
                                {first_name} {last_name}<br>
                                {address}<br>
                                {post_code},{city}<br>
                                {country} 
                            {/invoice_to}
                            </address>
                        </div>
                    <div class="col-md-3 col-sm-6">
                        <h5>Pay To:</h5>
                        <address>
                         {pay_to}
                            GNT LLC<br />
                            {address}<br />
                            {post_code},{city}<br />
                            {country}.
                           {/pay_to}
                        </address>
                    </div>

                        <div class="col-md-3 col-sm-6">{bill_data}
                            <h5>Invoice Date:</h5>
                            <p>{bill_date}</p>

                            <h5>Due Date:</h5>
                            <p>{bill_due_date}</p>
                                    

                        </div>  
                        <div class="col-md-3 col-sm-6">
                         <h5>Payment Method:</h5>
                         <!--<form method="post" action="" class="form-inline">-->
                            <input type="hidden" name="token" value="" /><select name="gateway" id="gateway" onchange="onPayment_method_change()" class="form-control select-inline"><option value="banktransfer" selected="selected">Bank or bKash(BD only)</option><option value="easypayway">EasyPayWay (BD Only)</option><option value="paypal">PayPal</option><option value="card">2CheckOut(Credit/Debit Card)</option></select>
                        <!--</form>-->
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Description</td>
                                    <td class="text-right">Amount</td>
                                </tr>
                            </thead>
                            <tbody>
                            {bill_data_des}
                            <tr>
                                <td>{particulars}-{additional_particulars}</td>
                                <td class="text-right">{total}</td>
                            </tr>
                           {/bill_data_des}
                           
                            <tr class="active">
                                <td>Sub Total</td>
                                <td class="text-right">${bill_total_amount}</td>
                            </tr>
                                                                      
                         <tr class="active">
                            <td>Credit</td>
                            <td class="text-right">$0.00 USD</td>
                        </tr>
                        <tr>
                            <td><h4>Total</h4></td>
                            <td class="text-right"><h4>${bill_due_amount}</h4></td>
                        </tr>
                        {/bill_data}
                    </tbody>
                </table>
            </div>
                        <div class="transactions-container">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <td>Transaction Date</td>
                                <td>Gateway</td>
                                <td>Transaction ID</td>
                                <td class="text-right">Amount</td>
                            </tr>
                        </thead>
                        <tbody>
                                                        <tr>
                                <td colspan="4">No Related Transactions Found</td>
                            </tr>
                                                        <tr>
                                <td colspan="3">Balance</td>
                                <td class="text-right">$19.20 USD</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
                    </div>
    </div>
</div>
<p class="text-center hidden-print">
<a class="btn btn-link" href="clientarea.php">&laquo; Back to Client Area</a>
<a href="javascript:window.print()" class="btn btn-link"><i class="fa fa-print"></i> Print</a>
<a href="dl.php?type=i&amp;id=14324" class="btn btn-link"><i class="fa fa-arrow-down"></i> Download</a>
</p>
</div>

<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
<script>
    
function onPayment_method_change()
{
gateway=$('#gateway').val();
str="";
if(gateway=="paypal")
{
    alert("<?php echo $invoice_id; ?>");
   str='<p><img src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" align="left" style="margin-right:7px;"></p>';
   $('.payment-btn-container').html(str);
}
if(gateway=="card")
{
    str = '<form action="<?php echo base_url();?>index.php/admin/charge" method="POST">';
   // str += '<script';
    str += '<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"';
    str += 'data-key="pk_live_DdTUjGTT8gTtBITCDC13OcEC"' // your publishable keys;
    str += 'data-image="<?php echo base_url();?>assets/img/logo.png"' // your company Logo;
    str += 'data-name="GeeksnTechnology.com"';
    str+='data-description="Download Script ($100.00)"';
    str+='data-amount="10000">';
    str += "</scr"+"ipt>";
    str+='</form>' ;
$('.payment-btn-container').html(str);
//alert(str);
}
if(gateway=="banktransfer")
{
    str="<p>Please check below link for Bank Account number and bKash number.<br />http://clients.hostpair.com/knowledgebase.php?action=displayarticle&amp;id=171<br />Reference Number: 14324</p>";
    $('.payment-btn-container').html(str);
}
}
</script>
</body>
</html>
