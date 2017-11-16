
<div class="box">
    <div class="tbl-ctrls">
        <p>Use that URL for the ajax call: <code><?=$ajax_url?></code></p>
        <p>You can use that piece of JS code to send a request every 10 minutes to keep the user session alive.</p>
        <pre>
            function keepSessionAlive()
            {
                $.ajax({
                    method: "POST",
                    url: "<?=$ajax_url?>"
                });
            }
            setInterval(keepSessionAlive, 600000);
        </pre>
    </div>
</div>