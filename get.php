<?php
$addons = array(
    "cua" => "controlUsageAssistant-2.1.nvda-addon",
    "dx" => "dropbox-3.1.nvda-addon",
    "dx-dev" => "dropbox-4.0-dev.nvda-addon",
    "em" => "eMule-1.0.nvda-addon",
	"emo-dev" => "emoticons-1.0-dev.nvda-addon",
    "ew" => "extendedWinamp-1.1.nvda-addon",
    "fh-dev" => "focusHighlight-1.0-dev.nvda-addon",
    "gl" => "https://bitbucket.org/nvdaaddonteam/todo/raw/master/guideLines.txt",
    "gsr-dev" => "googleSpeechRecognition-1.0-dev.nvda-addon",
    "gwv" => "goldwave-1.0Beta1.nvda-addon",
    "it" => "instantTranslate-2.2beta2.nvda-addon",
    "nb" => "NoBeepsSpeechMode-1.4.nvda-addon",
    "ocr" => "http://files.nvaccess.org/nvda-addons/ocr_0.20120529.01.nvda-addon",
    "pm" => "placeMarkers-2.0.nvda-addon",
	"pm-dev" => "placeMarkers-3.0-dev.nvda-addon",
    "rm" => "resourceMonitor-2.4.nvda-addon",
    "rm-dev" => "resourceMonitor-3.0-dev.nvda-addon",
    "st" => "systrayList-2.0-dev.nvda-addon",
    "ubi" => "unicodeBrailleInput-1.01.nvda-addon",
	"VR" => "virtualRevision-1.3-dev.nvda-addon",
    "wrd" => "word-0.2-dev.nvda-addon"
);

If (isset($_GET['file'])) {
    $file = $_GET['file'];
    $fullname = $addons[$file];

    if ($fullname != "") {
        Header('Location:'.$fullname);
    } else {
        print "<h1>File not found</h1>";
        print "<p>The file you requested could not be found on this server.</p>";
        print "<p>Please check that the link that brought you here is correct and try again.</p>";
        print "<p>Thanks</p>";
    }
} else {
    print "<h1>Error:</h1>";
    print "<p>Please check that the link that brought you here is correct and try again.</p>";
    print "<p>If you continue to see this message report this error to the nvda addon list.</p>";
    print "<p>Thanks</p>";
}
?>
