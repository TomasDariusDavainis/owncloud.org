<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-4">
        <?php get_template_part('advisories/advisory-side'); ?>
    </div>
    <div class="col-md-8">
        <h2>Local Path Disclosure when using Asset Pipeline (oC-SA-2014-021)</h2>
        <p>25th November 2014</p>
        <p>Risk level: <strong>Low</strong></p>
        
        
        <h3>Description</h3>
        <p><p>ownCloud 7 introduced the so-called "Asset Pipeline". It is disabled by default, but can be enabled by setting asset-pipeline.enabled to true in config.php</p>
<p>When the setting is enabled ownCloud concatenates all CSS and JS files into a single large blob file. Thus the amount of initial required requests to the ownCloud instance is lower and therefore the instance is loaded faster.</p>
<p>The generated files are stored on the local filesystem and use a filename that is generated by hashing the original CSS and JS absolute file paths using MD5.</p>
<p>Therefore, an attacker could perform a brute-force attack to gain the information under which path (e.g. <code>/var/www/owncloud/</code>) the ownCloud instance was installed.</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>7.0.3</strong> (CVE-2014-9044)</li>

        </ul>
        <h3>Action Taken</h3>
        <p><p>The filename is now generated by using relative file paths to the ownCloud installation. Therefore an attacker cannot brute-force the absolute paths anymore.</p>
</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Lukas Reschke - ownCloud Inc. (lukas@owncloud.com) - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
    </div>
</div>
