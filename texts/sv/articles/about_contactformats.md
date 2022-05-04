<h1>Vad är MeCard- och vCard-format som används för QR-koder</h1>

--- Abstract / Meta description ---

Vad är skillnaderna mellan MeCard och Vcard? Vilket fungerar bäst för QR-koder? Ta reda på mer i den här artikeln.

--- Short content 1 ---

Vcard lagrar mer information och används ofta för att dela kontakter. MeCard används uteslutande för QR-koder och är mer kompakt.

----------

<p>Du har hört att QR-koder gör sociala nätverk lättare. Du kan göra av med högar med tryckta visitkort och få all din kontaktinformation kodad i en QR-kod. </p>

<p>Ändå finns det ofta ett val som måste göras när du <a href="#static:contact">genererar en QR-kod för kontakter</a>. Ska du välja MeCard- eller Vcard-format? </p>

<p>För de flesta människor är termer som MeCard och Vcard skrämmande obekanta. Men att känna till den grundläggande skillnaden mellan båda formaten hjälper till att göra rätt val när du skriver ut QR-koder för kontakter.</p>

<h2>MeCard vs Vcard</h2>

<p>Både MeCard och Vcard är etablerade standarder för hur personuppgifter lagras i en QR-kod. Vcard skapades på 1990-talet och är den populäraste av de två standarderna. Samtidigt utvecklades MeCard av Domoco, den största leverantören av mobiltelefontjänster i Japan.</p>

<p>Vcard stöder ett brett utbud av applikationer, inklusive mobiltelefoner, QR-koder, e-postmeddelanden, webbplatser och SMS. MeCard är dock begränsat till QR-koder och mobiltelefoner. </p>

<p>Båda formaten stöder liknande information, såsom namn, telefon, e-post, webbplats och adress. Vcard-formatet stöder organisations- och jobbtitelfält, som inte är tillgängliga i MeCard.</p>

<p>När den renderas får du en mindre, kompakt QR-kod med MeCard-formatet. Detta innebär att en QR-kod för MeCard-kontakt är mer läsbar när den skrivs ut på en mindre yta jämfört med dess Vcard-motsvarighet.</p>

<p>vCard:</p>

<tabell>
    <tr><td><img src="https://media.scanmefindme.com/blog/about_contactformats/files/img 1 - qr vcard.png" width="150" height="150"
        alt="QR-kod för kontakt i vCard-format - ScanMeFindMe">
    </td>
        <td class="notranslate">
<pre>BEGIN:VCARD
VERSION:4.0
FN:ScanMeFindMe
N:;;;;
ORG:ScanMeFindMe
URL: https://scanmefindme.com
REV:2021-02-13T18:18:45.089Z
END:VCARD</pre>
        </td>
    </tr></table>

<p></p>

<p>MeCard:</p>

<tabell>
    <tr><td><img src="https://media.scanmefindme.com/blog/about_contactformats/files/img 2 - mecard.png" width="150" height="150"
            alt="QR-kod för kontakt i MeCard-format - ScanMeFindMe"></td>
        <td class="notranslate">
            <pre>MECARD:N:,ScanMeFindMe;URL:https://scanmefindme.com;;</pre>
        </td>
    </tr>
</table>

<h2>Vilket är det bättre valet?</h2>

<p>Det beror på hur du tänker använda QR-koden. MeCard erbjuder enkelhet och du kan enkelt skriva ut det på ett visitkort. Du behöver ingen internetanslutning för att skanna och spara kontaktuppgifterna i din telefonbok.</p>

<p>Vcard används mer omfattande för att dela kontakter och är överlägset när det gäller typer av lagrad information. Även om Vcard kan lagras som en statisk QR-kod, får du mycket mer ut av det genom att använda det som en <a href="#article:about_dynamic_contact" title="Dynamisk QR-kod för kontaktkort">dynamisk QR-kod< /a>.</p>

<p>En dynamisk QR-kod lagrar en länk som omdirigerar användare till en webbsida för att se och ladda ner kontaktinformationen i VCF-format. Du kan även inkludera foton och länkar till sociala medier när du använder <a href="#pro">ScanMeFindMe PRO.</a></p>

<p>En dynamisk Vcard QR-kod är dessutom mer kompakt eftersom den lagrar det virtuella kortets URL istället för de faktiska kontakterna. Det är också möjligt att <a href="#article:about_statistics" title="Track QR code scans">spåra</a> hur många personer som har skannat och sett dina kontakter med ett dynamiskt Vcard.</p>

<h2>Hur man genererar QR-koder med MeCard- och VCard-format</h2>

<p>ScanMeFindMe stöder både MeCard- och VCard-format. Du kan skapa statiska MeCard- och VCard-kontakter med vår <a href="#static:contact">gratis QR-kodgenerator.</a> </p>

<p class="imageholder">
    <img src="https://media.scanmefindme.com/blog/about_contactformats/files/img 3 - skapa en qr-kod för contact.png"
        alt="Skapa en statisk QR-kod för kontakt - ScanMeFindMe">
</p>

<p>Välj bara önskat format och fyll i fälten därefter. Motsvarande QR-kod genereras automatiskt när du gör det.</p>

<p>Som nämnts kan du göra mycket mer med en <a href="#article:about_dynamic_contact">dynamisk Vcard-kontakt</a>.</p>

<p class="imageholder">
    <img src="https://media.scanmefindme.com/blog/about_contactformats/files/img 4 - contact card.png"
        alt="Skapa en dynamisk QR-kod för kontakt - ScanMeFindMe">
</p>

<p>När du använder en dynamisk VCard-kontakt kan du:</p>

<ul>
    <li>Ändra kontaktuppgifterna när du vill.</li>
    <li>Ladda upp ett foto eller organisationslogotyp.</li>
    <li>Inkludera handtag eller länkar för sociala medier.</li>
    <li>Övervaka vem som skannar kontaktens QR-kod, när och var.</li>
    <li>Tillåt en förhandsgranskning av kontaktinformationen innan du sparar till en smartphone.</li>
    <li>Ha en mindre QR-kod samtidigt som du lagrar mer information.</li>
</ul>

<p><a href="#pro">Skapa dynamiska Vcard-kontakter med ScanMeFindMe PRO nu.</a></p>
