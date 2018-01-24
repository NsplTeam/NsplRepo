<?php

    //Learning slack AGin
    // Create a constant to store Slack URL
    define('SLACK_WEBHOOK', 'https://hooks.slack.com/services/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');

    // Make message
    $message = ['payload' => json_encode(['text' => 'Message to Slack Team testing again'])];

    // Use curl to send message
    $c = curl_init(SLACK_WEBHOOK);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_POST, true);
    curl_setopt($c, CURLOPT_POSTFIELDS, $message);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_exec($c);
    curl_close($c);


<div class="custom-popup-overlay document-template-options-screen" style="display: none"></div>
<div class="pop-wrap custom-popup document-template-options-screen" style="display: none">
	<div id="popups-title">
		<div class="custom-popup-close" onclick="{{ $closePopUpCodeJs }}">
		    <a href="#">Close</a>
		</div>
		<div class="title">{{ $popupHeading }}</div>
		<div class="clear-block"></div>
	</div>
    <div class="custom-popup-body">
        <a href="{{ $docTemplatePath }}" class="button add-link popups" onclick="{{ $closePopUpCodeJs }}">{{ $createNewDocHeading }}</a>
    	<a href="javascript:void();" class="button add-link" onclick="return false;">{{ $mapFieldsHeading }}</a>
    </div>
</div>
?>