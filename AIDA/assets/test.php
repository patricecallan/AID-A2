<form method="post" action="http://www.example.com/cgi-bin/FormMail.pl" 
accept-charset="ISO-8859-1" onsubmit="var originalCharset = document.charset; 
document.charset = 'ISO-8859-1'; 
window.onbeforeunload = function () {document.charset=originalCharset;};">
Name
<br />
<input name="realname" />
<br />
Email
<br />
<input name="email" />
<br />
Message
<br />
<textarea cols="40" rows="10" name="Message"></textarea>
<br />
<input type="submit" value="Send" />
<input type="hidden" name="recipient" value="email@example.com" />
<input type="hidden" name="subject" value="Subject" />
<input type="hidden" name="redirect" 
value="http://www.example.com/thanks.html" />
<input type="hidden" name="missing_fields_redirect" 
value="http://www.example.com/error.html" />
<input type="hidden" name="required" value="realname,email,Message" />
</form>