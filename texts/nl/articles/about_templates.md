<h1>Randen en bijschriften toevoegen aan de QR-codes</h1>

--- Abstract / Meta description ---

Leer hoe u randen en bijschriften kunt toevoegen die uw QR-code uniek maken. Style uw QR-code met een pakkende call-to-action om de conversie te stimuleren.

--- Short content 1 ---

Leer hoe u pakkende zinnen kunt toevoegen met bijschriften van QR-codes. Kies uit vooraf gedefinieerde sjablonen of maak uw eigen sjablonen met een PRO-account.

----------

<p>Voor marketeers draait alles om conversie. Als je een briljante advertentie laat ontwerpen, is het voor niets als het publiek niet op de een of andere manier contact maakt.</p>

<p><a href="#static:url">QR-codes</a> zijn een handig marketinginstrument, maar het toevoegen van een QR-code in gewoon formaat doet geen recht aan het creatieve werk dat aan marketingmateriaal wordt gedaan.</p>

<p>Zonder een klein duwtje kan het publiek de QR-code overslaan, zelfs als deze in het zicht is. Vaak zijn een call-to-action (CTA) en een unieke presentatie nodig om gebruikers de QR-code te laten scannen.</p>

<h2>Waarom randen en bijschriften toevoegen aan QR-codes?</h2>

<p class="imageholder">
    <img src="https://media.scanmefindme.com/blog/about_templates/files/img 1 - templates.png"
        alt="QR-codesjablonen - ScanMeFindMe">
</p>

<p>In plaats van vast te houden aan het standaardformaat, wil je een &#39;Scan Me&#39;-tekst toevoegen samen met de QR-code. Mensen hebben mogelijk &#39;QR-codeblindheid&#39; ontwikkeld toen ze er zoveel in hun dagelijks leven zagen.</p>

<p>Een &#39;Scan Me&#39;-tekst en een unieke rand vestigen echter de aandacht op de QR-code. De CTA laat er geen twijfel over bestaan wat het publiek vervolgens moet doen: scan de QR-code.</p>

<p>U kunt ook tekst toevoegen die een voorbeeld geeft van wat zich aan de andere kant van de QR-code bevindt. Een &#39;App Store&#39;-tekst vertelt de gebruikers bijvoorbeeld dat ze op het punt staan om doorgestuurd te worden naar uw app in de Apple App Store. Of een eenvoudig &#39;Menu&#39; om gebruikers te laten zien wat uw restaurant te bieden heeft.</p>

<p>Het idee is dat je met QR-codes vertrouwen wilt wekken en onzekerheden wilt wegnemen. Klanten willen graag een idee hebben waar ze aan beginnen voordat ze de QR scannen. Met de juiste randen en bijschriften kun je precies dat doen en conversies verhogen.</p>

<p>Zelfs in de <a href="#static:url">gratis versie van de QR-codegenerator</a> kunt u de bijschriften op de sjablonen wijzigen. Wijzig de standaard <strong>&quot;Scan mij&quot;</strong> in <strong>&quot;Meer info&quot;</strong> , <strong>&quot;Ons menu&quot;</strong> , uw instagram-handle of een telefoonnummer. Als uw tekst te lang of te kort is, kunt u de lettergrootte verkleinen of vergroten om deze er beter uit te laten zien.</p>

<p class="imageholder">
    <img src="https://media.scanmefindme.com/blog/about_templates/files/img 2 - qr code instagram.png"
        alt="QR-code voor instagram-handvat - ScanMeFindMe">
</p>

<p>Het personaliseren van uw QR-codes met sjablonen helpt niet alleen bij marketing, maar voorkomt ook verwarring wanneer u ze uitzoekt. Stel je voor dat je op het punt staat tientallen QR-codes in verschillende materialen af te drukken, en je moet ze handmatig scannen voor verificatie. Door bijschriften en randen te gebruiken, weet je waar ze voor bedoeld zijn, alleen al door hun visuele uiterlijk.</p>

<h2>Hoe u uw eigen sjablonen kunt maken</h2>

<p>Wanneer u <a href="#pro">ScanMeFindMe PRO</a> gebruikt, heeft u toegang tot een set vooraf ontworpen sjablonen. U kunt echter ook uw eigen sjablonen ontwerpen, uploaden en de <a href="#static:url">op ons platform gegenereerde QR-code</a> personaliseren.</p>

<p>Niet alleen dat, u kunt ook <a href="#article:about_presets">voorinstellingen maken</a> die uw keuze aan sjablonen bevatten om in de toekomst tijd te besparen.</p>

<p>Hoe maak je nu je eigen sjablonen?</p>

<p>De sjablonen zijn afbeeldingsbestanden in het SVG-formaat. Een SVG-afbeelding is een XML-bestand met tags die verschillende elementen vertegenwoordigen. Webbrowsers gebruiken de informatie uit het bestand om de afbeelding in elke resolutie weer te geven. U kunt een SVG-bestand maken via grafische ontwerpsoftware zoals Adobe Illustrator of een JPEG/PNG naar SVG-converter gebruiken.</p>

<p>De snelste manier om een sjabloon te maken, is door er een uit de bibliotheek te dupliceren en de SVG-bron te bewerken.</p>

<p class="imageholder">
    <img src="https://media.scanmefindme.com/blog/about_templates/files/img 3 - edit svg template.png"
        alt="QR-codesjabloon bewerken - ScanMeFindMe"
></p>

<p>Om een sjabloon te laten werken op ScanMeFindMe, moet het een <strong class="notranslate">&lt;rect&gt;</strong> -element hebben met <strong class="notranslate">id=&quot;qr&quot;</strong> , dat zal worden vervangen door de QR-code wanneer het wordt gegenereerd.</p>

<p>U kunt ook <strong class="notranslate">&lt;text&gt;</strong> -elementen opnemen. Als die elementen een <strong class="notranslate">id</strong> -attribuut hebben, worden dit bijschriften die u kunt aanpassen voor elke QR-code die deze sjabloon gebruikt. Als dergelijke <span class="notranslate">&lt;text&gt;</span> -elementen het kenmerk <strong class="notranslate">font-size</strong> bevatten, kunt u bovendien de lettergrootte voor elke QR-code wijzigen met dezelfde sjabloon.</p>

<p>Pas op voor enkele beperkingen! ScanMeFindMe gebruikt de <a href="https://cairosvg.org/" class="smfm-externallink">CairoSVG-</a> bibliotheek om gegenereerde QR-codes om te zetten naar PNG-, PDF- en PS-formaten. Sommige gecompliceerde SVG-elementen worden mogelijk niet correct geconverteerd. Om veiligheidsredenen wordt @include-instructie genegeerd tijdens de conversie, dus u kunt geen externe URL&#39;s opnemen (met uitzondering van de lettertypen die we op onze server hebben geïnstalleerd).</p>

<h2>Welke lettertypen worden ondersteund?</h2>

<p>In plaats van eindeloos in te gaan op een serif vs. san serif-argument, laten we u beslissen wat het beste is met verschillende veelgebruikte lettertypen. U vindt de lettertypen die vooraf op de server zijn geïnstalleerd in onze Github-repository: <a href="https://github.com/ScanMeFindMe/fonts" class="smfm-externallink" target="_blank">https://github.com/ScanMeFindMe/fonts</a></p>

<p>Als je denkt dat we een interessant font voor collega-marketeers missen, kun je een pull-verzoek indienen. Over het algemeen geven we de voorkeur aan lettertypen die meerdere talen ondersteunen.</p>

<p>Begin nu met het uploaden van uw eigen sjablonen met een <a href="#pro">ScanMeFindMe PRO-account</a> .</p>
