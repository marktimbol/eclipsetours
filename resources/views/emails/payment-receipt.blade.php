<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Your Payment Receipt</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<style type="text/css">
		    /* CLIENT-SPECIFIC STYLES */
		    #outlook a{padding:0;} /* Force Outlook to provide a "view in browser" message */
		    .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
		    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing */
		    body, table, td, a{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
		    table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */
		    img{-ms-interpolation-mode:bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */

		    /* RESET STYLES */
		    body{margin:0; padding:0;}
		    img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
		    table{border-collapse:collapse !important;}
		    body{height:100% !important; margin:0; padding:0; width:100% !important;}

		    /* iOS BLUE LINKS */
		    .appleBody a {color:#68440a; text-decoration: none;}
		    .appleFooter a {color:#999999; text-decoration: none;}

		    /* MOBILE STYLES */
		    @media screen and (max-width: 525px) {

		        /* ALLOWS FOR FLUID TABLES */
		        table[class="wrapper"]{
		          width:100% !important;
		        }

		        /* ADJUSTS LAYOUT OF LOGO IMAGE */
		        td[class="logo"]{
		          text-align: left;
		          padding: 20px 0 20px 0 !important;
		        }

		        td[class="logo"] img{
		          margin:0 auto!important;
		        }

		        /* USE THESE CLASSES TO HIDE CONTENT ON MOBILE */
		        td[class="mobile-hide"]{
		          display:none;}

		        img[class="mobile-hide"]{
		          display: none !important;
		        }

		        img[class="img-max"]{
		          max-width: 100% !important;
		          height:auto !important;
		        }

		        /* FULL-WIDTH TABLES */
		        table[class="responsive-table"]{
		          width:100%!important;
		        }

		        /* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */
		        td[class="padding"]{
		          padding: 10px 5% 15px 5% !important;
		        }

		        td[class="padding-copy"]{
		          padding: 10px 5% 10px 5% !important;
		          text-align: left !important;
		        }

		        td[class="padding-meta"]{
		          padding: 30px 5% 0px 5% !important;
		          text-align: center;
		        }

		        td[class="no-pad"]{
		          padding: 0 0 20px 0 !important;
		        }

		        td[class="no-padding"]{
		          padding: 0 !important;
		        }

		        td[class="section-padding"]{
		          padding: 10px 15px 10px 15px !important;
		        }

		        td[class="section-padding-bottom-image"]{
		          padding: 50px 15px 0 15px !important;
		        }

		        /* ADJUST BUTTONS ON MOBILE */
		        td[class="mobile-wrapper"]{
		            padding: 10px 5% 15px 5% !important;
		        }

		        table[class="mobile-button-container"]{
		            margin:0 auto;
		            width:100% !important;
		        }

		        a[class="mobile-button"]{
		            width:90% !important;
		            padding: 15px !important;
		            border: 0 !important;
		            font-size: 16px !important;
		        }

		    }
		</style>
	</head>
	<body style="margin: 0; padding: 0;">
		<!-- HEADER -->
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
		    <tr>
		        <td bgcolor="#ffffff" align="center">
		            <table border="0" cellpadding="0" cellspacing="0" width="500" class="wrapper">
		                <tr>
		                    <td style="padding: 20px 0px 30px 0px;" class="logo" align="center">
		                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
		                            <tr>
		                                <td bgcolor="#ffffff" width="100" align="center">
		                                	<a href="#" target="_blank">
		                                		{!! getEmailAsset('logo.png', 'Eclipse Tourism') !!}
		                                	</a>
		                                </td>
		                            </tr>
		                        </table>
		                    </td>
		                </tr>
		            </table>
		        </td>
		    </tr>
		</table>

		<table border="0" cellpadding="0" cellspacing="0" width="100%">
		    <tr>
		        <td bgcolor="#ffffff" align="center" style="padding: 15px 15px 15px 15px;" class="section-padding">
		            <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
		                <tr>
		                    <td>
		                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
		                            <tr>
		                                <td align="center" style="font-size: 32px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;" class="padding-copy">Your Payment Receipt</td>
		                            </tr>
		                            <tr>
		                                <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">
		                                	Hi {{ $user->name }}, thank you for booking your tours with us.
		                                </td>
		                            </tr>
		                        </table>
		                    </td>
		                </tr>
		            </table>
		        </td>
		    </tr>
		</table>

		<table border="0" cellpadding="0" cellspacing="0" width="100%">
		    <tr>
		        <td bgcolor="#ffffff" align="center" style="padding: 15px 15px 15px 15px;" class="section-padding">
		            <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
		                <tr>
		                    <td>
		                    	<table width="500" border="0">

		                    		<?php
		                    			$subtotal = 0;
		                    			$total = 0;
		                    		?>
		                    		@foreach( $data as $package )

			                    		<tr style="border-top: 1px dashed #aaaaaa;">
			                        		<td style="font-family: Arial, sans-serif; color: #333333; font-size: 16px; padding-top: 10px;">
			                        			{{ $package->name }} 
			                        				<span style="color: #888; font-size: 14px; !important">
			                        					( 
			                        						{{ $package->pivot->adult_quantity }} 
			                        							&times; 
			                        						{{ formatNumber( $package->adult_price ) }} 
			                        					AED )
			                        				</span>
			                        		</td>
			                        		<td align="right" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px;">
	                    						AED {{ formatNumber( $package->pivot->adult_quantity * $package->adult_price ) }} 
			                        		</td>
			                      		</tr>
										<tr>
											<td style="font-family: Arial, sans-serif; color: #333333; font-size: 16px;">
												Child
		                        				<span style="color: #888; font-size: 14px !important;">
		                        					( 
		                        						{{ $package->pivot->child_quantity }} 
		                        							&times; 
		                        						{{ formatNumber( $package->child_price ) }} 
		                        					AED )
		                        				</span>											
											</td>
											<td align="right" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px;">
												AED {{ formatNumber( $package->pivot->child_quantity * $package->child_price ) }} 
											</td>
										</tr>
					                    <tr>
					                    	<td>&nbsp;</td>
					                        <td>&nbsp;</td>
					                    </tr>

					                    <?php 
					                    	$subtotal = ( $package->pivot->adult_quantity * $package->adult_price ) +
					                    				( $package->pivot->child_quantity * $package->child_price );

					                    	$total += $subtotal;
					                    ?>
				                    @endforeach

		                    	</table>
		                        
		                      <!-- TWO COLUMNS -->
		                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
		                            <tr>
		                                <td valign="top" style="padding: 0;" class="mobile-wrapper">&nbsp;</td>
		                            </tr>
		                        </table>
		                    </td>
		                </tr>
		                <tr>
		                    <td style="padding: 10px 0 0px 0; border-top: 1px solid #eaeaea; border-bottom: 1px dashed #aaaaaa;">
		                        <!-- TWO COLUMNS -->
		                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
		                            <tr>
		                                <td valign="top" class="mobile-wrapper">
		                                    <!-- LEFT COLUMN -->
		                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="left">
		                                        <tr>
		                                            <td style="padding: 0 0 10px 0;">
		                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
		                                                    <tr>
		                                                        <td align="left" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px; font-weight: bold;">Total</td>
		                                                    </tr>
		                                                </table>
		                                            </td>
		                                        </tr>
		                                    </table>
		                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="right">
		                                        <tr>
		                                            <td>
		                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
		                                                    <tr>
		                                                        <td align="right" style="font-family: Arial, sans-serif; color: #328fcc; font-size: 16px; font-weight: bold;">AED {{ formatNumber( $total ) }}</td>
		                                                    </tr>
		                                                </table>
		                                            </td>
		                                        </tr>
		                                    </table>
		                                </td>
		                            </tr>
		                        </table>
		                    </td>
		                </tr>
		            </table>
		        </td>
		    </tr>
		</table>

		<table border="0" cellpadding="0" cellspacing="0" width="100%">
		    <tr>
		        <td bgcolor="#ffffff" align="center" style="padding: 15px 15px 15px 15px;" class="section-padding">
		            <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
		                <tr>
		                    <td>
		                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
		                            <tr>
		                                <td>
		                                    <!-- COPY -->
		                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
		                                        <tr>
		                                            <td align="left" style="padding: 0 0 0 0; font-size: 14px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color: #aaaaaa; font-style: italic;" class="padding-copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius, leo a ullamcorper feugiat, ante purus sodales justo, a faucibus libero lacus a est. Aenean at mollis ipsum.</td>
		                                        </tr>
		                                    </table>
		                                </td>
		                            </tr>
		                        </table>
		                    </td>
		                </tr>
		            </table>
		        </td>
		    </tr>
		</table>

		<table border="0" cellpadding="0" cellspacing="0" width="100%">
		    <tr>
		        <td bgcolor="#ffffff" align="center">
		            <table border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
		                <tr>
		                    <td style="padding: 70px 0px 20px 0px;" align="center">
		                        <!-- UNSUBSCRIBE COPY -->
		                        <table width="500" border="0" cellspacing="0" cellpadding="0" align="center" class="responsive-table">
		                            <tr>
		                                <td align="center" style="font-size: 12px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#666666;">
		                                    <span class="appleFooter" style="color:#666666;">P.O. Box 125582, S-8 Building, C-8 China Cluster, International City, Dubai, U.A.E.</span><br>                                    <a style="color: #666666; text-decoration: none;">View this email in your browser</a>
		                                </td>
		                            </tr>
		                        </table>
		                    </td>
		                </tr>
		            </table>
		        </td>
		    </tr>
		</table>

	</body>
</html>
