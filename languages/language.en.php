<?php
/* English language configuration
** language.en.php
**
** If you wish to translate this to another language, copy and rename this file language.<language code>.php eg. for Spanish, language.es.php.
**
** Then edit the lines after the => below, do not edit the first lines before the =>
**
** eg.
**  'Return to Home Page'
**  =>
**  'Go to home Page',
**
** Whenever there's special characters for languages, you must save the file with UNICODE UTF-8
**
**/


/*
*
* Note: %s needs to be present, I have put what %s means above each one.
*
*/

$lang = array (


'<b>No Invoices To Show</b>'
=>
'<b>No Invoices To Show</b>',

'<b>Please also note that if you order any new services, there may be a few days delay provisioning them.</b>'
=>
'<b>Please also note that if you order any new services, there may be a few days delay provisioning them.</b>',

/* %s is the URL to the invoices page */
'<b>Please note that if you are a new client, the first invoice needs to be paid by another payment method.</b><br>To do this, visit <a href="%s">your invoices</a> page. This is important, otherwise we will not be able to provision your account.'
=>
'<b>Please note that if you are a new client, the first invoice needs to be paid by another payment method.</b><br>To do this, visit <a href="%s">your invoices</a> page. This is important, otherwise we will not be able to provision your account.',

'<b>We require our clients to pay their invoices by another method when ordering domain names.</b>'
=>
'<b>We require our clients to pay their invoices by another method when ordering domain names.</b>',

'<b>You do not need to do anything more, we will process your invoices automatically from now on.</b>'
=>
'<b>You do not need to do anything more, we will process your invoices automatically from now on.</b>',

/* 1st %s is the ID of the mandate,
** 2nd %s is the client's currency (eg. USD, GBP)
*/
'<font color="green">Your Direct Debit, with the ID of %s, is already set up and payments will be taken automatically in %s, you do not need to do anything more.</font><br><br>Please note that if you order any new services, there will be a few days delay provisioning them up.'
=>
'<font color="green">Your Direct Debit, with the ID of %s, is already set up and payments will be taken automatically in %s, you do not need to do anything more.</font><br><br>Please note that if you order any new services, there will be a few days delay provisioning them up.',

/* Both %s are the plugin name */
'<font color="red">Warning:</font> While your Direct Debit is set up, your payment method isn\'t set to %s, therefore we can not take payments by Direct Debit.<br>If you wish us to use your Direct Debit mandate for payments, please change your payment method to %s'
=>
'<font color="red">Warning:</font> While your Direct Debit is set up, your payment method isn\'t set to %s, therefore we can not take payments by Direct Debit.<br>If you wish us to use your Direct Debit mandate for payments, please change your payment method to %s',

'<font color="red">We were unable to take payment for the following invoice(s), if you wish to retry these, please click the retry button, we will then try to take payment again.</font>'
=>
'<font color="red">We were unable to take payment for the following invoice(s), if you wish to retry these, please click the retry button, we will then try to take payment again.</font>',

'<font color="red">You have a cancelled or an expired Direct Debit. If you wish to keep paying by Direct Debit, you need to set up a new Direct Debit mandate.</font>'
=>
'<font color="red">You have a cancelled or an expired Direct Debit. If you wish to keep paying by Direct Debit, you need to set up a new Direct Debit mandate.</font>',

'<font color="red">You have a mandate that is being submitted to your bank.</font>'
=>
'<font color="red">You have a mandate that is being submitted to your bank.</font>',

'<font color="red">You have a mandate that is currently active.</font>'
=>
'<font color="red">You have a mandate that is currently active.</font>',

'<font color="red">You have a mandate that is waiting to be submitted to your bank.</font>'
=>
'<font color="red">You have a mandate that is waiting to be submitted to your bank.</font>',

/* %s is the URL to the invoices page */
'<font color="red">Your Direct Debit is set up, but you need to pay for your first invoice by some other payment method.<br>To pay for this invoice, please go to your <a href="%s">Invoices Section</a></font>'
=>
'<font color="red">Your Direct Debit is set up, but you need to pay for your first invoice by some other payment method.<br>To pay for this invoice, please go to your <a href="%s">Invoices Section</a></font>',

/* %s is the URL to the invoices page */
'<font color="red">Your Direct Debit is set up, hovever, you need to pay for any current invoices you have by some other payment method.<br>To pay for the invoice(s), please go to your <a href="%">Invoices Section</a></font>'
=>
'<font color="red">Your Direct Debit is set up, hovever, you need to pay for any current invoices you have by some other payment method.<br>To pay for the invoice(s), please go to your <a href="%">Invoices Section</a></font>',

/* 1st %s is is the currency code (eg. USD, GBP) the gateway accepts
** 2nd %s is the Company Name set in Clientexec
*/
'<h4><u>Please be aware, your bank must be able to be in the <b>%s</b> currency.</u></h4><h5>You are about to set up a Variable Direct Debit Mandate with %s, this means that we will take an amount from your bank every time we issue an invoice.<br><br>By agreeing to set up a Direct Debit Mandate you are agreeing for us to take variable payments from your bank.<br><br>We comply with the <a target="_blank" href="http://www.directdebit.co.uk/DirectDebitExplained/Pages/DirectDebitGuarantee.aspx">Direct Debit Guarantee</a>, which can be found by clicking <a target="_blank" href="http://www.directdebit.co.uk/DirectDebitExplained/Pages/DirectDebitGuarantee.aspx">here</a>.<br><br>You will require to supply us the following information:<br>> your name and address;<br>> your email address;<br>> your bank details;You are about to be forwarded to GoCardless so you can set up your Direct Debit with us.'
=>
'<h4><u>Please be aware, your bank must be able to be in the <b>%s</b> currency.</u></h4><h5>You are about to set up a Variable Direct Debit Mandate with %s, this means that we will take an amount from your bank every time we issue an invoice.<br><br>By agreeing to set up a Direct Debit Mandate you are agreeing for us to take variable payments from your bank.<br><br>We comply with the <a target="_blank" href="http://www.directdebit.co.uk/DirectDebitExplained/Pages/DirectDebitGuarantee.aspx">Direct Debit Guarantee</a>, which can be found by clicking <a target="_blank" href="http://www.directdebit.co.uk/DirectDebitExplained/Pages/DirectDebitGuarantee.aspx">here</a>.<br><br>You will require to supply us the following information:<br>> your name and address;<br>> your email address;<br>> your bank details;You are about to be forwarded to GoCardless so you can set up your Direct Debit with us.',

'Actions'
=>
'Actions',

'Active'
=>
'Active',

'All Actions'
=>
'All Actions',

'All Payments'
=>
'All Payments',

'All Statuses'
=>
'All Statuses',

'All Types'
=>
'All Types',

'Amount'
=>
'Amount',

'Approval Granted'
=>
'Approval Granted',

'Approval Refused'
=>
'Approval Refused',

'Arrived At'
=>
'Arrived At',

'Bill Date'
=>
'Bill Date',

'Cancel Direct Debit'
=>
'Cancel Direct Debit',

'Cancel Mandate'
=>
'Cancel Mandate',

'Cancel Payment'
=>
'Cancel Payment',

'Cancelled'
=>
'Cancelled',

'Charge Back Cancelled'
=>
'Charge Back Cancelled',

'Charge Back Settled'
=>
'Charge Back Settled',

'Charged Back'
=>
'Charged Back',

'Check and update the software'
=>
'Check and update the software',

'Check for updates'
=>
'Check for updates',

'Click this button to set up a Direct Debit'
=>
'Click this button to set up a Direct Debit',

'Confirmed'
=>
'Confirmed',

'Contact Pickles Software for help, and read the documentation'
=>
'Contact Pickles Software for help, and read the documentation',

'Continue to Cancel Direct Debit'
=>
'Continue to Cancel Direct Debit',

'Created'
=>
'Created',

'Date Paid'
=>
'Date Paid',

'Delete Mandate'
=>
'Delete Mandates',

'Delete Payout'
=>
'Delete Payout',

'Delete Webhook'
=>
'Delete Webhook',

'Direct Debit Mandates'
=>
'Direct Debit Mandates',

'Direct Debit Payments'
=>
'Direct Debit Payments',

'Direct Debit Payouts'
=>
'Direct Debit Payouts',

'Direct Debit Webhooks'
=>
'Direct Debit Webhooks',

'Direct Debits'
=>
'Direct Debits',

'Disable Automatic Retry'
=>
'Disable Automatic Retry',

'Disable Payment'
=>
'Disable Payment',

'Documentation'
=>
'Documentation',

'Due Date'
=>
'Due Date',

'Enable Payment'
=>
'Enable Payment',

'End Date'
=>
'End Date',

'Expired'
=>
'Expired',

'Failed Payments'
=>
'Failed Payments',

'Failed'
=>
'Failed',

'Filter By Action'
=>
'Filter by Action',

'Filter By Type'
=>
'Filter by Type',

'FX Rate Confirmed'
=>
'FX Rate Confirmed',

'Get Mandate Details'
=>
'Get Mandate Details',

/* %s is the Company Name in Clientexec */
'Important information about your Direct Debit with %s'
=>
'Important information about your Direct Debit with %s',

'Invoice / Payment ID'
=>
'Invoice / Payment ID',

'I\'m afraid you are unable to use this plugin from your country, you need to choose another type of payment method.'
=>
'I\'m afraid you are unable to use this plugin from your country, you need to choose another type of payment method.',

/* 1st %s is the gateway name
** 2nd %s the URL to change payment method
 */
'I\'m afraid your payment method needs to be changed to "%s" before you can set up a Direct Debit.<br><br>Please change your <a href="%s">Payment Method</a>, then come back to this section.'
=>
'I\'m afraid your payment method needs to be changed to "%s" before you can set up a Direct Debit.<br><br>Please change your <a href="%s">Payment Method</a>, then come back to this section.',

'Last 10 Invoices'
=>
'Last 10 Invoices',

'Late Failure Settled'
=>
'Late Failure Settled',

'List and delete payouts'
=>
'List and delete payouts',

'List, cancel and delete mandates'
=>
'List, cancel and delete mandates',

'List, cancel and retry payments'
=>
'List, cancel and retry payments',

'List, reprocess and delete webhooks'
=>
'List, reprocess and delete webhooks',

'Manage Mandates'
=>
'Manage Mandates',

'Manage Payments'
=>
'Manage Payments',

'Manage Payouts'
=>
'Manage Payouts',

'Manage Settings'
=>
'Manage Settings',

'Manage Webhooks'
=>
'Manage Webhooks',

'Mandates'
=>
'Mandates',

'Paid At'
=>
'Paid At',

'Paid Out'
=>
'Paid Out',

'Paid'
=>
'Paid',

'Pay by Other Methods'
=>
'Pay by Other Methods',

'Payment Details'
=>
'Payment Details',

'Payments'
=>
'Payments',

'Payouts'
=>
'Payouts',

'Pending to be requested from your bank.'
=>
'Pending to be requested from your bank.',

'Pending'
=>
'Pending',

'Please Note: You are going to cancel your Direct Debit with us, therefore, you will need to pay for your services by other methods. Any Pending/Waiting For transactions will be cancelled too.</font><br><br>If you wish to keep your Direct Debit but wish to pay for your services by other payment methods, please change your <a href="%s">Payment Method</a> to prevent us from using your Direct Debit.<br><br>If you are sure you want to continue to cancel, please click the button below.<br><br>The process is instant and there will be no undo button.'
=>
'Please Note: You are going to cancel your Direct Debit with us, therefore, you will need to pay for your services by other methods. Any Pending/Waiting For transactions will be cancelled too.</font><br><br>If you wish to keep your Direct Debit but wish to pay for your services by other payment methods, please change your <a href="%s">Payment Method</a> to prevent us from using your Direct Debit.<br><br>If you are sure you want to continue to cancel, please click the button below.<br><br>The process is instant and there will be no undo button.',

'Refund Payment'
=>
'Refund Payment',

'Refunded'
=>
'Refunded',

/* 1st %s is the payment ID
** 2nd %s is the refund ID
*/
'Refunding this payment (%s) has started, the payment refund ID is %s.'
=>
'Refunding this payment (%s) has started, the payment refund ID is %s.',

'Refunds'
=>
'Refunds',

'Reprocess Webhook'
=>
'Reprocess Webhook',

'Reset Filters'
=>
'Reset Filters',

'Resubission Requested'
=>
'Resubmission Requested',

'Retry Payment'
=>
'Retry Payment',

'Return to Home Page'
=>
'Return to Home Page',

'Save Options'
=>
'Save Options',

'Send Feedback and Ideas'
=>
'Send Feedback and Ideas',

'Send Payment Manually'
=>
'Send Payment Manually',

'Set Up Direct Debit'
=>
'Set Up Direct Debit',

'Settings for this plugin'
=>
'Settings for this plugin',

'Settings'
=>
'Settings',

'Setup or Manage your Direct Debit here'
=>
'Setup or Manage your Direct Debit here',

'Show'
=>
'Show',

'Software Update'
=>
'Software Update',

'Start Date'
=>
'Start Date',

'Status'
=>
'Status',

'Support and Help'
=>
'Support and Help',

'Support Portal'
=>
'Support Portal',

'This invoice was cancelled.'
=>
'This invoice was cancelled.',

'This payment has been successfully retried.'
=>
'This payment has been successfully retried.',

'This section allows you to control and view statistics for Direct Debits.'
=>
'This section allows you to control and view statistics for Direct Debits.',

'To'
=>
'To',

'Tweet Us'
=>
'Tweet Us',

'Unpaid and Pending'
=>
'Unpaid and Pending',

'Update to'
=>
'Update to',

'View Payment History'
=>
'View Payment History',

'Waiting for payment from your bank.'
=>
'Waiting for payment from your bank.',

'Waiting'
=>
'Waiting',

'We can see that you do not have an active Direct Debit set up with us. If you want to pay by Direct Debit, please set one up by clicking the Set Up Direct Debit button shown above. We will then take payments using this Direct Debit.<br><br>Thank you.'
=>
'We can see that you do not have an active Direct Debit set up with us. If you want to pay by Direct Debit, please set one up by clicking the Set Up Direct Debit button shown above. We will then take payments using this Direct Debit.<br><br>Thank you.',

'Webhooks'
=>
'Webhooks',

'Welcome to our Direct Debit section. Here you can set up a Direct Debit, view your payment history, cancel your Direct Debit, and more.<br><br>You will also see any issues related to your Direct Debit, for example, if we are unable to take a payment, this page will tell you.<br><br>To view all your transactions, including pending ones, please click "View Payment History"'
=>
'Welcome to our Direct Debit section. Here you can set up a Direct Debit, view your payment history, cancel your Direct Debit, and more.<br><br>You will also see any issues related to your Direct Debit, for example, if we are unable to take a payment, this page will tell you.<br><br>To view all your transactions, including pending ones, please click "View Payment History"',

'You are unable to retry this payment at this time'
=>
'You are unable to retry this payment at this time',

/* %s is the Company Name in Clientexec */
'You are unable to set up a Variable Direct Debit with %s at this time, please contact us and we will investigate.'
=>
'You are unable to set up a Variable Direct Debit with %s at this time, please contact us and we will investigate.',

'You have retried this bill twice, you can\'t retry it again.'
=>
'You have retried this bill twice, you can\'t retry it again.',

'You Pay/Paid'
=>
'You Pay/Paid',

'You will see all your Direct Debit transactions on this page'
=>
'You will see all your Direct Debit transactions on this page',

'Your Direct Debit has been cancelled, it will take up to 24 hours to complete. You will receive emails to confirm.<br><br>Please Note: You will need to pay for your services by other methods. Please change your Payment Method at your earliest convenience.'
=>
'Your Direct Debit has been cancelled, it will take up to 24 hours to complete. You will receive emails to confirm.<br><br>Please Note: You will need to pay for your services by other methods. Please change your Payment Method at your earliest convenience.',

'Your Direct Debit has been successfully set up.'
=>
'Your Direct Debit has been successfully set up.',

'Your Direct Debit is already set up, you do not need to do anything more.'
=>
'Your Direct Debit is already set up, you do not need to do anything more.',

/* 1st %s is the URL to the cancel direct debit page
** 2nd %s is the URL to the Change Payment Method page
*/
'Your Direct Debit is already set up, you do not need to do anything more.<br><br>If you wish to cancel your Direct Debit, you can do so by clicking <a href="%s">here</a>. <font color="red">Note: Any Pending/Waiting transactions will be cancelled too.</font><br><br>If you wish to keep your Direct Debit but wish to pay for your services by other payment methods, please change your <a href="%s">Payment Method</a> to prevent us from using your Direct Debit.<br><br>Note: Please be aware that it can take up to 24 hours for us to cancel the Direct Debit.'
=>
'Your Direct Debit is already set up, you do not need to do anything more.<br><br>If you wish to cancel your Direct Debit, you can do so by clicking <a href="%s">here</a>. <font color="red">Note: Any Pending/Waiting transactions will be cancelled too.</font><br><br>If you wish to keep your Direct Debit but wish to pay for your services by other payment methods, please change your <a href="%s">Payment Method</a> to prevent us from using your Direct Debit.<br><br>Note: Please be aware that it can take up to 24 hours for us to cancel the Direct Debit.',

'Your Direct Debit is currently being set up, you do not need to do anything more.'
=>
'Your Direct Debit is currently being set up, you do not need to do anything more.',



'A late failed payment has been settled against a payout'
=>
'A late failed payment has been settled against a payout',

'A payment approval has been granted'
=>
'A payment approval has been granted',

'A Payment charge back has been reversed'
=>
'A Payment charge back has been reversed',

'A Payment charge back has been settled'
=>
'A Payment charge back has been settled',

'A Payment has been cancelled'
=>
'A Payment has been cancelled',

'A Payment has been charged back'
=>
'A Payment has been charged back',

'A Payment has been confirmed and paid'
=>
'A Payment has been confirmed and paid',

'A Payment has been created'
=>
'A Payment has been created',

'A Payment has been paid out to your bank'
=>
'A Payment has been paid out to your bank',

'A Payment has been resubmitted to their bank'
=>
'A Payment has been resubmitted to their bank',

'A Payment has been submitted to their bank'
=>
'A Payment has been submitted to their bank',

'A Payment has failed'
=>
'A Payment has failed',

'A Payout has been sent to your bank'
=>
'A Payout has been sent to your bank',

'A refund has been created'
=>
'A refund has been created',

'A refund has been deducted from a payout'
=>
'A refund has been deducted from a payout',

'A refund has been paid out to the client\'s bank'
=>
'A refund has been paid out to the client\'s bank',

'approval has been granted'
=>
'approval has been granted',

'created to be refunded'
=>
'created to be refunded',

'has been cancelled'
=>
'has been cancelled',

'has been charged back by the bank'
=>
'has been charged back by the bank',

'has been confirmed and paid'
=>
'has been confirmed and paid',

'has been created'
=>
'has been created',

'has been paid out to your bank'
=>
'has been paid out to your bank',

'has been resubmitted to their bank'
=>
'has been resubmitted to their bank',

'has been submitted to the client\'s bank'
=>
'has been submitted to the client\'s bank',

'has failed'
=>
'has failed',

'is a late failed payment that has been settled against a payout'
=>
'is a late failed payment that has been settled against a payout',

'paid out to the client\'s bank'
=>
'paid out to the client\'s bank',

'refund settled from a payout'
=>
'refund settled from a payout',

'The charge back has been reversed by the bank'
=>
'The charge back has been reversed by the bank',

'the charge back has been settled'
=>
'the charge back has been settled',


'Mandate has been activated'
=>
'Mandate has been activated',

'Mandate has been approved'
=>
'Mandate has been approved',

'Mandate has been cancelled'
=>
'Mandate has been cancelled',

'Mandate has been created and is pending submission'
=>
'Mandate has been created and is pending submission',

'Mandate has been reinstated'
=>
'Mandate has been reinstated',

'Mandate has been replaced with a new ID'
=>
'Mandate has been replaced with a new ID',

'Mandate has been resubmitted'
=>
'Mandate has been resubmitted',

'Mandate has been skipped for approval'
=>
'Mandate has been skipped for approval',

'Mandate has been submitted to the bank'
=>
'Mandate has been submitted to the bank',

'Mandate has been transferred (bank change)'
=>
'Mandate has been transferred (bank change)',

'Mandate has expired'
=>
'Mandate has expired',

'Mandate has failed'
=>
'Mandate has failed',

/* 1st %s is the amount in the client's currency
** 2nd %s is the invcoice ID
*/
'Direct Debit payment %s. Original invoice: %s'
=>
'Direct Debit payment %s. Original invoice: %s',

/* 1st %s is the amount in the client's currency
** 2nd %s is the invcoice ID
*/
'Direct Debit payment of %s has been cancelled. Original Invoice: %s'
=>
'Direct Debit payment of %s has been cancelled. Original Invoice: %s',

/* 1st %s is the amount in the client's currency
** 2nd %s the status (eg. pending)
** 3rd %s the date the payment will come out of the client's bank
** 4th %s is the invcoice ID
*/
'Direct Debit payment of %s is %s and expected to be paid on %s. Original Invoice: %s'
=>
'Direct Debit payment of %s is %s and expected to be paid on %s. Original Invoice: %s',

/* 1st %s is the amount in the client's currency
** 2nd %s the date the payment will come out of the client's bank
** 3rd %s is the invcoice ID
*/
'Direct Debit payment of %s was retried and is expected to be paid on %s. Original Invoice: %s'
=>
'Direct Debit payment of %s was retried and is expected to be paid on %s. Original Invoice: %s',


/* Error Messages */
'It seems that the Direct Debit Mandate has been cancelled already.'
=>
'It seems that the Direct Debit Mandate has been cancelled already.',

'There has been a problem with cancelling the mandate %s<br><br>The error is:<br>%s'
=>
'There has been a problem with cancelling the mandate %s<br><br>The error is:<br>%s',

'There was a issue with setting up the Direct Debit, please try again from our client area. If you keep seeing this error, contact us.'
=>
'There was a issue with setting up the Direct Debit, please try again from our client area. If you keep seeing this error, contact us.',

'There was a problem cancelling your Direct Debit, please try again.<br><br>If you receive this notice again, please raise a ticket under billing issues'
=>
'There was a problem cancelling your Direct Debit, please try again.<br><br>If you receive this notice again, please raise a ticket under billing issues',

'There was a problem retrying this payment, please contact us.'
=>
'There was a problem retrying this payment, please contact us.',

/* 1st %s is the Payment ID
** 2nd %s is the error from the API */
'There was an error refunding this payment (%s).<br><br>Details:<br>%s'
=>
'There was an error refunding this payment (%s).<br><br>Details:<br>%s',

/* 1st %s is the Payment ID
** 2nd %s is the error from the API */
'There was an error retrying this payment (%s).\r\n\r\nDetails:\r\n\r\n%s'
=>
'There was an error retrying this payment (%s).\r\n\r\nDetails:\r\n\r\n%s',

'There was no paymment id sent, try again.'
=>
'There was no payment id sent, try again.',

/* %s is the Payment ID */
'This payment (%s) cannot be refunded'
=>
'This payment (%s) cannot be refunded',

/* %s is the Company Name in Clientexec */
'You are unable to cancel your a Direct Debit with %s at this time. Please open a ticket for assistance with this issue.'
=>
'You are unable to cancel your a Direct Debit with %s at this time. Please open a ticket for assistance with this issue.',

);