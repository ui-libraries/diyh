<!-- ABOUT THE PROJECT -->
<div id="content-wrapper">
<div class="content">
<div id="inner-content" class="post-single">
<div class="post">
<div class="post-meta">
<h2 class="title">DIY Transcription Site</h2>
</div>
<!--END POST-META-->
<div class="post-content">
<p>DIYHistory is built upon the open-source generosity of George Mason University's <a href="http://chnm.gmu.edu/">Center for History and New Media</a>, so we feel it's only right to give our sourcecode out to organizations and individuals interested in implementing their own crowdsourcing initiatives. Anyone who can install Omeka and MediaWiki on a web server can easily get started with their own branded version of DIYHistory|transcribe with little to no programmer time. If you find our code useful and build further upon it, we'd love to receive your pull requests at <a href="https://github.com/ui-libraries">github.com/ui-libraries</a>.</p>
</div>
<!--END POST-CONTENT --></div>
<!--END POST-->
<div class="post">
<div class="post-meta">
<h2>Overview</h2>
</div>
<!--END POST-META-->
<div class="post-content">
<p><a href="http://diyhistory.lib.uiowa.edu/transcribe">DIYHistory|transcribe</a> is a tool for engaging users in transcribing handwritten documents, making them more searchable and enhancing them for research. <a href="http://diyhistory.lib.uiowa.edu/transcribe">DIYHistory|transcribe</a> is built on the <a href="http://omeka.org/">Omeka</a> content management system and uses the <a href="http://scripto.org/">Scripto</a> plugin to facilitate transcription. <a href="http://scripto.org/">Scripto</a> uses <a href="http://www.mediawiki.org/wiki/MediaWiki">MediaWiki</a>, which allows users to continually improve upon work that has already been done. In building this site, we made significant additions to the Scripto plugin, created a new Omeka theme, and customized other Omeka plugins to style and scale for a library production environment.</p>
</div>
<!--END POST-CONTENT --></div>
<!--END POST-->
<div class="post">
<div class="post-meta">
<h2>Requirements</h2>
</div>
<!--END POST-META-->
<div class="post-content">
<p><a href="http://diyhistory.lib.uiowa.edu/transcribe">DIYHistory|transcribe</a> requires the following:</p>

<ul>
<li><a href="http://omeka.org/codex/Version_History">Omeka version 1.5</a></li>
<li><a href="http://omeka.org/add-ons/plugins/dublin-core-extended/">Omeka Dublin Core Extended plugin</a></li>
<li>
<a href="https://github.com/ui-libraries/plugin-CsvImport">ui-libraries/plugin-CsvImport</a>, a fork of Omeka’s CsvImport that allows bulk upload of item and file-level metadata</li>
<li>
<a href="https://github.com/ui-libraries/plugin-Scripto">ui-libraries/plugin-Scripto</a>, a fork of CHNM’s Scripto tool for crowdsourced transcription of documents. Scripto requires a <a href="http://www.mediawiki.org/wiki/MediaWiki">MediaWiki</a> installation.</li>
<li>
<a href="https://github.com/ui-libraries/Scribe">Scribe</a>, a custom Omeka theme designed for use with ui-libraries/plugin-Scripto</li>
</ul>
</div>
<!--END POST-CONTENT --></div>
<!--END POST-->
<div class="post">
<div class="post-meta">
<h2>Features</h2>
</div>
<!--END POST-META-->
<div class="post-content">
<p><a href="http://diyhistory.lib.uiowa.edu/transcribe">DIYHistory|transcribe</a> introduces the following features to plugin-Scripto:</p>

<ul>
<li>Track completion status of document pages (i.e., ‘Not Started’, ‘Needs Review’, ‘Completed’)</li>
<li>Track completion progress of documents based on page statuses.</li>
<li>Sort documents within their collection by most completed, floating least completed to the top.</li>
<li>Initialize document page text entry box with pre-existing text, if available (helpful if using Scripto to correct OCR for typescript pages).</li>
<li>On every page action, automatically import transcriptions from MediaWiki as file metadata.</li>
</ul><p>The <a href="https://github.com/ui-libraries/Scribe">Scribe</a> theme directs its focus on guiding users to easy transcription tasks rather than collection management features, offering a clean, thumbnail-oriented transcription view for any number of Omeka image collections.</p>

<p>By default, any member of the public is allowed to edit and save transcription data, but only users with an account can track their progress. Approved account holders can also be granted administrator (or deputy) status, allowing them to finalize documents as “complete”.</p>
</div>
<!--END POST-CONTENT --></div>
<!--END POST-->
<div class="post">
<div class="post-meta">
<h2>Installation</h2>
</div>
<!--END POST-META-->
<div class="post-content">
<p>Follow the documentation at each source code repository to install <a href="http://omeka.org/codex/Version_History">Omeka 1.5</a>, <a href="https://github.com/ui-libraries/plugin-CsvImport">ui-libraries/plugin-CsvImport</a>, <a href="https://github.com/ui-libraries/plugin-Scripto">ui-libraries/plugin-Scripto</a> + <a href="http://www.mediawiki.org/wiki/MediaWiki">MediaWiki</a>, and <a href="https://github.com/ui-libraries/Scribe">Scribe</a>. </p>
<p>For best results, install the ui-libraries/plugin-Scripto plugin and create a collection before installing the Scribe theme.</p>
</div>
<!--END POST-CONTENT --></div>
<!--END POST-->
</div>
<!--END INNER-CONTENT-->
<div id="sidebar">
<div class="widget">
<h3>Maybe put an image here?</h3>
</div>
<!--END WIDGET--></div>
<!--END SIDEBAR--></div>
<!--END CONTENT--></div>
<!--END CONTENT-WRAPPER-->
<p>&nbsp;</p>
<!--END WRAPPER-->